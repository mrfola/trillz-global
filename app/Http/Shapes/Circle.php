<?php 

namespace App\Http\Shapes;

use App\Http\Controllers\Controller;
use App\Http\Shapes\ShapeInterface;

class Circle extends Controller implements ShapeInterface
{

    public function draw()
    {
        return "circle";
    }
}