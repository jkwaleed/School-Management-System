<?php
class Teachers_model extends CI_Model
{
	function __contruct()
	{
		parent::__construct();
		$this->db = $this->load->database('default', True);
	}
	public function teachers()
	{	
		return $this->db->get('teacher')->result();
	}

	public function teacher($id)
	{	
		return $this->db->get_where('teacher', ['t_id' => $id])->row();
	}

	public function select()
	{
		$query = $this->db->get('teacher');
		return $query->result();
	}
	public function insert_into_db($data)
	{
		$this->db->insert('teacher',$data);
	}

	public function save($teacher, $id)
	{
		$isSaved = false;
		if ($id == null) {
		 $isSaved =	$this->add($teacher);
		}else{
			$isSaved =	$this->update($teacher, $id);
		}
		return $isSaved;
	}

	public function add($teacher)
	{
		return	$this->db->insert('teacher', $teacher);
	}

	public function update($teacher, $id)
	{
		return	$this->db->update('teacher', $teacher, ['t_id' => $id]);
	}

	public function delete($id){
		return	$this->db->delete('teacher', ['t_id' =>  $id]);
	}

}
?>
