<?php include('connection.php')?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php 
	 $id=$_REQUEST['id']; 
	
	 $query1=mysqli_query($conn,"select NAMES FROM teacher WHERE TEACH_ID='$id' limit 1") or die(mysqli_error());
	 $echo=mysqli_fetch_array($query1);
	 $name=$echo['NAMES'];

	 $query=mysqli_query($conn,"DELETE FROM teacher WHERE TEACH_ID='$id' limit 1");
	  $query=mysqli_query(,$conn,"DELETE FROM teachersalary WHERE TEACH_ID='$name'")or die(mysqli_error());
 
	header('location:home.php?action=recordteacher');	 
	 ?>
	 
</body>
</html>
