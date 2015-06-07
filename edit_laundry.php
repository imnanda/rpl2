<!DOCTYPE html>
<html>
<head>
    <?php
    //include "include/db_connect.php";
    include "include/header.php";
    include "Data_cucian.php";
    $datalaundry = new laundry();
    $datalaundry = $datalaundry->ambilsebagian($id_cucian = $_GET['id']);
    $laundry=$datalaundry->fetch_object();
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
                        <div class="muted pull-left">Edit Laundry</div>
                    </div>
                    <div class="block-content collapse in">
                        <div class="span12">
                            <!-- BEGIN FORM-->
                            <form action="proses/proses_edit_laundry.php" class="form-horizontal" method="post">
                                <div class="control-group">
                                    <label class="control-label">ID Cucian</label>
                                    <div class="controls">
                                        <span class="input-xlarge uneditable-input"><?php echo $_GET['id'] ?></span>
                                    </div>
                                    <input type="hidden" name="id_cucian" value="<?php echo $_GET['id']; ?>" >

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
                                    <label class="control-label">Jenis Cucian<span class="required">*</span></label>

                                    <div class="controls">
                                        <input type="text" name="jenis" data-required="1" class="span6 m-wrap" placeholder="<?php echo $laundry->jenis_cucian; ?>"/>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Berat Cucian<span class="required">*</span></label>

                                    <div class="controls">
                                        <input name="berat" type="text" class="span6 m-wrap" placeholder="<?php echo $laundry->berat_cucian; ?>"/>
                                    </div>
                                </div>
                                <input type="hidden" name="id_pelanggan " value="<?php echo $laundry->id_pelanggan ?>">
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