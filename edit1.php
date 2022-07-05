<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>eventeny edit operation main</title>
</head>
<body>
<?php
			$zz = $_POST['id'];
			$ename = $_POST['e_name'];
		    $edate = $_POST['e_date'];
			$etime = $_POST['e_time'];
			$address = $_POST['address'];
			$price = $_POST['price'];
			$comment = $_POST['comment'];
			
	   include('connection.php');
		
	   $query = 'UPDATE events set e_name ="'.$ename.'",
	   e_date ="'.$edate.'", e_time="'.$etime.'",
	   address="'.$address.'",price="'.$price.'", 
	   comment="'.$comment.'" WHERE
	   events_id ="'.$zz.'"';
	   $result = mysqli_query($db, $query) or die(mysqli_error($db));
							
?>	
	<script type="text/javascript">
			alert("Update Successfull.");
			window.location = "index.php";
		</script>
 </body>
</html>