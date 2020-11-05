<?php include "functions.php"; ?>
<!doctype html>
<html lang="en">

<head>
    <title>SQL Heroes</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <div class="row">
            <?php

            // echo $_POST['profile'];

            $result = get_one_hero($_POST['profile']);
            // var_dump($result);
            if ($result->num_rows > 0) {
                // if (1 == 2) {
                // output data of each row
                while ($row = $result->fetch_assoc()) {
                    // echo " - Name: " . $row["name"]. " - About Me: " . $row["about_me"]. "<br>"; 
            ?>

                    <div class="jumbotron jumbotron-fluid">
                        <div class="container">
                            <h1 class="display-4"><?php echo $row["name"] ?></h1>
                            <p class="lead"><?php echo $row["about_me"] ?></p>
                            <p class="lead"><?php echo $row["biography"] ?></p>
                            <form action="index.php">
                                <button type="submit" class="btn btn-secondary">Home</button>
                            </form>
                        </div>
                    </div>
            <?php }
            } else {
                echo "0 results";
            }
            ?>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>