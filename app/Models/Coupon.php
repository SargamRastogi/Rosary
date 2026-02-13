<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    protected $fillable = ['code', 'type', 'value', 'starts_at', 'ends_at', 'max_uses', 'uses'];

    protected $casts = ['starts_at' => 'datetime', 'ends_at' => 'datetime'];

    public function isActive(): bool
    {
        $now = now();
        return (!$this->starts_at || $now->gte($this->starts_at))
            && (!$this->ends_at || $now->lte($this->ends_at))
            && (is_null($this->max_uses) || $this->uses < $this->max_uses);
    }
}
