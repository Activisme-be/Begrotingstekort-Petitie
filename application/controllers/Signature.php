<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @package       Begrotingstekort-petitie
 * @subpackage    Controllers
 * @category      Activism
 * @version       1.0.0
 * @author        Tim Joosten
 * @link          https://github.com/Activisme-be/Begrotingstekort-Petitie
 */
class Signature extends CI_Controller
{
    /**
     * Authencated session collection.
     *
     * @var array
     */
    public $Session = [];

    /**
     * Signature constructor.
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
     * Insert a new signature.
     *
     * @see    POST: /signature/insert
     */
    public function insert()
    {
        $input['name']    = $this->input->post('name');
        $input['email']   = $this->input->post('email');
        $input['source']  = $this->input->post('source');
        $input['finding'] = $this->input->post('finding');

        if (Findings::create($input)) {
            $this->session->set_flashdata('class', 'alert alert-success');
            $this->session->set_flashdata('message', 'Uw vonst is toegevoegd');
        }

        return redirect('/', 'refresh');
    }
}