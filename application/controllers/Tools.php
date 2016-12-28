<?php
class Tools extends CI_Controller {

        public function message($to = 'World')
        {
                echo "Hello {$to}!".PHP_EOL;
		$this->load->database();
		$query = $this->db->query("SELECT * from test");
		foreach ($query->result() as $row)
	{
        	echo $row->lastname;
	        echo $row->firstname;
     
	}

        }
}
