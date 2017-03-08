<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rio extends Model
{
    protected $fillable=[
      'nama',
      'type',
      'lokasi',
      'link',
      'deskripsi'
    ];
}
