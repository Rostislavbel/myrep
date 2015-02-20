<?php
header("Content-Type: text/html; charset=utf-8"); 
echo '<p>Class</p>';
class parent_class{
	
}
class myClass extends  parent_class {
	public $value1=1;
	protected $value2=2;
	private $value3=3;
	
	protected function some_funct(){
	
	}
	public function some_funct2(){
	
	}
	private function some_funct3(){
	
	}
}
//Формируем путь по PEAR
function __autoload($classname){
	$way= str_replace("_", DIRECTORY_SEPARATOR, $classname).'php';
	if (file_exists($way)){
		require_once($way.'php');
	}
	if (!class_exists($classname)){
		throw new Exception('Класс '.$classname.' не найден:');
	}
}

$rr= new myClass;
print_r(get_declared_classes());//получить массив всех используемых классов
echo '<br>';
echo get_class($rr); //возвращает имя класса $value
echo '<br>';
print_r(get_class_methods($rr));//полоучить все методы класса
echo '<br>';
if (in_array('some_funct2', get_class_methods($rr))) echo "метод существует";//проверка метода на существование
echo '<br>';
if (method_exists( get_class($rr), 'some_funct')) echo "метод существует 2";
echo '<br>';
print_r(get_class_vars(get_class($rr))); // получить свойства класса
echo '<br>'; 
echo get_parent_class(get_class($rr));// получить имя родительского класса
echo '<br>'; 

//информация о классе при помощи класса отладки ReflectionClass
$prod= new ReflectionClass("myClass");
echo Reflection::export($prod);

?>