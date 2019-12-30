<?php  
 $connect = mysqli_connect("localhost", "raymond", "1234", "fruits_grains");  
 $output = '';  
 if(isset($_POST["fg_id"]))  
 {  
      if($_POST["fg_id"] != '')  
      {  
           $sql = "SELECT * FROM list WHERE fg_id = '".$_POST["fg_id"]."'";  
      }  
      else  
      {  
           $sql = "SELECT * FROM list";  
      }  
      $result = mysqli_query($connect, $sql);  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '<div class="col-md-3"><div style="border:2px solid #D74894; background-color:#FFC0CB; color:black; padding:20px; margin-bottom:20px;">'.$row["list_name"].'</div></div>';  
      }  
      echo $output;  
 }  
 ?>  