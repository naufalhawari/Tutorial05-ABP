<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // Jika tidak ikut konvensi
    // protected $table = 'produk';

    // misalkan kolom PKnya bukan id;
    // protected $primaryKey = 'id_product';

    public function variants(){
        return $this->hasMany(Variant::class, 'id_produk');
    }
}
