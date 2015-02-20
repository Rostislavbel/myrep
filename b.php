<?php
namespace B
{ 
  class A
  {
    public static function say()
    {
      echo 'Я пространство имен B';
    }
	
	public static function give(){
		echo "<p>give namespace ".__NAMESPACE__.'</p>';
	}
  }
}