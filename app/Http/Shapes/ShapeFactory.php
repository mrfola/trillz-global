<?php

namespace App\Http\Shapes;

use Illuminate\Http\Request;
use App\Http\Shapes\ShapeFactory;
use App\Http\Shapes\Circle;
use App\Http\Shapes\Square;
use App\Http\Shapes\Rectangle;
use App\Http\Controllers\Controller;

class FactoryPatterDemo extends Controller
{
    public static function getShape($shape)  
    {
        if($shape == 'circle')
        {
            return new Circle();
        }

        if($shape == 'square')
        {
            return new Square();
        }

        if($shape == 'rectangle')
        {
            return new Rectangle();
        }
    }
}
