<?php 
require('top.php');
if(isset($_GET['id'])){
	$link_id=mysqli_real_escape_string($con,$_GET['id']);
	if($link_id>0){
		$get_link=get_link($con,'','',$link_id);
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
                 <table>   
                       <th>Name</th>		
                       <th>Category</th>	
                       <th>URL</th>	
					    <th>Description</th>
                        <tr>					   
                               <td><?php echo $get_link['0']['name']?></td>
                               <td><?php echo $get_link['0']['categories']?></td>
							   <td><?php echo $get_link['0']['url']?></td>
                               <td><?php echo $get_link['0']['description']?></td>
                         
					    </tr>
                   </table>   
        
				<div>						
<?php require('footer.inc.php')?>        