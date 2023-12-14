<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fasilitas extends Model
{
    use HasFactory;

    public $timestamps = true;

    protected $table = 'fasilitas';
    protected $primaryKey = 'id';

    protected $fillable = ['KodeFasilitas', 'Fasilitas'];
}
