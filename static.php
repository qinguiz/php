<?php 

	/*
	1.静态属性用于保存类的公有数据
	2.静态方法里面只能访问静态属性
	3.静态成员不需要实例化对象就可以访问
	4.类的内部可以通过self或者static关键字来访问自身静态成员；
	5.可以通过parent关键字来访问父级的静态成员；
	6.可以通过类的名称在类定义外部访问静态成员；
	*/
	class human{
		public $name;
		public $height;
		public $weight;

		public static $sV = "static sv";
	};

	class nbaPlayer extends human{
		public $team;
		public $playerNum;
		private $age = "40";

		//静态属性定义时，在访问关键字后面加 static 关键字
		public static $president = "David Stern";

		//方法同上
		public static function changePresident($newPrsdt){
			//在类定义中使用静态成员的时候，用self关键字后面加：：操作符，即可。：：后面记得要加$
			self::$president = $newPrsdt;
			//parent关键字访问父类的静态成员
			echo parent::$sV;
		}

		function __construct($name,$height,$weight,$team,$playerNum){
			echo "In NbaPlayer construct \n";
			$this->name = $name;
			$this->height = $height;
			$this->weight = $weight;
			$this->team = $team;
			$this->playerNum = $playerNum;
		}

		public function getAge(){
			echo "Jordan age is ".$this->age;
		}
	}

	$jordan = new nbaPlayer("Jordan","198cm","98kg","Bull","23");
	
	nbaPlayer::changePresident("Adam Silver");
	echo nbaPlayer::$president;
 ?>