<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Klasmen extends Model
{
    use HasFactory;
    protected $table = 'tb_klasmen';
    protected $primaryKey = 'id_kompetisi';
    public $incrementing = true;
    protected $fillable = ['id_panitia', 'id_klub', 'nama_kompetisi', 'hasil'];
    public $timestamps = false;

    public function panitia()
    {
        return $this->belongsTo(Panitia::class, 'id_panitia', 'id_panitia');
    }

    public function klub()
    {
        return $this->belongsTo(Klub::class, 'id_klub', 'id_klub');
    }

    public function transaksi()
    {
        return $this->hasMany(Transaksi::class, 'id_transaksi', 'id_transaksi');
    }
}
