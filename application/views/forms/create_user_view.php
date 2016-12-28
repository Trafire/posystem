<div>
    <?php
        $this->load->helper('form');
        
        echo form_open("User/create_user");
        $fields = array('username','firstname','lastname', 'email');
        
        foreach ($fields as $field)
        {
            echo form_label($field,$field);
	        echo form_input($field);
            echo "<br>";
          }
        echo form_label("password","password");
        echo form_password('password');
        echo form_submit('submit', 'Register');
        echo form_close('');
    ?>
</div>


