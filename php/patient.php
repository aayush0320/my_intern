<!DOCTYPE html>
<html>
<head>
  <?php include '../html/head.html'; ?>    
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  <?php  
    include '../html/header.html';
    include '../html/sidebar.html';  
  ?>   

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

      <!-- Main content -->
    <section class="content">
          <div class="box box-warning">
            <div class="box-header with-border">    
                <!-- Content Header (Page header) -->
                <section class="content-header">
                  <h1>
                      OPD FORM
                  </h1>
                </section>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form role="form">
                <!-- text input -->
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-2">
                            <label>Name</label>
                        </div>
                        <div class="col-md-8">
                            <input type="text" id="" class="form-control" placeholder="Enter ...">
                        </div>
                    </div> 
                </div>
                <div class="form-group">
                  <label>Age</label>
                  <input type="text" id="" class="form-control" placeholder="Enter ...">
                </div>
                <div class="form-group">
                  <label>Sex</label>
                  <input type="text" id="" class="form-control" placeholder="Enter ...">
                </div>
                <div class="form-group">
                  <label>Contact</label>
                  <input type="text" id="" class="form-control" placeholder="Enter ...">
                </div>
                <div class="form-group">
                  <label>Prime</label>
                  <input type="text" id="" class="form-control" placeholder="Enter ...">
                </div>
                <div class="form-group">
                  <label>Address</label>
                  <input type="text" id="" class="form-control" placeholder="Enter ...">
                </div>                  
<!--
                <div class="form-group">
                  <label>Text Disabled</label>
                  <input type="text" class="form-control" placeholder="Enter ..." disabled>
                </div>
-->
                <!-- textarea -->
                <hr>
                <div class="form-group">
                  <label>Diagnosis</label>
                  <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                </div>
                <hr>
                <div class="form-group">
                  <label>Reports</label>
                  <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                </div>
                <hr>
                <div>
                  <label>Treatment</label>
                    <div class="input-group input-group-sm">
                        <input type="text" class="form-control">
                        <span class="input-group-btn">
                          <button type="button" id="tab" class="btn btn-info btn-flat">Go!</button>
                        </span>
                    </div>
                </div>
              </form>
            </div>
        </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
</div>
<!-- ./wrapper -->
<?php include '../html/js.html';?>
</body>
</html>