<!DOCTYPE html>
<html>
<head>
    <?php
    include "include/header.php";
    include "data_pelanggan.php";
    $datapelanggan = new data_pelanggan;
    $datapelanggan = $datapelanggan->ambilsebagian($id_pelanggan = $_GET['id']);
    $pelanggan=$datapelanggan->fetch_object();
    ?>
</head>

<body>
<div class="container-fluid">
    <div class="row-fluid">
        <?php include "include/navbarkiri.php"; ?>
        <!--/span-->
        <div class="span9" id="content">
            <!-- validation -->
            <div class="row-fluid">
                <!-- block -->
                <div class="block">
                    <div class="navbar navbar-inner block-header">
                        <div class="muted pull-left">Edit Pelanggan</div>
                    </div>
                    <div class="block-content collapse in">
                        <div class="span12">
                            <!-- BEGIN FORM-->
                            <form action="proses/proses_edit_user.php" class="form-horizontal" method="post">
                                <div class="control-group">
                                    <label class="control-label">ID User</label>
                                    <div class="controls">
                                        <span class="input-xlarge uneditable-input"><?php echo $pelanggan->id_pelanggan; ?></span>
                                    </div>
                                    <input type="hidden" name="id_pelanggan" value="<?php echo $_GET['id']; ?>" >

                                </div>
                                <div class="alert alert-error hide">
                                    <button class="close" data-dismiss="alert"></button>
                                    You have some form errors. Please check below.
                                </div>
                                <div class="alert alert-success hide">
                                    <button class="close" data-dismiss="alert"></button>
                                    Your form validation is successful!
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Nama<span class="required">*</span></label>

                                    <div class="controls">
                                        <input type="text" name="nama" data-required="1" class="span6 m-wrap" placeholder="<?php echo $pelanggan->nama_pelanggan; ?>"/>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Alamat<span class="required">*</span></label>

                                    <div class="controls">
                                        <input type="text" name="alamat" data-required="1" class="span6 m-wrap" placeholder="<?php echo $pelanggan->alamat_pelanggan; ?>"/>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Telepon<span class="required">*</span></label>

                                    <div class="controls">
                                        <input name="telepon" type="text" class="span6 m-wrap" placeholder="<?php echo $pelanggan->telepon; ?>"/>
                                    </div>
                                </div>
                                <div class="form-actions">
                                    <button type="submit" class="btn btn-primary">Kirim</button>
                                    <button type="button" class="btn">Cancel</button>
                                </div>

                            </form>

                            <!-- END FORM-->
                        </div>
                    </div>
                </div>
                <!-- /block -->
            </div>
            <!-- /validation -->


        </div>
    </div>
    <hr>
    <?php include("include/footer.php") ?>
</body>

</html>