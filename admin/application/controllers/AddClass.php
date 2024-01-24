<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Addclass extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Addclass_model');
	}

	public function index()
	{
		$data=array();
		$data['message']='';
		$data['mode']='New';

		IF($_SERVER['REQUEST_METHOD']=='POST')
		{
			$db_data=array();
			foreach($this->input->post() as $key=>$value){
				$db_data[$key]=$value;
			}
			$r=$this->Addclass_model->save($db_data);
			if($r>0)
			{
				$data['message']='Data Saved';
				?>
					<script type="text/javascript">
						alert('Data Saved');
					</script>
				<?php
					redirect(base_url().'addclass');
			}

		}

		$data['main_content']='addclass';

		$this->load->view('common/template',$data);
	}
	
}
