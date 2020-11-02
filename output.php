<?php 

        
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Name: " . $row["name"]. " - About Me: " . $row["about_me"]. " - Biography: " . $row["biography"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();

?>