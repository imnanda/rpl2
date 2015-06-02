<!DOCTYPE html>
<html>
<head>
    <?php
    include "include/header.php";
    include "class_user.php";
    include "class_laundry.php";
    $datapelanggan = new pelanggan;
    $datapelanggan = $datapelanggan->ambilakhir();
    $pelanggan = $datapelanggan->fetch_object();

    $datalaundy = new laundy;
    $datalaundy = $datalaundy->ambildatalaundy();
    $laundy = $datalaundy->fetch_object();
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
                        <div class="muted pull-left">Laundy Baru</div>
                    </div>
                    <div class="block-content collapse in">
                        <div class="span12">
                            <!-- BEGIN FORM-->

                            <form action="proses/tambahuser.php" class="form-horizontal" method="post">
                                <div class="control-group">
                                    <label class="control-label">Nama User</label>

                                    <div class="controls">
                                        <span
                                            class="input-xlarge uneditable-input"><?php echo $pelanggan->nama_pelanggan; ?></span>
                                    </div>
                                    <input type="hidden" name="id_laundy" value="<?php echo $laundy->id_cucian; ?>">
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
                                    <label class="control-label">Jenis<span class="required">*</span></label>
                                    <div class="controls">
                                        <select class="span6 m-wrap" name="category">
                                            <option value="">Pilih...</option>
                                            <option value="Category 1">Category 1</option>
                                            <option value="Category 2">Category 2</option>
                                            <option value="Category 3">Category 5</option>
                                            <option value="Category 4">Category 4</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Berat Cucian<span class="required">*</span></label>

                                    <div class="controls">
                                        <input type="text" name="berat" data-required="1" class="span6 m-wrap"/>
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