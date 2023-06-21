<?php
$name = $_GET['fname'];
$email = $_GET['fnamee'];

if ($name == "" || $email == "") {
    header("Location: /index.php/");
}
else {
    echo "<h3>Welcome user</h3>:)";
    die;
}
