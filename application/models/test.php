<?php 
/**
* 
*/
class Test extends CI_Model
{
	
	function devolver_departamento()
	{
		$sql = $this->db->query('SELECT id,desdep FROM departamentos');
		//Este foreach trata el resultado como un objeto
		foreach ($sql->result() as $reg)
		{
			$data[$reg->id] = $reg->desdep;
		}
		return $data;
	}

	function devolver_provincias($coddep)
	{
		$sql = $this->db->select('id, despro')
						->where('departamento_id', $coddep)
						->get('provincias');
		//Este foreach trata el resultado como un arreglo
		foreach ($sql->result_array() as $reg)
		{
			$data[$reg['id']] = $reg['despro'];
		}

		echo json_encode($data);
	}
}