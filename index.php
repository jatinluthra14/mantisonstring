<?php
echo "Calculator";
ini_set('display_errors',0);
if( isset( $_REQUEST['calculate'] ))
{
$operator=$_REQUEST['operator'];
if($operator=="+")
{
$add1 = $_REQUEST['fvalue'];
$add2 = $_REQUEST['lvalue'];
$res= $add1+$add2;
}
if($operator=="-")
{
$add1 = $_REQUEST['fvalue'];
$add2 = $_REQUEST['lvalue'];
$res= $add1-$add2;
}
if($operator=="*")
{
$add1 = $_REQUEST['fvalue'];
$add2 = $_REQUEST['lvalue'];
$res =$add1*$add2;
}
if($operator=="/")
{
$add1 = $_REQUEST['fvalue'];
$add2 = $_REQUEST['lvalue'];
$res= $add1/$add2;
}
if($_REQUEST['fvalue']==NULL && $_REQUEST['lvalue']==NULL)
{
echo "<script language=javascript> alert(\"Please Enter values.\");</script>";
}
else if($_REQUEST['fvalue']==NULL)
{
echo "<script language=javascript> alert(\"Please Enter First value.\");</script>";
}
else if($_REQUEST['lvalue']==NULL)
{
echo "<script language=javascript> alert(\"Please Enter second value.\");</script>";
}
}
?>
<a href="https://github.com/jatinluthra14/mantisonstring"><img style="position: absolute; top: 0; right: 0; border: 0;" src="https://camo.githubusercontent.com/365986a132ccd6a44c23a9169022c0b5c890c387/68747470733a2f2f73332e616d617a6f6e6177732e636f6d2f6769746875622f726962626f6e732f666f726b6d655f72696768745f7265645f6161303030302e706e67" alt="Fork me on GitHub" data-canonical-src="https://s3.amazonaws.com/github/ribbons/forkme_right_red_aa0000.png"></a>
<form>
<table style="border:groove #00FF99">
            <tr>
                <td style="background-color:aqua; color:red; font-family:'Times New Roman'">Enter First Number</td>
                <td colspan="1">
               
                    <input name="fvalue" type="text" style="color:red"/></td>
            <tr>
                <td style="color:burlywood; font-family:'Times New Roman'">Select Operator</td>
                <td>
                    <select name="operator" style="width: 63px">
<option>+</option>
<option>-</option>
<option>*</option>
<option>/</option>
</select></td>
               </tr>
            <tr>
                <td style="background-color:aqua; color:red; font-family:'Times New Roman'">Enter First Number</td>
                <td class="auto-style5">
                    <input name="lvalue" type="text"  style="color:red"/></td>
               
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="calculate" value="Calculate" style="color:wheat;background-color:rosybrown" /></td>
               
            </tr>
            <tr>
                <td style="background-color:aqua;color:red">Output = </td>
                <td style="color:darkblue"><?php echo $res;?></td>
               
            </tr>
       </table>
 </form>
