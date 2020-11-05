


<?php 
include "functions.php"; 
    add_user($_POST['name'],$_POST['about_me'],$_POST['bio'], $_POST['ability_id']);
?>

<form class="col-12" action="Home.php">
    <button type="submit" class="btn btn-secondary">Thank You!</button>
</form>