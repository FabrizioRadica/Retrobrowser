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
<tr><td colspan='2' bgcolor='<?=$headerBackgroundColor?>' width='100%' vspace="10"><center><a href="../../retro.php"><img src="gfx/retroacademy.gif" border="0"></a></center></td></tr>
<tr><td colspan='2' bgcolor='<?=$headerBackgroundColor?>' width='100%' vspace="10"><font color="#ffffff"><font size="2"><a href="http://www.retroacademy.it/retro.php"><< Home Page</a> | Tutorials | Contatti</font></font></td></tr>

<?php
//Step2

$query = "SELECT p1.*, wm2.meta_value FROM kefni_posts p1 LEFT JOIN kefni_postmeta wm1 ON (wm1.post_id = p1.id AND wm1.meta_value IS NOT NULL AND wm1.meta_key = '_thumbnail_id' ) LEFT JOIN kefni_postmeta wm2 ON (wm1.meta_value = wm2.post_id AND wm2.meta_key = '_wp_attached_file' AND wm2.meta_value IS NOT NULL) WHERE p1.post_status='publish' AND p1.post_type='post' and ID='$_id' ORDER BY p1.post_date DESC limit 20";

mysqli_query($db, $query) or die('Error querying database.');

//Step3
$pattern = "/width|height=\"[0-9]*\"/";
$re = '/<img(.*?)>/';

$result = mysqli_query($db, $query);
while ($row = mysqli_fetch_array($result)) {

 // toglie il tag IMG
 $row['post_content'] = preg_replace($re, "", $row['post_content'] );
 $row['post_content'] = preg_replace('(\r\n|\n\r|\r|\n)', "<br>",$row['post_content']);

$thumb=$row['meta_value'];
$tmpext=right($thumb,4);

 echo "<tr><td><font size='2'><h1>".$row['post_title']."</h1></font><img src='http://www.retroacademy.it/_r3tr0_wp/wp-content/uploads/".left($thumb,-4).$thumbSize.$tmpext."' width='520' border='0'><p>".$row['post_content']."</p></td></tr>";
}
//Step 4
mysqli_close($db);
?>

<tr><td colspan='2' vspace="10" bgcolor="<?=$footerBackgroundColor?>"><center><font size='2' color='<?=$footerTextColor?>'><?=$footerText?></font></center></td></tr>
</tbody></table>
</center></font>
</body>
</html>
