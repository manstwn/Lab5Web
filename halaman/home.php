<?php
require_once("require/Database.php");
require_once("require/Form.php");
$database = new Database();
$data = $database->gets("tb_mahasiswa");
?>

<?php require('halaman/header.php'); ?>
<div class="main">
    <h2>CURD Sederhana</h2>
    <h2>Struktur Modular dan Class</h2>
    <a class="button tambah" href="tambah">TAMBAH DATA</a>
    <table>
        <tr>
            <th>No</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>UBAH</th>
            <th>HAPUS</th>
        </tr>
        <?php
        for ($i = 0; $i < count($data); $i++) {
        ?>
            <tr>
                <td><?= $i + 1 ?></td>
                <td><?= $data[$i]["nim"]; ?></td>
                <td><?= $data[$i]['nama']; ?></td>
                <td><?= $data[$i]['kelas']; ?></td>
                <td><a class="btnUpdate" href="fungsi/ubah.php?id=<?= $data[$i]["id"] ?>">UPDATE</a></td>
                <td><a class="btnDelete" href="fungsi/hapus.php?id=<?= $data[$i]["id"] ?>">DELETE</a></td>
            </tr>
        <?php
        }
        ?>
    </table>
</div>

<?php require('footer.php'); ?>