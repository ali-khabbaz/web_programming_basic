<?php
$host="localhost";
$username="root";
$password="";
$database="database1";


$table="member";

mysql_connect("$host","$username","$password") or die (mysql_error());
echo "connected <br />";

mysql_select_db("$database") or die (mysql_error());

echo "database found<br />";

mysql_query("INSERT INTO $table(id,username) VALUES ('1', 'me')")  or die (mysql_error());

mysql_query("INSERT INTO $table(id,username) VALUES ('2', 'you')")  or die (mysql_error());

mysql_query("INSERT INTO $table(id,username) VALUES ('3', 'us')")  or die (mysql_error());

mysql_query("INSERT INTO $table(id,username) VALUES ('4', 'they')")  or die (mysql_error());

//mysql_query("DELETE FROM $table");

$query=mysql_query("SELECT * FROM $table ");

while($rows=mysql_fetch_array($query)):
	$my_id=$rows['id'];
	$my_username=$rows['username'];
	
	echo "$my_id . $my_username <br />";
endwhile;

?> 