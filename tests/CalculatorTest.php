<?php 
use PHPUnit\Framework\TestCase;
//use SebastianBergmann\Complexity\Calculator;

require './src/Calculator.php';


class CalculatorTest extends TestCase{
//    public function testAdd(){
//         $c=new Calculator;
//         $r=$c->Add(10,5);
//         $this->assertEquals(133,$r, "Failure at Add function");

//     }
     public function testfact(){
        $n=new Calculator;
         $r=$n->fact(0);
         $this->assertEquals($r,1,"error in fact(0)");

         $r=$n->fact(5);
         $this->assertEquals($r,120,"error in fact(5)");

         $r=$n->fact(6);
         $this->assertEquals($r,144,"error in fact(6)");

         $r=$n->fact(-10);
         $this->assertEquals($r,"null","error in fact(negative)");


     }
}
?>