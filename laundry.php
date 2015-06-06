<!DOCTYPE html>
<html>
<head>
    <?php
    //include "include/db_connect.php";
    include "include/header.php";
    include "Data_cucian.php";
    $datalaundy = new laundry();
    $datalaundy = $datalaundy->ambildatalaundy();
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
                        <div class="muted pull-left">Data Laundry</div>
                    </div>
                    <div class="block-content collapse in">
                        <div class="span12">
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Jenis</th>
                                    <th>Berat</th>
                                    <th>Action</th>

                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                //var_dump($datapelanggan);
                                while($laundry=$datalaundy->fetch_object())

                                { ?>
                                    <tr>
                                        <td><?php echo $laundry->id_cucian; ?></td>
                                        <td><?php echo $laundry->jenis_cucian; ?></td>
                                        <td><?php echo $laundry->berat_cucian; ?> Kg</td>
                                        <td><a href="edit_laundry.php?id=<?php echo $laundry->id_cucian; ?>">Edit</a>  /   <a href="proses/hapuspelanggan.php?id=<?php echo $laundry->id_cucian; ?>">Hapus</a> </td>
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