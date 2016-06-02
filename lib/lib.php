<?php
	/**
	* main library 
	* modify by EPI
	*/
	class Lib extends PDO{
		private $engine;
		private $host;
		private $database;
		private $user;
		private $pass;

		private $result;

		public function __construct(){
			$this->engine   ='mysql';
			$this->database ='nyoba_anu';
			$this->host     ='localhost';
			$this->user     ='root';
			$this->pass     ='';
			
			$con=$this->engine.':dbname='.$this->database.';host='.$this->host;
			parent::__construct($con,$this->user, $this->pass);
			// db=new PDO('mysql:host=localhost;dbname=nyoba_anu;','root','');
		}

		public function select($table, $rows=null, $where=null, $order=null, $limit=null){
			// rows
			if($rows!=null)$rw=implode(',', $rows);
			else $rw='*';

			// wheres
			if($where!=null){
				$wr=$where[0].' '.$where[1].' '.$where[2];
			}

			// order by
			if($order!=null){
				$od=$order[0].' '.$order[1];
			}

			// print($rw);exit();
			$command='SELECT '.$rw.' FROM '.$table;
			if($where!=null)$command.=' WHERE '.$wr;
			if($order!=null)$command.=' ORDER BY '.$od;
			if($limit!=null)$limit.=' LIMIT '.$limit;
			// print_r($od);
			// 	exit();

			$exec = parent::prepare($command);
			$exec->execute();

			$posts=array();
			$rowCount=0;
			while ($row=$exec->fetch(PDO::FETCH_ASSOC)) {
				$posts[]=$row;
				$rowCount+=1;
			}
			// print_r($rowCount);exit();
			return $this->result = json_encode(array('rCount'=>$rowCount,'rows'=>$posts));
		}
	}
?>