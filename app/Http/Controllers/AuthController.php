<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index()
    {
        return [
            "NIS" => 3103119195,
            "Name" => "Yara Salsabila",
            "Gender" => "Perempuan",
            "Phone" => 6285701791980,
            "Class" => "XII RPL 6"
        ];
    }
}