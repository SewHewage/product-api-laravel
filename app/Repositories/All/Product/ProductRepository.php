<?php

namespace App\Repositories\All\Product;

use App\Models\Product;
use App\Repositories\Base\BaseRepository;
use App\Repositories\All\Product\ProductInterface;

class ProductRepository extends BaseRepository implements ProductInterface
{
    /**
     * @var Product
     */
    protected $model;

    /**
     *
     * @param Product $model
     */
    public function __construct(Product $model)
    {
        $this->model = $model;
    }


}
