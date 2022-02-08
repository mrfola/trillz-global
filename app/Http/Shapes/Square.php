<?php 

namespace App\Http\Shapes;
use App\Http\Shapes\IShape;


class Square implements IShape
{

    public function draw()
    {
        echo "square";
    }
}