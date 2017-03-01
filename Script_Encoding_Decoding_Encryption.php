<html> 
   <head> 
     <link href="http://fonts.googleapis.com/css?family=Orbitron:700" rel="stylesheet" type="text/css">
     <link rel="shortcut icon" href="http://store3.up-00.com/dl/8333a/1419210803_322435.ico" />   
    <title>.:Script Encoding Decoding Encryption:.</title>  
	<style>
BODY {
font-size: 10px;
font-family: Verdana;
background-color: #000000;
background-image: url('http://store2.up-00.com/2014-12/1419172314371.gif');
color: #8e8c8b;
}
a:hover {
	color: #ffffff;
}
a {
	color:#00FF66;
	font-size: 15px;
	text-decoration :none;
	}
	input {
BORDER-RIGHT: #B5FF00 1px solid;
BORDER-TOP: #3E9900 1px solid;
BORDER-LEFT: #4A9900 1px solid;
BORDER-BOTTOM: #049900 1px solid;
BACKGROUND-COLOR: #181818;
margin-top:10px;
font: 9pt tahoma;
color: #ffffff;
}
textarea {
BORDER-RIGHT: #B5FF00 1px solid;
BORDER-TOP: #3E9900 1px solid;
BORDER-LEFT: #4A9900 1px solid;
BORDER-BOTTOM: #049900 1px solid;
BACKGROUND-COLOR: #181818;
margin-top:10px;
font: 9pt tahoma;
color: #ffffff;
}
h1 {  text-shadow: 0px 0px 3px  }
h2 {  text-shadow: 0px 0px 3px  }
.title {
font-family:Orbitron;
color:#00FF66;
}

	</style>
	  </head>
     <body>
	 <center>
	 <h1 class="title"> Script Encoding Decoding & Encryption </h1>
	 <h2 class="title">Greetz : AlAnSary HaCkeR ||| Ly.Ghost </h2>
	 <h2 class="title">Coded By Mr.Moneer </h2>
	 <ul>
	 <a href="?en64=2">[ Encode base64 ]</a>
	 <a href="?de64=1">[ Decode base64 ]</a>
	 <a href="?urlencode2=1">[ URL Encode ]</a>
	 <a href="?urldecode2=1">[ URL Decode ] </a>
	 <a href="?md52=1">[ MD5 ] </a>
	 <a href="?ensha1=1">[ SHA1 ] </a>
	 <a href="?crypt1=1">[ Crypt ]</a>
	 <a href="http://hashkiller.co.uk/md5-decrypter.aspx" target="_blank">[ MD5 cracker ] </a>
	 <a href="http://hashkiller.co.uk/sha1-decrypter.aspx" target="_blank">[ SHA1 cracker ] </a>
	 <a href="?about=me">[ About Me ]</a>
	 </ul>
	 <br />
<?php
error_reporting(0);
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
//about
$about = $_GET['about'];
if($about == "me"){
echo "<span><a href='https://www.facebook.com/moneer.massoud'target='_blank'><img src='http://store2.up-00.com/2014-12/1419253813161.png' title='facebook' style='width: 105px; height: 80px;' /><a/> </span>";
echo "<br/>";
echo "<span><a href='https://www.youtube.com/user/moneermasoud' target='_blank'><img src='http://store2.up-00.com/2014-12/1419253813242.png' title='youtube' style='width: 72px; height: 75px; margin:15px;'  /><a/> </span>";
}
?>
</center>
  </body>
</html>