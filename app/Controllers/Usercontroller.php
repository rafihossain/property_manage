<?php

namespace App\Controllers;

use App\Models\Usertypemodel;
use App\Models\User;
use App\Models\Companymodel;
use App\Controllers\BaseController;

class Usercontroller extends BaseController
{
    public function add_user()
    {
        $user_model = new User();
        $user_type_model = new Usertypemodel();
        $types = $user_type_model->findall();
        $data['types'] = $types;
        $data['users'] = $user_model->findall();
        

        if ($this->request->getMethod() == 'post') {
            if ($this->validate('user')) {
                $email = $this->request->getVar('email');

                $check_email = $user_model->where('email', $email)->findall();
                if (empty($check_email)) {

                    $avatar = $this->request->getFile('image');
                    if ($avatar != '') {
                        $name = $avatar->getRandomName();

                        $move = $avatar->move(WRITEPATH . '../public/admin/assets/user/', $name);

                        $image = \Config\Services::image()
                            ->withFile(WRITEPATH . '../public/admin/assets/user/' . $name)
                            ->resize(200, 200, true, 'height')
                            ->save(WRITEPATH . '../public/admin/assets/user/thumbnail/' . $name);
                    } else {
                        $name = 'empty_image.jpg';
                    }
                    $type = $this->session->get('type');

                    $userId = $this->session->get('userId');
                    $company_model= new Companymodel();
                    $company_details= $company_model->where('company_owner_id',$userId)->first();
                    if(empty($company_details['company_owner_id'])){
                        $company_details['company_owner_id']=0;
                    }
                    $data = [
                        'email' => $email,
                        'name' => $this->request->getVar('name'),
                        'contactno' => $this->request->getVar('contact_no'),
                        'password' => $this->request->getVar('password'),
                        'branch' => $this->request->getVar('branch'),
                        'type' => $type,
                        'user_type' => $this->request->getVar('user_type'),
                        'image' => $name,
                        'company_id' => $company_details['company_owner_id'],
                    ];

                    $insert = $user_model->save($data);
                    if (isset($insert)) {
                        $data['users'] = $user_model->findall();
                        $data['types'] = $types;
                        $data['insert_success'] = 'Data Saved';
                        $data['users'] = $user_model->findall();
                        return view('admin/user/add_user', $data);
                    }
                } else {
                    $data['email_check'] = 'Sorry This email already exits';
                    return view('admin/user/add_user', $data);
                }
            } else {
                $data['validation'] = $this->validator;
                return view('admin/user/add_user', $data);
            }
        } else {
            return view('admin/user/add_user', $data);
        }
    }
    public function user_update($id = null)
    {
        $user_model = new User();
        $user_type_model = new Usertypemodel();
        $types = $user_type_model->findall();
        $data['types'] = $types;

        $user = $user_model->find($id);
        $data['user']=$user;

        if ($this->request->getMethod() == 'post') {
            if ($this->validate('user')) {

                $email = $this->request->getVar('email');

                $check_email = $user_model->where('email', $email)->first();
                
                if (empty($check_email)) {

                $avatar = $this->request->getFile('image');
               
                if($avatar!=''){
 
                $pre_image = $this->request->getVar('pre_image');
                if($user['image']!='empty_image.jpg'){
                unlink(WRITEPATH .'../public/admin/assets/user/thumbnail/' . $pre_image);
                unlink(WRITEPATH .'../public/admin/assets/user/' . $pre_image);
                }
                
                   $name=$avatar->getRandomName();
          
                   $move = $avatar->move(WRITEPATH . '../public/admin/assets/user/',$name);
                     
                   $image = \Config\Services::image()
                   ->withFile(WRITEPATH . '../public/admin/assets/user/'.$name)
                   ->resize(200, 200, true, 'height')
                   ->save(WRITEPATH .'../public/admin/assets/user/thumbnail/'. $name);
 
                }elseif($user['image']!='empty_image.jpg'){
                   $name= $user['image'];
                }else{ 
                   $name = 'empty_image.jpg';
                }
                $user= $userId = $this->session->get('userId');
                
                $data = [
                    'email' => $email,
                    'name' => $this->request->getVar('name'),
                    'contactno' => $this->request->getVar('contact_no'),
                    'password' => $this->request->getVar('password'),
                    'branch' => $this->request->getVar('branch'),
                    'user_type' => $this->request->getVar('user_type'),
                    'image' => $name,
                ];
                $update = $user_model->update($id,$data);
                    if (isset($update)) {
                        $data['users'] = $user_model->findall();
                        $data['types'] = $types;
                        $data['update_success'] = 'Data Updated';
                        $data['users'] = $user_model->findall();
                        return view('admin/user/add_user', $data);
                    }
            } else {
                if(($check_email['email']==$email) && ($check_email['id']==$id)){
                    $avatar = $this->request->getFile('image');
               
                if($avatar!=''){
 
                $pre_image = $this->request->getVar('pre_image');
                if($user['image']!='empty_image.jpg'){
                unlink(WRITEPATH .'../public/admin/assets/user/thumbnail/' . $pre_image);
                unlink(WRITEPATH .'../public/admin/assets/user/' . $pre_image);
                }
                
                   $name=$avatar->getRandomName();
          
                   $move = $avatar->move(WRITEPATH . '../public/admin/assets/user/',$name);
                     
                   $image = \Config\Services::image()
                   ->withFile(WRITEPATH . '../public/admin/assets/user/'.$name)
                   ->resize(200, 200, true, 'height')
                   ->save(WRITEPATH .'../public/admin/assets/user/thumbnail/'. $name);
 
                }elseif($user['image']!='empty_image.jpg'){
                   $name= $user['image'];
                }else{ 
                   $name = 'empty_image.jpg';
                }
                $data = [
                    'email' => $email,
                    'name' => $this->request->getVar('name'),
                    'contactno' => $this->request->getVar('contact_no'),
                    'password' => $this->request->getVar('password'),
                    'branch' => $this->request->getVar('branch'),
                    'user_type' => $this->request->getVar('user_type'),
                    'image' => $name,
                ];
                $update = $user_model->update($id,$data);
                    if (isset($update)) {
                        $data['users'] = $user_model->findall();
                        $data['types'] = $types;
                        $data['update_success'] = 'Data Updated';
                        $data['users'] = $user_model->findall();
                        return view('admin/user/add_user', $data);
                    }

                }else{
                    $data['email_check'] = 'Sorry This email already exits';
                return view('admin/user/update_user', $data);
                }
                
            }
      

            } else {
                $data['validation'] = $this->validator;
                return view('admin/user/update_user', $data);
            }
        } else {
            return view('admin/user/update_user', $data);
        }
    }
    public function user_delete($id=null){

        $user_model = new User();
        $user_type_model = new Usertypemodel();
        $delete = $user_model->where('id',$id)->delete();
        if(isset($delete)){

            $data['users'] = $user_model->findall();
            $types = $user_type_model->findall();
            $data['types'] = $types;
            $data['delete_success'] = 'Data Deleted';
            $data['users'] = $user_model->findall();
            return view('admin/user/add_user', $data);
        }
    }
    public function indivusual_user(){
        $user_id=$this->request->getVar('user_id');
        $user_model = new User();
        $data['user'] = $user_model->where('id',$user_id)->first();
        
        echo json_encode($data);
    }
}
