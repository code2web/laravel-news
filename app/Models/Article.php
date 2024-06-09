<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// use App\Models\Category;
// use App\Models\District;
// use App\Models\User;
// use App\Models\NewsArchive;
// use App\Models\Tag;


class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'content',
        'thumbnail',
        'video_link',
        'category_id',
        'district_id',
        // 'tag_id',
        'user_id',        
    ];

    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function district() {
        return $this->belongsTo(District::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function newsArchive() {
        return $this->hasMany(NewsArchive::class);
    }

    public function tags() {
        return $this->hasMany(Tag::class);
    }
}
