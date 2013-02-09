<?php
class Readings_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}

	public function get_readings($topic_id)
	{
		/*
		$sql = "SELECT DISTINCT `readings`.`reading_id`, `topics`.`topic_id`, `topics`.`topic_name`, `books`.`book_name`, `readings`.`chapter`, `readings`.`verse`, `readings`.`text`  FROM `books`, `readings`, `topics` WHERE `readings`.`book_id` = `books`.`book_id` AND `topics`.`topic_id` = `readings`.`topic_id` AND `readings`.`topic_id` = ?";
		*/

		$sql = "SELECT topics.topic_name, books.book_name, readings.chapter, readings.verse, readings.text
				FROM readings
				JOIN topics ON (topics.topic_id = readings.topic_id)
				JOIN books ON (readings.book_id = books.book_id) 
				WHERE topics.topic_id = ?";

		$query = $this->db->query($sql, array($topic_id));

		return $query->result_array();
	}

	public function get_verse($reading_id)
	{
		$sql = "SELECT DISTINCT `readings`.`reading_id`, `topics`.`topic_id`, `topics`.`topic_name`, `books`.`book_name`, `readings`.`chapter`, `readings`.`verse`, `readings`.`text`  FROM `books`, `readings`, `topics` WHERE `readings`.`book_id` = `books`.`book_id` AND `topics`.`topic_id` = `readings`.`topic_id` AND `readings`.`reading_id` = ?";
		$query = $this->db->query($sql, array($reading_id));
		
		$this->firephp->info($query->result_array());
		return $query->result_array();
	}
}