<?php
session_start();
$catagory=$_GET['catagory'];

if($catagory==0)
{
$_SESSION["catagory"]=0;
header("location:index.php");
}
if($catagory==1)
{
$_SESSION["catagory"]=1;header("location:index.php");
}
if($catagory==2)
{
$_SESSION["catagory"]=2;header("location:index.php");
}
if($catagory==3)
{
$_SESSION["catagory"]=3;header("location:index.php");
}
if($catagory==4)
{
$_SESSION["catagory"]=4;header("location:index.php");
}
if($catagory==5)
{
$_SESSION["catagory"]=5;header("location:index.php");
}
if($catagory==6)
{
$_SESSION["catagory"]=6;header("location:index.php");
}
if($catagory==7)
{
$_SESSION["catagory"]=7;header("location:index.php");
}
if($catagory==8)
{
$_SESSION["catagory"]=8;header("location:index.php");
}
if($catagory==9)
{
$_SESSION["catagory"]=9;header("location:index.php");
}
?>