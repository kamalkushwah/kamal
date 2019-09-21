<?php
$suppliername= $_POST['suppname'];
$supplierinv =$_POST['inv'];
$suppliergst=$_POST['suppgst'];
$supplieraddress=$_POST['suppaddress'];
$supplierstate=$_POST['suppstate'];
$cname=$_POST['conname'];
$cgst=$_POST['congst'];
$cadd=$_POST['congst'];
$cstae=$_POST['constate'];
$trs=$_POST['trs'];
$trsgst=$_POST['trsgst'];
$indate=$_POST['invdate'];
?>
<head>
<style>
    #maindiv11{
        border:1px solid black;
        width:600px;
        box-shadow:3px 3px 10px black;
     
    }
    #img21{
        height:100px;
        width:100px;
    }
    #tb1{
        font-size:20px;
           
    }
    #tb1 td{
        padding:10px;
    }
    #h11{ 
        text-align:center;
    }
</style>
</head>
<div id="maindiv11">
<h1 id="h11"> E-Way Bill</h1>
<table id="tb1">
<tr>
    <td>invoice Date:</td>
    <td>
        <?php echo $indate; ?>
</td>
</tr>
<tr>
    <td>E-Way Bill No:</td>
    <td>
        <?php echo $timef=time(); ?>
</td>
</tr>

<tr>
   <td>Supplier Name:</td> <td><?php echo $suppliername; ?></td>
    <td></td>
</tr>
<tr>
<td>Supplier Inovice No:</td><td><?php echo $supplierinv; ?></td>
    <td></td>
</tr>
<tr>
<td>Supplier GSTIN NO:</td><td><?php echo $suppliergst; ?></td>
    <td></td>
</tr>
<tr>
<td>Supplier Address:</td><td><?php echo $supplieraddress; ?></td>
    <td></td>
</tr>
<tr>
<td>Supplier State:</td><td><?php echo $supplierstate; ?></td>
    <td></td>
</tr>
<tr>
<td>Consignee Name:</td><td><?php echo $cname; ?></td>
    <td></td>
</tr>
<tr>
<td>Consignee GSTIN</td><td><?php echo $cgst; ?></td>
    <td></td>
</tr>
<tr>
<td>Consignee Address:</td><td><?php echo $cadd; ?></td>
    <td></td>
</tr>
<tr>
<td>Consignee State:</td> <td><?php echo $cstae; ?></td>
    <td></td>
</tr>
<tr>
<td>Transport Name:</td><td><?php echo $trs; ?></td>
    <td></td>
</tr>
<tr>
<td>Trasnport GSTIN:</td> <td><?php echo $trsgst; ?></td>
    <td></td>
</tr>

    <tr>
    <td> <img id="img21"src="img/qr.png"></td>

</tr>










</table>



















</div>