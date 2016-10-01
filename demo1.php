<?php 
	class NbaPlayer{

		public $name = "Jordan"; //定义属性
		public $height = "198cm";
		public $weight = "98kg";
		public $team = "Bull";
		public $playerNumber = "23";

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
	$jordan = new NbaPlayer();
	//对象中的属性可以通过 “->” 符号来访问；
	echo $jordan->name."\n";
	//对象中的方法可以通过 “->” 符号来访问；

	$jordan -> dribble();
	$jordan -> jump();

 ?>