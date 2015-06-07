<!DOCTYPE html>
<html>
<head>
    <?php
    include "include/header.php";
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
                        <div class="muted pull-left">Pembayaran</div>
                    </div>
                    <div class="block-content collapse in">
                        <div class="span12">
                            <form action="view_cucian.php" class="form-horizontal" method="post">
                                <div class="control-group">
                                    <label class="control-label">ID Cucian<span class="required">*</span></label>
                                    <div class="controls">
                                        <input type="text" name="id_cucian" data-required="1" class="span6 m-wrap"/>
                                    </div>
                                </div>
                                <div class="form-actions">
                                    <button type="submit" class="btn btn-primary">Cari Cucian</button>
                                </div>
                            </form>
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