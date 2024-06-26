interface ShapeInterface {
    public function area();
    public function volume();
}
interface ShapeInterface 
{
    public function area();
}

interface SolidShapeInterface
{
    public function volume();
}

class Cube implements ShapeInterface, SolidShapeInterface
{
    public function area()
    {
        // Calcula la superficie del cubo
    }

    public function volume()
    {
        // Calcula el volumen del cubo
    }
}
interface ManageShapeInterface {
    public function calculate();
}

class Square implements ShapeInterface, ManageShapeInterface {
    public function area() { /*Hacer cálculos*/ }

    public function calculate() {
        return $this->area();
    }
}

class Cube implements ShapeInterface, SolidShapeInterface, ManageShapeInterface {
    public function area() { /*Hacer cálculos*/ }
    public function volume() { /*Hacer cálculos*/ }

    public function calculate() {
        return $this->area() + $this->volume();
    }
}


