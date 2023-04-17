<?php
require_once('../require/Database.php');
require_once('../require/Form.php');


$database = new Database();
$id = $_GET['id'];
$data = $database->get("tb_mahasiswa", "where id=" . $id);

$database = new Database();
if (isset($_POST['update'])) {
    $data = [
        'nim' => $_POST["nim"],
        'nama' => $_POST['nama'],
        'kelas' => $_POST['kelas']
    ];
    $database->update("tb_mahasiswa", $data, "id=" . $id);
    header("location: ../home");
}

$form = new Form("", "update");
$form->addField("nim", "Nim", $data["nim"]);
$form->addField("nama", "Nama", $data["nama"]);
$form->addField("kelas", "Kelas", $data["kelas"]);
$form->displayForm();
?>