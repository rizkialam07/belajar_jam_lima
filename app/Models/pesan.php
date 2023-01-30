<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pesan extends Model
{
    use HasFactory;

    protected $fillbable =[
        'penerima_id',
        'pengirim_id',
        'judul',
        'isi',
        'status',
        'tgl_kirim',
    ];

    public function users(){
        return $this->belongsTo(User::class);
    }
}
