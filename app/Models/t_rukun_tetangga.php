<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class t_rukun_tetangga extends Model
{
    use HasFactory;

    protected $table = 't_users';
    protected $primaryKey = 'NIK';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id_RT',
        'nomor_RT',
        'alamat',
        'id_RW',
        'NIK_RT',

    ];
}
