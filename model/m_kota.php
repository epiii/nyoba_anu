<?php
	$out='';
	if(!isset($_POST['action'])){
		$out= "no action";
	}else{
		require_once'../lib/lib.php';
		if($_POST['action']=='view'){
			$libb  = new Lib();
				$tb    ='kota';
				$field = null;
				$where = null;
				$order = array('kota','asc');
			$out= $libb->select($tb,$field,$where,$order);
		}elseif($_POST['action']=='delete'){
			// to do
		}elseif($_POST['action']=='update'){
			// to do
		}elseif($_POST['action']=='create'){
			// to do
		}
	}
	echo $out;
?>