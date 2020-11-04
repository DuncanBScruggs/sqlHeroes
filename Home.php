<?php
include "functions.php";


if (array_key_exists('profile', $_POST)) {
  handle_it();
}
function handle_it()
{
  echo "This is Profile that is selected";
}



$result = get_all_heroes();
// var_dump($result);
if ($result->num_rows > 0) {
  // output data of each row
  while ($row = $result->fetch_assoc()) {
    // echo " - Name: " . $row["name"]. " - About Me: " . $row["about_me"]. "<br>"; 
?>
    <div class="card col-3" style="width: 18rem;">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title"><?php echo $row["name"] ?></h5>
        <p class="card-text"><?php echo $row["about_me"] ?></p>
        <form method="post" action="heropage.php">
          <input value=<?php echo $row['id'] ?> name='profile' type="hidden"></input>
          <button type="submit" class="btn btn-secondary">Profile</button>
        </form>
      </div>
    </div>

<?php }
} else {
  echo "0 results";
}
?>