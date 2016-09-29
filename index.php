<?php
require_once("database.php");
	
$link = mysqli_connect(MYSQL_SERVER, MYSQL_USER, MYSQL_PASSWORD, MYSQL_DB)
		or die("Error: ".mysqli_error($link));
	
//Делаем запрос на выборку  "SELECT * FROM COUNTRIES"
	
	$query = "select country_id, title_en from countries";    //"select country_id, title_ru, title_en from countries where country_id = 83;";
	$result = mysqli_query($link, $query);
	
	
	if (!$result) die(mysqli_error($link));
	
	echo "<pre><b>&#9;<u>ID</u>&#9;<u>Country</u></b></pre>";
	$n = mysqli_num_rows($result);
	
	for ($i = 0; $i < $n; $i++)
	{
		$row = mysqli_fetch_assoc($result);

		echo "<pre>&#9;".$row['country_id']."&#9;".$row['title_en']."</pre>";
	}  

?>