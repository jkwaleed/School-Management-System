<?php
class Student_model extends CI_Model
{
	function __contruct()
	{
		parent::__construct();
		$this->db = $this->load->database('default', True);
	}
	public function students()
	{	
		return $this->db->get('student')->result();
	}

	public function student($id)
	{	
		return $this->db->get_where('student', ['student_roll_no' => $id])->row();
	}

	public function select()
	{
		$query = $this->db->get('student');
		return $query->result();
	}
	public function insert_into_db($data)
	{
		$this->db->insert('student',$data);
	}

	public function save($student, $id)
	{
		$isSaved = false;
		if ($id == null) {
		 $isSaved =	$this->add($student);
		}else{
			$isSaved =	$this->update($student, $id);
		}
		return $isSaved;
	}

	public function add($student)
	{
		return	$this->db->insert('student', $student);
	}

	public function update($student, $id)
	{
		return	$this->db->update('student', $student, ['student_roll_no' => $id]);
	}

	public function delete($id){
		return	$this->db->delete('student', ['student_roll_no' =>  $id]);
	}

}
?>
