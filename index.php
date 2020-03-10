<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP2-Calculator-app</title>
</head>
<body>
  <?php 
    class MyCalculator {
      private $x;
      private $y;

      public function __construct($x,$y){
        $this->x = $x;
        $this->y = $y;
      }

      public function add(){
        $sum = $this->x + $this->y;
        return $sum;
      }
      public function subtract(){
        $difference = $this->x - $this->y;
        return $difference;
      }
      public function multiply(){
        $product = $this->x * $this->y;
        return $product;
      }
      public function divide(){
        $quotient = $this->x / $this->y;
        return $quotient;
      }
    }
    $mycalc = new MyCalculator(12, 6);
    echo $mycalc->add()."<br>";
    echo $mycalc->multiply()."<br>";
    echo $mycalc->subtract()."<br>";
    echo $mycalc->divide()."<br>";
  ?>
</body>
</html>