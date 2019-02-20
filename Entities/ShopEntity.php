<?php
class ShopEntity{
	public $id;
	public $title;
	public $review;
}

function __constructor($id,$title,$review){
	$this->id = $id;
	$this->title = $title;
	$this->review = $review;
}
?>