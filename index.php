<!DOCTYPE html>
<html>
<head>
<?php include "include/header.php" ?>
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
                        <div class="muted pull-left">Pelanggan Baru</div>
                    </div>
                    <div class="block-content collapse in">
                        <div class="span12">
                            <!-- BEGIN FORM-->

                            <form action="proses/tambahuser.php"  class="form-horizontal" method="post">

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
                                            <input type="text" name="nama" data-required="1" class="span6 m-wrap"/>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">Alamat<span class="required">*</span></label>

                                        <div class="controls">
                                            <input type="text" name="alamat" data-required="1" class="span6 m-wrap"/>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">Telepon<span class="required">*</span></label>

                                        <div class="controls">
                                            <input name="telepon" type="text" class="span6 m-wrap"/>
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