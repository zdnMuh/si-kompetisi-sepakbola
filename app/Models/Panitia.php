<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Panitia extends Model
{
    use HasFactory;
    protected $table = 'tb_panitia';
    protected $primaryKey = 'id_panitia';
    public $incrementing = true;
    protected $fillable = ['nama_panitia', 'tgl_lahir'];
    public $timestamps = false;

    public function klasmen()
    {
        return $this->hasMany(Klasmen::class, 'id_klasmen', 'id_klasmen');
    }

    public function transaksi()
    {
        return $this->hasMany(Transaksi::class, 'id_transaksi', 'id_transaksi');
    }
}