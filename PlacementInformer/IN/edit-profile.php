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
<html lang="en">

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
    <link href="../css/bootstrapValidator.css" rel="stylesheet" />
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


    <link href="css/edit-profile-css/main.css" rel="stylesheet" />

    <?php
    require_once('php/dbconnector.php');
    session_start();
    $uname =  $_SESSION['userNameT'];

    ?>
    <link rel="stylesheet" href="css/amaran.min.css">
    <script src="js/jquery.amaran.min.js"></script>



<?php
if ((isset($_SESSION['edit_profile'])))
{

  $edit_profile=$_SESSION['edit_profile'];
  if($edit_profile==1)
  {
    echo"<script>";
    echo'$(document).ready(function() {';
    echo'$(function(){';
    echo'$.amaran({content:{bgcolor:"#27ae60", color:"#fff","message":"Profile edit sucess"}, theme:"colorful", delay:7000 });';
    echo'});';
    echo'});';
    echo "</script>";
  }else{
    echo "inside";
    echo"<script>";
    echo'$(document).ready(function() {';
    echo'$(function(){';
    echo'$.amaran({content:{{bgcolor:"#ff3333", color:"#fff","message":"Profile Edit Failed. Try again!"}, theme:"colorful", delay:7000});';
    echo'});';
    echo'});';
    echo "</script>";
  }
  unset($_SESSION['edit_profile']);


}

?>



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
                        echo "<li><a href=\"studentHome.php\" class=\"menu\">Home</a></li>";
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
                                    <input id="curpass" name="curpass" type="password" placeholder="Current Password" class="form-control input-md">
                                </div>
                            </div>

                            <!-- Password input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label in3" for="newpass">New Password</label>
                                <div class="col-md-5">
                                    <input id="newpass" name="newpass" type="password" placeholder="New Password" class="form-control input-md">
                                </div>
                            </div>

                            <!-- Password input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label in3" for="connewpass">Confirm New Password</label>
                                <div class="col-md-5">
                                    <input id="connewpass" name="connewpass" type="password" placeholder="Confirm New Password" class="form-control input-md">
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









<div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1 vcentre">



<form class="form-horizontal" name = "edit-profile" method = "post"  id = "edit-profile" action = "php/edit-profile-insert.php">
<fieldset>
<!-- Form Name -->
<legend class="head1">Profile</legend>

<!-- Text input-->

    <div class="form-group">
        <label class="col-md-4 in1 control-label" for="usn">USN</label>
        <div class="col-md-5">
            <?php
            $result = mysqli_query($con,"SELECT usn FROM student where USN = '$uname';");
            while($db_field=mysqli_fetch_assoc($result))
            {
                echo "<input id=\"usn\" name=\"usn\" type=\"text\"  value = " . $db_field['usn']  . "  class=\"form-control input-md in4\" readonly>";
            }

            ?>
        </div>
    </div>

<div class="form-group">
  <label class="col-md-4  in1 control-label" for="name">Name</label>  
  <div class="col-md-5">
      <?php
      $result = mysqli_query($con,"SELECT name FROM student where USN = '$uname';");
      while($db_field=mysqli_fetch_assoc($result)) {
          echo "<input id=\"name\" name=\"name\" type=\"text\" value = " . $db_field['name'] . " class=\"form-control input-md in4\" data-bv-notempty=\"true\" data-bv-notempty-message=\"What's your Name?\">";
      }
    ?>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4  in1 control-label" for="email">Email id</label>  
  <div class="col-md-5">
      <?php
      $result = mysqli_query($con,"SELECT email FROM student where USN = '$uname';");
      while($db_field=mysqli_fetch_assoc($result))
      {
          echo "<input id=\"email\" name=\"email\" type=\"email\" value = " . $db_field['email'] . " class=\"form-control input-md in4\" data-bv-notempty=\"true\" data-bv-notempty-message=\"What's your Email ID?\" data-bv-emailaddress-message=\"The input is not a valid email address\">";
      }
      ?>
  </div>
</div>

    <div class="form-group">
        <label class="col-md-4  in1 control-label" for="branch">Branch</label>
        <div class="col-md-5">
            <?php
            $result = mysqli_query($con,"SELECT branch FROM student where USN = '$uname';");
            while($db_field=mysqli_fetch_assoc($result))
            {
                echo "<input id=\"branch\" name=\"branch\" type=\"text\" value = ". $db_field['branch'] . " class=\"form-control input-md in4\" data-bv-notempty=\"true\" data-bv-notempty-message=\"What's your Branch?\">";
            }
            ?>
        </div>
    </div>


<div class="form-group">
  <label class="col-md-4  in1 control-label" for="phone">Phone No</label>  
  <div class="col-md-5">
      <?php
      $result = mysqli_query($con,"SELECT phone FROM student where USN = '$uname';");
      while($db_field=mysqli_fetch_assoc($result))
      {
          echo "<input id=\"phone\" name=\"phone\" type=\"text\" value = " . $db_field['phone'] . " class=\"form-control input-md in4\" data-bv-notempty=\"true\" data-bv-notempty-message=\"What's your Phone number?\" data-bv-phone=\"true\" data-bv-phone-country=\"US\" data-bv-phone-message=\"Enter valid phone number\">";
      }
      ?>

    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4  in1 control-label" for="tenth">10th %</label>  
  <div class="col-md-3">
      <?php
      $result = mysqli_query($con,"SELECT tenthPercent FROM student where USN = '$uname';");
      while($db_field=mysqli_fetch_assoc($result))
      {
          echo "<input id=\"tenth\" name=\"tenth\" type=\"text\" value = ". $db_field['tenthPercent'] . " class=\"form-control input-md in4\"

                 data-bv-greaterthan=\"true\"
                  data-bv-greaterthan-value=\"0\"
                  data-bv-lessthan=\"true\"
                  data-bv-lessthan-value=\"100\" data-bv-notempty=\"true\" data-bv-notempty-message=\"Field cannot be empty\">";
      }
      ?>
    
  </div>
</div>

<div class="form-group">

    <label class="col-md-4 in1 control-label" for="radiocheck">Select an option</label>
    <div class="col-md-5">
        <label class="radio-inline">
        <input type="radio" id="pucrb" name="pucdip" value="1" onclick="hidedata();">12th Standard</label>
        <label class="radio-inline"><input type="radio" id="diprb" name="pucdip" value="2" onclick="hidedata();">Diploma</label>
    </div>
</div>
<!-- Text input-->
<div class="form-group" id="t1">
  <label class="col-md-4  in1 control-label" for="twelfth">12th % (N/A)</label>  
  <div class="col-md-3">
      <?php
      $result = mysqli_query($con,"SELECT twelthPercent FROM student where USN = '$uname';");
      while($db_field=mysqli_fetch_assoc($result))
      {
          echo "<input id=\"twelfth\" name=\"twelfth\" type=\"text\" value = ". $db_field['twelthPercent'] . " class=\"form-control input-md in4\"
                  data-bv-greaterthan=\"true\"
                  data-bv-greaterthan-value=\"0\"
                  data-bv-lessthan=\"true\"
                  data-bv-lessthan-value=\"100\" data-bv-notempty=\"true\" data-bv-notempty-message=\"Field cannot be empty\">";
      }
      ?>

    
  </div>
</div>

<!-- Text input-->
<div class="form-group" id ="t2">
  <label class="col-md-4  in1 control-label" for="diploma">Diploma % (N/A)</label>  
  <div class="col-md-3">
      <?php
      $result = mysqli_query($con,"SELECT diplomapercent FROM student where USN = '$uname';");
      while($db_field=mysqli_fetch_assoc($result))
      {
          echo "<input id=\"diploma\" name=\"diploma\" type=\"text\" value = ". $db_field['diplomapercent'] . " class=\"form-control input-md in4\"
                  data-bv-greaterthan=\"true\"
                  data-bv-greaterthan-value=\"0\"
                  data-bv-lessthan=\"true\"
                  data-bv-lessthan-value=\"100\" data-bv-notempty=\"true\" data-bv-notempty-message=\"Field cannot be empty\">";
      }
      ?>

    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 in1  control-label" for="cgpa">CGPA</label>  
  <div class="col-md-3">
      <?php
      $result = mysqli_query($con,"SELECT cgpa FROM student where USN = '$uname';");
      while($db_field=mysqli_fetch_assoc($result))
      {
          echo "<input id=\"cgpa\" name=\"cgpa\" type=\"text\" value = ". $db_field['cgpa'] . " class=\"form-control input-md in4\"

                  data-bv-greaterthan=\"true\"
                  data-bv-greaterthan-value=\"0\"
                  data-bv-lessthan=\"true\"
                  data-bv-lessthan-value=\"10\" data-bv-notempty=\"true\" data-bv-notempty-message=\"Field cannot be empty\">";;
      }
      ?>

    
  </div>
</div>

<!-- Password input-->

<!-- Button -->
<div class="form-group">
  <label class="col-md-4  in1 control-label" for="submit"></label>
  <div class="col-md-4">
    <input type="submit"  class="btn btn-success" value="submit" />
  </div>
</div>

</fieldset>
</form>

</div>









    <!-- jQuery Version 1.11.0 
    <script src="js/jquery-1.11.0.js"></script>-->
    <script type="text/javascript" src="./jquery1/jquery-1.8.3.min.js" charset="UTF-8"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <script src="../js/bootstrapValidator.min.js"></script>
    <script>

        $(document).ready(function() {
            $('#edit-profile').bootstrapValidator({
                container: 'tooltip',
            feedbackIcons: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            }});
        });

        var dipval= 0,pucval=0;
        pucval=$('#twelfth').val();
        dipval=$('#diploma').val();
        function hidedata() {

            var selected = $("input[name=pucdip]:checked").val();

            if(selected==1)
            {
                $('#diploma').val(100);
                $('#t2').hide();
                $('#twelfth').val(pucval);
                $('#t1').show();
            }
            else if(selected==2)
            {
                $('#twelfth').val(100);
                $('#t1').hide();
                $('#diploma').val(dipval);
                $('#t2').show();
            }
        }
    </script>
</body>

</html>
