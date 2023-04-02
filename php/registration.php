<!DOCTYPE html>  
<html>  
<head>  
<style>  
.error {color: #FF0001;}  
</style>  
</head>  
<body>    
  
<?php  
// define variables to empty values  
$nameErr = $emailErr = $mobilenoErr = $genderErr = $cerr = $coerr=$add=$doberr=$locerr= "";  
$name = $email = $mobileno =$copass=$cpass= $gender =$add=$dob=$loc= "";  
  
 
if ($_SERVER["REQUEST_METHOD"] == "POST") {  
      
 
    if (empty($_POST["name"])) {  
         $nameErr = "Name is required";  
    } else {  
        $name = input_data($_POST["name"]);  
            // check if name only contains letters and whitespace  
            if (!preg_match("/^[a-zA-Z ]*$/",$name)) {  
                $nameErr = "Only alphabets and white space are allowed";  
            }  
    }  
    
    
      if (empty($_POST["email"])) {  
            $emailErr = "Email is required";  
    } else {  
            $email = input_data($_POST["email"]);  
            // check that the e-mail address is well-formed  
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {  
                $emailErr = "Invalid email format";  
            }  
     }  
     
     
    if (empty($_POST["cpas"])) {  
         $cerr = "password is required";  
    } else {  
        $name = input_data($_POST["cpas"]);  
            // check if name only contains letters and whitespace  
            if (!preg_match("/^[a-zA-Z0-9 ]*$/",$cpas)) {  
                $cerr = "Only alphabets,numbers and white space are allowed";  
            }  
    }  
    
    if (empty($_POST["copas"])) {  
         $coerr = "password is required";  
    } else {  
        $name = input_data($_POST["copas"]);  
            // check if name only contains letters and whitespace  
            if (!preg_match("/^[a-zA-Z0-9 ]*$/",$copas)) {  
                $coerr = "Only alphabets,numbers and white space are allowed";  
            }  
    }  
     
      
    
    if (empty($_POST["mobileno"])) {  
            $mobilenoErr = "Mobile no is required";  
    } else {  
            $mobileno = input_data($_POST["mobileno"]);  
             
            if (!preg_match ("/^[0-9]*$/", $mobileno) ) {  
            $mobilenoErr = "Only numeric value is allowed.";  
            }  
        
        if (strlen ($mobileno) != 10) {  
            $mobilenoErr = "Mobile no must contain 10 digits.";  
            }  
    }  
   
    
     if (empty($_POST["adress"])) {  
         $adderr = "address is required";  
    } else {  
        $add = input_data($_POST["address"]);  
            // check if name only contains letters and whitespace  
            if (!preg_match("/^[a-zA-Z0-9 ]*$/",$add)) {  
                $adderr = "Only alphabets and white space are allowed";  
            }  
    }  
  if (empty($_POST["dob"])) {  
         $doberr = "dob is required";  
    } else {  
        $dob = input_data($_POST["dob"]);  
            // check if name only contains letters and whitespace  
            if (!preg_match("/^[a-zA-Z0-9 ]*$/",$dob)) {  
                $doberr = "Only alphabets and white space are allowed";  
            }  
    }  
  
      
 
    if (empty ($_POST["gender"])) {  
            $genderErr = "Gender is required";  
    } else {  
            $gender = input_data($_POST["gender"]);  
    }  
    
    if (empty($_POST["location"])) {
    $locrr = "location is required";
  } else {
    $loc = test_input($_POST["location"]);
  }
  
}  
function input_data($data) {  
  $data = trim($data);  
  $data = stripslashes($data);  
  $data = htmlspecialchars($data);  
  return $data;  
}  
?>  
  
<h2>  Registration Form</h2>  
<span class = "error">* required field </span>  
<br><br> <center> 
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" >    
    Name:   
    <input type="text" name="name">  
    <span class="error">* <?php echo $nameErr; ?> </span>  
    <br><br>  
    E-mail:   
    <input type="text" name="email">  
    <span class="error">* <?php echo $emailErr; ?> </span>  
    <br><br>  
    create password:   
    <input type="text" name="mobileno">  
    <span class="error">* <?php echo $cerr; ?> </span>  
    <br><br>  
     confirm password:   
    <input type="text" name="mobileno">  
    <span class="error">* <?php echo $coerr; ?> </span>  
    <br><br>  
   
    gender:
    <input type="radio" name="gender" value="male"> Male  
    <input type="radio" name="gender" value="female"> Female  
    <input type="radio" name="gender" value="other"> Other  
    <span class="error">* <?php echo $genderErr; ?> </span>  
    <br><br>  
    dob:
    <input type="date" name="dob">
    <br><br> 
    location :
    <select name="location">
<option value=""></option>
<option value="India" <?php if ($loc=="India") echo "selected";?>>India</option>
<option value="USA" <?php if ($loc=="USA") echo "selected";?>>USA</option>
<option value="canada" <?php if ($loc=="canada") echo "selected";?>>canada</option>
</select>
   
<span class="error">* <?php echo $locerr;?> </span>
<br><br> 
    address:   
    <input type="text" name="name">  
    <span class="error">* <?php echo $adderr; ?> </span>  
    <br><br> 
    
    mobile no:   
    <input type="text" name="name">  
    <span class="error">* <?php echo $mobilenoErr; ?> </span>  
    <br><br> 
   
    
    
    <input type="submit" name="submit" value="Submit">   
    <br><br>                             
</form>
  
<?php  
    if(isset($_POST['submit'])) {  
    if($nameErr == "" && $emailErr == "" && $mobilenoErr == "" && $genderErr == "" && $clgerr == ""&&$stateerr==""&&$cityerr==""&&$courseerr=="") {  
        echo "<h3 color = #FF0001> <b>You have sucessfully registered.</b> </h3>";  
       
    } else {  
        echo "<h3> <b>You didn't filled up the form correctly.</b> </h3>";  
    }  
    }  
?>  
  
    </body>
    <style>
       
        body {
            background-color: grey;
            background-repeat: collapse;
        
        }
        </style>
           
</html>
