<!------
Salma Mobasher
8120214
Due March 3,2021
--->
<div>
<link rel="stylesheet" href="mystyle.css">
<table class = "infoTable">
<?php
$db=new SQLite3('./feed.db');
$stmt = $db->prepare('SELECT * FROM feed');
$result = $stmt->execute(); 
echo"<td style=background-color:yellow >"."ID #"."</td>","<td style=background-color:yellow>"."Name"."</td>"; 
echo"<td style=background-color:yellow>"."Email"."</td>","<td style=background-color:yellow>"."Postal Code"."</td>";
echo"<td style=background-color:yellow>"."Message"."</td>"; //Made them yellow to be more readable
while($row=$result->fetchArray(SQLITE3_ASSOC)){
	echo"<tr>";
	foreach($row as $key => $val) //creating a row on the table for each new entry
	{
		echo"<td>".$val."</td>"; //note from CCS the ID# will be in orange
		
	}
	echo"<tr>";
}

$stmt->close();
$db->close();
?>
</div>
</table>
<!---<form>
  <input type="button" value="Clear table" onclick="$deletT">
   I wanted to be able to clear it but that didnt work :P

</form>--->