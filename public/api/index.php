<?php

class User
{
    private $name = 'Иван';
    private $age = 20;
    private $languages = [
        [
            'code' => 'ru',
            'name' => 'Русский',
            'level' => 5
        ],
        [
            'code' => 'en',
            'name' => 'Английский',
            'level' => 1
        ]
    ];

    public function __construct()
    {

    }

    public function getName()
    {
        return $this->name;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function getLanguages()
    {
        return $this->languages;
    }

    public function addLanguage($lang)
    {
        $this->languages[] = $lang;
    }

    public function getProducts()
    {
        return [
            [
                'id' => 1,
                'name' => 'Товар 1',
                'price' => 800,
                'image' => ''
            ],
            [
                'id' => 2,
                'name' => 'Товар 2',
                'price' => 800,
                'image' => ''
            ],
            [
                'id' => 3,
                'name' => 'Товар 3',
                'price' => 800,
                'image' => ''
            ],
            [
                'id' => 4,
                'name' => 'Товар 4',
                'price' => 800,
                'image' => ''
            ]
        ];
    }
}

$user = new User();
echo json_encode($user->getProducts());

