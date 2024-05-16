<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AduanModel extends Model
{
    use HasFactory;

    protected $table = 't_data_aduan';

    protected $fillable = [
        'judul',
        'konten',
        'status',
        'NIK_warga'
    ];
}
