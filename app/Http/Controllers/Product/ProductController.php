<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Models\Product\Product;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class ProductController extends Controller
{
    /**
     * Получает список товаров.
     * @return array
     */
    public function list()
    {
        // SELECT * FROM products ORDER BY price DESC LIMIT 4
        return Product::query()
            ->orderBy('price', 'desc')
            ->limit(4)
            ->get();
    }

    /**
     * Получает карточку товара по ID.
     * @param $id
     * @return array
     */
    public function info($id)
    {
        // SELECT * FROM products WHERE id = 10
        $product = Product::query()
            ->where('id', $id)
            ->first();

        if ($product === null) {
            throw new NotFoundHttpException('Товар не найден.');
        }

        return $product;
    }
}
