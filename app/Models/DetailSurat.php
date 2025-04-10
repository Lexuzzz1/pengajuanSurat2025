<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DetailSurat extends Model
{
    protected $table = 'detail_surat';
    protected $fillable = ['nrp', 'name', 'alamat', 'semester', 'keperluan', 'kode mata kuliah', 'mata kuliah', 'tujuan topik', 'surat_id'];

    public function detail_surat(){
        return $this->belongsTo(Surat::class);
    }
}
