<?php
	sleep(1);
	$out='';
	if(!isset($_POST['action'])){
		$out= "no action";
	}else{
		require_once'../lib/lib.php';
		if($_POST['action']=='view'){
			$libb  = new Lib();
				$tb    ='kecamatan';
				$field = null;
				if(isset($_POST['kota_id'])) $where = array('kota_id','=',$_POST['kota_id']);
				else $where = null;

				$order = array('kecamatan','asc');
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