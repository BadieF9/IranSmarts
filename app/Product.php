<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name','price','slug','description','images', 'category'];

    protected $casts = [
      'images' => 'array'
    ];

    public function camera(){
        return $this->hasMany(Camera::class, 'products_id');
    }
    public function automaticGateOpener(){
        return $this->hasMany(AutomaticGateOpener::class, 'products_id');
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'favorites','user_id', 'products_id');
    }

    public function path()
    {
        return '/products/' . $this->id;
    }
}
