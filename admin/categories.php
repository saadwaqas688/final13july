<?php
require('top.inc.php');
isAdmin();
if(isset($_GET['type']) && $_GET['type']!=''){
	$type=get_safe_value($con,$_GET['type']);
	if($type=='status'){
		$operation=get_safe_value($con,$_GET['operation']);
		$id=get_safe_value($con,$_GET['id']);
		if($operation=='active'){
			$status='1';
		}else{
			$status='0';
		}
		$update_status_sql="update categories set status='$status' where id='$id'";
		mysqli_query($con,$update_status_sql);
	}
	
	if($type=='delete'){
		$id=get_safe_value($con,$_GET['id']);
		$delete_sql="delete from categories where id='$id'";
		mysqli_query($con,$delete_sql);
	}
}

$sql="select * from categories order by categories asc";
$res=mysqli_query($con,$sql);
?>

					  <table >
						 <thead>
							<tr>
							   <th >#</th>
							  
							   <th>Categories</th>
							   <th>Actions</th>
							</tr>
						 </thead>
						 <tbody>
							<?php 
							$i=1;
							while($row=mysqli_fetch_assoc($res)){?>
							<tr>
							   <td ><?php echo $i?></td>
							   
							   <td><?php echo $row['categories']?></td>
							   <td>
								<?php
								if($row['status']==1){
									echo "<span class='button'><a href='?type=status&operation=deactive&id=".$row['id']."'>Active</a></span>&nbsp;";
								}else{
									echo "<span class='button'><a href='?type=status&operation=active&id=".$row['id']."'>Deactive</a></span>&nbsp;";
								}
								echo "<span class='button'><a href='add_categories.php?id=".$row['id']."'>Edit</a></span>&nbsp;";
								
								echo "<span class='button buttond'><a href='?type=delete&id=".$row['id']."'>Delete</a></span>";
								
								?>
							   </td>
							</tr>
							<?php  	$i++;} ?>
						 </tbody>
					  </table>
				   </div>
				</div>
			 </div>
		  </div>
	   </div>
	</div>
</div>
<?php
require('footer.inc.php');
?>