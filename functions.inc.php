<?php

function get_safe_value($con,$str){
	if($str!=''){
		$str=trim($str);
		return mysqli_real_escape_string($con,$str);
	}
}

function get_link($con,$limit='',$cat_id='',$link_id='',$sub_categories=''){
	$sql="select link.*,categories.categories from link,categories where link.status=1 ";
	if($cat_id!=''){
		$sql.=" and link.categories_id=$cat_id ";
	}
	if($link_id!=''){
		$sql.=" and link.id=$link_id ";
	}
	if($sub_categories!=''){
		$sql.=" and link.sub_categories_id=$sub_categories ";
	}
	
	$sql.=" and link.categories_id=categories.id ";
	
	if($limit!=''){
		$sql.=" limit $limit";
	}
	//echo $sql;
	$res=mysqli_query($con,$sql);
	$data=array();
	while($row=mysqli_fetch_assoc($res)){
		$data[]=$row;
	}
	return $data;
}


							
		
	
	
?>