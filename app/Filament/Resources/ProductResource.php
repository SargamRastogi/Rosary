<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductResource\Pages;
use App\Models\Product;
use App\Models\Subcategory;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class ProductResource extends Resource
{
    protected static ?string $model = Product::class;
    protected static ?string $navigationIcon = 'heroicon-o-cube';
    protected static ?string $navigationGroup = 'Catalog';

    public static function form(Form $form): Form
    {
        return $form->schema([

            /*
            |--------------------------------------------------------------------------
            | Category Section
            |--------------------------------------------------------------------------
            */
            Forms\Components\Select::make('category_id')
                ->relationship('category', 'name')
                ->label('Category')
                ->required()
                ->reactive()
                ->afterStateUpdated(fn ($set) => $set('subcategory_id', null)),

            Forms\Components\Select::make('subcategory_id')
                ->label('Subcategory')
                ->options(function (callable $get) {
                    $category_id = $get('category_id');
                    if (!$category_id) {
                        return Subcategory::pluck('name', 'id');
                    }
                    return Subcategory::where('category_id', $category_id)
                        ->pluck('name', 'id');
                })
                ->required(),

            /*
            |--------------------------------------------------------------------------
            | Images
            |--------------------------------------------------------------------------
            */
            Forms\Components\FileUpload::make('image_path')
                ->label('Main Image')
                ->image()
                ->maxSize(51200)           
                ->directory('products/main')
                ->visibility('public')
                ->required(),

            Forms\Components\Repeater::make('images')
                ->relationship()
                ->schema([
                    Forms\Components\FileUpload::make('image_path')
                        ->image()
                        ->directory('products/gallery')
                        ->visibility('public')
                        ->required(),
                ])
                ->orderable('sort_order')
                ->collapsible()
                ->grid(2)
                ->label('Gallery Images')
                ->columnSpanFull(),

            /*
            |--------------------------------------------------------------------------
            | Basic Info
            |--------------------------------------------------------------------------
            */
            Forms\Components\TextInput::make('name')
                ->required(),

            Forms\Components\TextInput::make('slug')
                ->unique(ignoreRecord: true),

            Forms\Components\TextInput::make('sku'),

            /*
            |--------------------------------------------------------------------------
            | Pricing & Inventory
            |--------------------------------------------------------------------------
            */
            Forms\Components\TextInput::make('price')
                ->numeric()
                ->required(),

            Forms\Components\TextInput::make('sale_price')
                ->numeric()
                ->label('Sale Price'),

            Forms\Components\TextInput::make('stock')
                ->numeric()
                ->default(0)
                ->label('Quantity'),

            Forms\Components\Toggle::make('manage_stock')
                ->default(true),

            Forms\Components\TextInput::make('low_stock_alert')
                ->numeric()
                ->default(5),

            /*
            |--------------------------------------------------------------------------
            | Product Details
            |--------------------------------------------------------------------------
            */
            Forms\Components\TextInput::make('brand'),
            Forms\Components\TextInput::make('material'),
            Forms\Components\TextInput::make('dimensions'),
            Forms\Components\TextInput::make('weight'),
            Forms\Components\TextInput::make('color'),
            Forms\Components\TextInput::make('pack_content'),

            /*
            |--------------------------------------------------------------------------
            | Description
            |--------------------------------------------------------------------------
            */
            Forms\Components\Textarea::make('short_description')
                ->rows(2),

            Forms\Components\RichEditor::make('description')
                ->label('Detailed Description')
                ->columnSpanFull(),

            /*
            |--------------------------------------------------------------------------
            | SEO
            |--------------------------------------------------------------------------
            */
            Forms\Components\TextInput::make('meta_title'),
            Forms\Components\Textarea::make('meta_description'),

            /*
            |--------------------------------------------------------------------------
            | Status & Flags
            |--------------------------------------------------------------------------
            */
            Forms\Components\Toggle::make('is_featured'),
            Forms\Components\Toggle::make('is_best_seller'),
            Forms\Components\Toggle::make('is_active')
                ->default(true),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([

            Tables\Columns\ImageColumn::make('mainImage.image_path'),

            Tables\Columns\TextColumn::make('name')
                ->searchable()
                ->sortable(),

            Tables\Columns\TextColumn::make('category.name')
                ->label('Category'),

            Tables\Columns\TextColumn::make('price')
                ->money('INR'),

            Tables\Columns\TextColumn::make('sale_price')
                ->money('INR'),

            Tables\Columns\TextColumn::make('stock')
                ->badge()
                ->color(fn ($state) => $state <= 5 ? 'danger' : 'success')
                ->label('Stock'),

            Tables\Columns\IconColumn::make('is_featured')
                ->boolean(),

            Tables\Columns\IconColumn::make('is_active')
                ->boolean(),
        ])
        ->filters([])
        ->actions([
            Tables\Actions\EditAction::make(),
        ])
        ->bulkActions([
            Tables\Actions\DeleteBulkAction::make(),
        ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProducts::route('/'),
            'create' => Pages\CreateProduct::route('/create'),
            'edit'   => Pages\EditProduct::route('/{record}/edit'),
        ];
    }
}