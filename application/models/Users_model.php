<?php
class Users_model extends CI_Model {
	
    private $table_name = "users";
 
    // object properties
    public $username;
    public $email;
	
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
	public function get_users($user_id = FALSE)
	{
		if ($user_id === FALSE)
		{									
			$sql = "SELECT * FROM $this->table_name
			";

			$stmt = $this->pdo->prepare($sql);
			$stmt->execute();
			
			$results = $stmt->fetchAll();
			
			return $results;
				
		}
		
		$sql = "SELECT * FROM users	
			WHERE id = :id"; 

		$stmt = $this->pdo->prepare($sql);
		$stmt->bindParam(':id', $user_id);
		$stmt->execute();
		
		$results = $stmt->fetch();

		return $results;
	}
	
}