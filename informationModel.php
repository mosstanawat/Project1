<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class informationModel extends Model
{
    protected $table = 'users';
    protected $fillable = ["name", "age", "gender", "current"];

    public function type_of_building() {
        $this->hasMany(buildingModel::class);
    }
}
