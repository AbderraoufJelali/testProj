<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Sections Demo</title>
<script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>
<script type="text/javascript">
$(document).ready(function()
{
$(".region").change(function()
{
var id=$(this).val();
var dataString = 'id='+id;

$.ajax
({
type: "POST",
url: "ajax_deleg.php",
data: dataString,
cache: false,
success: function(html)
{

$(".deleg").html(html);
} 
});

});
});
</script>
<style>
label
{
font-weight:bold;
padding:10px;
color:#0099FF;
}
</style>
</head>

<body>
<div style="margin:80px">
<label>Region :</label> <select name="region" class="region">
<option selected="selected">--Choisir region--</option>
<?php
include('db.php');
$sql=mysql_query("select * from region order by cd_reg");
while($row=mysql_fetch_array($sql))
{
$cd_reg=$row['cd_reg'];
$libl_reg=$row['libl_reg'];
echo '<option value="'.$cd_reg.'">'.$libl_reg.'</option>';
 } ?>
</select> <br/><br/>
<label>Delegation :</label> <select name="deleg" class="deleg">
<option selected="selected">--Choisir delegation--</option>

</select>



</div>
</body>
</html>
