<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mdl_certificates extends CI_Model
{

	public function __construct()
	{
		parent::__construct();

		$this->load->library('encryption');

	}

	public function submitCertificate($photo) {
		$certificateTitle = $this->input->post('certificate_title');
		$certificateFrom = $this->input->post('certificate_from');
		$certificateReceivedDate = $this->input->post('certificate_received_date');

		$data = array(
			'CertificateTitle' => $certificateTitle,
			'CertificateFrom' => $certificateFrom,
			'CertificateReceivedDate' => $certificateReceivedDate,
			'CertificateImage' => $photo
		);
		$this->db->insert('tbl_certificates', $data);
	}

	public function getAllCertificates() {
		$this->db->select('*');
		$this->db->from('tbl_certificates');

		return $this->db->get();
	}

	public function getCertificateInfoById($id) {
		$this->db->where('id', $id);
		$query = $this->db->get('tbl_certificates');
		if ($query->num_rows() > 0) {
			foreach ($query->result() as $row) {
				$data[] = $row;
			}
			return $data;
		} else return null;
	}

	public function submitUpdatedCertificate($id, $photo) {
		$certificateTitle = $this->input->post('certificate_title');
		$certificateFrom = $this->input->post('certificate_from');
		$certificateReceivedDate = $this->input->post('certificate_received_date');

		$data = array(
			'CertificateTitle' => $certificateTitle,
			'CertificateFrom' => $certificateFrom,
			'CertificateReceivedDate' => $certificateReceivedDate
		);
		$this->db->where('id', $id);
		$this->db->update('tbl_certificates', $data);

		if (!empty($photo)) {
			$data1 = array('ProductImage1' => $photo);
			$this->db->where('id', $id);
			$this->db->update('tbl_certificates', $data1);
		}
	}

	public function deleteCertificateById($id) {
		$this->db->delete('tbl_certificates', array('id' => $id));
	}
}
