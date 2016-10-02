<?php 
	class MagicTest{
		//__tostring 当对象被当做字符串使用时自动调用 
		public function __tostring(){
			return "This is a string! \n";
		}
		//__invoke 当对象被当做方法时使用时自动调用
		public function __invoke($param){
			echo "This is a num ".$param."\n";
		}
	}

	$var = new MagicTest();
	echo $var;
	$var(6);
 ?>