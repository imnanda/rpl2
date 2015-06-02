<!DOCTYPE html>
<html>
<head>
    <?php
    include "include/header.php";
    include "class_user.php";
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
                        <td><a href="edit_pelanggan.php?id=<?php echo $pelanggan->id_pelanggan; ?>">Edit</a>  /   <a href="hapususer.php?id=<?php echo $pelanggan->id_pelanggan; ?>">Hapus</a> </td>
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
<footer>
    <p>&copy; Vincent Gabriel 2013</p>
</footer>
</div>
<!--/.fluid-container-->

<script src="vendors/jquery-1.9.1.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="vendors/datatables/js/jquery.dataTables.min.js"></script>


<script src="assets/scripts.js"></script>
<script src="assets/DT_bootstrap.js"></script>
<script>
    $(function () {

    });
</script>
</body>

</html>