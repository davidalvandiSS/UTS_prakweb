<?php
defined('BASEPATH') or exit('No direct script access allowed');
class tampildata extends CI_Model
{
	public function getdata()
	{
		return $this->db->get('datajajan')->result();
	}
	public function ambilData()
	{
		return $this->db->query('select * from datajajan');
	}
}
