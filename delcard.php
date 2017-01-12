<?php
/*$host = 'locahost';
$user = 'root';
$pass = 'Dattu@3121';
$db = 'RevelsTest'; 

$newdelnumber = 0;

$dbc=mysqli_connect("localhost","root","Dattu@3121","RevelsTest") or die('cant connect:');

$name=$_POST['name'];
$RegNo=$_POST['RegNo'];
$college=$_POST['college'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$gender=$_POST['gender'];

$query1 = "SELECT * FROM delegate_card_generation";
$result1 = mysqli_query($dbc,$query1) or die(mysqli_error($dbc));

while ($row = mysqli_fetch_array($result1)) {
	$newdelnumber++;
}
$newdelnumber+=1000;

$query = "INSERT INTO delegate_card_generation (delegate_number,Name,RegNo,College,email,phone,Gender)VALUES (".$newdelnumber.",'".$name."','".$RegNo."','".$college."','".$email."',".$phone.",'".$gender."')";

	$result = mysqli_query($dbc,$query) or die(mysqli_error($dbc));

	if($result)
            echo "Delegate number is " + $newdelnumber;
          else
           echo "unsuccessful";
*/

$host = 'locahost';
$user = 'root';
$pass = 'Dattu@3121';
$db = 'RevelsTest'; 

$newdelnumber = 0;

$dbc=mysqli_connect("localhost","root","Dattu@3121","RevelsTest") or die('cant connect:');

$name = $_POST['name'];
$RegNo = $_POST['RegNo'];
$college = $_POST['college'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$gender=$_POST['gender'];

/*$query1 = "SELECT * FROM delegate_card_generation";
$result1 = mysqli_query($dbc,$query1) or die(mysqli_error($dbc));

while ($row = mysqli_fetch_array($result1)) {
	$newdelnumber++;
}
$newdelnumber+=1000;

$query = "INSERT INTO delegate_card_generation (delegate_number,Name,RegNo,College,email,phone,Gender)VALUES (".$newdelnumber.",'".$name."','".$RegNo."','".$college."','".$email."',".$phone.",'".$gender."')";

	$result = mysqli_query($dbc,$query) or die(mysqli_error($dbc));

	if($result)
            echo "Delegate number is " + $newdelnumber;
          else
           echo "unsuccessful";*/
$nameErr = "";
$collegeErr = "";
$emailErr = "";
$phoneErr = "";

if (empty($name)) //validtaing  name
      {
      $nameErr = "Name is required";
      } 
    else 
    {
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name))
     {
      $nameErr = "Only letters and white space allowed";
     }
    }
if(empty($emailid))
       {
        $emailidErr = "email-id required";
       }
    else
    {
      if(!preg_match(
        '/^[A-z0-9_\-]+[@][A-z0-9_\-]+([.][A-z0-9_\-]+)+[A-z.]{2,4}$/', $email
        ))
      {
        $emailidErr = "Enter valid email-id";
      }
    }
 if (empty($college)) 
      {
      $collegeErr = "workplace is required";
      } 
    else 
    {
    if (!preg_match("/^[a-zA-Z ]*$/",$college))
     {
      $collegeErr = "Only letters and white space allowed";
     }
    } 
   if(empty($phone)) {      //validating phonenumber
    $phoneErr="Please enter a number";
    }
     else if(!is_numeric($phone)) {
    $phoneErr="invalid number";
     }
      else if(strlen($phone) != 10) {
     $phoneErr="invalid number";
     } 
     $result=false;
     $confirm=false;
  if(empty($nameErr) && empty($collegeErr) && empty($emailErr) && empty($phoneErr))
  {
       $query1 = "SELECT * FROM delegate_card_generation";
        $result1 = mysqli_query($dbc,$query1) or die(mysqli_error($dbc));

        while ($row = mysqli_fetch_array($result1)) {
                $newdelnumber++;
              }
          $newdelnumber+=1000;

          $query = "INSERT INTO delegate_card_generation (delegate_number,Name,RegNo,College,email,phone,Gender)VALUES (".$newdelnumber.",'".$name."','".$RegNo."','".$college."','".$email."',".$phone.",'".$gender."')";

          $result = mysqli_query($dbc,$query) or die(mysqli_error($dbc));
          $confirm = true;
  }
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link href="css/mystyles.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="bootstrap-social.css" rel="stylesheet">
  <title>Delegate Card Registration</title>
</head>
<body>
  <?php include_once("header.php") ?>

  <div class="container gap">
    <?php include_once("menu.php") ?>
    <?php if($confirm){
        ?>
        <div class="col-sm-6 col-sm-push-2">
          <?php         
                if($result)
                      { ?>
                          <div>
                            <label>Delegate number is<?php echo $newdelnumber; ?></label>
                          </div>
                        <?php 
                      }
                        else{
                         ?>                       
                            <div>
                              <label>Unsuccessful</label>
                            </div>
                       <?php
                      }
                       ?>
          </div>
        <?php}
    elseif(!$confirm && !$result) { ?>
    <div class="col-sm-6 col-sm-push-2">
          <form class="form-horizontal" action="delcard.php" method="POST">
              <div class="form-group">
                  <div class="col-sm-3">
                      <label>Name</label>
                  </div>
                  <div class="col-sm-9">
                      <input class="form-control" type="text" name="name" id="name" required>
                      <span class="validate-warning"><?php if(!empty($nameErr)){ echo '*'.$nameErr;} ?></span>
                  </div>
              </div>
              <div class="form-group">
                  <div class="col-sm-3">
                      <label>Registration Number</label>
                  </div>
                  <div class="col-sm-9">
                      <input class="form-control" type="tel" name="RegNo" id="RegNo" required>
                  </div>
              </div>
              <div class="form-group">
                  <div class="col-sm-3">
                      <label>College</label>
                  </div>
                  <div class="col-sm-9">
                      <input class="form-control" type="text" name="college" id="college" required><span class="validate-warning"><?php if(!empty($collegeErr)){ echo '*'.$collegeErr;} ?></span>
                  </div>
              </div>
              <div class="form-group">
                  <div class="col-sm-3">
                      <label>Email</label>
                  </div>
                  <div class="col-sm-9">
                      <input class="form-control" type="email" name="email" id="email" required>
                      <span class="validate-warning"><?php if(!empty($emailErr)){ echo '*'.$emailErr;} ?></span>
                  </div>
              </div>
              <div class="form-group">
                  <div class="col-sm-3">
                      <label>Phone</label>
                  </div>
                  <div class="col-sm-9">
                      <input class="form-control" type="tel" name="phone" id="phone" required><span class="validate-warning"><?php if(!empty($phoneErr)){ echo '*'.$phoneErr;} ?></span>
                  </div>
              </div>
              <div class="form-group">
                  <div class="col-sm-3">
                      <label>Gender</label>
                  </div>
                  <div class="col-sm-9">
                        <input type="radio" class="gap" name="gender" id="gender" value="male">Male
            <input type="radio" class="gap" name="gender" id="gender" value="female">Female
            <input type="radio" class="gap" name="gender" id="gender" value="third">third
                  </div>
              </div>
              <div class="form-group">
                  <div class="col-sm-2">
                  </div>
                  <div class="col-sm-10">
                      <button class="btn btn-primary" value="submit">Submit</button>
                  </div>
              </div>
          </form>
      </div>
    <?php } ?>

  </div>
  <?php include_once("footer.php") ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>