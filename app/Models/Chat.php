<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    use HasFactory;
    protected $table = 'chat';
	protected $fillable = [
        'id_pengirim',
		'id_penerima',
		'isi'
	];
}
