<?php
require_once "connect.php";


/*if(mysqli_num_rows($records)>0){

	while($unit=mysqli_fetch_assoc($records)){


		$course_name = $unit['course_name'];
		$category = $unit['category'];
		$description = $unit['description'];
		$duration = $unit['duration'];
		$cost = $unit['cost'];
	}
}*/
$sql= "select * from courses";
$result = mysqli_query($conn, $sql);




 ?>