<?php
header("Content-Type: text/html; charset=utf-8"); 
interface iauto{
public function on();
public function off();
public function get_price();
}

abstract class  auto implements iauto{
	protected $price;
	public function __construct($price){
		$this->price=$price;
	}

}

class vaz extends auto{
	
	public function get_price(){
		return $this->price;
	}
	
	public function on(){
		return "Заводим авто";
	}
	
	public function off(){
		return "Выключаем авто";
	}
}


$car = new vaz("100");
echo $car->get_price();
echo $car->on();


class MyClass {

   protected function myFunc() {
     echo "MyClass::myFunc()\n";
   }
}

class OtherClass extends MyClass {

   /* Override parent's definition */
   public function myFunc() {

     /* But still call the parent function */
     parent::myFunc();
     echo "OtherClass::myFunc()\n";
   }
}

$class = new OtherClass();
$class->myFunc();
?>