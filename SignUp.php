 session_save_path("/home/users/web/b1652/nf.nezar1/cgi-bin/tmp");
 session_start(); ?>

<html>
<head>
	<title> Sign Up - Response </title>
</head>
<body>
	<?php
    if (!isset($_SESSION['man']))
        {
		echo "<h3> You are not currently signed in.Or ou are Not a Manager </h3>";
        echo "<h1>Go Out.... </h1>";

        ?>
         <script	type = "text/javascript" language = "JavaScript">
 		window.setTimeout("location.href='index.html'", 3000);
 	</script>
      <?exit(0);}else{      ?>

 	<script type = "text/javascript"
				language = "JavaScript">

			//================================================================
			// f_check
			//================================================================
			function f_check () {
  				var n;
                //
  				// check firstrname
  				//
  				n = document.frm.itFirstName.value;
  				if (n.length < 3 || n.length > 30) {
			    	alert ("Your Name have to be between 3 & 30 character");
			    	document.frm.itFirstName.focus();
			    	return false;
			    }

				//
  				// check lastname
  				//
  				n = document.frm.itLastName.value;
  				if (n.length < 3 || n.length > 30) {
			    	alert ("Your  lastName have to be between 3 & 30 character")
					document.frm.itLastName.value="";
					document.frm.itLastName.focus();
			    	return false;
			    }

  				//
  				// check username
  				//
  				n = document.frm.itUserName.value;
  				if (n.length < 5 || n.length > 20) {
			    	alert ("Invalid User Name, the user name have to be between 5 & 20 character")
					document.frm.itUserName.value="";
					document.frm.itUserName.focus();
			    	return false;
			    }

			    //
  				// check password
  				//
  				n = document.frm.itPassword.value;
  				if (n.length < 5 || n.length > 20) {
			    	alert ("Invalid Password ,your password have to be between 5 & 20 character");
			    	document.frm.itPassword.value = "";
			    	document.frm.itPassword.focus()
			    	return false;
			    }

				//
  				// check passwordConfermation
  				//
				var v =document.frm.itConfirmPassword.value;
				var n =document.frm.itPassword.value
				if(v!=n) {
				   alert("ur password cofirmation have to be same as password")
				   document.frm.itConfirmPassword.value = "";

			       document.frm.itConfirmPassword.focus();




				  return false;
                }




   				//
   				// all OK
   				//

                 return true;

			} // end function f_check



			//================================================================
			// f_clear
			//================================================================
			function f_clear() {
     			document.frm.itFirstName.focus();
    		} // end function f_clear




		</script>
	</head>

    <body  onload="f_clear()">
    <h3 align="right"><a href="index.html"
	                     style="font-weight: bolder">Home</a></h3>

	 <center><form name = "frm"
		           method = "post"
		           action="SignUp.php"
		             >

	    	 <table border = "10"  bgcolor="yellow">

		       <tr> <td        align = "Left">
		        <b>First Name: </b> </td>
		       <td>*<input	 type = "text"
							   	                 name = "itFirstName"
				            	                 maxlength = "20"
    			   	                             size = "15"
    			   	                             style="
    			   	                                    font-weight: bolder;
		                                                font-size:10pt" /> </td> </tr>

		       <tr> <td        align = "Left"
		                                        > <b>Last Name: </b> </td>
		       <td>*<input	 type = "text"
							                     name = "itLastName"
					                             maxlength = "20"
				                                 size = "15"
				                                 style="
    			   	                                    font-weight: bolder;
		                                                font-size:10pt"  /> </td> </tr>

		       <tr> <td        align = "Left"
		                                          > <b>BirthDate(yyyy-mm-dd)</b> </td>
		       <td >*<input	                     type = "DATE"
							                     name = "itBirthDate" /></td> </tr>

		       <tr> <td        align = "Left"
		                                          > <b>Gender </b> </td>
		       <td>* Male<input type = "radio"
							                      value ="itsex"
	                                              name= "radio_sex"
    			                                  checked="checked"/>
                                   Female <input type = "radio"
				                                 value ="itsex"
								                 name= "radio_sex"/> </td></tr>

		       <tr> <td        align = "Left"
		                                        > <b> Email: </b> </td>
		       <td ><input	                     type = "text"
							                     name = "Email" /></td> </tr>

		      <tr><td      align = "Left"
		                                      ><b>Adress</b></td>
		      <td><textarea rows="3"
				                              cols="10"
				                              name="itAdress"
				                              style="color:336600;
    			   	                                 font-weight: bolder;
		                                             font-size:10pt" ></textarea></tr></td>




		       <tr><td align = "Left"
		                                 > <b> User Name: </b> </td>
		                            <td >*<input type = "text"
							                                      name = "itUserName"
							                                      maxlength = "20"
							                                      size = "15"
							                                      style="
    			   	                                                     font-weight: bolder;
		                                                                 font-size:10pt"  /> </td> </tr>

		       <tr><th align = "Left"
		                              > User Password: </th>
			                        <td>* <input type = "password"
						                                           name = "itPassword"
						                                           maxlength = "20"
							                                       size = "15"
							                                       style="
    			   	                                                      font-weight: bolder;
		                                                                  font-size:10pt"  /> </td> </tr>

		       <tr><th align = "Left"
		                                 > Confirm Password: </th>
			                        <td>*<input type = "password"
						                                          name = "itConfirmPassword"
						                                          style="
    			   	                                                     font-weight: bolder;
		                                                                 font-size:10pt"  /> </td> </tr>
		   <td>Select ur Secret Question</td>
<td><select size="1" name="question">
  <option value="0">Choose Your Question</option>
  <option value="1">Whats Your horescope</option>
  <option value="2">Whats Your Favo animal</option>
  <option value="3">Whats Your Kind of music</option>
  <option value="4">Whats Your Hobby</option>
</select>
 </td>
 </tr>
 <tr><td>Answer </td>
     <td><input type='text' name='answer'></td>


		      <tr><td>Major Code</td><td><select name="M_code" size="1" >
                                           <option value="NFA000">Informatic</option>
                                           <option value="NFA001">Gestion</option>

                                            </select>
</td>


		       <tr><td><input type = "submit"
							  value = "Create a new acount"
							  onclick = "return f_check()">


		                                                            </td>

			   <td> <input type = "reset"
						                     value = "Clear All Entries"
						                     onclick = "f_clear()"
						                     style="
    			   	                                font-weight: bolder;
		                                            font-size:10pt" > </td> </tr>
	    	  </table>
		</form>
      <?php

          }

	extract ($_POST);


include_once "MySQLConnection.php";
 if (!mysql_select_db ("nezarcadb", $dbConnection))
            {
                  echo( "<big> You failed  selectBase $itLastName! </i> <br /></big>");
                    die (mysql_error ()); }

        if (mysql_select_db ("nezarcadb", $dbConnection))

	   {

	   	 $sqlQuery = "INSERT INTO person(UserFirstName,UserLastName,UserDOB,UserEmail,UserName,Password)
			 	 				VALUES('$itFirstName','$itLastName','$itBirthDate','$Email','$itUserName','$itPassword')";

            	$resultSet = mysql_query ($sqlQuery, $dbConnection);

              $resultSetn = mysql_query ("SELECT LAST_INSERT_ID()", $dbConnection);
               	$Id = mysql_result($resultSet, 0);
        }
   else if(!$resultSet)
                 {
                  echo( "<big> You failed  Open DataBase $itLastName! </i> <br /></big>");
                    die (mysql_error ());
                    }

             else if(!$resultSet)
                 {
                  echo( "<big> You failed  STUDENT<i> $itFirstName $itLastName! </i> <br /></big>");
                    die (mysql_error ());
				 }
                 else{echo( "<big> You Succeeded<i> $itFirstName $itLastName! </i> <br /></big>
                             <br> The Id Is : ");
                             echo "<h3> The Account you made <i>
			[Reservation ID = $reservationId] </i> has been done successfully.</h3>";
                             }









 	    mysql_close ($dbConnection);

 	   ?>

		</body>
</html>
