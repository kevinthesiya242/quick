<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Product
 *
 * @package App
 * @property string $name
 * @property text $description
 * @property decimal $price
 * @property string $photo1
*/
class Product extends Model
{
    protected $fillable = ['name', 'description', 'price', 'photo1'];
    protected $hidden = [];
    
    

    /**
     * Set attribute to money format
     * @param $input
     */
    public function setPriceAttribute($input)
    {
        $this->attributes['price'] = $input ? $input : null;
    }
    
    public function category()
    {
        return $this->belongsToMany(ProductCategory::class, 'product_product_category');
    }
    
    public function tag()
    {
        return $this->belongsToMany(ProductTag::class, 'product_product_tag');
    }
    
}
