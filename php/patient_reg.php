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
    <section id = "replace" class="content">
          <div class="box box-warning">
            <div class="box-header with-border">    
                <!-- Content Header (Page header) -->
                <section class="content-header">
                  <h1 style="text-align:center">
                      Registration
                  </h1>
                </section>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              
                <h3 style=" padding-bottom:20px">Personal Information</h3>
                <!-- text input -->
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-2">
                            <div style="float:right"><label>Name</label></div>
                        </div>
                        <div class="col-md-8">
                            <input type="text" id="Name" class="form-control" placeholder="Enter ...">
                        </div>
                    </div> 
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-2">
                            <div style="float:right"><label>Age</label></div>
                        </div>
                        <div class="col-md-8">
                            <input type="text" id="Age" class="form-control" placeholder="Enter ...">
                        </div>
                    </div> 
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-2">
                            <div style="float:right"><label>Sex</label></div>
                        </div>
                        <div class="col-md-8">
                            <input type="text" id="Sex" class="form-control" placeholder="Enter ...">
                        </div>
                    </div> 
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-2">
                            <div style="float:right"><label>Contact</label></div>
                        </div>
                        <div class="col-md-8">
                            <input type="text" id="Contact" class="form-control" placeholder="Enter ...">
                        </div>
                    </div> 
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-2">
                            <div style="float:right"><label>Prime</label></div>
                        </div>
                        <div class="col-md-8">
                            <input type="text" id="Prime" class="form-control" placeholder="Enter ...">
                        </div>
                    </div> 
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-2">
                            <div style="float:right"><label>Address</label></div>
                        </div>
                        <div class="col-md-8">
                            <textarea class="form-control" id="Address" rows="3" placeholder="Enter ..."></textarea>
                        </div>
                    </div> 
                </div>                  
                <hr>
                <div class="row" style="padding-top:15px;padding-bottom:15px">
                    <div class="col-md-5"></div>
                    <div class="col-md-2">
                        <button type="button" id="submit" class="btn btn-block btn-primary">Submit</button>
                    </div>
                    <div class="col-md-5"></div>
                </div>                  
              
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
$(document).ready(function(){
    $("#submit").click(function(){
                
        $.ajax({
                type: 'POST',
                url: 'patient_reg_ajax.php', 
                data: {Name : $('#Name').val(), Age : $('#Age').val(), Sex : $('#Sex').val(), Contact : $('#Contact').val(), Prime : $('#Prime').val(), Address : $('#Address').val()},
                success: function(html){
            $("#replace").html(html);
        }});
    });
});
</script>

</body>
</html>