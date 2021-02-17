
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Track Order</title>
</head>
<body>

<div style="margin-left:50px;">
<table border="1"  cellpadding="10" style="border-collapse: collapse; border-spacing:0; width: 100%; text-align: center;">
  <tr align="center">
   <th colspan="4" >Invoice of #<?php echo  $oid;?></th> 
  </tr>
  <tr>
    <th>#</th>
<th>Food </th>
<th>Food Name</th>
<th>Price</th>
</tr>

<tr>
  <td><?php echo $cnt;?></td>
 <td><img src="admin/itemimages/<?php echo $row['Image']?>" width="60" height="40" alt="<?php echo $row['ItemName']?>"></td> 
  <td><?php  echo $row['ItemName'];?></td> 
   <td><?php  echo $total=$row['ItemPrice'];?></td> 
</tr>
<tr>
  <th colspan="3" style="text-align:center">Grand Total </th>
<td></td>
</tr>
</table>
     
     <p >
      <input name="Submit2" type="submit" class="txtbox4" value="Close" onClick="return f2();" style="cursor: pointer;"  />   <input name="Submit2" type="submit" class="txtbox4" value="Print" onClick="return f3();" style="cursor: pointer;"  /></p>
</div>

</body>
</html>

     