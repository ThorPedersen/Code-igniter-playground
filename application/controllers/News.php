<?php
class News extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('users_model');
		$this->load->model('news_model');
		
		$this->load->helper('url_helper');
	}

	public function index()
	{
		$data = new stdClass();
		$data->news = $this->news_model->get_news();
		$data->title = 'News archive';
		
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
        $this->load->view('news/index', $data);
        $this->load->view('templates/footer', $data);
	}

	public function view($slug = NULL)
	{
		$data = new stdClass();
		$data->news_item = $this->news_model->get_news($slug);

		if (empty($data->news_item))
		{
				show_404();
		}
		
		$data->title = $data->news_item['title'];

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('news/view', $data);
		$this->load->view('templates/footer', $data);
	}
	public function create()
	{
		$this->load->helper('form');
		$this->load->library('form_validation');

		$data['title'] = 'Create a news item';

		$this->form_validation->set_rules('news_title', 'title', 'required');
		$this->form_validation->set_rules('news_slug','slug',  'required');
		$this->form_validation->set_rules('news_author','author',  'required');
		$this->form_validation->set_rules('news_short_description','short_description',  'required');
		$this->form_validation->set_rules('news_text', 'text', 'required');
		
		$data = new stdClass();
		$data->news_users = $this->users_model->get_users();
		$data->posts = array();
		
		if ($this->form_validation->run() === FALSE)
		{				
			if(!empty($this->input->post('news_title'))) { $data->posts['title'] = $this->input->post('news_title'); }
			if(!empty($this->input->post('news_slug'))) { $data->posts['slug'] = $this->input->post('news_slug'); }
			if(!empty($this->input->post('news_author'))) { $data->posts['author'] = $this->input->post('news_author'); }
			if(!empty($this->input->post('news_short_description'))) { $data->posts['short'] = $this->input->post('news_short_description'); }
			if(!empty($this->input->post('news_text'))) { $data->posts['text'] = $this->input->post('news_text'); }
	
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('news/create', $data);
			$this->load->view('templates/footer', $data);
		}
		else
		{
			$title = $this->input->post('news_title', TRUE);
			$slug = $this->input->post('news_slug', TRUE);
			$author = $this->input->post('news_author', TRUE);
			$short_description = $this->input->post('news_short_description', TRUE);
			$text = $this->input->post('news_text', TRUE);
			$time = time();
			
			$post_array = array('title' => $title, 'slug' => $slug, 'author' => $author, 'short_description' => $short_description, 'text' =>  $text, 'published_on' => $time);
			
			$this->news_model->set_news($post_array);

			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('news/create', $data);
			$this->load->view('templates/footer', $data);
		}		
	}	
}