<?php

namespace CodeCommerce;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'category_id',
        'name',
        'description',
        'price',
        'featured',
        'recommend'
    ];

    public function images()
    {
        return $this->hasMany('CodeCommerce\ProductImage');
    }

    public function category()
    {
        return $this->belongsTo('CodeCommerce\Category');
    }

    public function tags()
    {
        return $this->belongsToMany('CodeCommerce\Tag');
    }

    public function getTagListAttribute()
    {
        $tags = $this->tags->lists('name')->toArray();
        return implode(',',$tags);
    }

    public function scopeFeatured($query)
    {
        return $query->where('featured', '=', 1);
    }

    public function scopeRecommended($query)
    {
        return $query->where('recommend', '=', 1);
    }

    public function scopeByCategoryName($query, $name)
    {
        return $query->join('categories', 'products.category_id', '=', 'categories.id')
            ->where('categories.name', '=', $name);
    }
}
