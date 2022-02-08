<?php

namespace App\Http\Shapes;

use Illuminate\Http\Request;
use App\Http\Shapes\ShapeFactory;

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
