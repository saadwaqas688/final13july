 <?php  require('top.php'); ?>
                  <?php
                 
				   if(isset($_GET['search'])){
                  
                    $search_term =  $_GET['search'];
					
                  ?>
                  <h2 >Search : <?php echo $search_term; ?></h2>
				 
                  <?php

                   
                   
                    

                    $sql = "SELECT link.url
                     FROM link
                    
                    WHERE link.name LIKE '%{$search_term}%' OR link.description LIKE '%{$search_term}%'
                      LIMIT 0, 5 ";

                    $result = mysqli_query($con, $sql) or die("Query Failed.");
                    if(mysqli_num_rows($result) > 0){
						
                      while($row = mysqli_fetch_assoc($result)) {
                  ?>
                   
                        
                                  <div ><?php echo $row['url']; ?></div>
                                  
                                 
                                    
                                     
                                  
                                 
                                  
                                  
                   
					  
					  <?php
                      }
					  
                    }else{
                      echo "<h2>No Record Found.</h2>";
                    }

                  
                    ?>
					 <?php
					}else{
                    echo "<h2>No Record Found.</h2>";
                  }
                    ?>
         

<?php
require('footer.inc.php');
?>