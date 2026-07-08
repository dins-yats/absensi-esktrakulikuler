<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Absen extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $fillable = ['murid_id', 'tanggal', 'keterangan'];
    
    public function murid() 
    {
        return $this->belongsTo(Murid::class);
    }
}
