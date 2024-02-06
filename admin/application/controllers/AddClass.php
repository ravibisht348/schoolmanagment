<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AddClass extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Addclass_model');
	}

	public function index()
	{
		$data = array();
		$result = $this->Addclass_model->get_class();
		$data['result'] = $result;


		$data['main_content'] = 'addclass/index';

		$this->load->view('common/template', $data);
	}
	public function create()
	{
		$data = array();
		$data['message'] = '';
		$data['mode'] = 'New';

		$data['id'] = $this->uri->segment(3);
		if (strlen($data['id']) > 0) {

			$data['mode'] = 'Edit';
			$this->db->where('ID', $data['id']);
			$data['row'] = $this->db->get('tblclass')->row();
		}

		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			$db_data = array();
			foreach ($this->input->post() as $key => $value) {
				$db_data[$key] = $value;
			}
			if (strlen($db_data['ID']) > 0)
				$r = $this->Addclass_model->update($db_data);

			else
				$r = $this->Addclass_model->save($db_data);

			if ($r > 0) {
				$data['message'] = 'Data Saved';
?>
				<script type="text/javascript">
					alert('Data Saved');
				</script>
			<?php
				redirect(base_url() . 'addclass');
			}
		}

		$data['main_content'] = 'addclass/create';
		$this->load->view('common/template', $data);
	}
	// delete
	public function delete()
	{
		$id = $this->uri->segment(3);

		if (strlen($id) > 0) {
			$result = $this->Addclass_model->delete($id);

			if ($result > 0) {
			?>
				<script type="text/javascript">
					alert('Data Deleted');
				</script>
			<?php
			} else {
			?>
				<script type="text/javascript">
					alert('Failed to Delete Data');
				</script>
			<?php
			}
		} else {
			?>
			<script type="text/javascript">
				alert('Invalid Data ID');
			</script>
<?php
		}

		redirect('<?= base_url() ?>addclass');
	}
}
