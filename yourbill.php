<head>
    <style>
#t1 td{
height:50px;
whidth:300px;
padding:10px;

}
#main1{
    border:1px solid black;
}
    </style>

</head>
<div id="main1">
<div id="subdiv1">
    
<table id="t1">
    <tr><td>
E-Waybil Date:<br>
<?php $t=time(); echo(date("d-m-y",$t));?>
<form action="bb.php" method="POST">
<tr>
    <td>Supplier Invoice No:</td>
    <td></td>
    <td><input type="text" name="inv" required></td>
    <td>Invoice Date:</td>
    <td></td>
    <td><input type="Date" name="invdate" required></td>


</tr>
<tr>
    <td>Supplier Name:</td>
    <td></td>
    <td><input type="text" name="suppname" required></td>
    <td>GSTIN NO:</td>
    <td></td>
    <td><input type="text" name="suppgst" required></td>


</tr>
<tr>
    <td>Supplier Address:</td>
    <td></td>
    <td><input type="text" name="suppaddress" required></td>
    <td>STATE</td>
    <td></td>
    <td><input type="text" name="suppstate" required></td>


</tr>
<tr>
    <td>Consinee Name:</td>
    <td></td>
    <td><input type="text" name="conname" required></td>
    <td>GSTIN</td>
    <td></td>
    <td><input type="text" name="congst" required></td>


</tr>
<tr>
    <td>Conginee Address:</td>
    <td></td>
    <td><input type="text" name="conaddress" required></td>
    <td>STATE</td>
    <td></td>
    <td><input type="text" name="constate" required> </td>


</tr>
<tr>
    <td>Transport Name:</td>
    <td></td>
    <td><input type="text" name="trs" required></td>
    <td>GSTIN</td>
    <td></td>
    <td><input type="text" name="trsgst" required></td>


</tr>
<tr>
    <td><input type="submit"></td>
</tr>








</div>