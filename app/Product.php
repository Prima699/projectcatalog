<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    protected $table = 'product';

    protected $primaryKey = 'id_product';
    
    protected $fillable = ['name_product', 'id_categori', 'flag', 'pic_product', 'price', 'created_by'];

    /*
    |------------------------------------------------------------------------------------
    | Relations
    |------------------------------------------------------------------------------------
    */
    public function Categori()
    {
        return $this->belongsTo(Categori::class,'id_categori');
    }

    public function User()
    {
        return $this->belongsTo(User::class,'created_by');
    }
}
