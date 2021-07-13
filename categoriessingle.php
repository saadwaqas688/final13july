<?php 
require('top.php');
if(isset($_GET['id']) && $_GET['id']!=''){
	$cat_id=mysqli_real_escape_string($con,$_GET['id']);
	if($cat_id>0){
		$get_link=get_link($con,'',$cat_id);
	}else{
		?>
		<script>
		window.location.href='home.php';
		</script>
		<?php
	}
}else{
	?>
	<script>
	window.location.href='home.php';
	</script>
	<?php
}										
?>

        
       
            
                     <div>
            
					<?php if(count($get_link)>0){?>
                    
                                    <table>
									<tr>
									<th>name</th>
									<th>url</th>
									<th>description</th>
									<th>category</th>
									</tr>
                                        <?php
										foreach($get_link as $list){
										?>
										
												
												<tr>
													<td><?php echo $list['name']?></a></td>
													<td><?php echo $list['url']?></a></td>
													<td><?php echo $list['description']?></a></td>
													<td><?php echo $list['categories']?></a></td>
													
												</tr>
											
										<?php } ?>
                            
                                 </table>
				            	<?php } else { 
					         	echo "Data not found";
				             	} ?>
                
				              </div>
         
       
        
<?php require('footer.inc.php')?>        