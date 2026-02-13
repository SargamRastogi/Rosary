<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SubcategoryResource\Pages;
use App\Models\Subcategory;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\ImageColumn;

class SubcategoryResource extends Resource
{
    protected static ?string $model = Subcategory::class;

    protected static ?string $navigationIcon = 'heroicon-m-rectangle-stack';
    protected static ?string $navigationLabel = 'Subcategories';
    protected static ?string $pluralModelLabel = 'Subcategories';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('category_id')
                    ->label('Parent Category')
                    ->relationship('category', 'name')
                    ->required(),

                Forms\Components\TextInput::make('name')->required()->maxLength(255),

                Forms\Components\FileUpload::make('image_path')->image()->directory('subcategories'),

                Forms\Components\Textarea::make('description')->rows(3)->maxLength(500),

                Forms\Components\Toggle::make('is_active')->default(true)->label('Active'),
            ]);
    }

public static function table(Table $table): Table
{
    return $table
        ->columns([
            ImageColumn::make('image_path')
                ->label('Image')
                ->square()
                ->url(fn ($record) => asset('storage/' . $record->image_path)) // ✅ important
                ->defaultImageUrl('https://via.placeholder.com/80x80?text=No+Image'),

            Tables\Columns\TextColumn::make('name')->searchable(),
            Tables\Columns\TextColumn::make('category.name')->label('Category'),
            Tables\Columns\IconColumn::make('is_active')->boolean(),
        ]);
}

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListSubcategories::route('/'),
            'create' => Pages\CreateSubcategory::route('/create'),
            'edit' => Pages\EditSubcategory::route('/{record}/edit'),
        ];
    }
}
