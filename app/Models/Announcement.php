<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Announcement extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'price',
        'description',
        'img',
        'user_id',
        'category_id',
    ];

    public function category() : BelongsTo{
        return $this->belongsTo(Category::class);
    }

    public function user() : BelongsTo{
        return $this->belongsTo(User::class);
    }
}
