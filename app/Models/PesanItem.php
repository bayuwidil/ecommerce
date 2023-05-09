<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Product;
use App\Models\Pesan;

class PesanItem extends Model
{
    use HasFactory;
    protected $table = 'pesan_items';
    protected $fillable = [
        'pesan_id',
        'id_produk',
        'jumlah',
        'harga',
        'total',
    ];

    public function product(){
        return $this->belongsTo(Product::class,'id_produk','id');
    }
    public function pesan(){
        return $this->belongsTo(Pesan::class,'id_pesan','id');
    }
}