<!DOCTYPE HTML>
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
<title>
PHP Forms - Validate E-mail
</title>
</head>
<body>

<?php
// define variables and set to empty values
$nameErr = $emailErr =$dateErr="";
$name = $email  = $date="";

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
   if (empty($_POST["name"]))
     {$nameErr = "Name is required";}
   else
     {
     $name = test_input($_POST["name"]);
     // check if name only contains letters and whitespace
     if (!preg_match("/^[a-zA-Z ]*$/",$name))
       {
       $nameErr = "Only letters and white space allowed";
       }
     }
 
   if (empty($_POST["email"]))
     {$emailErr = "Email is required";}
   else
     {
     $email = test_input($_POST["email"]);
     // check if e-mail address syntax is valid
     if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email))
       {
       $emailErr = "Invalid email format";
       }
     }


if (empty($_POST["date"]))
     {$dateErr = "date is required";}
     else
     {
     $date = test_input($_POST["date"]);
     // check if e-mail address syntax is valid
     
     }

   
  }

function test_input($data)
{
     $data = trim($data);
     $data = stripslashes($data);
     $data = htmlspecialchars($data);
     return $data;
}
?>
<h2>PHP Form Validation</h2>
<p><span class="error">* required field.</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
   Name: <input type="text" name="name">
   <span class="error">* <?php echo $nameErr;?></span>
   <br><br>
   E-mail: <input type="text" name="email">
   <span class="error">* <?php echo $emailErr;?></span>
   <br><br>
  Appointment time:<input type="date" name="date">
   <span class="error">* <?php echo $dateErr;?></span>
   <input type="submit" name="submit" value="Submit">
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo"<br>";
echo $date;
echo "<br>";
?>
<?php
$servername = "localhost";
$username = "root";
$password = "";

try {
  $conn = new PDO("mysql:host=$servername;dbname=app", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
$sql =" INSERT INTO `app`.`app` (
`NAME` ,
`EMAIL` ,
`appointment_time`
)
VALUES (
'$name', '$email', '$date'
)";
if ($conn->query($sql)) {
echo "<br>";
echo "inserted successfully";
} else {
echo "Error creating table: " . $conn->error;
}
?>



</body>
</html>