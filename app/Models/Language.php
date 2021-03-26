<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Language extends Model
{
    use HasFactory;
    
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
        public function favorited()
    {
        return (bool) Favorite::where('user_id', Auth::id())
                            ->where('language_id', $this->id)
                            ->first();
    }

    public function favorites()
    {
        return $this->belongsToMany(Language::class, 'favorites', 'user_id', 'language_id')->withTimeStamps();
    }
}
