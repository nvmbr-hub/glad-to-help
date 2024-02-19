<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutUs extends Controller
{
    public function __construct()
    {
    }

    public function index(): string
    {
        return 'page';
    }
}
