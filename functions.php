<?php
function start_server(){
  
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "heroes";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    // echo "Connected successfully";
    return $conn;
  }
function stop_server($conn){
    $conn->close();
}


function get_all_heroes()
{
  $conn = start_server();
  $data = $conn->query("SELECT * FROM heroes");
  stop_server($conn);
  return $data;
}

function get_one_hero($id)
            {
                $conn = start_server();
                $data = $conn->query("SELECT name, about_me, biography FROM heroes WHERE id = $id");
                stop_server($conn);
                return $data;
            }
