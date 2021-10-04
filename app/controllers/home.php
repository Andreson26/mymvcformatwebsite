<?php

Class Home extends Controller
{
    function index()
    {
        
        $data['page_title'] = "Home";
        $this->view("resources/index",$data);
    }

    
}