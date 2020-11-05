<?php
function start_server()
{

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
function stop_server($conn)
{
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

function get_powers(){
  $conn = start_server();
  $data = $conn->query("SELECT id, ability FROM abilities");
  stop_server($conn);
  return $data;
}

function add_user($name, $about_me, $bio, $ability_id){
  echo $name;
  echo $about_me;
  echo $bio;
  $conn = start_server();
  $conn->query("INSERT INTO heroes (name, about_me, biography) VALUES ('$name', '$about_me', '$bio')");
  $newid = $conn->query("SELECT id FROM heroes WHERE name = $name");
  var_dump($newid);
  $conn->query("INSERT INTO ability_hero (hero_id, ability_id) VALUES ('$newid', '$ability_id')");
  stop_server($conn);
}