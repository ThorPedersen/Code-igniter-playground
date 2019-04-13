<?php
class News_model extends CI_Model {
	
    private $table_name = "news";
 
    public $id;
    public $title;
    public $slug;
    public $text;
    public $short_description;
    public $author;
	public $published_on;
	public $hits;
	
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
	public function get_news($slug = FALSE)
	{
		if ($slug === FALSE)
		{									
			$sql = "SELECT  $this->table_name.*, users.*,  $this->table_name.id as news_id
			FROM $this->table_name
			INNER JOIN 
						users
			ON
						news.author = users.id		
			ORDER BY
						$this->table_name.id
			";

			$stmt = $this->pdo->prepare($sql);
			$stmt->execute();
			
			$results = $stmt->fetchAll();
			
			return $results;
				
		}
		
		$sql = "SELECT news.*, users.*
			FROM $this->table_name
			INNER JOIN 
						users
			ON
						news.author = users.id			
			WHERE slug = :slug"; 

		$stmt = $this->pdo->prepare($sql);
		$stmt->bindParam(':slug', $slug);
		$stmt->execute();
		
		$results = $stmt->fetch();

		return $results;
	}
	public function set_news($post_array)
	{
		$this->load->helper('url');
		
		$stmt = $this->pdo->prepare("INSERT INTO $this->table_name (title, slug, author, short_description, text, published_on) VALUES (:title, :slug, :author, :short_description, :text, :published_on)");
		$stmt->bindParam(':title', $post_array['title']);
		$stmt->bindParam(':slug', $post_array['slug']);
		$stmt->bindParam(':author', $post_array['author']);
		$stmt->bindParam(':short_description', $post_array['short_description']);
		$stmt->bindParam(':text', $post_array['text']);
		$stmt->bindParam(':published_on', $post_array['published_on']);
				
		return $stmt->execute();
	}
	
}