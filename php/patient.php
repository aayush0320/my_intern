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
                  <h1 style="text-align:center">
                      OPD FORM
                  </h1>
                </section>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form role="form">
                <h3 style=" padding-bottom:20px">Personal Information</h3>
                <!-- text input -->
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-2">
                            <div style="float:right"><label>Name</label></div>
                        </div>
                        <div class="col-md-8">
                            <input type="text" id="" class="form-control" placeholder="Enter ...">
                        </div>
                    </div> 
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-2">
                            <div style="float:right"><label>Age</label></div>
                        </div>
                        <div class="col-md-8">
                            <input type="text" id="" class="form-control" placeholder="Enter ...">
                        </div>
                    </div> 
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-2">
                            <div style="float:right"><label>Sex</label></div>
                        </div>
                        <div class="col-md-8">
                            <input type="text" id="" class="form-control" placeholder="Enter ...">
                        </div>
                    </div> 
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-2">
                            <div style="float:right"><label>Contact</label></div>
                        </div>
                        <div class="col-md-8">
                            <input type="text" id="" class="form-control" placeholder="Enter ...">
                        </div>
                    </div> 
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-2">
                            <div style="float:right"><label>Prime</label></div>
                        </div>
                        <div class="col-md-8">
                            <input type="text" id="" class="form-control" placeholder="Enter ...">
                        </div>
                    </div> 
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-2">
                            <div style="float:right"><label>Address</label></div>
                        </div>
                        <div class="col-md-8">
                            <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                        </div>
                    </div> 
                </div>                  
<!--
                <div class="form-group">
                  <label>Text Disabled</label>
                  <input type="text" class="form-control" placeholder="Enter ..." disabled>
                </div>
-->
                <!-- textarea -->
                <hr>
                <h3 style=" padding-bottom:20px">Diagnosis</h3>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-2">
                            <div style="float:right"><label>Eleboration</label></div>
                        </div>
                        <div class="col-md-8">
                            <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                        </div>
                    </div> 
                </div>
                <hr>
                <h3 style=" padding-bottom:20px">Reports</h3>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-2">
                            <div style="float:right"><label>List</label></div>
                        </div>
                        <div class="col-md-8">
                            <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                        </div>
                    </div> 
                </div>
                <hr>
                <h3 style=" padding-bottom:20px">Treatment</h3>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-2">
                            <div style="float:right"><label>Medicine Name</label></div>
                        </div>
                        <div class="col-md-4">
                            <input type="text" id="medicine_name" class="form-control" placeholder="Enter ...">
                        </div>
                        <div class="col-md-3">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="checkbox">
                                            <label>
                                                <input id="morning" type="checkbox">
                                                Morning
                                            </label>
                                        </div>               
                                    </div>
                                    <div class="col-md-3">
                                        <div class="checkbox">
                                            <label>
                                                <input id="noon" type="checkbox">
                                                Noon
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="checkbox">
                                            <label>
                                                <input id="night" type="checkbox">
                                                Night
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <input type="text" id="course" class="form-control" placeholder="Enter ...">
                                    </div>
                                </div>
                        </div>
                        <div class="col-md-1">
                            <button type="button" id="medicine_button" class="btn btn-block btn-info">Add</button>
                        </div>
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
<script>
    var x = document.getElementsById("tab-in");
    ("#tab-but").click(function(){
       $ajax({
          url:"../ajax/tablet-dropdowns.php",
          data:'data ='+x,
          type:"POST",
          success:function(result)
           {
                $(".drop-down").html(result);
           }
       }); 
    });
</script>
</body>
</html>