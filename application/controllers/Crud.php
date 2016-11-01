<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form','url'));
        $this->load->model('Model_peserta');
        $this->load->library('upload');
	header("access-control-allow-origin: *");
    }
    public function index()
	{
		$this->load->view('crud');
	}

    public function add()
    {
        $this->load->helper('file');
        $filename = "file_".time();
        $config['upload_path'] = 'photos/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
        $config['max_size'] = '3072';
        $config['max_width'] = '5000';
        $config['max_height'] = '5000';
        $config['file_name'] = $filename;

        $this->upload->initialize($config);

        $nama = $this->input->post('nama');
        $pekerjaan = $this->input->post('pekerjaan');
        $email = $this->input->post('email');
        $instansi = $this->input->post('instansi');
        $note = $this->input->post('note');
        $project = $this->input->post('project');
        $facebook = $this->input->post('facebook');
        $youtube = $this->input->post('youtube');
        $twitter = $this->input->post('twitter');
        $data = array(
            'nama' => $nama,
            'pekerjaan' => $pekerjaan,
            'email' => $email,
            'instansi' => $instansi,
            'note' => $note,
            'linkProject' => $project,
            'linkFacebook' => $facebook,
            'linkYoutube' => $youtube,
            'linkTwitter' => $twitter
        );
        if ($this->upload->do_upload('foto')) {
            $foto = $this->upload->data();
            $data['photoProfile'] = $foto['file_name'];
        }
        $insert = $this->Model_peserta->save($data);
        echo json_encode(["success"=>$insert]);
        die();
    }

    public function update()
    {
        $this->load->helper('file');
        $filename = "file_".time();
        $config['upload_path'] = 'photos/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
        $config['max_size'] = '3072';
        $config['max_width'] = '5000';
        $config['max_height'] = '5000';
        $config['file_name'] = $filename;

        $this->upload->initialize($config);

        $nama = $this->input->post('nama');
        $pekerjaan = $this->input->post('pekerjaan');
        $email = $this->input->post('email');
        $instansi = $this->input->post('instansi');
        $note = $this->input->post('note');
        $project = $this->input->post('project');
        $facebook = $this->input->post('facebook');
        $youtube = $this->input->post('youtube');
        $twitter = $this->input->post('twitter');
        $data = array(
            'nama' => $nama,
            'pekerjaan' => $pekerjaan,
            'email' => $email,
            'instansi' => $instansi,
            'note' => $note,
            'linkProject' => $project,
            'linkFacebook' => $facebook,
            'linkYoutube' => $youtube,
            'linkTwitter' => $twitter
        );
        if ($this->upload->do_upload('foto')) {
            $foto = $this->upload->data();
            $data['photoProfile'] = $foto['file_name'];
        }
        $return_data = $this->Model_peserta->update(array('id' => $this->input->post('id')), $data);
        echo json_encode(["success"=>$return_data]);

        die();
    }

    public function edit($id)
    {
        $data = $this->Model_peserta->get_by_id($id);
        echo json_encode($data);
    }
}
