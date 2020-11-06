<?php 
    $id = $_POST['update'];
    var_dump($id);
?>

<form class="col-12" method="post" action="updated.php">

    <div class="form-group">
        <label for="exampleFormControlInput1">Name</label>
        <input type="name" name='name' class="form-control" id="heroname" placeholder="Hero Name">
    </div>

    <div class="form-group">
        <label for="exampleFormControlTextarea1">About Me</label>
        <textarea name="about_me" class="form-control" id="exampleFormControlTextarea1" rows="2"></textarea>
    </div>

    <div class="form-group">
        <label for="exampleFormControlTextarea1">Biography</label>
        <textarea name="bio" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>

    <div class="form-group">
        <label for="exampleFormControlTextarea1">Image URL</label>
        <textarea name="image_url" class="form-control" id="exampleFormControlTextarea1" rows="2"></textarea>
    </div>

    <input value=<?php echo $id ?> name='id' type="hidden"></input>
    <button type="submit" class="btn btn-secondary">Update</button>

</form>




