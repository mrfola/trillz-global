<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Shapes\ShapeFactory;

class FactoryPatternDemo extends Controller
{
    public function main($shape)  
    {
        return response([ShapeFactory::getShape($shape)]);
    }
}
