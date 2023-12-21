<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;

    public $timestamps = true;
    protected $table = 'admins';
    protected $primaryKey = 'id';

    protected $fillable = [
        'nama',
        'nip',
        'gajih',
        'nama_perusahaan',
        'jumlah_harigaji',
    ];
}
