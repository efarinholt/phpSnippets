<?php

//The Class
class className{
	public function myFunction($var1, $var2){
		
		if($x){
			$return1 = 'aaa';
			$return2 = 'bbb';
		}else{
			$return1 = 'ccc';
			$return2 = 'ddd';
		}
		return array($return_1, $return_2);		
	}
}

//The Call
$object = new className();
list($return_1, $return_2) = $object->checkUser($var1, $var2);

?>
