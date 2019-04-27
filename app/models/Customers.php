<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Customers extends Model
{
    use SoftDeletes;
    public $timestamps = true;
    protected $table = 'musteriler';
    protected $fillable = ['musteri_ad', 'slug', 'musteri_telefon', 'musteri_adres', 'sorunlu_mu'];
    protected $dates = ['deleted_at'];
}