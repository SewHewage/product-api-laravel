<?php

namespace App\Http\Controllers;

use App\Repositories\All\Product\ProductInterface;


class ProductController extends Controller
{
    protected $productInterface;

    public function __construct(ProductInterface $productInterface)
    {
        $this->productInterface = $productInterface;
    }

    public function index()
    {
        $products = $this->productInterface->all();
        return response()->json($products, 200);
    }
}
