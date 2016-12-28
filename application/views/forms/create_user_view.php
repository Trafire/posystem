<?php
    $this->load->helper('form');.
    
    form_open("User/create_user");
    
    echo form_input('username');
    echo form_input('firstname');
    echo form_input('lastname');
    echo form_password('password');
    echo form_input('email');
    echo form_close('');

    

?>


