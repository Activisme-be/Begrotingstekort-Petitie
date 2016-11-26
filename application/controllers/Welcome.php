<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Class Welcome
 */
class Welcome extends CI_Controller {

	/**
	 * Au!thencation user session collection.
	 *
	 * @var array
	 */
	public $Session = [];

	/**
	 * Welcome constructor
	 *
	 * @return void
	 */
	public function __construct() {
		parent::__construct();
		$this->load->library(['blade', 'session']);
		$this->load->helper(['url']);
		$this->config->load('platform');

		$this->Session = $this->session->userdata('logged_in');
	}

	/**
	 * The front page for the petitition
	 *
	 * @see    GET|HEAD: /
	 * @return blade instance
	 */
	public function index() {
		$data['title'] = 'Index';
		$this->blade->render('home', $data);
	}
}
