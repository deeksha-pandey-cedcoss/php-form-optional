<h1>The input element</h1>
<form action="/validate.php" action="post">
    <label for="fname">Name</label>
    <input type="text" id="fname" name="fname"><br><br>
    <br>
    <label for="fnamee">Email</label>
    <input type="text" id="fname" name="fnamee"><br><br>
    <br>
    <input type="submit" value="Submit">
</form>
<?php

// $email = $_GET['fname'];

// // Validate email
// if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
//   echo"<b>$email</b> is a valid email address";
// } else {
//   echo"<b>$email</b> is not a valid email address";
// }
?>

