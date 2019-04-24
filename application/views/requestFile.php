<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-users"></i> File Management
        <small>Add / Edit User</small>
      </h1>
    </section>
    
    <section class="content">
    
        <div class="row">
            <!-- left column -->
            <div class="col-md-8">
              <!-- general form elements -->
                
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Request Files</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    <?php $this->load->helper("form"); ?>
                    
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-6">                                
                                    <div class="form-group">              
                                        <input type="text" placeholder="Enter file name" class="form-control required" value="seo.txt" required="" id="requset_file">
                                    </div>                                    
                                </div><div class="col-md-4">
                            <button class="btn btn-primary" id="search" onclick="showmessage('message')">Request</button>                             
                            
                        </div>
                        <div class="col-md-12"> <label></label>                               
                                    <div class="form-group success" id="message" style="display:none">Request sent successfully !! </div></div>
                        <div class="col-md-12">                                
                                    <div class="form-group" id="result"></div></div>
                                <div class="col-md-6">                                
                                   
                                    
                                </div>
                                
                            </div>
                            
                            
                        </div><!-- /.box-body -->
    
                        
                    
                </div>
            </div>
            <div class="col-md-4">
                <?php
                    $this->load->helper('form');
                    $error = $this->session->flashdata('error');
                    if($error)
                    {
                ?>
                <div class="alert alert-danger alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <?php echo $this->session->flashdata('error'); ?>                    
                </div>
                <?php } ?>
                <?php  
                    $success = $this->session->flashdata('success');
                    if($success)
                    {
                ?>
                <div class="alert alert-success alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <?php echo $this->session->flashdata('success'); ?>
                </div>
                <?php } ?>
                
                <div class="row">
                    <div class="col-md-12">
                        <?php echo validation_errors('<div class="alert alert-danger alert-dismissable">', ' <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button></div>'); ?>
                    </div>
                </div>
            </div>
        </div>    
    </section>
    
</div>
<script>function showmessage(id){
document.getElementById(id).style.display='block';
}</script>
<!-- <script>
     // $('.search_data').click(function(){alert('jashdh')});
    function getRandomColor() {
  var letters = '123456789ABCDEF123456789ABCDEF';
  var color = '#';
  for (var i = 0; i < 6; i++) {
    color += letters[Math.floor(Math.random() * 30)];
  }
  return color;
}
var key='';
    $("#search").click(function(){
    var color_code=getRandomColor();
//$("#result").html('');
        $('#keys').append(' <button  class="btn" style="background:'+color_code+'">'+$('#search_key').val()+'</button>');
        key+=''+$('#search_key').val()+'_'+color_code.replace('#','')+'/';
window.sessionStorage.setItem("key",key);


  $.ajax({url: "<?php echo base_url('searchKey') ?>", type: "POST",
    async: true, 
    data: {'key':$('#search_key').val()}, success: function(result){
        //console.log(result);
       $('#search_key').val('');
       $samefile=0;
       

    var new_result=result.split("__");
   // console.log(new_result);
        for(var i = 0; i < new_result.length; i++){
$("#result p").each(function(index){
        //console.log(index+':'+ $( this ).text());
        if(new_result[i]==$( this ).text()) {
        $samefile=1;
        }
       });
          //  console.log(new_result[i]);
if($samefile==0) {
$("#result").append('<p><a class="search_data" href="fileData?filter='+new_result[i]+'"  >'+new_result[i]+'</a></p>');
$samefile=0;
        }
    }
        
    
  }});
});
  
</script> -->
<script src="<?php echo base_url(); ?>assets/js/addUser.js" type="text/javascript"></script>