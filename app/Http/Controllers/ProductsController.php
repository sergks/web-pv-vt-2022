<?php

namespace App\Http\Controllers;

class ProductsController extends Controller
{
    public function list()
    {
        return [
            [
                'id' => 1,
                'name' => 'Горный велосипед Outleap RIOT EXPERT',
                'price' => 22945
            ],
            [
                'id' => 2,
                'name' => 'Горный велосипед Outleap RIOT EXPERT',
                'price' => 22945
            ]
        ];
    }

    public function info($id)
    {
        return [
            'id' => 1,
            'name' => 'Горный велосипед Outleap RIOT EXPERT',
            'price' => 22945
        ];
    }
}
