<?php 
	class NbaPlayer{

		public $name = "Jordan"; //定义属性
		public $height = "198cm";
		public $weight = "98kg";
		public $team = "Bull";
		public $playerNumber = "23";

		//构造函数，在对象被实例化时自动调用；
		function __construct($name,$height,$weight,$team,$playerNumber){
			echo "IN NbaPlayer construct \n";
			$this->name = $name;
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

	//类后面的参数列表会作为参数自动调用类里面的构造函数；
	$james = new NbaPlayer("James","203cm","102kg","Heats","6");

	//对象中的属性可以通过 “->” 符号来访问；
	echo $jordan->name."\n";

	echo $james->name."\n";


	//当对象不会再被使用的时候，会触发析构函数；
	$james1 = $james;	//james1 指向 对象 NbaPlayer
	$james2 = &$james;  //james2 指向引用 james  james2 == james

	//对象设置为null，就直接调用析构函数
	$james = null;

	echo "From now on James will not be used.\n";

	//对象中的方法可以通过 “->” 符号来访问；
	// $jordan -> dribble();
	// $jordan -> jump();

 ?>