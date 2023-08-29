<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Klub extends Model
{
    use HasFactory;
    protected $table = 'tb_klub';
    protected $primaryKey = 'id_klub';
    public $incrementing = true;
    protected $fillable = ['nama_klub', 'asal_klub', 'julukan_klub', 'no_telp'];
    public $timestamps = false;

    public function pemain()
    {
        return $this->hasMany(Pemain::class, 'id_pemain', 'id_pemain');
    }

    public function klasmen()
    {
        return $this->hasMany(Klasmen::class, 'id_klasmen', 'id_klasmen');
    }

    public function transaksi()
    {
        return $this->hasMany(Transaksi::class, 'id_transaksi', 'id_transaksi');
    }
}