<?php
defined('BASEPATH') or die('Direct script access not allowed');

class DB extends PDO
{

    public function __construct()
    {
        parent::__construct("mysql:host=localhost;dbname=blog" , 'root', '', []);
        $this->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
}