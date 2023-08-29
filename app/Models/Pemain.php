<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Pemain extends Model
{
    use HasFactory;
    protected $table = 'tb_pemain';
    protected $primaryKey = 'id_pemain';
    public $incrementing = true;
    protected $fillable = ['nama_pemain', 'no_punggung', 'id_klub', 'posisi', 'tgl_lahir'];
    public $timestamps = false;

    public function klub()
    {
        return $this->belongsTo(Klub::class, 'id_klub', 'id_klub');
    }
}