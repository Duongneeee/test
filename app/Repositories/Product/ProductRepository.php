<?php

namespace App\Repositories\Product;
  
use App\Models\Product;
use App\Repositories\BaseRepository;
use App\Repositories\Product\ProductRepositoryInterface;

class ProductRepository extends BaseRepository implements ProductRepositoryInterface{
    public function getModel(){
        return Product::class;
    }

    public function getProducts($limit=10){
        return $this->model->limit($limit)->get();
    }
}