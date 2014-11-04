<?php
error_reporting(0);

session_start();
if ((!isset($_SESSION['username']))||(!isset($_SESSION['password'])))
{
    header('Location: ../');
}
            $host="localhost"; // Host name or server name
            $username="root"; // Mysql username
            $password=""; // Mysql password
            $db_name="placementinformer"; // Database name
            $tbl_name="student"; // Table name
            $con = mysqli_connect("$host", "$username", "$password","$db_name");
            if (mysqli_connect_errno()) {
              echo "Failed to connect to MySQL: " . mysqli_connect_error();
            }
            //session_start();
            $uname =  $_SESSION['userNameT'];
            $result = mysqli_query($con,"SELECT name FROM student where USN = '$uname';");


?>

<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">

<head>

<link href='css/fullcalendar.css' rel='stylesheet' />
<link href='css/fullcalendar.print.css' rel='stylesheet' media='print' />
<script src='js/lib/moment.min.js'></script>
<script src='js/lib/jquery.min.js'></script>
<script src='js/fullcalendar.min.js'></script>
<script>

  $(document).ready(function() {
    
    $('#calenderModal').on('shown.bs.modal', function () {
         $("#calendar").fullCalendar('render');
    });

    $('#calendar').fullCalendar({
      
      header: {
        left: 'prev,next today',
        center: 'title',
        right: 'month,basicWeek,basicDay'
      },
      defaultDate: '2014-09-12',
      editable: true,
      eventLimit: true, // allow "more" link when too many events
      events: [
        {
          title: 'All Day Event',
          start: '2014-09-01'
        },
        {
          title: 'Long Event',
          start: '2014-09-07',
          end: '2014-09-10'
        },
        {
          id: 999,
          title: 'Repeating Event',
          start: '2014-09-09T16:00:00'
        },
        {
          id: 999,
          title: 'Repeating Event',
          start: '2014-09-16T16:00:00'
        },
        {
          title: 'Conference',
          start: '2014-09-11',
          end: '2014-09-13'
        },
        {
          title: 'Meeting',
          start: '2014-09-12T10:30:00',
          end: '2014-09-12T12:30:00'
        },
        {
          title: 'Lunch',
          start: '2014-09-12T12:00:00'
        },
        {
          title: 'Meeting',
          start: '2014-09-12T14:30:00'
        },
        {
          title: 'Happy Hour',
          start: '2014-09-12T17:30:00'
        },
        {
          title: 'Dinner',
          start: '2014-09-12T20:00:00'
        },
        {
          title: 'Birthday Party',
          start: '2014-09-13T07:00:00'
        },
        {
          title: 'Click for Google',
          url: 'http://google.com/',
          start: '2014-09-28'
        }
      ]
    });

    
    
  });

</script>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Placement Informer</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="SHORTCUT ICON" href="images/rvce.ico">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <![endif]-->
    <!-- BOOTSTRAP CORE STYLE CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLE CSS -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
    <!-- CUSTOM STYLE CSS -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <!-- GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <link href="gener/genericons.css" rel="stylesheet">
    <link href="css/register-new-css/main.css" rel="stylesheet" />
    <link href="../css/bootstrapValidator.css" rel="stylesheet" />

</head>

<body>
    <div class="navbar navbar-inverse" id="head-nav">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
      <!--  <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Profile</a>
                    <span class="genericon genericon-menu"></span>
                </a>-->
      <!--  <div alt="f419" class="genericon genericon-menu"></div>
        -->
           <a class="navbar-brand" href="#"><img src="images/rvce.jpg" class="img-circle" class="img-responsive" id="logo"></a>

            </div>

            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                  <li><a href="" class="menu" data-toggle="modal" data-target="#calenderModal" >Calender View</a></li>
                    
                    <?php
                    $result = mysqli_query($con,"SELECT * FROM SPC where USN = '$uname';");
                    if(mysqli_num_rows($result)>0)
                    {
                        echo "<li><a href=\"home-pc.php\" class=\"menu\" >PC View</a></li>";
                    }
                    ?>
                    <?php
                    $result = mysqli_query($con,"SELECT * FROM SPC where USN = '$uname';");
                    if(mysqli_num_rows($result)>0)
                    {
                        echo "<li><a href=\"studentHome.php\" class=\"menu\">Student View</a></li>";
                        echo "<li><a href=\"register-new.php\" class=\"menu\">Add students</a></li>";
                    }
                    else
                    {
                        echo "<li><a href=\"studentHome.php\" >Home</a></li>";
                    }
                    ?>
                    <li><a href="edit-profile.php" class="menu">Edit Profile</a></li>
                    <li><a href="" data-toggle="modal" data-target="#basicModal" class="menu">Change Password?</a></li>
                    <li><a href="php/logout.php" class="menu">Logout</a></li>

                </ul>
            </div>

        </div>
        </div>

    <div class="modal fade" id="basicModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header" style="background-color:#FF9F85;">
                    <h4 class="modal-title head1" id="myModalLabel">Change Password</h4>
                </div>
                <div class="modal-body" style="background-color:#eeeeee;">
                    <form class="form-horizontal" method="post" name =  "changePass" action = "<?php echo htmlspecialchars('php/changePassword.php');?>" id = "changePass">
                        <fieldset>


                            <!-- Password input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label in3" for="curpass">Current Password</label>
                                <div class="col-md-5">
                                    <input id="curpass" name="curpass" type="password" placeholder="Current Password" class="form-control input-md" data-bv-notempty="true" data-bv-notempty-message="The password is required and cannot be empty" data-bv-stringlength="true" data-bv-stringlength-min="8" data-bv-stringlength-message="The password must have at least 8 characters">

                                </div>
                            </div>

                            <!-- Password input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label in3" for="newpass">New Password</label>
                                <div class="col-md-5">
                                    <input id="newpass" name="newpass" type="password" placeholder="New Password" class="form-control input-md" data-bv-notempty="true" data-bv-notempty-message="The password is required and cannot be empty" data-bv-stringlength="true" data-bv-stringlength-min="8" data-bv-stringlength-message="The password must have at least 8 characters"
                                           data-bv-different="true"
                                           data-bv-different-field="curpass"
                                           data-bv-different-message="The old and new password cannot be the same" >
                                </div>
                            </div>

                            <!-- Password input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label in3" for="connewpass">Confirm New Password</label>
                                <div class="col-md-5">
                                    <input id="connewpass" name="connewpass" type="password" placeholder="Confirm New Password" class="form-control input-md"
                                           data-bv-notempty="true" data-bv-notempty-message="The confirm password is required and cannot be empty"
                                           data-bv-identical="true" data-bv-identical-field="newpass" data-bv-identical-message="Passwords do not match"
                                           data-bv-different="true" data-bv-different-field="curpass" data-bv-different-message="The old and password cannot be the same" >
                                </div>
                            </div>

                        </fieldset>


                </div>
                <div class="modal-footer" style="background-color:#eeeeee;" >
                    <a href="#" style="position:relative; float:left; color:#558188">Forgot password?</a>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" name = "submit" class="btn btn-success" action = "<?php echo htmlspecialchars('php/changePassword.php');?>" id = "submit">Save changes</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    </div>
  

    <div class="modal fade" id="calenderModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
    <div class="modal-dialog modal-lg" >
        <div class="modal-content">
            <div class="modal-header" style="background-color:#FF9F85;">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove"></span></button>
            <h4 class="modal-title head1" id="myModalLabel" >Calender View</h4>
            </div>
            <div class="modal-body" style="background-color:#eeeeee;">
                
          <div id='calendar'></div>
            </div>
          
    </div>
    </div>
  </div>


    <div class="row">

<div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1 vcentre">

    <br/>
        <div class="col-lg-offset-3 col-md-offset-3 head1"><h3>New student registrations</h3></div>

</div>
</div>

<br/>
<br/>
        <div class="row">

            <div id="body-content">
            <div class="a col-xs-10 col-sm-6 col-xs-offset-1 col-sm-offset-2 col-lg-offset-1 col-md-offset-1 col-md-4 col-lg-4 ">
<form class="form-horizontal"  name ="register-thro-excel" enctype="multipart/form-data" method ="post" id ="register-thro-excel" action = "<?php echo htmlspecialchars('php/register-thro-excel.php');?>">
<fieldset>

<!-- Form Name -->
<legend class="head1">Register through excel</legend>

<!-- File Button --> 
<div class="form-group">
  <label class="col-md-4 in1 control-label" for="file">Excel upload</label>
  <div class="col-md-4">
    <input id="file" name="file" class="input-file in4" type="file" required>
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="submit"></label>
  <div class="col-md-4">
    <button id="submit" name="submit" class="btn btn-success">Submit</button>
  </div>
</div>

</fieldset>
</form>
</div>
</div>



            <div id="body-content">
            <div class="a col-xs-10 col-sm-6 col-xs-offset-1 col-sm-offset-2 col-lg-offset-1 col-md-offset-1 col-md-4 col-lg-4 ">
<form class="form-horizontal" name ="register-thro-form" enctype="multipart/form-data" method ="post" id ="register-thro-form" action = "<?php echo htmlspecialchars('php/register-thro-form.php');?>">
<fieldset>

<!-- Form Name -->
<legend class="head1">Register through single entry</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 in1 control-label" for="name">Name</label>  
  <div class="col-md-6">
  <input id="name" name="name" type="text" placeholder="Name" class="form-control in4 input-md" data-bv-notempty="true" data-bv-notempty-message=" Enter Student Name" >
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 in1 control-label" for="usn">USN</label>  
  <div class="col-md-6">
  <input id="usn" name="usn" type="text" placeholder="USN" class="form-control in4 input-md" data-bv-notempty="true" data-bv-notempty-message="Enter valid USN"

         data-bv-regexp="true"
         data-bv-regexp-regexp="^1RV[0-9]{2}[A-Z]{2}[0-9]{3)$"
         data-bv-regexp-message="Enter Valid USN" >
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 in1 control-label" for="email">Email id</label>  
  <div class="col-md-6">
  <input id="email" name="email" type="text" placeholder="Email id" class="in4 form-control input-md">
    
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 in1 control-label" for="submit2"></label>
  <div class="col-md-4">
    <button id="submit2" name="submit2" class="btn btn-success">Submit</button>
  </div>
</div>

</fieldset>
</form>
</div>
</div>
</div>




    <script type="text/javascript" src="./jquery1/jquery-1.8.3.min.js" charset="UTF-8"></script>

<!-- jQuery Version 1.11.0 
<script src="js/jquery-1.11.0.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#changePass').bootstrapValidator({feedbackIcons: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            }});

        });
    </script>
    <script src="../js/bootstrapValidator.min.js"></script>
</body>

</html>
