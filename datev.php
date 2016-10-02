<?php 
	//1.parent关键字可以访问用于调用了父类中被子类重写的方法
	//2.self关键字可以访问类自身的成员方法，也可以访问自身静态的成员与常量，不能访问类自身的属性，使用常量的时候不需要加$
	//3.static关键字用于访问类自身定义的静态成员，访问静态属性时需要加$符号
	class baseClass{
		public function test(){
			echo "baseClass::test called\n";
		}
		
		public function test1(){
			echo "baseClass::test1 called\n";
		}
	}

	class childClass extends baseClass{
		const const_val = "const val";
		public static $vVal = "abc \n";
		public function test(){
			echo "childClass::test called\n";
			parent::test();
			self::called();
			echo self::const_val."n";
			echo static::$vVal."\n";
		}
		public function called(){
			echo "ChildClass::called() called \n";
		}
		
	}

	$var = new childClass();
	$var -> test();
 ?>