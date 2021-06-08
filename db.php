<!------
Was used as a reference for the result php of this lab but is not actually a part of it!!!
---><?php
$db = new SQLite3('feedback.db');
//$db->exec('insert statement here');
$stmt = $db->prepare('SELECT * FROM student');
$result = $stmt->execute();
echo "student_id|student_name|student_gpa<br>";
while($row = $result->fetchArray(SQLITE3_ASSOC)){
    echo $row['student_id']."|".$row['student_name']."|".$row['student_gpa']."<br>";
}

$stmt-> close();
$db->close();
?>