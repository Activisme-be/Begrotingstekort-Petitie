<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @package       Begrotingstekort-petitie
 * @subpackage    Controllers
 * @category      Activism
 * @version       1.0.0
 * @author        Tim Joosten
 * @link          https://github.com/Activisme-be/Begrotingstekort-Petitie
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

		// Value counter
        $data['count_all']           = Findings::sum('finding');
        $data['count_lux_leaks']     = Findings::where('source', 'Lux Leaks')->sum('finding');
        $data['count_swiss_leaks']   = Findings::where('source', 'Swiss Leaks')->sum('finding');
        $data['count_bahama_leaks']  = Findings::where('source', 'Bahama Leaks')->sum('finding');
        $data['count_panama_papers'] = Findings::where('source', 'Panama Papers')->sum('finding');
        $data['count_vermogens_tax'] = Findings::where('source', 'Vermogens Taks')->sum('finding');

		$this->blade->render('home', $data);
	}
}
