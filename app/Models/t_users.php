<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Foundation\Auth\User as Authenticate;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class t_users extends Authenticate
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 't_users';
    protected $primaryKey = 'NIK';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'KK',
        'username',
        'password',
        'nama_depan',
        'nama_belakang',
        'tempat_lahir',
        'tanggal_lahir',
        'agama',
        'status_perkawinan',
        'status_hubungan',
        'pekerjaan',
        'tipe_warga',
        'role',
        'jenis_kelamin',
        'golongan_darah',
        'alamat',
        'id_RT',

    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function rukun_tetangga(): BelongsTo
    {
        return $this->BelongsTo(t_rukun_tetangga::class, 'id_RT', 'id_RT');
    }
}
