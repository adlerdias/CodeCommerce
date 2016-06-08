<?php
namespace CodeCommerce;
use Illuminate\Database\Eloquent\Model;
class OrderStatus extends Model
{
    protected $fillable = ['name'];
    public function orders()
    {
        return $this->hasMany('CodeCommerce\Order');
    }
}