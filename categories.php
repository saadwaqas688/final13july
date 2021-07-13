<?php 
require('top.php');

if(!isset($_GET['id']) && $_GET['id']!=''){
	echo "<h1 >No link Exist</h1>";
	die();
	?>
	
	<?php
}


$cat_id=mysqli_real_escape_string($con,$_GET['id']);

$sub_categories='';
if(isset($_GET['sub_categories'])){
	$sub_categories=mysqli_real_escape_string($con,$_GET['sub_categories']);
}


if($cat_id>0 && ($sub_categories!='' && $sub_categories>0)){
	$get_link=get_link($con,'',$cat_id,'','',$sub_categories);
}else{
	echo "<h1 >No link Exist</h1>";
	die();
	?>
	
	<?php
}										
?>

      
           
               
					<?php if(count($get_link)>0){?>
                    
                        <div>       
                         <table>
						 <th>Name</th>
						 <th>Url</th>
						 <th>Description</th>
						
                                        <?php
										foreach($get_link as $list){  
										?>
										      <tr>
												
												<td><a href="link_details.php?id=<?php echo $list['id']?>"><?php echo $list['name']?></a></td>
													
														<td><?php echo $list['url']?></td>
														<td><?php echo $list['description']?></td>
														
										      </tr> 
											
										<?php } ?>
									
									<table>
									</div>	
                         
					<?php } else { 
						echo "<h1 >No link Exist</h1>";
					} ?>
                
			
     
<?php require('footer.inc.php')?>        