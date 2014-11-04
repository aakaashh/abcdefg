<?php
error_reporting(0);

session_start();
if ((!isset($_SESSION['username']))||(!isset($_SESSION['password'])))
{
    header('Location: ../');
}
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

<!-- 		// // $(function(){
  //   		// $.amaran({content:{'message':'My first example!'}});
		// });
 -->

<?php
if ((isset($_SESSION['insert'])))
{
	$insert=$_SESSION['insert'];
	if($insert=1)
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
	unset($_SESSION['insert']);


}

?>

 	<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">

		<title>Placement Informer</title>
		<link rel="SHORTCUT ICON" href="images/rvce.ico">
		<!-- Bootstrap Core CSS -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/simple-sidebar.css" rel="stylesheet">


        <!-- Custom CSS -->
		
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
		 <!--[if IE]>
			<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
			<![endif]-->
		<link href="assets/css/bootstrap.css" rel="stylesheet" />
		<!-- FONTAWESOME STYLE CSS -->
		<link href="assets/css/font-awesome.min.css" rel="stylesheet" />
		<!-- CUSTOM STYLE CSS -->
		<link href="assets/css/style.css" rel="stylesheet" />    
		<!-- GOOGLE FONT--> 
		<style>
            @font-face {
                font-family: 'Open Sans';
                font-style: normal;
                font-weight: 400;
                src: local('Open Sans'), local('OpenSans'), url(fonts/cJZKeOuBrn4kERxqtaUH3T8E0i7KZn-EPnyo3HZu7kw.woff) format('woff');
            }

        </style>
		<link href="gener/genericons.css" rel="stylesheet">
		<link href="css/home-pc-css/main.css" rel="stylesheet" /> 
		<!--   <link href="./bootstrap1/css/bootstrap.min.css" rel="stylesheet" media="screen">
		<link href="./css1/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
		-->
		  <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

<!--		<link href="./bootstrap1/css/bootstrap.min.css" rel="stylesheet" media="screen">
-->		<link href="./css1/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">

		<link rel="stylesheet" href="css/amaran.min.css">
		<script src="js/jquery.amaran.min.js"></script>

	</head>

	<body>

		

<!--<div id="wrapper" class="toggled">
	

        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    DETAILS
                </li>
                <li>
                    Name
                </li>
                <li>
                    Department -
                </li>
                <li>
                    <a href="#">Update?</a>
                </li>
                
            </ul>
        </div>
-->
        <!-- /#sidebar-wrapper 
		<div id="page-content-wrapper">-->
        
		<div class="navbar navbar-inverse" id="head-nav">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button> 
		<!--	<a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Profile</a>	-->
           <a class="navbar-brand" href="#"><img src="images/rvce.jpg" class="img-circle img-responsive" class="img-responsive" id="logo"></a>
		
            </div>
           <?php


            $uname = $_SESSION['usernameT'];
            $host="localhost"; // Host name or server name
            $username="root"; // Mysql username
            $password=""; // Mysql password
            $db_name="placementinformer"; // Database name
            $tbl_name="student"; // Table name
            $con = mysqli_connect("$host", "$username", "$password","$db_name");
            if (mysqli_connect_errno()) {
                echo "Failed to connect to MySQL: " . mysqli_connect_error();
            }

            ?>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                	<li><a href="" class="menu" data-toggle="modal" data-target="#calenderModal" >Calender View</a></li>
                    
                    <?php
                    $host="localhost"; // Host name or server name
                    $username="root"; // Mysql username
                    $password=""; // Mysql password
                    $db_name="placementinformer"; // Database name
                    $tbl_name="student"; // Table name
                    $con = mysqli_connect("$host", "$username", "$password","$db_name");
                    if (mysqli_connect_errno()) {
                        echo "Failed to connect to MySQL: " . mysqli_connect_error();
                    }
                    session_start();
                    $uname =  $_SESSION['userNameT'];
                    $result = mysqli_query($con,"SELECT * FROM SPC where USN = '$uname';");
                    if(mysqli_num_rows($result)>0)
                    {
                        echo "<li><a href=\"studentHome.php\" class=\"menu\" >Student View</a></li>";
                        echo "<li><a href=\"register-new.php\" class=\"menu\" >Add students</a></li>";
                    }
                    ?>
                    <li><a href="edit-profile.php" class="menu">Edit Profile</a></li>
                    <li><a href="#" data-toggle="modal" data-target="#basicModal" class="menu">Change Password?</a></li>
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


		
		<div class="row">

			<div id="body-content">
			<div class="a col-xs-10 col-sm-6 col-xs-offset-1 col-sm-offset-2 col-lg-offset-0 col-md-offset-0 col-md-6 col-lg-6 col-lg-push-6 col-md-push-6">

				<form class="form-horizontal" name = "detailsUpcomingCompany" enctype="multipart/form-data" method = "post" id = "detailsUpcomingCompany" action = "<?php echo htmlspecialchars('php/home-pc-insert.php');?>">
					<fieldset>

						<!-- Form Name -->
						<legend class="head1">New Company </legend>

						<!-- Text input-->
						<div class="form-group">
						  <label class="col-md-4 control-label in4" for="cname">Company Name</label>
						  <div class="col-md-5">
						  <input id="cname" name="cname" type="text" placeholder="Company Name" class="in4 form-control input-md" required/>

						  </div>
						</div>

						<!-- Text input-->
						<div class="form-group">
						  <label class="col-md-4 in4 control-label" for="cdate">Date of Visit</label>
						  <div class="col-md-5">
						  <input id="cdate" name="cdate" type="date" placeholder="Date of Visit" class="in4 form-control input-md" required/>

						  </div>
						</div>

						<!-- Text input-->
						<div class="form-group">
						  <label class="col-md-4 in4 control-label" for="cjob">Job Profiles</label>
						  <div class="col-md-5">
						  <input id="cjob" name="cjob" type="text" placeholder="Job Profiles" class="in4 form-control input-md" required />

						  </div>
						</div>

						<!-- Text input-->
						<div class="form-group">
						  <label class="col-md-4 in4 control-label" for="cpackage">Package</label>
						  <div class="col-md-5">
						  <input id="cpackage" name="cpackage" type="text" placeholder="Package" class=" in4 form-control input-md" required />

						  </div>
						</div>

						<!-- Multiple Checkboxes -->
						<div class="form-group">
						  <label class="col-md-4 in4 control-label" for="cbranches[]">Branches Allowed</label>
						  <div class="col-md-4 in4">
						  <div class="checkbox">
							<label for="cbranches-0">
							  <input type="checkbox" name="cbranches[]" id="cbranches-0" value="ISE">
							  ISE
							</label>
							</div>
						  <div class="checkbox">
							<label for="cbranches-1" >
							  <input type="checkbox" name="cbranches[]" id="cbranches-1" value="CSE">
							  CSE
							</label>
							</div>
						  <div class="checkbox">
							<label for="cbranches-2">
							  <input type="checkbox" name="cbranches[]" id="cbranches-2" value="ECE">
							  ECE
							</label>
							</div>
						  <div class="checkbox">
							<label for="cbranches-3">
							  <input type="checkbox" name="cbranches[]" id="cbranches-3" value="TC">
							  TC
							</label>
							</div>
						  <div class="checkbox">
							<label for="cbranches-4">
							  <input type="checkbox" name="cbranches[]" id="cbranches-4" value="IT">
							  IT
							</label>
							</div>
						  <div class="checkbox">
							<label for="cbranches-5">
							  <input type="checkbox" name="cbranches[]" id="cbranches-5" value="EEE">
							  EEE
							</label>
							</div>
						  <div class="checkbox">
							<label for="cbranches-6">
							  <input type="checkbox" name="cbranches[]" id="cbranches-6" value="ME">
							  ME
							</label>
							</div>
						  <div class="checkbox">
							<label for="cbranches-7">
							  <input type="checkbox" name="cbranches[]" id="cbranches-7" value="BT">
							  BT
							</label>
							</div>
						  <div class="checkbox">
							<label for="cbranches-8">
							  <input type="checkbox" name="cbranches[]" id="cbranches-8" value="CH">
							  CH
							</label>
							</div>
						  <div class="checkbox">
							<label for="cbranches-9">
							  <input type="checkbox" name="cbranches[]" id="cbranches-9" value="CE">
							  CE
							</label>
							</div>
						  <div class="checkbox">
							<label for="cbranches-10">
							  <input type="checkbox" name="cbranches[]" id="cbranches-10" value="IEM">
							  IEM
							</label>
							</div>
						  </div>
						</div>

						<!-- Text input-->
						<div class="form-group">
						  <label class="col-md-4 in4 control-label" for="ccgpa">CGPA Cut Off</label>
						  <div class="col-md-5">
						  <input id="ccgpa" name="ccgpa" type="text" placeholder="CGPA Cut Off" class="in4 form-control input-md"  />

						  </div>
						</div>

						<!-- Text input-->
						<div class="form-group in4">
						  <label class="col-md-4 in4 control-label" for="ctenth">10th Cut Off</label>
						  <div class="col-md-5">
						  <input id="ctenth" name="ctenth" type="text" placeholder="10th Cut Off" class="in4 form-control input-md"  />

						  </div>
						</div>

						<!-- Text input-->
						<div class="form-group">
						  <label class="col-md-4 in4  control-label" for="ctwelth">12th Cut Off</label>
						  <div class="col-md-5">
						  <input id="ctwelth" name="ctwelth" type="text" placeholder="12th Cut Off" class="in4 form-control input-md"  />

						  </div>
						</div>
						
						<div class="form-group">
						  <label class="col-md-4 in4 control-label" for="cdiploma">Diploma Cut Off</label>
						  <div class="col-md-5">
						  <input id="cdiploma" name="cdiploma" type="text" placeholder="Diploma Cut Off" class="in4 form-control input-md"  />

						  </div>
						</div>
						<div>

						<div class="form-group">
							<label for="dtp_input1" class="col-md-4 control-label in4" for="cdeadline">Deadline</label>
							<div class="input-group date form_datetime col-md-5"  data-date-format="yyyy-mm-dd HH:ii:ss " data-link-field="dtp_input1">
								<input name="cdeadline" id = "cdeadline" class="form-control input-md in4" size="16" type="text" readonly>
								<span class="input-group-addon"><span class="glyphicon glyphicon-th"></span></span>
							</div>

						</div>



								</div>
						<!-- File Button -->
						<div class="form-group">
						  <label class="col-md-4 in4 control-label" for="userfile">Attachement1</label>
						  <div class="col-md-4">
							<input id="cattach1" name="userfile" class="in4  input-file" type="file">
						  </div>
						</div>

						<!-- File Button -->
						<div class="form-group">
						  <label class="col-md-4 in4 control-label" for="userfile2">Attachment2</label>
						  <div class="col-md-4">
							<input id="cattach1" name="userfile2" class="in4 input-file" type="file">
						  </div>
						</div>

						<!-- File Button -->
						<div class="form-group">
						  <label class="col-md-4 in4 control-label" for="userfile3">Attachment3</label>
						  <div class="col-md-4">
							<input id="cattach" name="userfile3" class="in4 input-file" type="file">
						  </div>
						</div>

						<!-- Button -->
						<div class="form-group">
						  <label class="col-md-4 control-label" for="submit"></label>
						  <div class="col-md-4">
							<button id="submit" type = "submit" name="submit" class="btn btn-success" action = "php/home-pc-insert.php">Submit</button>
						  </div>
						</div>


					</fieldset>
				</form>


		</div>
		</div>

		<div id="body-content1">
		<div class="b col-xs-12 col-sm-12 col-md-6 col-lg-6 col-lg-pull-6 col-md-pull-6">
		
			<legend class="head1">Download Registration Excel Sheet:</legend>
        <h4 class="panel-heading head1"><strong>Today</strong></h4>
        		<?php


            $uname = $_SESSION['usernameT'];
			$host="localhost"; // Host name or server name
			$username="root"; // Mysql username
			$password=""; // Mysql password
			$db_name="placementinformer"; // Database name
			$tbl_name="student"; // Table name
			$con = mysqli_connect("$host", "$username", "$password","$db_name");
			if (mysqli_connect_errno()) {
			  echo "Failed to connect to MySQL: " . mysqli_connect_error();
			}
		?>

          <?php

          $result = mysqli_query($con,"SELECT C.NAME, C.lastDateReg FROM COMPANY as C, DATEOFVISIT as D where C.NAME = D.NAME and D.DATE = curdate() ORDER BY D.DATE");
            if(mysqli_num_rows($result)==0)
            {
                echo "<div class=\"container-fluid col in1\" >";
                echo "No company today";
                echo "</div>";

            }
//          echo mysqli_num_rows($result);
          while ($db_field = mysqli_fetch_assoc($result)) {
              echo "<div class=\"container-fluid col \" >";
              echo "<div class=\"col-md-6 col-sm-12 col-lg-6 col-xs-12 each in1\">Company Name:";

              $companyName = $db_field['NAME'];
              echo "<span class='in2' style='margin-left:10px;'>" . $companyName . "</span>";
              echo "</div>";
              echo "<div class=\"col-md-6 col-sm-12 col-lg-6 col-xs-12 each in1\">To Be Sent Before:";
              echo "<span class='in2' style='margin-left:10px;'>" . $db_field['lastDateReg'] . "</span>";


              echo "</div>";
              echo "<div class=\"col-md-2 col-sm-12 col-lg-2 col-xs-12 col-md-push-10 col-lg-push-10 each1\"> <button type=\"button\" class=\"btn btn-success\">Download</button></div>";
              echo "</div>";
          }

          ?>
            <h4 class="panel-heading head1" ><strong>Upcoming Companies:</strong></h4>
            <?php
			$result = mysqli_query($con,"SELECT * FROM COMPANY as C, DATEOFVISIT as D where C.NAME = D.NAME and D.DATE > curdate() ORDER BY D.DATE");
			
			while($db_field=mysqli_fetch_assoc($result)) {
                echo "<div class=\"container-fluid col\" >";
                echo "<div class=\"col-md-6 col-sm-12 col-lg-6 col-xs-12 each in1\">Company Name:";

                $companyName = $db_field['NAME'];
                echo "<span class='in2' style='margin-left:10px;'>" . $companyName . "</span>";
                echo "</div>";
                echo "<div class=\"col-md-6 col-sm-12 col-lg-6 col-xs-12 each in1\">To Be Sent Before:";
                echo "<span class='in2' style='margin-left:10px;'>" . $db_field['lastDateReg'] . "</span>";

                echo "<form action='php/exporttoexcel.php' method = 'post' target='_blank'>";
                $s= "<input type='hidden' name='companyname' id = 'companyname' value='";
                $s.=$companyName."'";
                //echo $s;
                echo "</div>";
                echo "<div class=\"col-md-2 col-sm-12 col-lg-2 col-xs-12 col-md-push-10 col-lg-push-10 each1\"> <input type=\"submit\" class=\"btn btn-success\" value=\"Download\"></div>";
                echo "</div>";
                echo $s;
                echo "</form>";
            }?>

       		<!--</div>

<script type="text/javascript" src="./jquery1/jquery-1.8.3.min.js" charset="UTF-8"></script>-->
<!-- <script type="text/javascript" src="./bootstrap1/js/bootstrap.min.js"></script> -->
<script type="text/javascript" src="./js1/bootstrap-datetimepicker.js" charset="UTF-8"></script>
<script type="text/javascript" src="./js1/locales/bootstrap-datetimepicker.fr.js" charset="UTF-8"></script>
<script type="text/javascript">
    $('.form_datetime').datetimepicker({
        //language:  'fr',
        weekStart: 1,
        todayBtn:  1,
		autoclose: 1,
		todayHighlight: 1,
		startView: 2,
		forceParse: 0,
        showMeridian: 1,
		pickerPosition: 'bottom-left',
		startDate: '+0d'
    });

</script>
		
<!-- jQuery Version 1.11.0 
<script src="js/jquery-1.11.0.js"></script>

<! Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

</body>

</html>
