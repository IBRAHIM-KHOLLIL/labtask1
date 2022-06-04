<?php
// define variables and set to empty values
$fname = $lname = $gender = $email = $mobile = $address = $country ="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   $fname = test_input($_POST["fname"]);
   $lname = test_input($_POST["lname"]);
   $gender = test_input($_POST["gender"]);
   $email = test_input($_POST["email"]);
   $mobile = test_input($_POST["mobile"]);
   $address = test_input($_POST["address"]);
   $country = test_input($_POST["country"]);

}

function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}

echo "<h2>Your Input:</h2>";
echo $fname;
echo "<br>";
echo $lname;
echo "<br>";
echo $gender;
echo "<br>";
echo $email;
echo "<br>";
echo $mobile;
echo "<br>";
echo $address;
echo "<br>";
echo $country;
?>