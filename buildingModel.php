<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class buildingModel extends Model
{
    protected $table = 'type_of_building';
    protected $fillable = [
        "user_id",
        "id_of_pic",
        "geometry",
        "material",
        "regular"   /*規則的な*/ ,
        "random" /*不規則な*/,
        "simple"    /*単純な*/,
        "busy"   /*複雑な*/,
        "inorganic"  /*無機質な*/,
        "organic"  /*有機的な*/,
        "dynamic"   /*繊細な*/,
        "delicate"    /*大胆な*/,
        "solid"    /*かたい*/,
        "soft"/*やわらかい*/,
        "flat"/*フラットな*/,
        "light"    /*軽快な*/,
        "modern"    /*近代的*/,
        "massive"    /*重厚な*/,
        "postmodern"  /*現代的*/,
        "craggy"/*彫りが深い*/,
        "classical"    /*歴史的*/,
        "luxury"    /*高級な*/,
        "cheap"      /*安い*/,
        "transparent"    /*透明感*/,
        "speed"/*スピード感*/,
        "like",
        "other"
    ];

    public function users() {
        $this->belongsToMany(informationModel::class);
    }
}
