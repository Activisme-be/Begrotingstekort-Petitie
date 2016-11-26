<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @package       Begrotingstekort-petitie
 * @subpackage    Controllers
 * @category      Activism
 * @version       1.0.0
 * @author        Tim Joosten
 * @link          https://github.com/Activisme-be/Begrotingstekort-Petitie
 */
class Disclaimer extends CI_Controller
{
    /**
     * Authencated user session.
     *
     * @var array
     */
    public $Session = [];

    /**
     * Disclaimer constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->library(['blade', 'session']);
        $this->load->helper(['url']);
        $this->config->load('platform');

        $this->Session = $this->session->userdata('logged_in');
    }

    /**
     * Show the disclaimer page.
     *
     * @see    /disclaimer
     * @return blade view
     */
    public function index()
    {
        $data['title'] = 'Disclaimer';
        $this->blade->render('disclaimer', $data);
    }
}
