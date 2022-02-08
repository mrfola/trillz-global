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
    protected static $shapes = [
        'circle' => Circle::class,
        'square' => Square::class, 
        'rectangle' => Rectangle::class
    ];

    public static function getShape($shape)  
    {     
        if(array_key_exists($shape, self::$shapes))
        {
            return self::$shapes[$shape];
        }

        return -1;
      
    }
}
