<?php
    include "functions.php";
    // var_dump($_POST);
    update_user($_POST['id'], $_POST['name'], $_POST['about_me'], $_POST['bio'], $_POST['image_url']);
?>

<form class="col-12" action="Home.php">
    <button type="submit" class="btn btn-secondary">Updated!</button>
</form>