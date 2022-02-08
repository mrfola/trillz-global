<?php 

namespace App\Http\Shapes;
use App\Http\Shapes\IShape;

class Circle implements IShape
{

    public function draw()
    {
        echo "circle";
    }
}