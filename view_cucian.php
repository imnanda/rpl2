<!DOCTYPE html>
<html>
<head>
    <?php
    include "include/header.php";
    include "pembayaran.php";
    $datapembayaran = new pembayaran();
    $datapembayaran = $datapembayaran->ambilsebagian($id_cucian = $_POST['id_cucian']);
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
                        <div class="muted pull-left">Data Cucian</div>
                    </div>
                    <div class="block-content collapse in">
                        <div class="span12">
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th>Nama Pemilik</th>
                                    <th>Alamat</th>
                                    <th>Jenis Cucian</th>
                                    <th>Berat Cucian</th>
                                    <th>Status Pembayaran</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                //var_dump($datapelanggan);
                                while($pembayaran=$datapembayaran->fetch_object())

                                { ?>
                                    <tr>
                                        <td><?php echo $pembayaran->nama_pelanggan; ?></td>
                                        <td><?php echo $pembayaran->alamat_pelanggan; ?></td>
                                        <td><?php echo $pembayaran->jenis_cucian; ?></td>
                                        <td><?php echo $pembayaran->berat_cucian; ?></td>
                                        <td><?php echo $pembayaran->statusPembayaran; ?></td>
                                        <td>
                                            <?php
                                            if ($pembayaran->statusPembayaran != "Lunas"){
                                                echo "<a href='bayar.php?id_cucian=$pembayaran->id_cucian'>Bayar</a>";
                                            }else{
                                                echo "-";
                                            }
                                        ?>
                                        </td>
                                    </tr>
                                <?php }; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- /block -->
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