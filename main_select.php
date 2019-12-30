<?php   
 $connect = mysqli_connect("localhost", "raymond", "1234", "fruits_grains");  
 function fill_fg($connect)  
 {  
      $output = '';  
      $sql = "SELECT * FROM fg";  
      $result = mysqli_query($connect, $sql);  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '<option value="'.$row["fg_id"].'">'.$row["fg_name"].'</option>';  
      }  
      return $output;  
 }  
 function fill_list($connect) 
{
     //Stay Patient and trust your Journey :)
     //Group 9
}
 ?>
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Group Number 9 - Fruits & Grains</title>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
      </head>  
      <body> 
       <br /><br />  
           <div class="container">  
                <h3>  
                     <select name="fg" id="fg">  
                          <option value="">Click here to Select Fruits or Grains</option>  
                          <?php echo fill_fg($connect); ?>  
                     </select>  
                     <br /><br />  
                     <div class="row" id="show_list">  
                          <?php echo fill_list($connect);?>  
                     </div>
                </h3>  
             </div>  
      </body>  
 </html>  
 <script>  
 $(document).ready(function(){  
      $('#fg').change(function(){  
           var fg_id = $(this).val();  
           $.ajax({  
                url:"data_load.php",  
                method:"POST",  
                data:{fg_id:fg_id},  
                success:function(data){  
                     $('#show_list').html(data);  
                }  
           });  
      });  
 });  
 </script>  