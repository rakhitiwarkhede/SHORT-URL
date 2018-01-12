<?php
	class DB
	{
		public $connection;
		public $host;
		public $user;
		public $database;
		public $password;
		public $table;
		public $insert_id;

		function __construct($table)
		{
			include("config.php");
			$this->host=$host;
			$this->user=$user;
			$this->database=$database;
			$this->password=$password;
			$this->table=$table;
			$this->connection=mysqli_connect($this->host,$this->user,$this->password,$this->database);
		}
		
		
		public function insert($rfields,$rvalues)
		{
			try
			{
				$fields=implode("','",$rfields);
				$value=implode("','",$rvalues);
				$sql='insert into '.$this->table.'('.$fields.') value ('.$values.')';
				echo $sql;
				$result=mysqli_query($this->connection,$sql);
				if($result)
				{
					return $result;
				}
				else
				{
					return mysqli_error($this->connection);
				}

			}
			catch(Exception $Ex)
			{
				echo $Ex;
			}
		}

		public function select_all()
		 {
			 try
			 {
			   $sql='select * from '.$this->table.'';
			  
			  // echo $sql;
			   $result=mysqli_query($this->connection,$sql);
	           return $result;
		     }
			catch(Exception $Ex)
		    {
			  echo $Ex;
		    }
	    }


		public function query_sel($query)
		 {
			 try
			 {
			   $sql=$query;
			  
			   echo $sql;
			   $result=mysqli_query($this->connection,$sql);
	           return $result;
		     }
			catch(Exception $Ex)
		    {
			  echo $Ex;
		    }
	    }
	}