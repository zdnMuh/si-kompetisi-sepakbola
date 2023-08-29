<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;
    protected $table = 'tb_transaksi';
    protected $primaryKey = 'id_transaksi';
    public $incrementing = true;
    protected $fillable = ['id_panitia', 'id_klub', 'id_kompetisi', 'j_pembayaran'];
    public $timestamps = false;

    public function panitia()
    {
        return $this->belongsTo(Panitia::class, 'id_panitia', 'id_panitia');
    }

    public function klub()
    {
        return $this->belongsTo(Klub::class, 'id_klub', 'id_klub');
    }

    public function klasmen()
    {
        return $this->belongsTo(Klasmen::class, 'id_kompetisi', 'id_kompetisi');
    }
}