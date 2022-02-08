<?php 

namespace App\Http\Shapes;
use App\Http\Shapes\ShapeInterface;

use App\Http\Controllers\Controller;


class Rectangle extends Controller implements ShapeInterface
{

    public function draw()
    {
        return "rectangle";
    }
}