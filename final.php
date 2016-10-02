<?php 
	//子类中编写的方法与父类的方法一样时，这就是对父类方法的重写
	//不想任何类被继承，在class前加final；
	final class baseClass{
		public function test(){
			echo "baseClass::test called\n";
		}
		//在方法中添加final关键字，不让子类进行重写
		final public function test1(){
			echo "baseClass::test1 called\n";
		}
	}

	// class childClass extends baseClass{
	// 	// public function test(){
	// 	// 	echo "childClass::test called\n";
	// 	// }
		
	// }

	// $var = new childClass();
	// echo $var->test();
	// echo $var->test1();
	$var2 = new baseClass();
	echo $var2->test();
 ?>