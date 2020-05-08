<html>
<head>
	<title> SignIn  </title>
</head>
<body bgcolor="0099FF">



<?php
    extract($_POST);



	include_once "MySQLConnection.php";

	$sqlQuery1 = "SELECT  Pid,FirstName,LastName,DOB,Gender,UserName,Password
	             FROM person
	             WHERE UserName= '$itUserName' AND
	                   Password= '$itPassword'";
     $resultSet = mysql_query ($sqlQuery1, $dbConnection);


	if (mysql_num_rows($resultSet) == 1)

             {
   	$_SESSION['ID'] = mysql_result($resultSet, 0, 'Pid');
   	$_SESSION['username'] = mysql_result($resultSet, 0, 'UserName');
	$_SESSION['firstName'] = mysql_result($resultSet, 0, 'FirstName');
 	$_SESSION['lastName'] = mysql_result($resultSet, 0, 'LastName');
     $sqlsRole = "SELECT  e.Pid, p.Pid, p.UserName
                 FROM employee e, person p
                 WHERE e.PID= p.PID AND
                 p.UserName='$itUserName'";
      $resultSetE = mysql_query ($sqlsRole, $dbConnection);

      $sqltRole = "SELECT  d.PID, p.PID, p.UserName
                 FROM directors d, person p
                 WHERE d.PID= p.PID AND
                 p.UserName='$itUserName'";
      $resultSetD = mysql_query ($sqltRole, $dbConnection);

      $sqlstRole = "SELECT  c.PID, p.PID, p.USERNAME
                 FROM client c, person p
                 WHERE c.PID= p.PID AND
                 p.UserName='$itUserName'";
      $resultSetc = mysql_query ($sqlstRole, $dbConnection);

      $sqlstRoles = "SELECT  s.PID, p.PID, p.USERNAME
                 FROM shareholders s, person p
                 WHERE s.PID= p.PID AND
                 p.UserName='$itUserName'";
      $resultSetst = mysql_query ($sqlstRole, $dbConnection);



      if(mysql_num_rows($resultSetE) == 1)
       {
       	$_SESSION['Role']='Employee';
       	$_SESSION['emp']='Employee';
       print("<br>");print("<br>");print("<br>");print("<br>");print("<br>");
       echo (" <big><b>Wait  ...........</b></big>");
       	echo("<h3> Welcome  Employee<i> " . $_SESSION['firstName'] . " " .
			 $_SESSION['lastName'] . "!</i> </h3>");

	echo("<h4> You will be redirected to Your Web page. </h4>");
      ?>
      <script	type = "text/javascript" language = "JavaScript">
 		window.setTimeout("location.href='Employee.html'", 3000);
 	</script>
 	<?php

        }else  if($resultSetc)
                 {

                 	$_SESSION['Role']='client';
                 	$_SESSION['clt']='client';
                  print("<br>");print("<br>");print("<br>");print("<br>");print("<br>");
                  echo (" <big><b>Wait  ...........</b></big>");
       	echo("<h3> Welcome  Client<i> " . $_SESSION['firstName'] . " " .
			 $_SESSION['lastName'] . "!</i> </h3>");

	echo("<h4> You will be redirected to Your Web page. </h4>");
      ?>
      <script	type = "text/javascript" language = "JavaScript">
 		window.setTimeout("location.href='Client.php'", 3000);
 	</script>
 	<?php

     } else  if($resultSetD)
                {
                $_SESSION['Role']='Director';
                 $_SESSION['man']='Director';
                 print("<br>");print("<br>");print("<br>");print("<br>");print("<br>");
                echo (" <big><b>Wait  ...........</b></big>");
       	echo("<h3> Welcome  Director<i> " . $_SESSION['firstName'] . " " .
			 $_SESSION['lastName'] . "!</i> </h3>");

	echo("<h4> You will be redirected to Your Web page. </h4>");
      ?>
      <script	type = "text/javascript" language = "JavaScript">
 		window.setTimeout("location.href='Director.php'", 3000);
 	</script>
 	<?php
              }
                else    if( $resultSetst)
                {
                $_SESSION['Role']='shareholder';
                 $_SESSION['shr']='shareholder';
                 print("<br>");print("<br>");print("<br>");print("<br>");print("<br>");
                echo (" <big><b>Wait  ...........</b></big>");
       	echo("<h3> Welcome  shareholder<i> " . $_SESSION['firstName'] . " " .
			 $_SESSION['lastName'] . "!</i> </h3>");

	echo("<h4> You will be redirected to Your Web page. </h4>");
      ?>
      <script	type = "text/javascript" language = "JavaScript">
 		window.setTimeout("location.href='shareholder.php'", 1000);
 	</script>
 	<?php
     }


          }



     else
      If($itUserName='Guest'and $itPassword='Guest')
          {
          	$_SESSION['Role']='Guest';
             print("<br>");print("<br>");print("<br>");print("<br>");print("<br>");
       echo (" <big><b>Wait  ...........</b></big>");
       	echo("<h3> Welcome  Guest<i> " . "!</i> </h3>");

	echo("<h4> You will be redirected to Your Web page. </h4>");
      ?> <script	type = "text/javascript" language = "JavaScript">
 		window.setTimeout("location.href='req.html'", 3000);
 	</script>
 	<?php
 	    unset($_SESSION);

          }else{  echo(mysql_error ());
                 echo(" There Was An ERROR in The Data Please Try again....");
                  ?>
      <script	type = "text/javascript" language = "JavaScript">
 		window.setTimeout("location.href='SignIn.html'", 3000);
 	</script>
 	<?php
 	}



	mysql_close ($dbConnection);
	?>


</body>
</html>
