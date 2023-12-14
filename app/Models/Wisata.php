<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wisata extends Model
{
    use HasFactory;

    public $timestamps = true;

    protected $table = 'wisata';
    protected $primaryKey = 'id';

    protected $fillable = ['NamaWisata', 'KodeKategori', 'LokasiWisata', 'KodeFasilitas', 'Deskripsi', 'Image', 'Lat', 'Lng']; 
}
