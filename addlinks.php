<?php 
require('top.php');
?>


						 
<div>

                        <form id="frmCaptcha" >
							
									<label for="categories" >Categories</label>
									<select  name="categories_id" id="categories_id" onchange="get_sub_cat('')" required>
										<option>Select Category</option>
										<?php
										$res=mysqli_query($con,"select id,categories from categories order by categories asc");
										while($row=mysqli_fetch_assoc($res)){
											if($row['id']==$categories_id){
												echo "<option selected value=".$row['id'].">".$row['categories']."</option>";
											}else{
												echo "<option value=".$row['id'].">".$row['categories']."</option>";
											}
											
										}
										?>
									</select>
								
									<label for="categories" >Sub Categories</label>
									<select  name="sub_categories_id" id="sub_categories_id">
										<option>Select Sub Category</option>
									</select>
								
									<label for="categories" >URL</label>
									<input type="text" name="url" placeholder="https://example.com"  required >
								
									<label for="categories" >link Name</label>
									<input type="text" name="name" placeholder="Enter link name"  required >
								
									<label for="categories" >Description</label>
									<textarea name="description" placeholder="Enter link description"  required></textarea>
								<div id="result" class="danger" ></div>
							<label>Captcha:</label>
							<input type="text"  id="captcha" placeholder="Enter captcha" name="captcha" required>
						
						
							<img src="captcha.php"/>
							
					        
							 <input type="submit"  onclick="submit_data()">
						
							 <button class="cancel" type="cancel" onclick="javascript:window.location='home.php';">Cancel</button>
							
							</form>
							
		</div>				
	  <script>
	  function submit_data(){
		jQuery.ajax({
			url:'insert.php',
			type:'post',
			data:jQuery('#frmCaptcha').serialize(),
			success:function(data){
				
		<!--	alert(data);-->
			jQuery('#result').html(data);
				
			}
		});
	  }
	  </script>

		 
		 <script>
			function get_sub_cat(sub_cat_id){
				var categories_id=jQuery('#categories_id').val();
				jQuery.ajax({
					url:'get_sub_cat.php',
					type:'post',
					data:'categories_id='+categories_id+'&sub_cat_id='+sub_cat_id,
					success:function(result){
						jQuery('#sub_categories_id').html(result);
					}
				});
			}
		 </script>
         
      <?php
     require('footer.inc.php');
      ?>
     <script>
    <?php
     if(isset($_GET['id'])){
     ?>
    get_sub_cat('<?php echo $sub_categories_id?>');
   <?php } ?>
   </script>