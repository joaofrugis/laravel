<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConfigController extends Controller
{
    public function index() {
        echo "Página inicial de configurações";
    }   

    public function user() {
        echo "Página de config do usuário";
    }
}
