<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Murid extends Model
{
    use HasFactory;
     protected $guarded = ['id'];
    //  protected $fillable = ['name', 'nis', 'kelas'];

     public function absen() 
    {
        return $this->hasMany(Absen::class);
    }
}
