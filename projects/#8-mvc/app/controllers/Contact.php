<?php

class Contact extends Controller
{
    public function index($param = '')
    {
        echo 'contact index';
        echo $param ? ". Param - $param" : '';
    }
    
    public function about($param = '')
    {
        echo 'contact index';
        echo $param ? ". Param - $param" : '';
    }
}