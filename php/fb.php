
<?php
$servername = "172.16.2.214";
$username = "student";
$password = "password";
$dbname = "studentdb";

      //Create connection
$conn = new MySQLi ($servername, $username, $password, $dbname);

      //Check connection
if ($conn -> connect_error) {
 die("Connection failed: " . $conn->connect_error);
}

$sql = "(SELECT fbId, fbPerson, fbEmail, fbComment FROM feedback ORDER BY fbId DESC LIMIT 20) ORDER BY fbId ASC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo "<table class = 'feedback'>";

    //output data of each row
  echo"<tr class = 'feedback'>";
  echo"<td class = 'feedback'>FeedbackId</td>";
  echo"<td class = 'feedback'>Name</td>";
  echo"<td class = 'feedback'>Email</td>";
  echo"<td class = 'feedback'>Comment</td>";
  echo"</tr>";

  while ($row = $result->fetch_assoc()) {
    echo"<tr class = 'feedback'>";
    echo"<td class = 'feedback'>" . $row["fbId"]."</td>";
    echo"<td class = 'feedback'>" . $row["fbPerson"]."</td>";
    echo"<td class = 'feedback'>" . $row["fbEmail"]."</td>";
    echo"<td class = 'feedback'>" . $row["fbComment"]."</td>";
    echo"</td class = 'feedback'>";
  }
  echo"</table>";
} else {
  echo"0result";
}

$conn->close();
?>

