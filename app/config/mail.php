<?php
return array(
 
    'driver' => 'smtp',
 
    'host' => 'smtp.gmail.com',
 
    'port' => 587,
 
    'from' => array('address' => 'thihanh790@gmail.com', 'name' => 'Blog cafe'),
 
    'encryption' => 'tls',
 
    'username' => 'thihanh790@gmail.com',
 
    'password' => 'bonghongtrang',
 
    'sendmail' => '/usr/sbin/sendmail -bs',
 
    'pretend' => false,
 
);