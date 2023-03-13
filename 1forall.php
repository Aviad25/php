<?php 
session_start();
if(!isset($_SESSION['cusemail'])){
  require_once 'menu.php';
}else{
  require_once 'menu2.php';
}
?>