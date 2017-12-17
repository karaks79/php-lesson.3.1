<?php

	// Класс 1. Машина.
	class CarClass {
		private $carBrand; // Марка
		public $carColor;  // Цвет
		public function getBrand()
		{
			echo $this->carBrand;
		}
		public function __construct($Brand)
		{
			$this->carBrand = $Brand;
		}
	}

	$car1 = new CarClass('Ford');
	echo $car1->getBrand().'<br>';
	$car1->carColor = 'Белый';
	echo $car1->carColor.'<br>';
	$car2 = new CarClass('Kia');
	'<pre>';
	print_r($car2);
	'</pre>';
	echo '<br>';
	echo '<br>';

	//-------------------------------------------------

	// Класс 2. Телевизор.
	class TVClass {
		private $type = 'ЖК';   // Тип
		private $size;			// Размер диагонали
		public function getType() 
		{
			echo $this->type;
		}
		public function setType($newType)
		{
			$this->type = $newType;
		}
		public function getSize()
		{
			echo $this->size;
		}
		public function __construct($initSize = 48)
		{
			$this->size = $initSize;
		} 
	}

	$tv1 = new TVClass();
	echo $tv1->getSize().'<br>';
	echo $tv1->getType().'<br>';
	$tv2 = $tv1;
	echo $tv2->getType().'<br>';
	$tv2->setType('Плазменный');
	echo ' tv2 ' . $tv2->getType().'<br>';
	echo ' tv1 ' . $tv1->getType().'<br>';
	echo '<br>';
	echo '<br>';

	//-------------------------------------------------

	// Класс 3. Шариковая ручка.
	class PencilClass {
		private $colorInk;		// Цвет чернил
		private $pencilBrand;	// Марка
		public function __construct($Brand, $Ink = 'Синяя')
		{
			$this->colorInk = $Ink;
			$this->pencilBrand = $Brand;
		}
		public function getPencilProperties()
		{
			echo "$this->colorInk". " - " . "$this->pencilBrand";
		}
		// public function clon($parentPencil)
		// {
		// 	$newPencil = new PencilClass('-','-');
		// 	$newPencil->$colorInk = $parentPencil->$colorInk;
		// 	$newPencil->$pencilBrand = $parentPencil->$pencilBrand;
		// 	return $newPencil;
		// }

	}

	$pencil1 = new PencilClass('Pilot', 'Черная');
	$pencil1->getPencilProperties();
	echo '<br>';

	$pencil2 = new PencilClass('Brauberg');
	$pencil2->getPencilProperties();
	echo '<br>';

	$pencil3 = new PencilClass('','');
	$pencil3->getPencilProperties();
	echo '<br>';
	// $pencil3->clon($pencil1);
	// $pencil3->getPencilProperties();
	echo '<br>';
	echo '<br>';

	//-------------------------------------------------

	// Класс 4. Утка.
	class DuckClass {
		private $duckColor;	// Цвет
		private $duckName;		// Имя
		public function __construct($color, $name)
		{
			$this->duckColor = $color;
			$this->duckName = $name;
		}
		public function getDuck()
		{
			echo "$this->duckName" . " - " . "$this->duckColor";
		}
	}

	$duck1 = new DuckClass('Черный', 'Иван Иванович');
	$duck2 = new DuckClass('Серый', 'Петр Петрович');
	$duck1->getDuck();
	echo '<br>';
	$duck2->getDuck();
	echo '<br>';
	echo '<br>';


	//-------------------------------------------------
	// Класс 5. Товар.
	class ProductClass {
		private $productName;			// Наименование
		private $productPrice;			// Цена
		private $productDiscount = 0;	// Скидка
		public function __construct($name, $price)
		{
			$this->productName = $name;
			$this->productPrice = $price;
		}
		public function setDiscount ($discount)
		{
			$this->productDiscount = $discount;
		}
		public function getPrice()
		{
			$p = $this->productPrice * (100 - $this->productDiscount) / 100;
			echo "Цена $this->productName - $p";
		}
	}

	$product1 = new ProductClass('Шкаф', 1000);
	$product1->getPrice();
	echo '<br>';
	$product1->setDiscount(15);
	$product1->getPrice();

?>