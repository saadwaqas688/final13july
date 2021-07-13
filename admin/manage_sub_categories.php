<?php
require('top.inc.php');
isAdmin();



$sql="select sub_categories.*,categories.categories from sub_categories,categories where categories.id=sub_categories.categories_id order by categories.categories asc";
$res=mysqli_query($con,$sql);
?>

		  
					  <table >
						 <thead>
							<tr>
							   <th >#</th>
						
							   <th>Categories</th>
							   <th>Sub Categories</th>
							   <th></th>
							</tr>
						 </thead>
						 <tbody>
							<?php 
							$i=1;
							while($row=mysqli_fetch_assoc($res)){?>
							<tr>
							   <td><?php echo $i?></td>
							  
							   <td><?php echo $row['categories']?></td>
							   <td><?php echo $row['sub_categories']?></td>
							   <td>
								<?php
								
								echo "<span class='button'><a href='add_sub_categories.php?id=".$row['id']."'>Edit</a></span> ;";
								
								
								
								?>
							   </td>
							</tr>
							<?php $i++; } ?>
						 </tbody>
					  </table>
	
<?php
require('footer.inc.php');
?>