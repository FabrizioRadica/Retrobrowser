<html>
<head>
<title>RetroAcademy - RetroBrowserVersion</title></head>
<body bgcolor="<?=$bgColor?>" link="red" vlink="red" >
<font face='Arial'>
<center>
<table width="<?=$tableWidth?>" cellpadding="10" cellspacing="0" border='0' bgcolor='<?=$tableColor?>' bordercolor='<?=$borderColor?>'><tbody>
<tr><td colspan='2' bgcolor='<?=$headerBackgroundColor?>' width='100%' vspace="10"><center><img src="<?=$logo?>"></center></td></tr>
<tr><td colspan='2' bgcolor='<?=$headerBackgroundColor?>' width='100%' vspace="10"><font color="#ffffff"><font size="2"><a href="http://www.retroacademy.it/RetroBrowser/links.php">Links</a> | 

<?php
//Step3
$per_page=8;
$result = mysqli_query($db, $query);
while ($row = mysqli_fetch_array($result)) {

$id=$row['ID'];
$title=$row['post_title'];
$thumb=$row['meta_value'];
$excerpt=$row['post_excerpt'];
$guid=$row['guid']; // url all'articolo wp;
$tmpext=right($thumb,4);

echo "<tr><td valign='TOP' align='left' colspan='2'><b><font size='6' color='#aa5500'><a href='RetroBrowser/ra_article.php?id=$id'>".$title."</a></font></b></td></tr><tr><td><img src='http://www.retroacademy.it/_r3tr0_wp/wp-content/uploads/".left($thumb,-4).$thumbSize.$tmpext."' width='150' height='150' border='0' alt='".$title."'></td><td width='100%' valign='TOP' align='left'><font size='3' color='#445566'>".$excerpt."</font></td></tr><tr height='1' ><td height='1' bgcolor='<?=$separatorColor?>' colspan='2'></td></tr>";
}

//Step 4
mysqli_close($db);
?>

<tr><td colspan='2' vspace="10" bgcolor="<?=$footerBackgroundColor?>"><center><font size='2' color='<?=$footerTextColor?>'><?=$footerText?></font><br>PROGETTO WORK IN PROGRESS</center></td></tr>
</tbody></table>
</center></font>

</body>

</html>