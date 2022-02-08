<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Shapes\ShapeFactory;

class FactoryPatternDemo extends Controller
{
    public function main()  
    {
        return ShapeFactory::getShape('circle');
    }
}
