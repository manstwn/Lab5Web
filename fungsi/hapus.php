<?php
require_once('../require/Database.php');
require_once('../require/Form.php');

$database = new Database();
$id = $_GET['id'];
$database->delete("tb_mahasiswa", "id=" . $id);
header('location: ../home');
?>
