<?php
	//interface关键字用于定义接口
	interface IcanEat{
		//接口里面的方法不需要有方法的实现
		public function eat($food);
	}
	//implements关键字用于表示类实现某个接口
	class human implements IcanEat{
		//实现某个接口后，需要提供接口的实现方法
		public function eat($food){
			echo "human eatting ".$food."\n";
		}
	}

	class animal implements IcanEat{
		//实现某个接口后，需要提供接口的实现方法
		public function eat($food){
			echo "animal eatting ".$food."\n";
		}
	}

	$human = new human();
	$animal = new animal();
	$human->eat("Apple");
	$animal->eat("Banana");
	//可以用instanceof来判断某个对象是否实现了某个接口
	var_dump($human instanceof IcanEat);

	//接口可以用extends来继承接口
	interface IcanPee extends IcanEat{
		public function pee();
	}

	class Human2{
		public function pee(){}
		public function eat($food){}
	}
 ?>