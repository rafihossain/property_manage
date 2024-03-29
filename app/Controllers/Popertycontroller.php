<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Popertymodel;
use App\Models\Popertieimagemodel;
use App\Models\User;
use App\Models\Companymodel;

class Popertycontroller extends BaseController
{
    public function index()
    {
        $user = new User();
        $userId = $this->session->get('userId');
        $type = $user->where(['id' => $userId])->first();

        
        $poperty_model= new Popertymodel();
        $properties= $poperty_model->where('owner',$userId)->findall();
        $data['properties']= $properties;
        $data['type']= $type['type'];
        

        if ($type['type'] == 1) {
            $properties= $poperty_model->where('owner',$userId)->find();
            return redirect()->to(base_url('/admin/home/'.$properties['id']));
        } elseif ($type['type'] == 2) {
            return view('admin/user/poperty-list',$data);
        } else {
            return view('admin/user/account-mode');
        }
    }
    public function popertyList($type=null)
    {
        $poperty_model= new Popertymodel();
        $userId = $this->session->get('userId');
        $properties= $poperty_model->where('owner',$userId)->findall();
        $data['properties']= $properties;
        $data['type']= $type;
         //print_r($data);die();

        return view('admin/user/poperty-list',$data);
    }
    public function popertyAdd($type=null)
    {
        $this->session->set('type', $type);
        $poperty = new Popertymodel();
        $popertyImage = new Popertieimagemodel();
        $user = new User();
        $company_model= new Companymodel();
        $userId = $this->session->get('userId');
        

        if ($this->request->getMethod() == 'post') {

            if (!$this->validate('popertyValidate')) {
                $data['validation'] = $this->validator;
            } else {

                $img = $this->request->getFile('image');
                if($img!=''){
                    $newName = $img->getRandomName();
                    $img->move(ROOTPATH . 'public/uploads', $newName);
                }
                else{
                    $newName='empty_image.jpg';
                }
                

                $company=[
                    'company_owner_id' => $userId,
                    'status' => 1,
                ];
                $company_model->insert($company);
                $company_id = $company_model->getInsertID();

                $ptyCreate = [
                    'propertyname' => $this->request->getVar('po_name'),
                    'streetads' => $this->request->getVar('po_streetads'),
                    'city' => $this->request->getVar('po_city'),
                    'state' => $this->request->getVar('po_stateregion'),
                    'zip' => $this->request->getVar('po_zip'),
                    'country' => $this->request->getVar('po_country'),
                    'owner' => $userId,
                    'image' => $newName,
                    'company_id' => $company_id,

                ];
                                
                $poperty->insert($ptyCreate);
                $poperty_id = $poperty->getInsertID();

                //user type update
                $data = [
                    'type' => $type
                ];
                $user->update($userId, $data);

                //multiple image upload in popertieimages table
                $getMultiImages = $this->request->getVar('additionalimages');
                if(!empty($getMultiImages)){
                    foreach ($getMultiImages as $multiImage) {
                        $images = [
                            'popertyid' => $poperty_id,
                            'multiimage' => $multiImage
                        ];
                        $popertyImage->insert($images);
                    }
                }

                $user = $user->where('id',$userId)->first();

                if($user['type']==2){
                    return redirect()->to(base_url('admin/poperty_list'));
                }elseif($user['type']==1){
                    return redirect()->to(base_url('/admin/home/'.$poperty_id));
                }
                
            }
        }

        $data['type'] = $type;
        return view('admin/user/poperty-add', $data);
    }

    public function multipleImageUpload()
    {
        //multiple image upload
        if ($imagefile = $this->request->getFiles()) {
            foreach ($imagefile as $img) {

                $myImage = $img[0];

                if ($myImage->isValid() && !$myImage->hasMoved()) {
                    $newName = $myImage->getRandomName();
                    $myImage->move(ROOTPATH . 'public/uploads', $newName);

                    echo $newName;
                }
            }
        }
    }
}
