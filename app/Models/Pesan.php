<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\PesanItem;

class Pesan extends Model
{
    use HasFactory;
    protected $table = 'pesan';
    protected $fillable = [
        'name',
        'id_user',
        'email',
        'telepon',
        'province_origin',
        'city_origin',
        'city_destination',
        'province_destination',
        'kecamatan',
        'postcode',
        'alamat',
        'courier',
        'status',
        'message',
        'kode_transaksi',
        'total',
    ];

    public function pesanitem(){
        return $this->hasMany(PesanItem::class);
    }
}
