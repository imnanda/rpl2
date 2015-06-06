<!DOCTYPE html>
<html>
<head>
    <?php
    include "include/header.php";
    include "data_pelanggan.php";
    $datapelanggan = new pelanggan;
    $datapelanggan = $datapelanggan->ambildatepelanggan();
    ?>
</head>

<body>
<div class="container-fluid">
<div class="row-fluid">
<?php include "include/navbarkiri.php"; ?>
<div class="span9" id="content">
<div class="row-fluid">
    <!-- block -->
    <div class="block">
        <div class="navbar navbar-inner block-header">
            <div class="muted pull-left">Data Pelanggan</div>
        </div>
        <div class="block-content collapse in">
            <div class="span12">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>No Telepon</th>
                        <th>Edit / Hapus</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    //var_dump($datapelanggan);
                    while($pelanggan=$datapelanggan->fetch_object())

                    { ?>
                    <tr>
                        <td><?php echo $pelanggan->id_pelanggan; ?></td>
                        <td><?php echo $pelanggan->nama_pelanggan; ?></td>
                        <td><?php echo $pelanggan->alamat_pelanggan; ?></td>
                        <td><?php echo $pelanggan->telepon; ?></td>
                        <td><a href="edit_pelanggan.php?id=<?php echo $pelanggan->id_pelanggan; ?>">Edit</a>  /   <a href="proses/hapuspelanggan.php?id=<?php echo $pelanggan->id_pelanggan; ?>">Hapus</a> </td>
                    </tr>
                    <?php }; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- /block -->
</div>
<!-- block -->
<div class="block">
<div class="navbar navbar-inner block-header">
    <div class="muted pull-left">Bootstrap dataTables</div>
</div>
<!-- /block -->
</div>

<div class="row-fluid">

</div>
</div>
</div>
<hr>
    <?php include("include/footer.php") ?>
</body>

</html>