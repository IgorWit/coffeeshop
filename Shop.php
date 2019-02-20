<?php
	 
	require ("Model/Credentials.php");
	require ("Entities/ShopEntity.php");
	//require 'Controller/ShopController.php';

	//$shopModel = new ShopModel();


	//$content = $shopModel->takeShopTable();
	

	$db_shop_name = "shop";
	//write access to db

	if(!$link = mysql_connect($host,$user,$passwd)){
		echo "<br> Can't connect with server to DB";
		exit();
	}
	//choose db
	if(!mysql_select_db($database, $link))
	{
		echo "<br> Can't choose DB<br>";
		exit();
	}
	
	//string request
	$str_sql_query = "SELECT * FROM shop";
	if(!$result = mysql_query($str_sql_query, $link)){
		echo "<br> Can't execute request<br>";
		exit();
	}

	$shop_array = array();

	while($mas = mysql_fetch_array($result)){

		$title = $mas[1];
		$review = $mas[2];

		$shop = new ShopEntity (-1,$title,$review);
		array_push($shop_array, $shop);

		//if use it like funk
		//return $shop_array;
		$content = $review;

	}

	mysql_close($link);



	function LoadShopTableMas(){

	$db_shop_name = "shop";
	//write access to db

	if(!$link = mysql_connect($host,$user,$passwd)){
		echo "<br> Can't connect with server to DB";
		exit();
	}
	//choose db
	if(!mysql_select_db($database, $link))
	{
		echo "<br> Can't choose DB<br>";
		exit();
	}
	
	//string request
	$str_sql_query = "SELECT * FROM shop";
	if(!$result = mysql_query($str_sql_query, $link)){
		echo "<br> Can't execute request<br>";
		exit();
	}

	$shop_array = array();
	while($mas = mysql_fetch_array($result)){

		$title = $mas[1];
		$review = $mas[2];

		$shop = new ShopEntity (-1,$title,$review);
		array_push($shop_array, $shop);
	}
	//if use it like funk
	return $shop_array;
	//$content = $review;
	mysql_close($link);

	}

	function ExecuteShopMas($shop_mas){

 		$shop_array1 = $shop_mas;
        $result = "";

        foreach($shop_array1 as $key =>$shop){
        	$result = $shop->review;
        }	

        return $result;

	}

	//$new_content = ExecuteShopMas(LoadShopTableMas());

	//change this part for your necessary
    function GetCoffeeByType($type) {
        require 'Credentials.php';

        //Open connection and Select database.     
        mysql_connect($host, $user, $passwd) or die(mysql_error);
        mysql_select_db($database);

        $query = "SELECT * FROM coffee WHERE type LIKE '$type'";
        $result = mysql_query($query) or die(mysql_error());
        $coffeeArray = array();

        //Get data from database.
        while ($row = mysql_fetch_array($result)) {
            $name = $row[1];
            $type = $row[2];
            $price = $row[3];
            $roast = $row[4];
            $country = $row[5];
            $image = $row[6];
            $review = $row[7];

            //Create coffee objects and store them in an array.
            $coffee = new CoffeeEntity(-1, $name, $type, $price, $roast, $country, $image, $review);
            array_push($coffeeArray, $coffee);
        }
        //Close connection and return result
        mysql_close();
        return $coffeeArray;
    }







 

	//google maps 

	$content = $review;

	$title = 'CoffeeShop';
	include 'Template.php';
?>