<!DOCTYPE html>
<html>
<head>
    <?php
    include "include/header.php";
    include "include/db_connect.php";
    include "transaksi.php";
    $histori = new transaksi();
    $histori = $histori->tampilTransaksi();
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
                                    <th>Id Transaksi</th>
                                    <th>Waktu</th>
                                    <th>Keterangan</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                //var_dump($datapelanggan);
                                while($transaksi=$histori->fetch_object())

                                { ?>
                                    <tr>
                                        <td><?php echo $transaksi->idTransaksi; ?></td>
                                        <td><?php echo $transaksi->waktuTransaksi; ?></td>
                                        <td><?php echo $transaksi->keterangan; ?></td>
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