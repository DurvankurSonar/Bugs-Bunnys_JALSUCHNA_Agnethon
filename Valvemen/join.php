<!-- Connection file -->

<?php

$x = mysqli_connect("localhost","root","","cpp_form") or die(mysqli_error($x));
if($x)
{
	// echo '<script type="text/javascript">';
	//         echo "alert('Database Connected successfully');";
	//             echo "</script>"; 
}
else
{
	echo '<script type="text/javascript">';
	            echo "alert('Database Connection is faild');";
	            echo "</script>"; 
}

?>

<!-- Connection file -->