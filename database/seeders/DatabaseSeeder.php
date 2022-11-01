<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class DatabaseSeeder extends Seeder{
    public function run(){
        DB::table('users')->insert([
            'fname'=>'thushanthan',
            'lname'=>'mohan',
            'district'=>'kalmuna',
            'address'=>'ramanathan road',
            'mobile'=>'0777123456',
            'password'=>Hash::make('123456'),
            'username'=>'thusha',
            'moh'=>'jaffna',
            'role'=>'admin'
        ]);
    }}
