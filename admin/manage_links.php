<?php
require('top.inc.php');



if(isset($_GET['type']) && $_GET['type']!=''){
	$type=get_safe_value($con,$_GET['type']);
	
	
	if($type=='delete'){
		$id=get_safe_value($con,$_GET['id']);
		$delete_sql="delete from link where id='$id' ";
		mysqli_query($con,$delete_sql);
	}
}

$sql="select link.*,categories.categories from link,categories where link.categories_id=categories.id  order by link.id desc";
$res=mysqli_query($con,$sql);
?>

				
				<div>
				
					  <table >
						 <thead>
							<tr>
							   <th >#</th>
							  
							   <th >Categories</th>
							   <th >Name</th>
							   <th>URL</th>
							   <th >description</th>
							  <th>Action</th>
							</tr>
						 </thead>
						 <tbody>
							<?php 
							$i=1;
							while($row=mysqli_fetch_assoc($res)){?>
							<tr>
							   <td ><?php echo $i?></td>
							   
							   <td><?php echo $row['categories']?></td>
							   <td><?php echo $row['name']?></td>
							    <td><?php echo $row['url']?></td>
							 <td><?php echo $row['description']?></td>
							  
							 
							   
							   </td>
							   <td>
								<?php
								
								
								echo "<span class='button buttond'><a href='?type=delete&id=".$row['id']."'>Delete</a></span>";
								
								?>
							   </td>
							</tr>
							<?php $i++; } ?>
						 </tbody>
					  </table>
					  
					  </div>
	
<?php
require('footer.inc.php');
?>