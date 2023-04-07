<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Laptop;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\LaptopController;

class userLaptopController extends Controller
{
    public function index()
    {
        $data['laptop'] = Laptop::all();

        dd($data);
    }
}
