<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Categori extends Model
{

    protected $table = 'categori';
    
    protected $fillable = ['categori'];

    protected $hidden = [
        'id_categori',
    ];

    /*
    |------------------------------------------------------------------------------------
    | Relations
    |------------------------------------------------------------------------------------
    */

    public function Product()
    {
        return $this->hasMany(Product::class,'id_categori');
    }

    public static function CategoriList() {
        $category = DB::table('categori')->get();
        $list = array();
        foreach ($category as $categorys) {
            $list[$categorys->id] = $categorys->categori;
        }
        return $list;
    }
}
