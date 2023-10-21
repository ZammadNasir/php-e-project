<?php
$connection = mysqli_connect('localhost', 'root', '', 'e-project') or die('connection failed');
if ($connection) {
    echo "";
} else {
    echo "connection failed";
}
