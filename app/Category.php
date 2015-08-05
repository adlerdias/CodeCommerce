<?php

namespace CodeCommerce;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name','description'];

    public function produtcs() {
        return $this->hasMany('CodeCommerce\Product');
    }
}
