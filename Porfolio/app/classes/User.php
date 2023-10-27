<?php


namespace App\classes;


class User
{
    public $users=[];
    public function __construct()
    {
        $this->users=[
            0=>[
                'id'=>1,
                'name'=>'Mosaeb',
                'user_name'=>'musa',
                'password'=>'123123'
            ],
            1=>[
                'id'=>2,
                'name'=>'Mahtab',
                'user_name'=>'mahtab',
                'password'=>'999888'
            ],
            2=>[
                'id'=>3,
                'name'=>'Sadi',
                'user_name'=>'sadi',
                'password'=>'333444'
            ],
//            3=>[
//                'id'=>4,
//                'name'=>'Sakib',
//                'user_name'=>'sakib',
//                'password'=>'987987'
//            ]
        ];
    }
    public function getAllUser()
    {
        return $this->users;
    }
}
