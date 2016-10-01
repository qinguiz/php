<?php 
	class NbaPlayer{

		public $name = "Jordan"; //定义属性
		public $height = "198cm";
		public $weight = "98kg";
		public $team = "Bull";
		public $playerNumber = "23";

		//构造函数，在对象被实例化时自动调用；
		function __construct($name,$height,$weight,$team,$playerNumber){
			echo "IN NbaPlayer construct <br>";
			$this->name = $name;
			$this->height = $height;
			$this->weight = $weight;
			$this->team = $team;
			$this->playerNumber = $playerNumber;
		}

		//定义方法
		public function run(){
			echo "Running <br>";
		}

		public function jump(){
			echo "Jumping <br>";
		}

		public function dribble(){
			echo "Dribbling <br>";
		}
	}

	//实例化对象
	//类到对象的实例用 new 关键字来实现，并且在名称后面紧跟一对括号；
	$jordan = new NbaPlayer("Jordan","198cm","98kg","Bull","23");

	//类后面的参数列表会作为参数自动调用类里面的构造函数；
	$jeams = new NbaPlayer("Jeams","203cm","102kg","Heats","6");
	//对象中的属性可以通过 “->” 符号来访问；
	echo $jordan->name."<br>";
	echo $jeams->name."<br>";

	//对象中的方法可以通过 “->” 符号来访问；

	$jordan -> dribble();
	$jordan -> jump();

 ?>