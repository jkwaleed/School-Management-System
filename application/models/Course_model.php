<?php
class Course_model extends CI_Model
{
	function __contruct()
	{
		parent::__construct();
	}
	public function courses()
	{	
		return $this->db->get('courses')->result();
	}

	public function course($id)
	{	
		return $this->db->get_where('courses', ['course_id' => $id])->row();
	}

	public function select()
	{
		$query = $this->db->get('courses');
		return $query->result();
	}


	public function save($course, $id)
	{
		$isSaved = false;
		if ($id == null) {
		 $isSaved =	$this->add($course);
		}else{
			$isSaved =	$this->update($course, $id);
		}
		return $isSaved;
	}

	public function add($course)
	{
		return	$this->db->insert('courses', $course);
	}

	public function update($course, $id)
	{
		return	$this->db->update('courses', $course, ['course_id' => $id]);
	}

	public function delete($id){
		return	$this->db->delete('courses', array('course_id' =>  $id));
	}

}
?>
