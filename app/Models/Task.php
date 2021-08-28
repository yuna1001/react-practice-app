<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use BenSampo\Enum\Traits\CastsEnums;
use App\Enums\TaskStatus;

class Task extends Model
{
    use HasFactory, CastsEnums;

    public function Category()
    {
        return $this->belongsTo(Category::class);
    }

    protected $fillable = [
        'title',
        'status',
        'category_id',
    ];

    protected $enumCasts = [
        'status' => TaskStatus::class,
    ];
}
