<!DOCTYPE html>
<html lang="en">

<head>
        <!-- Import header content -->
        <?php require_once '_header.php'; ?>

        <title>ANS | ASSET REGISTER</title>
</head>

<body>

    <div id="wrapper">

        <!-- import navigation  -->
        <?php require_once '_navigation.php'; ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Blank Pagebr
                            <small>Subheading</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-file"></i> Blank Page
                            </li>
                        </ol>

                        <!-- Form Begin -->
                        <form action="" method="post">
                            <div class="row col-lg-8">
                                <div class="form-group col-lg-4 col-md-4 col-sm-4 col-xm-6">
                                    <label>Date</label>
                                    <input type="text" name="date" id='date' value="" class="form-control">
                                </div>

                                <div class="form-group col-lg-4 col-md-4 col-sm-4 col-xm-6">
                                    <label>PABC Serial Number</label>
                                    <input type="text" name="pabc_serial" value="" class="form-control">
                                </div>

                                <div class="form-group col-lg-4 col-md-4 col-sm-4 ">
                                    <label>Reference Number</label>
                                    <input type="text" name="reference_num" value="" class="form-control">
                                </div>
                            </div>
                            <div class="row col-lg-8">
                                <div class="form-group col-lg-4">
                                    <label>Asset Category</label>
                                    <select class="form-control" name="category" >
                                        <option value="cat 1">Category 1</option>
                                        <option value="cat 2">Category 2</option>
                                        <option value="cat 3">Category 3</option>
                                        <option value="cat 4">Category 4</option>

                                    </select>
                                </div>
                                <div class="form-group col-lg-4">
                                    <label>Asset Sub Category</label>
                                    <select class="form-control" name="sub_category" >
                                        <option value="cat 1">Sub Category 1</option>
                                        <option value="cat 2">Sub Category 2</option>
                                        <option value="cat 3">Sub Category 3</option>
                                        <option value="cat 4">Sub Category 4</option>

                                    </select>
                                </div>
                                <div class="form-group col-lg-4">
                                    <label>C.I.A</label>
                                    <select class="form-control" name="cia" >
                                        <option value="cat 1">Option 1</option>
                                        <option value="cat 2">Option 2</option>
                                        <option value="cat 3">Option 3</option>
                                        <option value="cat 4">Option 4</option>

                                    </select>
                                </div>
                            </div>

                            <div class="row col-lg-8">
                              <div class="form-group col-lg-6">
                                <label>Asset Owner</label>
                                <select class="form-control" name="asset_owner">
                                  <option value="User1">User 1</option>
                                  <option value="User2">User 2</option>
                                  <option value="User3">User 3</option>
                                  <option value="User4">User 4</option>
                                </select>
                              </div>
                              <div class="form-group  col-lg-6">
                                <label>Asset Serial Number</label>
                                <input type="text" name="serial" value="" id="serial" class="form-control">
                              </div>
                            </div>
                            <div class="row col-lg-8">
                              <div class="form-group col-lg-8">
                                <label>Description</label>
                                <input type="text" name="description" value="" class="form-control">
                              </div>
                              <div class="form-group col-lg-4">
                                <label>OS Version</label>
                                <input type="text" name="os_version" value="" class="form-control">
                              </div>
                            </div>


                        </form>


                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="<?php echo base_url('assets/js/jquery-2.1.4.min.js'); ?> "></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>

    <script type="text/javascript">
      $('#asset_register').addClass('active');
      var now = new Date();
      var formated_date = now.getDate() + ' / ' + now.getMonth() + ' / ' + now.getFullYear();
      $('#date').val(formated_date);
    </script>
</body>

</html>
