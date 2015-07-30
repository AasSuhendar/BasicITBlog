<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Panel extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_post', 'posting');
	}

	public function index()
	{
		$data['posting']=$this->posting->getAllPost()->result();
		// print_r($data['posting']);
		$this->load->view('back/panel',$data);
	}

	public function createPost()
	{
		$this->load->view('back/panel_post');
	}

	public function post_process()
	{
		$this->form_validation->set_rules('title', 'title', 'required');
        $this->form_validation->set_rules('content', 'content', 'required');
        if ($this->form_validation->run() == FALSE) {
        	$this->session->set_flashdata('message', '
					<div class="alert alert-danger" id="action-alert">
						<button data-dismiss="alert" class="close">
							&times;
						</button>
						<strong>Gagal! terjadi kesalahan.</strong> Data Posting gagal disimpan.
					</div>
				');
            $this->load->view('back/panel_post');
        } else {
        	$postingan=array(
        		"title" => $this->input->post('title'),
        		"content" => $this->input->post('content'),
        		"author" => $this->session->userdata('username')
        		);

        	if ($this->posting->savePost($postingan)==TRUE) {
        		$this->session->set_flashdata('message', '
							<div class="alert alert-success" id="action-alert">
								<button data-dismiss="alert" class="close">
									&times;
								</button>
								<strong>Berhasil! </strong>Data Posting berhasil disimpan
							</div>
						');
	            redirect('panel');
        	}
        }
	}

	public function delete_process()
	{
		$id_posting=$this->input->get('id_posting');

		if ($this->posting->deletePost($id_posting)==TRUE) {
			$this->session->set_flashdata('message', '
							<div class="alert alert-success" id="action-alert">
								<button data-dismiss="alert" class="close">
									&times;
								</button>
								<strong>Berhasil! </strong>Data Posting berhasil dihapus
							</div>
						');
	            redirect('panel');
		} else {
			$this->session->set_flashdata('message', '
							<div class="alert alert-danger" id="action-alert">
								<button data-dismiss="alert" class="close">
									&times;
								</button>
								<strong>Gagal! </strong>Data Posting gagal dihapus
							</div>
						');
	            redirect('panel');
		}
		
	}

	public function edit_process()
	{
		$this->form_validation->set_rules('title', 'title', 'required');
        $this->form_validation->set_rules('content', 'content', 'required');
        if ($this->form_validation->run() == FALSE) {
        	$this->session->set_flashdata('message', '
					<div class="alert alert-danger" id="action-alert">
						<button data-dismiss="alert" class="close">
							&times;
						</button>
						<strong>Gagal! terjadi kesalahan.</strong> Data Posting gagal diedit.
					</div>
				');
            $this->load->view('back/panel_post');
        } else {
        	$id_posting=$this->input->post('id_posting');
        	$postingan=array(
        		"title" => $this->input->post('title'),
        		"content" => $this->input->post('content'),
        		"author" => $this->input->post('author')
        		);
        	if ($this->posting->updatePost($id_posting,$postingan)==TRUE) {
        		$this->session->set_flashdata('message', '
							<div class="alert alert-success" id="action-alert">
								<button data-dismiss="alert" class="close">
									&times;
								</button>
								<strong>Berhasil! </strong>Data Posting berhasil disimpan
							</div>
						');
	            redirect('panel');
        	}
        }
	}

	
}

/* End of file panel.php */
/* Location: ./application/controllers/panel.php */