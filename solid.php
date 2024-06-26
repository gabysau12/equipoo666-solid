public function sum()
{
    foreach ($this->shapes as $shape) {
        if(is_a($shape, 'Square')){
            $area[] = pow($shape->length, 2);
        } elseif (is_a($shape, 'Circle')){
            $area[] = pi() * pow($shape->radius, 2);
        }
    }
    return array_sum($area);
}
Class Square 
{
// ...
    public function area()
    {
        return pow($this->length, 2);
    }
}
Class Circle
{
// ...
    public function area()
    {
        return pi() * pow($this->radius, 2);
    }
}
public function sum()
{
    foreach ($this->shapes as $shape)
    {
        $area[] = $shape->area;
    }

    return array_sum($area);
}
interface ShapeInterface {
    public function area();
}
Class Circle implements ShapeInterface
{
// ...
}
Class Square implements ShapeInterface
{
// ...
}
public function sum()
{
    foreach ($this->shapes as $shape) {
        if($shape instanceof ShapeInterface)){
            $area[] = $shape->area;
            continue;
        }
        throw new AreaCalculatorInvalidShapeException;
    }

    return array_sum($area);
}
