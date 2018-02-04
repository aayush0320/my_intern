<?php
$Name = $_POST["Name"];
$Sex = $_POST["Sex"];
$Age = $_POST["Age"];
$Contact = $_POST["Contact"];
$Prime = $_POST["Prime"];
$Address = $_POST["Address"];
echo'
    <section class="content">
          <div class="box box-warning">
            <div class="box-header with-border">    
                <!-- Content Header (Page header) -->
                <section class="content-header">
                  <h1 style="text-align:center">
                      Registration Done.
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
                            <div style="float:right"><label>Patient Id</label></div>
                        </div>
                        <div class="col-md-8">
                            For instance 1
                        </div>
                    </div> 
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-2">
                            <div style="float:right"><label>Name</label></div>
                        </div>
                        <div class="col-md-8">
                            '.$Name.'
                        </div>
                    </div> 
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-2">
                            <div style="float:right"><label>Age</label></div>
                        </div>
                        <div class="col-md-8">
                            '.$Age.'
                        </div>
                    </div> 
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-2">
                            <div style="float:right"><label>Sex</label></div>
                        </div>
                        <div class="col-md-8">
                            '.$Sex.'
                        </div>
                    </div> 
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-2">
                            <div style="float:right"><label>Contact</label></div>
                        </div>
                        <div class="col-md-8">
                            '.$Contact.'
                        </div>
                    </div> 
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-2">
                            <div style="float:right"><label>Prime</label></div>
                        </div>
                        <div class="col-md-8">
                            '.$Prime.'
                        </div>
                    </div> 
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-2">
                            <div style="float:right"><label>Address</label></div>
                        </div>
                        <div class="col-md-8">
                            '.$Address.'
                        </div>
                    </div> 
                </div>                  
                <hr>
                <div class="row" style="padding-top:15px;padding-bottom:15px">
                    <div class="col-md-5"></div>
                    <div class="col-md-2">
                        <button type="submit" id="submit" class="btn btn-block btn-primary">Done</button>
                    </div>
                    <div class="col-md-5"></div>
                </div>                  
            </div>
        </div>
    </section>

';
?>