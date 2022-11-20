<?php
/*--------------------BEGINNING OF THE CONNECTION PROCESS------------------*/
//define constants for db_host, db_user, db_pass, and db_database
//adjust the values below to match your database settings
define('DB_HOST', 'localhost:3307');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_DATABASE', 'mydb');
//connect to database host
$connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_DATABASE); 
//make sure connection is good or die
if ($connection->connect_errno) 
{
  die("Failed to connect to MySQL: (" . $connection->connect_errno . ") " . $connection->connect_error);
}


// $users = $connection->query("SELECT * FROM test1");
// var_dump($users);
/*-----------------------END OF CONNECTION PROCESS------------------------*/
/*----------------------DATABASE QUERYING FUNCTIONS-----------------------*/
//SELECT - used when expecting single OR multiple results
//returns an array that contains one or more associative arrays
function fetch_all($query)
{
  
  $data = array();
  global $connection;
  $result = $connection->query($query);
  while($row = mysqli_fetch_assoc($result)) 
  {
    $data[] = $row;
  }
  return $data;
}

//SELECT - used when expecting a single result
//returns an associative array
function fetch_record($query)
{
  global $connection;
  $result = $connection->query($query);
  return mysqli_fetch_assoc($result);
}
//used to run INSERT/DELETE/UPDATE, queries that don't return a value
//returns a value, the id of the most recently inserted record in your database
function run_mysql_query($query)
{
  global $connection;
  $result = $connection->query($query);
  return $connection->insert_id;
}
//returns an escaped string. EG, the string "That's crazy!" will be returned as "That\'s crazy!"
//also helps secure your database against SQL injection
function escape_this_string($string)
{
  global $connection;
  return $connection->real_escape_string($string);
}

// function view_reviews() {

//   $query = "SELECT reviews.*, users.first_name, users.last_name 
//             FROM reviews LEFT JOIN users ON users.id = reviews.user_id ORDER BY id DESC";
//   $review = fetch_all($query);
//   return $review;
// }

// function view_replies() {
//   $query = "SELECT replies.*, users.first_name, users.last_name 
//             FROM replies LEFT JOIN users ON users.id = replies.user_id
//             WHERE replies.review_id = user_id";
//   $replies = fetch_all($query);
//   return $replies;
// }

?>