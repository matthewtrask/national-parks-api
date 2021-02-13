<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Park extends Model
{
    use HasFactory;

    protected $fillable = [
        'park_uuid',
        'name',
        'year_established',
        'state'
    ];

    public function getParkUuid(): string
    {
        return $this->park_uuid;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getYearEstablished(): int
    {
        return $this->year_established;
    }

    public function getState(): string
    {
        return $this->state;
    }

    public function getLastUpdated(): \DateTime
    {
        return $this->updated_at;
    }

    public function scopeByState(Builder $query, string $state): void
    {
        $query->where('state', '=', $state);
    }

    public function scopeByYearEstablished(Builder $query, int $year): void
    {
        $query->where('year_established', '=', $year);
    }

    public function scopeByUuid(Builder $query, string $uuid): void
    {
        $query->where('park_uuid', '=', $uuid);
    }
}
