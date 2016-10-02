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
		//重载方法
		//__call($name,$arguments);$name时方法名称，$argument是数组。当对象访问不存在的方法名称时，会自动调用
		public function __call($name,$arguments){
			echo "Calling ".$name." with parameters: ".implode(",",$arguments)."\n";
		}
		//__callStatic($name,$arguments);$name时方法名称，$argument是数组。当对象访问不存在的静态方法时，会自动调用
		public static function __callStatic($name,$arguments){
			echo "Calling ".$name." with parameters: ".implode(",",$arguments)."\n";
		}
		//当对象获取不存在的属性时会自动调用get方法
		public function __get($name){
			echo "This the property is ".$name."\n";
		}
		//当对象设置不存在的属性时会自动调用set方法
		public function __set($name,$value){
			echo "The property is ".$name." to value ".$value."\n";
		}
	}

	$var = new MagicTest();
	echo $var;
	$var(6);
	$var->run("para1","para2");
	MagicTest::run("para1","para2");
	echo $var->a;
	$var->a = "className";
 ?>