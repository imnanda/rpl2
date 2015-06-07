<!DOCTYPE html>
<html>
<head>
    <?php
    //include "include/db_connect.php";
    include "include/header.php";
    include "pembayaran.php";
    $datapembayaran = new pembayaran();
    $datapembayaran = $datapembayaran->ambilsebagian($id_cucian = $_GET['id_cucian']);
    $pembayaran=$datapembayaran->fetch_object()
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
                        <div class="muted pull-left">Pembayaran</div>
                    </div>
                    <div class="block-content collapse in">
                        <div class="span12">
                            <!-- BEGIN FORM-->
                            <form action="proses/proses_pembayaran.php" class="form-horizontal" method="post">
                                <div class="control-group">
                                    <label class="control-label">ID Cucian</label>
                                    <div class="controls">
                                        <span class="input-xlarge uneditable-input"><?php echo $_GET['id_cucian']; ?></span>
                                        <input type="hidden" name="id_cucian" value="<?php echo $_GET['id_cucian']; ?>" >
                                        <input type="hidden" name="idStruk" value="<?php echo $pembayaran->idStruk; ?>" >
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Nama Pelanggan</label>
                                    <div class="controls">
                                        <span class="input-xlarge uneditable-input"><?php echo $pembayaran->nama_pelanggan ?></span>
                                        <input type="hidden" name="nama_pelanggan" value="<?php echo $pembayaran->nama_pelanggan ?>" >
                                        <input type="hidden" name="id_pelanggan" value="<?php echo $pembayaran->id_pelanggan ?>" >
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Berat Cucian</label>
                                    <div class="controls">
                                        <span class="input-xlarge uneditable-input"><?php echo $pembayaran->berat_cucian ?></span>
                                        <input type="hidden" name="berat_cucian" value="<?php echo $pembayaran->berat_cucian ?>" >
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Total Bayar</label>
                                    <?php
                                    $totalHarga = $pembayaran->berat_cucian * 5000;
                                    ?>
                                    <div class="controls">
                                        <span class="input-xlarge uneditable-input"><?php echo $totalHarga ?></span>
                                        <input type="hidden" name="totalHarga" value="<?php echo $totalHarga ?>" >
                                    </div>
                                </div>
                                <div class="form-actions">
                                    <button type="submit" class="btn btn-primary">Bayar</button>
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
    <footer>
        <p>&copy; Vincent Gabriel 2013</p>
    </footer>
</div>
<!--/.fluid-container-->
<link href="vendors/datepicker.css" rel="stylesheet" media="screen">
<link href="vendors/uniform.default.css" rel="stylesheet" media="screen">
<link href="vendors/chosen.min.css" rel="stylesheet" media="screen">

<link href="vendors/wysiwyg/bootstrap-wysihtml5.css" rel="stylesheet" media="screen">

<script src="vendors/jquery-1.9.1.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="vendors/jquery.uniform.min.js"></script>
<script src="vendors/chosen.jquery.min.js"></script>
<script src="vendors/bootstrap-datepicker.js"></script>

<script src="vendors/wysiwyg/wysihtml5-0.3.0.js"></script>
<script src="vendors/wysiwyg/bootstrap-wysihtml5.js"></script>

<script src="vendors/wizard/jquery.bootstrap.wizard.min.js"></script>

<script type="text/javascript" src="vendors/jquery-validation/dist/jquery.validate.min.js"></script>
<script src="assets/form-validation.js"></script>

<script src="assets/scripts.js"></script>
<script>

    jQuery(document).ready(function () {
        FormValidation.init();
    });


    $(function () {
        $(".datepicker").datepicker();
        $(".uniform_on").uniform();
        $(".chzn-select").chosen();
        $('.textarea').wysihtml5();

        $('#rootwizard').bootstrapWizard({
            onTabShow: function (tab, navigation, index) {
                var $total = navigation.find('li').length;
                var $current = index + 1;
                var $percent = ($current / $total) * 100;
                $('#rootwizard').find('.bar').css({width: $percent + '%'});
                // If it's the last tab then hide the last button and show the finish instead
                if ($current >= $total) {
                    $('#rootwizard').find('.pager .next').hide();
                    $('#rootwizard').find('.pager .finish').show();
                    $('#rootwizard').find('.pager .finish').removeClass('disabled');
                } else {
                    $('#rootwizard').find('.pager .next').show();
                    $('#rootwizard').find('.pager .finish').hide();
                }
            }
        });
        $('#rootwizard .finish').click(function () {
            alert('Finished!, Starting over!');
            $('#rootwizard').find("a[href*='tab1']").trigger('click');
        });
    });
</script>
</body>

</html>