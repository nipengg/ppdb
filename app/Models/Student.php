<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'nis', 'nama', 'jk', 'tmpt_lahir', 'tgl_lahir', 'alamat', 'asal_sekolah', 'kelas', 'jurusan'
    ];
}
