<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    use HasFactory;
    protected $table = 'film';
	protected $fillable = [
        'id_user',
		'link',
        'description'
	];

    public function creator() {
        return $this->belongsTo(User::class, 'id_user', 'id');
    }

    public function comment() {
        return $this->hasMany(Comment::class, 'id_film', 'id');
    }

    public function like() {
        return $this->hasMany(Like::class, 'id_film', 'id');
    }

    public function series() {
        return $this->hasMany(Series::class, 'id_film', 'id');
    }
}
