<?php
defined('BASEPATH') or die('Direct script access not allowed');
?>

<h1> HI! </h1>

<?php

$db = new DB;
$query = $db->prepare("SELECT * FROM posts");
if ($query->execute()) {
    echo 'SUCCESS';
} else {
    echo 'FAIL'
}

?>

