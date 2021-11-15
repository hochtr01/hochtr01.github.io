<!DOCTYPE html>
<?php
	include_once("db_connect.php");
?>

<HTML>
<HEAD><TITLE>Added new class</TITLE></HEAD>
<BODY>
	<h2>Adding class</h2>
	<?php
	$code = $_POST['code'];
	$name = $_POST['name'];
	$desc = $_POST['desc'];
	$preq = $_POST['preq'];

	$q1 = "INSERT INTO courses VALUE('$code', '$name', '$desc', '$preq');";

	$result1 = $db->query($q1);

	if ($result1 != FALSE) {
		print "<h2>Successfully added class</h2> \n";
	} else {
		print "<h2>Unable to add $name to current class list</h2>\n";
	}
	?>
	<P><A href="admin-table.html">BACK</A></P>

</BODY>
</HTML>