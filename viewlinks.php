<?php
require('top.php');





$sql="select link.*,categories.categories from link,categories where link.categories_id=categories.id  order by link.id desc";
$res=mysqli_query($con,$sql);
?>

				 
				<div>
				
					  <table >
						 <thead>
							<tr>
							   <th >#</th>
							   <th >ID</th>
							   <th>Categories</th>
							   <th >Name</th>
							   <th >Url</th>
							   <th >description</th>
							 
							</tr>
						 </thead>
						 <tbody>
							<?php 
							$i=1;
							while($row=mysqli_fetch_assoc($res)){?>
							<tr>
							   <td class="serial"><?php echo $i?></td>
							   <td><?php echo $row['id']?></td>
							   <td><?php echo $row['categories']?></td>
							   <td><?php echo $row['name']?></td>
							    <td><?php echo $row['url']?></td>
							 <td><?php echo $row['description']?></td>
							  
							
							</tr>
							<?php $i++;} ?>
						 </tbody>
					  </table>
	</div>
<?php
require('footer.inc.php');
?>