<?php  
 $connect = mysqli_connect("localhost", "root", "", "drdo");  
 $output = '';  

 $sql = "SELECT * FROM part1 WHERE profile LIKE '%".$_POST["search"]."%'";  
 $result = mysqli_query($connect, $sql);  
 if(mysqli_num_rows($result) > 0)  
 {  
      $output .= '<h4 align="center">Search Result</h4>';  
      $output .= '<div class="table-responsive">  
                          <table class="table table bordered">  
                               <tr>  
                                    <th>Student Name</th>  
                                    <th>Roll number</th>  
                                    <th>Profile</th>  
                                    <th>E-mail</th>  
                                    <th>Mobile</th>
                                   <!--  <th>brief</th> -->
                               </tr>
                            ';  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '  
                <tr>  
                     <td><a href="adminpdf.php?id='.$row["2"].' "' .'>'.$row["1"].'</a></td>  
                     <td>'.$row["2"].'</td>  
                     <td>'.$row["14"].'</td>  
                     <td>'.$row["3"].'</td>  
                     <td>'.$row["5"].'</td>
                    <!-- <td>'.substr($row[18], 0, 100).'</td> -->
                </tr>
           ';  
      }  
      echo $output;  
 }  
 else  
 {  
      echo 'Data Not Found';  
 }  



 ?>  