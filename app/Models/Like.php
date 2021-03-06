<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    use HasFactory;
    protected $table = 'like';
	protected $fillable = [
        'id_film',
		'id_liker'
	];

    public function liker() {
        return $this->belongsTo(User::class, 'id_liker', 'id');
    }

    public function film() {
        return $this->belongsTo(Film::class, 'id_film', 'id');
    }
}

