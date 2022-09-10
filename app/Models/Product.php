<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
//    use HasFactory;

    public function getId() {
        return $this->attributes['id'];
    }

    public function setId($id) {
        $this->attributes['id'];
    }

    public function getName() {
        return strtoupper($this->attributes['name']);
    }

    public function setName($name) {
        $this->attributes['name'];
    }

    public function getDescription() {
        return $this->attributes['description'];
    }

    public function setDescription($description) {
        $this->attributes['description'];
    }

    public function getImage() {
        return $this->attributes['image'];
    }

    public function setImage($image) {
        $this->attributes['image'];
    }

    public function getPrice() {
        return $this->attributes['price'];
    }

    public function setPrice($price) {
        $this->attributes['price'];
    }

    public function getCreatedAt() {
        return $this->attributes['created_at'];
    }

    public function setCreatedAt($createdAt) {
        $this->attributes['created_at'];
    }

    public function getUpdatedAt() {
        return $this->attributes['updated_at'];
    }

    public function setUpdatedAt($updatedAt) {
        $this->attributes['updated_at'];
    }
}
