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
                    <div class="box-header"><h3 class="box-title">Search Key</h3><br>
                        <?php  $allkey=$this->input->get("key");
                    $all_search_key=explode('/',$allkey);
                    //var_dump($all_search_key);
                    foreach ($all_search_key as  $value) {
                        if ($value!=null) {
                            $key_color=explode('_',$value);
                            echo ' <button  class="btn" style="background:#'.$key_color[1].'">'.$key_color[0].'</button>';
                    }} 


                    $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                    
                    if ($this->input->get('key')==null || strlen($this->input->get('key'))<1){?> 
                         <script  type="text/javascript">var key=window.sessionStorage.getItem("key");
                         window.location.href='<?php echo $actual_link ?>'+'&key='+key;
                         // console.log(key);
                    </script>

                        <?php } ?>
                    <br>
                    <script  type="text/javascript">/*var key=window.sessionStorage.getItem("key");console.log(key);*/
                    </script>
                        <hr>

                    </div><!-- /.box-header -->
                    <!-- form start -->
<div class="col-md-12 all_text">
                    <?php $file=$this->input->get("filter");
                    

$file = fopen($file,"r");

while(! feof($file))
  {
    $line=fgets($file);
  //echo '<p>'.fgets($file). "</p>";
  $word_arr = explode(" ", $line); //return word array
  //var_dump($line);
  $new_line='';
        foreach($word_arr as $word){
            //$word = filter_var($word, FILTER_SANITIZE_STRING);
            foreach ($all_search_key as  $value) {
                        if ($value!=null) {
                            $key_color=explode('_',$value);
                            // echo ' <button  class="btn" style="background:#'.$key_color[1].'">'.$key_color[0].'</button>';
                            if (strtolower(trim($key_color[0]))==strtolower(trim($word))) {
                             $word='<span class="btn" style="background:#'.$key_color[1].'">'.$word.'</span>'   ;
                            }
                    }
                }
           $new_line=$new_line." ".$word; // required output
        }
echo '<p>'.$new_line.'</p>';

  }

fclose($file);
 /*$handle = fopen($file, "r");
if ($handle) {
    while (($line = fgets($handle)) !== false) {
        // process the line read.
        $word_arr = explode(" ", $line); //return word array
        foreach($word_arr as $word){
            $word = filter_var($word, FILTER_SANITIZE_STRING);
            echo '<p>'.$word.'</p>'; // required output
        }
    }
    fclose($handle);
} else {
    // error while opening file.
    echo "error";
}*/
//echo '<p>'.file_get_contents($file).'<p>';
                     ?>
                </div>
            </div>
            </div>
        </div>    
    </section>
    
</div>
<script src="<?php echo base_url(); ?>assets/js/addUser.js" type="text/javascript"></script>