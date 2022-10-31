<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    /**
     * Получает список товаров.
     * @return array
     */
    public function list()
    {
        return [
            [
                'id' => 1,
                'name' => 'Товар 1',
                'price' => 990
            ],
            [
                'id' => 1,
                'name' => 'Товар 1',
                'price' => 990
            ]
        ];
    }

    /**
     * Получает карточку товара по ID.
     * @param $id
     * @return array
     */
    public function info($id)
    {
        return ['id' => $id];
    }
}
