<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pegawai extends CI_Controller {

	function __construct(){
		parent::__construct();
		// load model M_departemen
		$this->load->model('m_pegawai');

	}

    public function index(){
        $data = array(
                'blog_title' => 'My Apps',
                'blog_heading' => 'Pegawai Data',
                'pegs'=> $this->m_pegawai->ambil_data()->result()
        );

        $this->parser->parse('pegawai/index', $data);
    	
        // $data['judul']='Daftar Departemen';
    	
        // $data['deps']=$this->m_departemen->ambil_data()->result();

    
    }

    public function add(){
        // tangkap data kiriman form
        $_id = $this->input->post('id');
        $_nip = $this->input->post('nip');
        $_nama = $this->input->post('nama');
        $_gender = $this->input->post('gender');
        $_alamat = $this->input->post('alamat');
        $_tmp_lahir = $this->input->post('tmp_lahir');
        $_tgl_lahir = $this->input->post('tgl_lahir');
        $_alamat = $this->input->post('alamat');
        $_dep_id = $this->input->post('dep_id');
       
        // simpan dalam array
        $data = [
            'id'=>$_id,
            'nip'=>$_nip,
            'nama'=>$_nama,
            'gender'=>$_gender,
            'alamat'=>$_alamat,
            'tmp_lahir'=>$_tmp_lahir,
            'tgl_lahir'=>$_tgl_lahir,
            'alamat'=>$_alamat,
            'dep_id'=>$_dep_id
        ];

        // input ke table departemen
        $this->m_pegawai->input_data('pegawai',$data);
                // redirect page ke departemen/index
        redirect('pegawai');
    }

    public function edit($idx){
        $obj = $this->m_pegawai->get_id('pegawai',$idx);
        $data['peg']=$obj;
        $this->load->view('pegawai/edit',$data);

    }

    public function update($idx){
        $_id = $this->input->post('id');
        $_nip = $this->input->post('nip');
        $_nama = $this->input->post('nama');
        $_gender = $this->input->post('gender');
        $_alamat = $this->input->post('alamat');
        $_tmp_lahir = $this->input->post('tmp_lahir');
        $_tgl_lahir = $this->input->post('tgl_lahir');
        $_alamat = $this->input->post('alamat');
        $_dep_id = $this->input->post('dep_id');
       
        // simpan dalam array
        $data = [
            'id'=>$_id,
            'nip'=>$_nip,
            'nama'=>$_nama,
            'gender'=>$_gender,
            'alamat'=>$_alamat,
            'tmp_lahir'=>$_tmp_lahir,
            'tgl_lahir'=>$_tgl_lahir,
            'alamat'=>$_alamat,
            'dep_id'=>$_dep_id
        ];
        $this->m_pegawai->update('pegawai',$data,$idx);
        redirect('pegawai');
    
    }
    public function delete($idx) {
        $this->m_pegawai->delete('pegawai',$idx);
        redirect('pegawai');
    }
    
    
}