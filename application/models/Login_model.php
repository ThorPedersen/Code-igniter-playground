<?php
class Login_model extends CI_Model{
	
	protected $pdo;
 	public function __construct()
	{
	    $this->load->database();

	    $opt = array(
	    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
	    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
	    );

		$this->pdo = new PDO($this->db->dsn, $this->db->username, $this->db->password, $opt);			
	}
 
  function validate($email,$password){
	  
	$sql = "SELECT * from users WHERE email = :email";

			$stmt = $this->pdo->prepare($sql);
			$stmt->bindParam(':email', $email);
			$stmt->execute();		
			$results = $stmt->fetch();	
			
    if($stmt->rowCount() == 1){			

        if(password_verify($password, $results['password']) == 1){
            unset($results['password']);
            return $results;
        } else {
            return false;
        }
    } else {
        return false;
    }
  }
 
}