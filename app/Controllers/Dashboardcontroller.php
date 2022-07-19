<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\User;

class Dashboardcontroller extends BaseController
{
    public function index($property_id = null)
    {
        //echo $property_id;die();
        if(is_numeric($property_id)){
            $this->session->set('rs_property_id',$property_id);
        }
        

        //$property_id=$this->session->get('rs_property_id');
        //echo $property_id;die();
        return view('admin/home/home');
        
    }
}
