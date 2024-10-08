<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // PRODUCT ATTRIBUTES
    // $this->attributes['id'] - int - contains the product primary key(id)
    // $this->attributes['name'] - string - contains the product name
    // $this->attributes['description'] - string - contains the product description
    // $this->attributes['image'] - string - contains the product image
    // $this->attributes['price'] - int - contains the product price
    // $this->attributes['created_at'] - timestamp - contains the product creation date
    // $this->attributes['updated_at'] - timestamp - contains the product update date


    public static function validate($request)
    {
        $request->validate([
            "name" => "required|max:255",
            "description" => "required",
            "price" => "required|numeric|gt:0",
            "image" => "image",
        ]);
    }

    public function getId()
    {
        return $this->attributes['id'];
    }

    public function setId($id)
    {
        return $this->attributes['id'] = $id;
    }

    public function getName()
    {
        return $this->attributes['name'];
    }

    public function setName($name)
    {
        return $this->attributes['name'] = $name;
    }

    public function getDescription()
    {
        return $this->attributes['description'];
    }

    public function setDescription($description)
    {
        return $this->attributes['description'] = $description;
    }

    public function getImage()
    {
        return $this->attributes['image'];
    }

    public function setImage($image)
    {
        return $this->attributes['image'] = $image;
    }

    public function getPrice()
    {
        return $this->attributes['price'];
    }

    public function setPrice($price)
    {
        return $this->attributes['price'] = $price;
    }
    
    public function getCreatedAt()
    {
        return $this->attributes['created_at'];
    }
    
    public function setCreatedAt($createdAt)
    {
        return $this->attributes['created_at'] = $createdAt;
    }

    public function getUpdatedAt()
    {
        return $this->attributes['updated_at'];

    }
    public function setUpdatedAt($updatedAt)

    {
        return $this->attributes['updated_at'] = $updatedAt;
    }
}
