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
			echo "human eatting ".$food;
		}
	}

	$human = new human();
	$human->eat("Apple");
 ?>