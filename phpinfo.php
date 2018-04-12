<?php 

$host=  'localhost';
$user = 'root';
$password = 'johnpaul';
$database = 'test';
$conn = mysqli_connect($host, $user, $password, $database);

if (mysqli_error($conn)) {
    echo 'It\' not awesome';
} else {
    echo "Fucking awesome";
}

?>