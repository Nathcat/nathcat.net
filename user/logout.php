<?php 
$session_name = session_name("AuthCat-SSO");
session_set_cookie_params(0, '/', 'nathcat.net');
session_start(); session_destroy(); ?>