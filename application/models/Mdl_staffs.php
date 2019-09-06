<?php

class Mdl_staffs extends CI_Model
{

	public function __construct()
	{
		parent::__construct();

		$this->load->library('encryption');

	}

	public function submitDesignations()
	{
		foreach ($this->input->post('designation') as $designation) {

			$data= array('Designation' => $designation);

			$this->db->insert('tbl_designations',$data);
		}
	}

	public function listAllDesignations() {
		$this->db->select('*');
		$this->db->from('tbl_designations');

		return $this->db->get();
	}

	public function getDesigationById($id) {
		$this->db->where('id', $id);
		$query = $this->db->get('tbl_designations');
		if ($query->num_rows() > 0) {
			foreach ($query->result() as $row) {
				$data[] = $row;
			}
			return $data;
		}
		else return null;
	}

	public function submitUpdatedDesignation($id) {
		$data = array(
			'Designation' => $this->input->post('designation')
		);
		$this->db->where('id', $id);
		$this->db->update('tbl_designations', $data);
	}

	public function submitStaff($photo) {
		$data = array(
			'Name' =>  $this->input->post('name'),
			'Photo' => $photo,
			'designationId' => $this->input->post('designation')
		);

		$this->db->insert('tbl_staffs',$data);
	}

	public function listAllStaffs() {
		$this->db->select('*');
		$this->db->from('tbl_staffs');
		return $this->db->get();
	}

	public function listAllStaffsWithDesignation() {
		$this->db->select('tbl_staffs.id, tbl_staffs.Name, tbl_staffs.Photo, tbl_staffs.designationId, tbl_designations.Designation');
		$this->db->from('tbl_staffs');
		$this->db->join('tbl_designations', 'tbl_staffs.designationId=tbl_designations.id');
		return $this->db->get();
	}

	public function getStaffInfoById($id) {
		$this->db->where('id', $id);
		$query = $this->db->get('tbl_staffs');
		if ($query->num_rows() > 0) {
			foreach ($query->result() as $row) {
				$data[] = $row;
			}
			return $data;
		}
		else return null;
	}

	public function getDesignationsByDesignationId() {
		$this->db->select('tbl_designations.id, tbl_designations.Designation');
		$this->db->from('tbl_designations');
		$this->db->join('tbl_staffs', 'tbl_designations.id=tbl_staffs.designationId');
		return $this->db->get();
	}

	public function submitUpdatedStaff($id, $photo) {
		$data = array(
			'Name' =>  $this->input->post('name'),
			'designationId' => $this->input->post('designation')
		);
		$this->db->where('id', $id);
		$this->db->update('tbl_staffs',$data);

		if(!empty($photo)) {
			$data1=array('Photo' => $photo);
			$this->db->where('id',$id);
			$this->db->update('tbl_staffs',$data1);
		}
	}

	public function deleteStaffById($id) {
		$this->db->delete('tbl_staffs', array('id' => $id));
	}

	public function listAllStaffsAndDesignations() {
		$this->db->select('tbl_staffs.Name, tbl_staffs.Photo, tbl_designations.Designation');
		$this->db->from('tbl_staffs');
		$this->db->join('tbl_designations', 'tbl_designations.id=tbl_staffs.designationId');
		return $this->db->get();
	}

}
