<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    //可以被批量賦值的屬性
    protected $fillable = [
      'type_id',
      'name',
      'birthday',
      'area',
      'fix',
      'description',
      'personality',
    ];

    /**
     * 取得動物的分類
     */
    public function type()
    {
        return $this->belongsTo('App\Type');
    }
}
