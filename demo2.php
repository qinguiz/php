<?php 
	
	class Human{
		public $name;
		public $height;
		public $weight;

		public function eat($food){
			echo $this->name."'s eatting ".$food."\n";
		}
	}
	//extends继承Human的类,只能继承一个类
	class NbaPlayer extends Human{

		public $team = "Bull";
		public $playerNumber = "23";

		//构造函数，在对象被实例化时自动调用；
		function __construct($name,$height,$weight,$team,$playerNumber){
			echo "IN NbaPlayer construct \n";
			$this->name = $name; //父类的属性可以用 this 访问
			$this->height = $height;
			$this->weight = $weight;
			$this->team = $team;
			$this->playerNumber = $playerNumber;
		}

		//析构函数，在程序执行完之后自动调用；
		//析构函数通常被用于清理程序使用的资源，例如，程序使用了打印机，那么可以在析构函数里面释放打印机资源；
		function __destruct(){
			echo "Destroying ".$this->name."\n";
		}

		//定义方法
		public function run(){
			echo "Running \n";
		}

		public function jump(){
			echo "Jumping \n";
		}

		public function dribble(){
			echo "Dribbling \n";
		}
	}

	//实例化对象
	//类到对象的实例用 new 关键字来实现，并且在名称后面紧跟一对括号；
	$jordan = new NbaPlayer("Jordan","198cm","98kg","Bull","23");

	echo $jordan->name."\n";
	echo $jordan->eat("Apple");
 ?>