<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Departemen extends CI_Controller {

	function __construct(){
		parent::__construct();
		// load model M_departemen
		$this->load->model('m_departemen');

	}

    public function index(){
        $data = array(
                'blog_title' => 'My Apps',
                'blog_heading' => 'Departemen Data',
                'deps'=> $this->m_departemen->ambil_data()->result()
        );

        $this->parser->parse('departemen/index', $data);
    	
        // $data['judul']='Daftar Departemen';
    	
        // $data['deps']=$this->m_departemen->ambil_data()->result();

    
    }

    public function add(){
        $_id = $this->input->post('id');
        $_nama = $this->input->post('nama');
        $_abbr = $this->input->post('abbr');
        $_alamat = $this->input->post('alamat');
        $_telpon = $this->input->post('telpon');
       
        $data = [
            'id'=>$_id,
            'nama'=>$_nama,
            'abbr'=>$_abbr,
            'alamat'=>$_alamat,
            'telpon'=>$_telpon
        ];

        $this->m_departemen->input_data('departemen',$data);
        redirect('departemen');
    }

    public function edit($idx){
        $obj = $this->m_departemen->get_id('departemen',$idx);
        $data['judul']='Edit Departemen';
        $data['dep']=$obj;
        $this->load->view('departemen/edit',$data);

    }

    public function update($idx){
        $_id = $this->input->post('id');
        $_nama = $this->input->post('nama');
        $_abbr = $this->input->post('abbr');
        $_alamat = $this->input->post('alamat');
        $_telpon = $this->input->post('telpon');
       
        // simpan dalam array
        $data = [
            'id'=>$_id,
            'nama'=>$_nama,
            'abbr'=>$_abbr,
            'alamat'=>$_alamat,
            'telpon'=>$_telpon
        ];
        $this->m_departemen->update('departemen',$data,$idx);
        redirect('departemen');
    
    }
    public function delete($idx) {
        $this->m_departemen->delete('departemen',$idx);
        redirect('departemen');
    }
    
    
}