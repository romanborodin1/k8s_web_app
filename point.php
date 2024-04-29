<?php
    class Point {
        public $x;    // Спецификатор public - доступность как снаружи, так и внутри класса
        public $y;
	private $z;    // private - доступность только внутри класса
        protected $p;    // protected - используется при наследовании
        public static $num = 120;    // static - позволяет задать значение статической переменной
    }
?>
