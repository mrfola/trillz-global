<?php 

namespace App\Http\Shapes;
use App\Http\Shapes\IShape;

class Rectangle implements IShape
{

    public function draw()
    {
        echo "rectangle";
    }
}