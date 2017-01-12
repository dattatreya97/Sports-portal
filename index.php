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
    <div class="col-sm-6 col-sm-push-2">
          <form class="form-horizontal" action="delcard.php" method="POST">
              <div class="form-group">
                  <div class="col-sm-3">
                      <label>Name</label>
                  </div>
                  <div class="col-sm-9">
                      <input class="form-control" type="text" name="name" id="name" required>
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
                      <input class="form-control" type="text" name="college" id="college" required>
                  </div>
              </div>
              <div class="form-group">
                  <div class="col-sm-3">
                      <label>Email</label>
                  </div>
                  <div class="col-sm-9">
                      <input class="form-control" type="email" name="email" id="email" required>
                  </div>
              </div>
              <div class="form-group">
                  <div class="col-sm-3">
                      <label>Phone</label>
                  </div>
                  <div class="col-sm-9">
                      <input class="form-control" type="tel" name="phone" id="phone" required>
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
                      <!--<button class="btn btn-primary" type="button" data-toggle="modal" data-target="#myModal">Submit</button>-->
                      <button class="btn btn-primary" value="Submit">Submit</button>
                  </div>
              </div>
          </form>
      </div>

      <!-- Confirmation -->
        <!--<div class="modal fade" id="myModal" role="dialog">
          <div class="modal-dialog">                    
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Details Confirmation</h4>
              </div>
              <div class="modal-body">
                <form class="form-horizontal" action="delcard.php" method="POST">
                    <div class="form-group">
                        <div class="col-sm-3">
                            <label>Name</label>
                        </div>
                        <div class="col-sm-9">
                            <input class="form-control" type="text" name="name" id="name" required>
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
                            <input class="form-control" type="text" name="college" id="college" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-3">
                            <label>Email</label>
                        </div>
                        <div class="col-sm-9">
                            <input class="form-control" type="email" name="email" id="email" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-3">
                            <label>Phone</label>
                        </div>
                        <div class="col-sm-9">
                            <input class="form-control" type="tel" name="phone" id="phone" required>
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
                            <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#myModal">Submit</button>
                        </div>
                    </div>
          </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>
          
          </div>
        </div>-->



    </div>
  <?php include_once("footer.php") ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>