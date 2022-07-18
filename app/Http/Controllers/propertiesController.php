<?php

namespace App\Http\Controllers;

use App\Models\property;
use Illuminate\Http\Request;

class propertiesController extends Controller
{
    public function index(){

        return view('index',[
        'props' => property::latest()->filter(request(['search','type','price','bedrooms','bathrooms','area','for']))->paginate(6),

    ]);
}
}
