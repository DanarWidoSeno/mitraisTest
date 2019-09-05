<?php
class Api{
 
    private $connect = '';

	function __construct()
	{
		$this->database_connection();
	}

	function database_connection()
	{
		$this->connect = new PDO("mysql:host=localhost;dbname=mitrais", "root", "P@ssword");
	}
    // signup user
    function insert()
	{
		if(isset($_POST["Email"]))
		{
			
			$form_data = array(
				':MobileNumber'	=>	"+62".$_POST["MobileNumber"],
				':FirstName'	=>	$_POST["FirstName"],
				':LastName'		=>	$_POST["LastName"],
				':MonthBirth'	=>	$_POST["MonthBirth"],
				':DateBirth'	=>	$_POST["DateBirth"],
				':YearBirth'	=>	$_POST["YearBirth"],
				':Gender'		=>	$_POST["Gender"],
				':Email'		=>	$_POST["Email"]
			);
			$query = "
			INSERT INTO user_test (MobileNumber,FirstName,LastName,MonthBirth,DateBirth,YearBirth,Gender,Email) VALUES 
			(:MobileNumber, :FirstName, :LastName, :MonthBirth, :DateBirth, :YearBirth, :Gender, :Email)
			";
			$statement = $this->connect->prepare($query);
			if($statement->execute($form_data))
			{
				$data[] = array(
					'success'	=>	'1'
				);
			}
			else
			{
				$data[] = array(
					'success'	=>	'0'
				);
			}
		}
		else
		{
			$data[] = array(
				'success'	=>	'0'
			);
		}
		return $data;
	}
    
	function login($id,$email)
	{
		$query = "SELECT * FROM user_test WHERE FirstName='".$id."' and Email='".$email."'";
		$statement = $this->connect->prepare($query);
		if($statement->execute())
		{
			foreach($statement->fetchAll() as $row)
			{
				$data[0] = $row['FirstName'];
				$data[1] = $row['LastName'];
				$data[2] = $row['MobileNumber'];
				$data[3] = $row['Email'];
			}
			if ($data[0] !=null)
			{
			echo'Login Successful <br>'; 
			echo $data[0].'<br>';
			echo $data[1].'<br>';
			echo $data[2].'<br>';
			echo $data[3].'<br>';
			}
			else
			{
			echo'<script>window.location="../login.php";</script>';
			}
		}
		
	}
	
    function isAlreadyExist(){
        $query = "SELECT *
            FROM
                " . $this->table_name . " 
            WHERE
                Email='".$this->email."'";
        // prepare query statement
        $stmt = $this->conn->prepare($query);
        // execute query
        $stmt->execute();
        if($stmt->rowCount() > 0){
            return true;
        }
        else{
            return false;
        }
    }
}
?>