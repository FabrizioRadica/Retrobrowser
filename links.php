<?php
$_id=$_GET['id'];
include_once("ra_definitions.php"); 
include_once("ra_functions.php");
include_once("ra_dbconnections.php");
?>
<html>
<head>
<title>RetroAcademy - RetroBrowserVersion</title></head>
<body bgcolor="<?=$bgColor?>" link="red" vlink="red" >
<font face='Arial'>
<center>
<table width="<?=$tableWidth?>" cellpadding="10" cellspacing="0" border='0' bgcolor='<?=$tableColor?>' bordercolor='<?=$borderColor?>'><tbody>
<tr><td colspan='2' bgcolor='<?=$headerBackgroundColor?>' width='100%' vspace="10"><center><a href="retro.php"><img src="gfx/retroacademy.gif" border="0"></a></center></td></tr>
<tr><td colspan='2' bgcolor='<?=$headerBackgroundColor?>' width='100%' vspace="10"><font color="#ffffff"><font size="2"><a href="http://www.retroacademy.it/retro.php"><< Home Page</a></font></font></td></tr>

<tr><td>
<a href="http://www.aminet.net">Aminet</a>
</td></tr>

<tr><td>
<a href="http://www.amigapage.it/">Amigapage.it</a>
</td></tr>

<tr><td>
<a href="http://amigakit.leamancomputing.com/catalog/?currency=EUR&currency=EUR">Amigakit</a>
</td></tr>

<tr><td>
<a href="http://amigan.1emu.net/aw/#amiga">Amiga Software Abandonware</a>
</td></tr>

<tr><td>
<a href="http://amigan.1emu.net/aw/#ibm">Amiga Software Abandonware DOS</a>
</td></tr>

<tr><td>
<a href="http://whdownload.com/">WHDownLoad</a>
</td></tr>

<tr><td colspan='2' vspace="10" bgcolor="<?=$footerBackgroundColor?>"><center><font size='2' color='<?=$footerTextColor?>'><?=$footerText?></font></center></td></tr>
</tbody></table>
</center></font>

</body>