<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud extends CI_Controller {

    public function index()
    {
        $this->load->view('crud');
    }

    public function ajax_add()
    {
        $data = array(
            'nama' => $this->input->post('nama'),
            'pekerjaan' => $this->input->post('pekerjaan'),
            'email' => $this->input->post('email'),
            'instansi' => $this->input->post('instansi'),
            'photoProfile' => $this->input->post('foto'),
            'note' => $this->input->post('note'),
            'linkProject' => $this->input->post('project'),
            'linkFacebook' => $this->input->post('facebook'),
            'linkYoutube' => $this->input->post('youtube'),
            'linkTwitter' => $this->input->post('twitter'),
        );

        $data_string = json_encode($data);

        $curl = curl_init('api/insert');

        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");

        curl_setopt($curl, CURLOPT_HTTPHEADER, array(
            'Content-Type: application/json',
            'Content-Length: ' . strlen($data_string))
        );

        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $data_string);

        $result = curl_exec($curl);

        curl_close($curl);

        echo $result;
    }

    public function ajax_update()
    {
        $data = array(
            'nama' => $this->input->post('nama'),
            'pekerjaan' => $this->input->post('pekerjaan'),
            'email' => $this->input->post('email'),
            'instansi' => $this->input->post('instansi'),
            'photoProfile' => $this->input->post('foto'),
            'note' => $this->input->post('note'),
            'linkProject' => $this->input->post('project'),
            'linkFacebook' => $this->input->post('facebook'),
            'linkYoutube' => $this->input->post('youtube'),
            'linkTwitter' => $this->input->post('twitter'),
        );
        $this->person->update(array('id' => $this->input->post('id')), $data);
        echo json_encode(array("status" => TRUE));
    }
}
