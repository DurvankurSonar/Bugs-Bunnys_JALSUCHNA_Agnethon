<!DOCTYPE html>
<html>
<head>
	
	<title></title>
</head>
<body>
   <?php
   include 'join.php';
   //$feed_id=$_REQUEST['feed_id'];
   //print_r($feed_id);
   
   if(isset($_GET['feed_id']))
   {

   	$delete=mysqli_query($x,"delete from feed_back where FeedID='".$_GET['feed_id']."'") or die(mysqli_error($x));
	 	
   
   if($delete)
		{
	            echo '<script type="text/javascript">';
	            echo "alert('Record  Deleted');";
	            echo 'window.location.href = "user-feedback.php";';
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