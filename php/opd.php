<!DOCTYPE html>
<?php
    $data = "";
    if(isset($_GET['data']))
    {
        $data = $_GET['data'];
    }
?>
<html>
<head>
  <?php include '../html/head.html'; ?>    
</head>
<body class="hold-transition skin-blue fixed sidebar-mini" <?php if($data == "print"){echo 'onload="window.print();"';} ?> >
<div class="wrapper">
  <?php  
    include '../html/header.html';
    include '../html/sidebar.html';  
  ?>   

  <!-- Content Wrapper. Contains page content -->
    <?php
 if($data == "Old")
    {
        echo'
<div class="content-wrapper">
      <!-- Main content -->
    <section class="content">
          <div class="box box-warning">
            <div class="box-header with-border">    
                <!-- Content Header (Page header) -->
                <section class="content-header">
                  <h1 style="text-align:center">
                      Search Patient
                  </h1>
                </section>
            </div>
            <div class="box-body">
                    <form method="post" action="../db/db_search_patient.php">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-2">
                                    <div style="padding-left:60px;padding-top:9px"><label>Search By</label></div>
                                </div>
                                <div class="col-md-2">
                                  <div class="radio ">
                                    <label>
                                      <input type="radio" name="optionsRadios" id="optionsRadios1" value="P_Number">
                                      Patient Number
                                    </label>
                                  </div>                                    
                                </div>
                                <div class="col-md-2">
                                  <div class="radio">
                                    <label>
                                      <input type="radio" name="optionsRadios" id="optionsRadios1" value="C_Number">
                                      Contact Number
                                    </label>
                                  </div>                                                                        
                                </div>                        
                            </div>
                        </div>                    
                        <div id="Patient_Number" class="form-group">
                            <div class="row">
                                <div class="col-md-2">
                                    <div style="padding-left:23px"><label>Patient Number</label></div>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" placeholder="Enter ...">
                                </div>                        
                                <div class="col-md-1">
                                    <button id="btn2" type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </div>
                        <div id="Contact_Number" class="form-group">
                            <div class="row">
                                <div class="col-md-2">
                                    <div style="padding-left:20px"><label>Contact Number</label></div>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" placeholder="Enter ...">
                                </div>                        
                                <div class="col-md-1">
                                    <button id="btn2" type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </div>
                    </form>
          </div>
    </section>
</div>
';
    }
        else if($data=="1")
        {
            echo'
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
              <form id="form2" method="post" action="../db/db_opd.php">
                <h3 style=" padding-bottom:20px">Personal Information</h3>
                <!-- text input -->
                <div class="row">
                    <div class="col-md-8">
                        <div class="row form-group">
                            <div class="col-md-2">
                                <div style="float:right"><label>Name</label></div>
                            </div>
                            <div class="col-md-8">
                                Vishalkumar Rajendrabhai Chaudhary
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-2">
                                <div style="float:right"><label>Prime</label></div>
                            </div>
                            <div class="col-md-8">
                                Yes
                            </div>
                        </div> 
                        <div class="row form-group">
                            <div class="col-md-2">
                                <div style="float:right"><label>Address</label></div>
                            </div>
                            <div class="col-md-8">
                                C/31, Snehal Park Society, Warsiya Ring Road.
                            </div>
                        </div>                         
                    </div>
                    <div class="col-md-4">
                         <div class="row form-group">
                            <div class="col-md-2">
                                <div style="float:right"><label>Sex</label></div>
                            </div>
                            <div class="col-md-8">
                                Male
                            </div>
                        </div> 
                        <div class="row form-group">
                            <div class="col-md-2">
                                <div style="float:right"><label>Age</label></div>
                            </div>
                            <div class="col-md-8">
                                22
                            </div>
                        </div> 
                        <div class="row form-group">
                            <div class="col-md-2">
                                <div style="float:right"><label>Contact</label></div>
                            </div>
                            <div class="col-md-8">
                                8238088093
                            </div>
                        </div>                    
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel-group" id="accordion">
                          <div class="panel panel-default">
                            <div class="panel-heading" data-toggle="collapse" data-parent="#accordion" data-target="#collapse1">
                              <h4 class="panel-title"> 
                                Collapsible Group 1
                              </h4>
                            </div>
                            <div id="collapse1" class="panel-collapse collapse">
                              <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                              sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                              minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                              commodo consequat.</div>
                            </div>
                          </div>
                          <div class="panel panel-default">
                            <div class="panel-heading" data-toggle="collapse" data-parent="#accordion" data-target="#collapse2">
                              <h4 class="panel-title"> 
                                Collapsible Group 2
                              </h4>
                            </div>
                            <div id="collapse2" class="panel-collapse collapse">
                              <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                              sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                              minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                              commodo consequat.</div>
                            </div>
                          </div>
                          <div class="panel panel-default">
                            <div class="panel-heading" data-toggle="collapse" data-parent="#accordion" data-target="#collapse3">
                              <h4 class="panel-title"> 
                                Collapsible Group 3
                              </h4>
                            </div>
                            <div id="collapse3" class="panel-collapse collapse">
                              <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                              sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                              minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                              commodo consequat.</div>
                            </div>
                          </div>
                        </div>
                    </div>
                </div>
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
                <div class="ADD">
                    <div class="row form-group">
                        <div class="col-md-2">
                            <div style="float:right"><label>Medicine Name</label></div>
                        </div>
                        <div class="col-md-4" id="the-basics">
                            <input type="text" id="medicine_name" name="Medicine_Name[]" class="form-control" placeholder="Enter ...">
                        </div>
                        <div class="col-md-3">
                            <select class="form-control" name="Type[]">
                                <option>Tablet</option>
                                <option>Syrup</option>
                            </select>
                        </div>
                        <div class="col-md-1 form-group">
                            <input type="text" id="course" name="Quantity[]" class="form-control" placeholder="Quantity"> 
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2"></div>
                        <div class="col-md-4 form-group">
                            <select class="form-control" name="Describtion[]">
                                <option>Empty Stumach</option>
                                <option>Syrup</option>
                            </select>                            
                        </div>
                        <div class="col-md-3 form-group">
                            <select class="form-control" name="Timing[]">
                                <option> 1 - 0 - 0 </option><option> 0 - 1 - 0 </option><option> 0 - 0 - 1 </option><option> 1 - 1 - 0 </option><option> 1 - 0 - 1 </option><option> 0 - 1 - 1 </option><option> 1 - 1 - 1 </option>
                            </select>
                        </div>
                        <div class="col-md-1 form-group">
                            <button type="button" class="medicine_button btn btn-block btn-info">Add</button>
                        </div>
                    </div>
                </div>
                
                <hr>
                <h3 style=" padding-bottom:20px">Payment</h3>
                
                <div class="row form-group">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <div class="col-md-2">
                            <div class="checkbox">
                                <label>
                                    <input id="Consultation" type="checkbox" value="Consultation">
                                    Consultation
                                </label>
                            </div>               
                        </div>
                        <div class="col-md-2">
                            <div class="checkbox">
                                <label>
                                    <input id="Medicines" type="checkbox" value="Medicines">
                                    Medicines
                                </label>
                            </div>               
                        </div>
                        <div class="col-md-2">
                            <div class="checkbox">
                                <label>
                                    <input id="Injection" type="checkbox" value="Injection">
                                    Injection
                                </label>
                            </div>               
                        </div>
                        <div class="col-md-2">
                            <div class="checkbox">
                                <label>
                                    <input id="Home" type="checkbox" value="Home">
                                    Home
                                </label>
                            </div>               
                        </div>
                        <div class="col-md-2">
                            <div class="checkbox">
                                <label>
                                    <input id="Procedure" type="checkbox" value="Procedure">
                                    Procedure
                                </label>
                            </div>               
                        </div>
                        <div class="col-md-2">
                            <div class="checkbox">
                                <label>
                                    <input id="Other" type="checkbox" value="Other">
                                    Other
                                </label>
                            </div>               
                        </div>
                    </div>
                </div>
                <div class="row Consultation form-group">
                    <div class="col-md-2">
                        <div style="float:right"><label>Consultation</label></div>
                    </div>
                    <div class="col-md-8">
                        <input type="text" id="Consultation" class="form-control" placeholder="Enter ...">    
                    </div>
                </div>
                <div class="row Medicines form-group">
                    <div class="col-md-2">
                        <div style="float:right"><label>Medicines</label></div>
                    </div>
                    <div class="col-md-8">
                        <input type="text" id="Medicines" class="form-control" placeholder="Enter ...">    
                    </div>
                </div>
                <div class="row Injection form-group">
                    <div class="col-md-2">
                        <div style="float:right"><label>Injection charges</label></div>
                    </div>
                    <div class="col-md-8">
                        <input type="text" id="Injection" class="form-control" placeholder="Enter ...">    
                    </div>
                </div>
                <div class="row Home form-group">
                    <div class="col-md-2">
                        <div style="float:right"><label>Home Visit</label></div>
                    </div>
                    <div class="col-md-8">
                        <input type="text" id="Home" class="form-control" placeholder="Enter ...">    
                    </div>
                </div>
                <div class="row Procedure form-group">
                    <div class="col-md-2">
                        <div style="float:right"><label>Procedure Charges</label></div>
                    </div>
                    <div class="col-md-8">
                        <input type="text" id="Procedure" class="form-control" placeholder="Enter ...">    
                    </div>
                </div>
                <div class="row Other form-group">
                    <div class="col-md-2">
                        <div style="float:right"><label>Other</label></div>
                    </div>
                    <div class="col-md-8">
                        <input type="text" id="Other" class="form-control" placeholder="Enter ...">    
                    </div>
                </div>                    
                <hr>
                <div class="row">
                    <div class="col-md-4"></div>
                    <div class="col-md-3">
                        <div class="row"  style="padding-left:75px;border:1px solid black;margin:0 0 0 0px">
                            <div class="checkbox">
                                <label>
                                    <input name="print" type="checkbox" value="print">
                                    WANT PRINT <i class="fa fa-print"></i>
                                </label>
                            </div>                                               
                        </div>
                    </div>
                    <div class="col-md-2">
                        <!--<a href="print-subscription.php" target="_blank" class="btn btn-block btn-info">
                            <i class="fa fa-print"></i> Print
                        </a>-->
                    </div>
                </div>                

                <div class="row" style="padding-top:15px;padding-bottom:15px">
                    <div class="col-md-4"></div>
                    <div class="col-md-3">                       
                        <button type="submit" class="btn btn-block btn-info">Submit</button>
                    </div>
                    <div class="col-md-2">
                        <!--<a href="print-subscription.php" target="_blank" class="btn btn-block btn-info">
                            <i class="fa fa-print"></i> Print
                        </a>-->
                    </div>
                </div>                
              </form>              
            </div>
        </div>
    </section>
    <!-- /.content -->
  </div>';
            
        }
    else
    {
        echo'
<div class="content-wrapper">
  <!-- Main content -->
  <section class="invoice" style="padding-left:25px;padding-right:25px">
    <!-- title row -->
      <div >
        <div class="row">
          <div class="col-xs-12">
            <h2 class="page-header">
                <div style="padding-left:20px;padding-right:20px">
                    <div class="row" style="border-bottom:1px solid black">
                        <div class="col-md-2" style="padding-bottom:5px">
                            <img src="../image/symbol.jpg" style="width:100%;height:90px">
                        </div>
                        <div class="col-md-7">
                            <img src="../image/name.png" style="width:100%;padding-left:20px">         
                        </div>
                         <div class="col-md-3" style="padding-bottom:5px">
                            <div style="text-align:right"> 
                                <div class="row" ><small>Dr. Rohan Desai</small></div>
                                <div class="row" ><small>M.B.B.S, C.I.H</small></div>
                                <div class="row" ><small>Rog. No. : G-42459</small></div>
                                <div class="row" ><small>&#40;MO&#41;8238021693</small></div>
                             </div>
                        </div>                       
                    </div> 
                    <div class="row" style="mrgin-top:0px">
                        <div class="col-md-8">
                            <div class="row">
                                <p><small>G-7, Gokul Complex, Poonam Nagar Char Rasta, Behind Avsar Party Plot, Sama-Savali Road, Vadodara-08.</small></p>
                            </div>
                        </div>
                         <div class="col-md-4">
                              <div style="text-align:right">
                                <div class="row" ><small>Timing &#40;Mon-Sat&#41;</small></div>
                                <div class="row" ><small>10am to 1pm &nbsp;&amp;&nbsp;6pm to 9pm </small></div>
                             </div>
                        </div>
                    </div>
                </div>
            </h2>
          </div>

          <!-- /.col -->
        </div>
        <!-- info row -->
        <div class="row invoice-info">
                <div class="row" style="padding-left:20px;padding-right:20px">
                    <div class="col-md-7">
                        <div class="row ">
                            <div class="col-md-4">
                                <div style="float:right"><label>Patient ID</label></div>
                            </div>
                            <div class="col-md-8">
                                1234
                            </div>
                        </div>                         
                    </div>
                    <div class="col-md-5">
                         <div class="row ">
                            <div class="col-md-3">
                                <div style="float:right"><label>Date</label></div>
                            </div>
                            <div class="col-md-3">
                                22/22/2018
                            </div>
                        </div>                    
                    </div>
                </div>
                <div class="row" style="padding-left:20px;padding-right:20px">
                    <div class="col-md-7">
                        <div class="row ">
                            <div class="col-md-4">
                                <div style="float:right"><label>Patient Name</label></div>
                            </div>
                            <div class="col-md-8">
                                Vishalkumar Rajendrabhai Chaudhary
                            </div>
                        </div>                         
                    </div>
                    <div class="col-md-5">
                         <div class="row ">
                            <div class="col-md-3">
                                <div style="float:right"><label>Age</label></div>
                            </div>
                            <div class="col-md-3">
                                22
                            </div>
                            <div class="col-md-3">
                                <div style="float:right"><label>Sex</label></div>
                            </div>
                            <div class="col-md-3">
                                Male
                            </div>
                        </div>                    
                    </div>
                </div>
                

        </div>
        <!-- /.row -->

        <!-- Table row -->
          <div class="row" style="font-size:30px;text-align:center;padding-top:10px">
                    -: Prescribtion :-
                </div>
        <div class="row">
          <div class="col-xs-12 table-responsive">
            <table class="table table-striped">
              <thead>
              <tr>
                <th>Medicine Type</th>
                <th>Medicine Name</th>
                <th>Description</th>
                <th>Timings</th>
              </tr>
              </thead>
              <tbody>
              <tr>
                <td>Tablet</td>
                <td>l-dio1</td>
                <td></td>
                <td>morning-night</td>
              </tr>
              <tr>
                <td>Tablet</td>
                <td>l-dio1</td>
                <td>empty stomach</td>
                <td>once a day</td>
              </tr>
              <tr>
                <td>Tablet</td>
                <td>l-dio1</td>
                <td></td>
                <td>morning-noon-night</td>
              </tr>
              <tr>
                <td>Tablet</td>
                <td>l-dio1</td>
                <td></td>
                <td>1-0-1</td>
              </tr>
              </tbody>
            </table>
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
          
          <div class="row" style="font-size:30px;text-align:center;padding-bottom:10px">
                    -: Payment :-
                </div>
        <div class="row">
          <div class="col-xs-12 table-responsive">
            <table class="table table-striped">
              <tbody>
              <tr>
                <td>Consultation</td>
                <td>100</td>
              </tr>
              <tr>
                <td>Medicines</td>
                <td>100</td>
              </tr>
              <tr>
                <td>Injection Charges</td>
                <td>100</td>
              </tr>
              <tr>
                <td>Home visit</td>
                <td>100</td>
              </tr>
              <tr>
                <td>Procedure Charges</td>
                <td>100</td>
              </tr>
              <tr>
                <td>Others</td>
                <td>100</td>
              </tr>
              <tr>
                <td></td>
                <td>600</td>
              </tr>
              </tbody>
            </table>
          </div>
          <!-- /.col -->
        </div>
          <br>
        <div>
            <div class="row">
                <div class="col-md-8"></div>
                <div class="col-md-4">
                    <u>                             &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    </u>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8"></div>
                <div class="col-md-4" style="text-align:center">
                    Stamp &amp; Signature
                </div>
            </div>
        </div>
            
    
        <!-- /.row -->
    </div>
  </section>
  <!-- /.content -->        
</div>
    ';
    }
    ?>
  <!-- /.content-wrapper -->
</div>
<!-- ./wrapper -->
<?php include '../html/js.html';?>
<script>
    $(document).ready(function(){
        $("#Patient_Number").hide();
        $("#Contact_Number").hide();
        
    $('input[type=radio][name=optionsRadios]').change(function(){
      if($(this).val()=='P_Number')
          {
                $("#Patient_Number").show();
                $("#Contact_Number").hide();              
          }
      else
          {
                $("#Patient_Number").hide();
                $("#Contact_Number").show();                        
          }
      })        
    });
</script>
    
<script type="text/javascript">
    $(document).ready(function(){
        
        $(".Consultation").hide();
        $(".Medicines").hide();
        $(".Injection").hide();
        $(".Home").hide();
        $(".Procedure").hide();
        $(".Other").hide();
        
        $('input[type="checkbox"]').click(function(){
            var inputValue = $(this).attr("value");
            $("." + inputValue).toggle();
        });
    });
</script>
    
<script>
    $(document).ready(function() {
        var max_fields      = 10; //maximum input boxes allowed
        var wrapper         = $(".ADD"); //Fields wrapper
        var add_button      = $(".medicine_button"); //Add button ID

        var x = 1; //initlal text box count
        $(add_button).click(function(e){ //on add input button click
            e.preventDefault();
            if(x < max_fields){ //max input box allowed
                x++; //text box increment
//                $(wrapper).append('<div><div class="row"><div class="col-md-2"><div style="float:right"><label>Medicine Name</label></div></div><div class="col-md-4 MEDICINE"><input type="text" id="medicine_name" class="form-control" placeholder="Enter ..."></div><div class="col-md-3"><div class="row"><div class="col-md-3"><div class="checkbox"><label><input id="morning" type="checkbox">Morning</label></div></div><div class="col-md-3"><div class="checkbox"><label><input id="noon" type="checkbox">Noon</label></div></div><div class="col-md-3"><div class="checkbox"><label><input id="night" type="checkbox">Night</label></div></div><div class="col-md-3"><input type="text" id="course" class="form-control" placeholder="Enter ..."></div></div></div><div class="col-md-1"><button type="button" class="remove_field btn btn-block btn-info">Remove</button></div></div></div>'); //add input box
                $(wrapper).append('<div><div class="row form-group"><div class="col-md-2"><div style="float:right"><label>Medicine Name</label></div></div><div class="col-md-4" id="the-basics"><input type="text" id="medicine_name" name="Medicine_Name[]" class="form-control" placeholder="Enter ..."></div><div class="col-md-3"><select class="form-control" name="Type[]"><option>Tablet</option><option>Syrup</option></select></div><div class="col-md-1 form-group"><input type="text" id="course" name="Quantity[]" class="form-control" placeholder="Quantity"></div></div><div class="row"><div class="col-md-2"></div><div class="col-md-4 form-group"><select class="form-control" name="Describtion[]"><option>Empty Stumach</option><option>Syrup</option></select></div><div class="col-md-3 form-group"><select class="form-control" name="Timing[]"><option> 1 - 0 - 0 </option><option> 0 - 1 - 0 </option><option> 0 - 0 - 1 </option><option> 1 - 1 - 0 </option><option> 1 - 0 - 1 </option><option> 0 - 1 - 1 </option><option> 1 - 1 - 1 </option></select></div><div class="col-md-1 form-group"><button type="button" class="remove_field btn btn-block btn-info">Remove</button></div></div></div>'); 
                }                      
            }
        );
        
        $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
            e.preventDefault(); $(this).parent('div').parent('div').parent('div').remove(); x--;
        })
    });
</script>  
    
<script>
    $(document).ready(function(){
         
    });
</script>
</body>
</html>