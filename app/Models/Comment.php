<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $table = 'comment';
		protected $fillable = [
			'id_pengirim',
			'id_film',
			'isi'
		];

		public function pengirim() {
			return $this->belongsTo(User::class, 'id_pengirim', 'id');
		}

		public function film() {
			return $this->belongsTo(Film::class, 'id_film', 'id');
		}
}
