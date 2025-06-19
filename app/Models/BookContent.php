<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BookContent extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];
    public function categoryContent()
    {
        return $this->belongsTo(CategoryContent::class, 'category_contents_id');
    }
}
