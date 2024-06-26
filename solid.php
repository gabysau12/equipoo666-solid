Class Circle 
{
    public $radius;

    public function __construct($radius) 
    {
        $this->radius = $radius;
    }
}

Class Square 
{
    public $length;

    public function __construct($length) 
    {
        $this->length = $length;
    }
}
class AreaCalculator
{
    protected $shapes;

    public function __construct($shapes = array())
    {
        $this->shapes = $shapes;
    }

    public function sum()
    {
        // Aquí va la lógica para sumar todas las áreas
    }

    public function output()
    {
        return implode('', array(
            "<h1>",
                "Suma de todas las áreas: ",
                $this->sum(),
            "</h1>"
        ));
    }
}
$shapes = array (
    new Circle(3),
    new Square(4)
);

$areas = new AreaCalculator($shapes);

echo $areas->output();
$shapes = array (
    new Circle(3),
    new Square(4)
);

$areas = new AreaCalculator($shapes);
$output = new SumCalculatorOutputter($areas);

echo $output->toJson();
echo $output->toHtml();
