<!------
Salma Mobasher
8120214
Due March 3,2021
--->
<?php
$db = new SQLite3('./feed.db');
$stmt= $db->prepare("INSERT INTO feed(user_name, user_email, user_post, user_message) VALUES(:userName, :userMail, :userPostalCode, :userMessage);");
$stmt->bindValue(":userName", $_POST['name']); //bindvalue used to save the post value to the array value!
$stmt->bindValue(":userMail", $_POST['mail']); //dbexec did not work in this case!
$stmt->bindValue(":userPostalCode", $_POST['postalCode']);
$stmt->bindValue(":userMessage", $_POST['message']);
$stmt->execute();
$stmt-> close();
$db->close();
header('Location: result.php'); //this makes it open up th the page with the table :D
?>
