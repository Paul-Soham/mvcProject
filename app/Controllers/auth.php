<?php

namespace App\Controllers;

class auth extends BaseController
{
/*    public function index()
    {
        return view('auth/login');
    }*/
        public function login()
    {
        return view('auth/login');
    }
    public function register()
    {
        return view('auth/register');
    }
    public function save()
    {
       $validation = $this->validate([

            'name'=>[
                'rules'=>'required',
                'errors'=>[
                'required'=>'Your full name is required',
                ]
                ],
                'email'=>[
                    'rules'=>'required|valid_email|is_unique[user.email]',
                    'errors'=>[
                    'required'=>'Email is required',
                    'valid_email'=>'Please enter a valid email address',
                    'is_unique'=>'Email already taken',
                    ]
                    ],
                    'password'=>[
                        'rules'=>'required|min_lenth[5]|max_lenth[12]',
                        'errors'=>[
                        'required'=>'Email is required',
                        'min_lenth'=>'Password must have 5 in lenth',
                    ]
                    ]
        ]);         
    }
}