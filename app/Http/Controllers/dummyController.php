<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dummyController extends Controller
{
    //my first API
    function getData()
    {
        return ["name" => "Ahmed Khojaly","email"=>"ahmedkhojaly85@gmail.com","address"=>"Port-Sudan"];
    }
}
