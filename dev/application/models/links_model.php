<?php
class Links_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}

	public function get_links()
	{
		$sql = "SELECT * FROM `topics` ORDER BY `topic_name`";
		$query = $this->db->query($sql);

		$this->firephp->info($query->result_array());
		return $query->result_array();
	}
}

?>