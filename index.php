<?php include 'i18n_setup.php' ?>

<?php

$con = mysqli_connect("localhost", "root", "", "swirltag"); //Connection variable

if(mysqli_connect_errno())
{
	echo "Failed to connect: " . mysqli_connect_errno();
}

$query = mysqli_query($con, "INSERT INTO users VALUES ('', 'Uwem', 'Uke', 'lifo', 'sly@gmail.com', '', '', '', '', '')");
?>

<!DOCTYPE html>
<html>
<head>
	<title><?=gettext('Welcome to Bukwom but this is a transalated string')?></title>
</head>
<body>
	<?=gettext('Hello Uwem!!!')?>
</body>
</html>