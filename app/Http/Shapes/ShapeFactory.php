<?php

namespace App\Http\Shapes;

use Illuminate\Http\Request;
use App\Http\Shapes\ShapeFactory;
use App\Http\Shapes\Circle;
use App\Http\Shapes\Square;
use App\Http\Shapes\Rectangle;
use App\Http\Controllers\Controller;

class ShapeFactory extends Controller
{
    public static function getShape($shape)  
    {
        if($shape == 'circle')
        {
            $circle = new Circle();
            return $circle->draw();
        }

        if($shape == 'square')
        {
            $square = new Square();
            return $square->draw();
        }

        if($shape == 'rectangle')
        {
           $rectangle = new Rectangle();
           return $rectangle->draw();
        }
    }
}
