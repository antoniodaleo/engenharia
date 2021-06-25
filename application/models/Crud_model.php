<?php
class Crud_model extends CI_Model 
{
	function saverecords($email)
	{
		$query="INSERT INTO `email`( `email_descricao`) 
		VALUES ('$email')";
		$this->db->query($query);
	}
}