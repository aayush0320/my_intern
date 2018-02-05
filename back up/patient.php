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
<body class="hold-transition skin-blue fixed sidebar-mini">
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
                    <form method="post" action="search_patient.php">
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
        else
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
              <form role="form" method="post" action="old_patient.php">
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
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="checkbox">
                                        <label>
                                            <input id="morning" name="morning[]" value="m1" type="checkbox">
                                            Morning
                                        </label>
                                    </div>               
                                </div>
                                <div class="col-md-4">
                                    <div class="checkbox">
                                        <label>
                                            <input id="noon" name="noon[]" type="checkbox">
                                            Noon
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="checkbox">
                                        <label>
                                            <input id="night" name="night[]" type="checkbox">
                                            Night
                                        </label>
                                    </div>
                                </div>
                            </div>
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
                
                <div class="row" style="padding-top:15px;padding-bottom:15px">
                    <div class="col-md-4"></div>
                    <div class="col-md-2">
                        <button type="submit" class="btn btn-block btn-info">Submit</button>
                    </div>
                    
                    <div class="col-md-2">
                        <a href="print-subscription.php" target="_blank" class="btn btn-block btn-info">
                            <i class="fa fa-print"></i> Print
                        </a>
                    </div>
                    <div class="col-md-4"></div>
                </div>                
              </form>
            </div>
        </div>
    </section>
    <!-- /.content -->
  </div>';
            
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
                $(wrapper).append('<div><div class="row form-group"><div class="col-md-2"><div style="float:right"><label>Medicine Name</label></div></div><div class="col-md-4" id="the-basics"><input type="text" id="medicine_name" name="Medicine_Name[]" class="form-control" placeholder="Enter ..."></div><div class="col-md-3"><select class="form-control" name="Type[]"><option>Tablet</option><option>Syrup</option></select></div><div class="col-md-1 form-group"><input type="text" id="course" name="Quantity[]" class="form-control" placeholder="Quantity"></div></div><div class="row"><div class="col-md-2"></div><div class="col-md-4 form-group"><select class="form-control" name="Describtion[]"><option>Empty Stumach</option><option>Syrup</option></select></div><div class="col-md-3 form-group"><div class="row"><div class="col-md-4"><div class="checkbox"><label><input id="morning" name="morning[]" value="m'+x+'" type="checkbox">Morning</label></div></div><div class="col-md-4"><div class="checkbox"><label><input id="noon" name="noon[]" type="checkbox">Noon</label></div></div><div class="col-md-4"><div class="checkbox"><label><input id="night" name="night[]" type="checkbox">Night</label></div></div></div></div><div class="col-md-1 form-group"><button type="button" class="remove_field btn btn-block btn-info">Remove</button></div></div></div>'); 
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