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
            
                <div class="box box-primary col-md-12">
                    <div class="box-header"><h3 class="box-title">Top 10 frequently used key</h3><br>
                        
                    <br>
                    <script  type="text/javascript">/*var key=window.sessionStorage.getItem("key");console.log(key);*/
                    </script>
                        

                    </div><!-- /.box-header -->
                    <!-- form start -->
<div class="col-md-12 all_text" id="test" ><p>
                    <?php $file=$this->input->get("filter"); 

                    
                                  

$color_code=['#838073','#5cc5c4','#e8d725','#31623e','#614149','#625518','#935936','#449967','#414197','#974697'];

 $handle = fopen($file, "r");

$datas=file_get_contents($file);
$data_arr=explode(' ',$datas);
$vals = array_count_values($data_arr);

arsort($vals);
$i=0;
$top_10_key=array();
$top_10_key_rep=array();
$not_key=['This','this','that','That','with','each','which','for'];
foreach ($vals as $key => $value) {
  if (strlen($key)>=4) {
    if (in_array($key,$not_key))
  {
 // echo "Match found";
  }
else
  {
    //echo $value.'==';
    array_push($top_10_key,$key);
   // array_push($top_10_key_rep,$value);
 //echo "Match not found";
  }
    
  }  
}

$new_top_10_key=array();

$new_top_10_key_rep=array();

for ($i=0; $i <10 ; $i++) { 
  echo ' <span class="btn" style="background:'.$color_code[$i].'">'.$top_10_key[$i].'</span>';
  array_push($new_top_10_key,$top_10_key[$i]);
}
echo '<hr>';

//var_dump($new_top_10_key);
//$file = fopen($file,"r");

while(! feof($handle))
  {
    
    $line=fgets($handle);
  //echo '<p>'.fgets($file). "</p>";
  $word_arr = explode(" ", $line); //return word array
  //var_dump($line);
  $new_line='';
        foreach($word_arr as $x=>$word){    
         
                          
                            
                            if (in_array($word,$new_top_10_key)){$indx=array_search($word,$new_top_10_key);
                             $word='<span class="btn" style="background:'.$color_code[$indx].'">'.$word.'</span>';
                            }
                   
           
           $new_line=$new_line." ".$word; // required output
        }
echo '<p>'.$new_line.'</p>';

  }
fclose($handle);
                 ?>
                   </p>
                </div>
            </div>
            </div>
        </div>    
    </section>
    

                       
</div>
<script src="<?php echo base_url(); ?>assets/js/addUser.js" type="text/javascript"></script>