
<title>Pic-A-Point</title>
<link href="css/header.css" rel="stylesheet" type="text/css">
</head>
<body>

<table border="0" cellpadding="0" cellspacing="0" align="center" width="900">
  <tbody>
  <tr>
    <td>
<style type="text/css">
<!--
.style2 {color: #FFFFFF}
-->
</style>

<table border="0" cellpadding="0" cellspacing="0" width="900">
<tbody><tr>
<td colspan="15">
<img src="images/header1.jpg" height="250" width="900"></td>
</tr>
<tr bgcolor="yellow">
<td width="3"></td>
<td width="76"><div class="lowerstyle" align="center">
<a href="admin.php">
  <button style ="background-color: gray;
   border: none;
   border-radius: 5px;
   cursor: pointer;
    color: white;
    width: 80px;
    height:30px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    margin: 4px 2px;
  ">Home</button>


</a> </div></td>
<td height="30" width="83">
<div class="lowerstyle" align="center"> 
  <a href="add_record.php">
  <button style ="background-color: gray;
   border: none;
   border-radius: 5px;
   cursor: pointer;
    color: white;
    width: 100px;
    height:30px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    margin: 4px 2px;
  ">Add Record</button>
  </a></div></td>





<td height="30" width="74"> 
<div class="lowerstyle" align="center">
<a href="product_list.php"><button style ="background-color: gray;
   border: none;
   border-radius: 5px;
   cursor: pointer;
    color: white;
    width: 120px;
    height:30px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    margin: 4px 2px;
  ">Update Record</button>  </a></div></td>


<td width="60"><div class="lowerstyle" align="center">
  <div align="center">
  <a href="track_product.php">
  <button style ="background-color: gray;
   border: none;
   border-radius: 5px;
   cursor: pointer;
    color: white;
    width: 60px;
    height:30px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    margin: 4px 2px;
  ">Track</button> 
  </a></div>
</div></td>

<td height="30" width="83">
<div class="lowerstyle" align="center">
<a href="feedmill_list.php"> 
<button style ="background-color: gray;
   border: none;
   border-radius: 5px;
   cursor: pointer;
    color: white;
    width: 100px;
    height:30px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    margin: 4px 2px;
  ">Feedmills</button> 
</a> </div></td>



<td height="30" width="83">
<div class="lowerstyle" align="center">
<a href="add_office.php"> 
<button style ="background-color: gray;
   border: none;
   border-radius: 5px;
   cursor: pointer;
    color: white;
    width: 100px;
    height:30px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    margin: 4px 2px;
  ">Add Office</button> 
</a> </div></td>


<td height="30" width="83">
<div class="lowerstyle" align="center">
<a href="manager_list.php"> 
<button style ="background-color: gray;
   border: none;
   border-radius: 5px;
   cursor: pointer;
    color: white;
    width: 100px;
    height:30px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    margin: 4px 2px;
  ">Manager List</button> 
</a> </div></td>
<td width="3"><div align="left"></div></td>

<td height="30" width="83">
<div class="lowerstyle" align="center">
<a href="add_new_officer.php"> 
<button style ="background-color: gray;
   border: none;
   border-radius: 5px;
   cursor: pointer;
    color: white;
    width: 100px;
    height:30px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    margin: 4px 2px;
  ">Add Manager</button> 
</a> </div></td>

<td height="30" width="80">
<div class="lowerstyle" align="center">
<a href="process.php?action=logOut"> 
<button style ="background-color: gray;
   border: none;
   border-radius: 5px;
   cursor: pointer;
    color: white;
    width: 90px;
    height:30px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    margin: 4px 2px;
  ">Logout</button> 
</a> </div></td>


<td width="71"><div class="lowerstyle" align="center"><a href="#"></a> </div></td>
<td height="30" width="80">

</td>
</tr>

</tbody></table>

<?php
if(isset($_SESSION['user_type']) && $_SESSION['user_type'] == 'admin-role') {
?>
<table border="0" cellpadding="0" cellspacing="0" width="900">
  <tbody><tr style="height:10px;">
    <td bgcolor="red" width="4">&nbsp;</td>
    <td bgcolor="red" width="240">&nbsp;<b></b></td>
    <td bgcolor="red" width="130"><div align="center"></div></td>
    <td bgcolor="red" width="10"></td>
	
    <td bgcolor="red" width="100"><div align="center"></div></td>
    <td bgcolor="red" width="10"></td>
	<td bgcolor="red" width="162"><div align="center"></div></td>
    <td bgcolor="red" width="7"></td>
    <td bgcolor="red" width="125"><div align="center"></div></td>
  </tr>
</tbody>
</table>
<?php 
}
?>

</body>
</html>