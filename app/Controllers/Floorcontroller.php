<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Floormodel;

class floorController extends BaseController
{
    public function index()
    {
        $property_id=$this->session->get('rs_property_id');
        //echo $property_id;die();

        $floor = new Floormodel();
        $getFloors = $floor->where('property_id',$property_id)->findAll();

        return view('admin/floor/floor-list', [
            "getFloors" => $getFloors
        ]);
    }
    public function floorAdd()
    {
        $property_id=$this->session->get('rs_property_id');
        $floor = new Floormodel();
        $data = array();
        if ($this->request->getMethod() == 'post') {
            if (!$this->validate('floorValidate')) {
                $data['validation'] = $this->validator;
            } else {
                $floorAdd = [
                    'floorno' => $this->request->getVar('floor_no'),
                    'property_id'=>$property_id
                ];
                $floor->insert($floorAdd);
                return redirect()->to(base_url('/admin/floor_list'));
            }
        }
        return view('admin/floor/floor-add', $data);
    }
    public function floorEdit($id)
    {
        $floor = new Floormodel();
        $data['floorInfo'] = $floor->where(['id' => $id])->first();

        if ($this->request->getMethod() == 'post') {
            if (!$this->validate('floorValidate')) {
                $data['validation'] = $this->validator;
            } else {
                $florUpdate = [
                    'floorno' => $this->request->getVar('floor_no')
                ];
                $floor->update($id, $florUpdate);
                return redirect()->to(base_url('/admin/floor_list'));
            }
        }
        return view('admin/floor/floor-edit', $data);
    }
    public function floorDelete($id)
    {
        $floor = new Floormodel();

        $floor->delete($id);

        return redirect()->to(base_url('/admin/floor_list'));
    }
}
