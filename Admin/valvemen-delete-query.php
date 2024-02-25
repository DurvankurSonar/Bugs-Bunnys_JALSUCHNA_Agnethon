<!DOCTYPE html>
<html>
<head>
	
	<title></title>
</head>
<body>
   <?php
   include 'join.php';
   if(isset($_GET['val_id']))
   {

   	$delete=mysqli_query($x,"delete from val_form where ValvemenID='".$_GET['val_id']."'") or die(mysqli_error($x));
	 	
   
   if($delete)
		{
	            echo '<script type="text/javascript">';
	            echo "alert('Record  Deleted');";
	            echo 'window.location.href = "home.php";';
	            echo "</script>";
     	}
			else
			{
	            echo '<script type="text/javascript">';
	            echo "alert('record Not Deleted');";
	            echo "</script>";             
      

	}
}

		?>
</body>
</html>