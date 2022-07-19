<?php

namespace App\Controllers;

use App\Models\Yearmodel;
use App\Models\Currencymodel;
use App\Models\User;
use App\Models\Settingmodel;
use App\Controllers\BaseController;
use App\Models\Billsetupmodel;
use App\Models\Membersetupmodel;
use App\Models\Monthsetupmodel;
use App\Models\Notificationmodel;



class Settingcontroller extends BaseController
{
    public function year_setup()
    {
        $property_id=$this->session->get('rs_property_id');

        $year_model = new Yearmodel();
        $all_year = $year_model->where('property_id',$property_id)->findall();
        $data['years'] = $all_year;
        if ($this->request->getMethod() == 'post') {
            if ($this->validate('year')) {
                $data = [
                    'year' => $this->request->getVar('year'),
                    'property_id' => $property_id,
                ];
                $insert = $year_model->save($data);
                if (isset($insert)) {
                    $all_year = $year_model->where('property_id',$property_id)->findall();
                    $data['years'] = $all_year;
                    $data['insert_success'] = "Data Saved";
                    return view('admin/setting/year_setup', $data);
                }
            } else {
                $data['validation'] = $this->validator;
                return view('admin/setting/year_setup', $data);
            }
        } else {
            return view('admin/setting/year_setup', $data);
        }
    }

    public function year_update($id = null)
    {
        $property_id=$this->session->get('rs_property_id');

        $year_model = new Yearmodel();
        $all_year = $year_model->findall();
        $data['years'] = $all_year;
        $year = $year_model->where('id', $id)->first();
        $data['year'] = $year;

        if ($this->request->getMethod() == 'post') {
            if ($this->validate('year')) {
                $data = [
                    'year' => $this->request->getVar('year'),
                ];
                $update = $year_model->update($id, $data);
                if (isset($update)) {
                    $all_year = $year_model->where('property_id',$property_id)->findall();
                    $data['years'] = $all_year;
                    $data['update_success'] = "Data Updated";
                    return view('admin/setting/year_setup', $data);
                }
            } else {
                $data['validation'] = $this->validator;
                return view('admin/setting/year_update', $data);
            }
        } else {
            return view('admin/setting/year_update', $data);
        }
    }
    public function year_delete($id = null)
    {
        $property_id=$this->session->get('rs_property_id');
        $year_model = new Yearmodel();
        $delete = $year_model->where('id', $id)->delete();
        if (isset($delete)) {
            $all_year = $year_model->findall();
            $data['years'] = $all_year;
            $data['delete_success'] = "Data Deleted";
            return view('admin/setting/year_setup', $data);
        }
    }

    public function currency_setup()
    {
        $property_id=$this->session->get('rs_property_id');

        $currency_model = new Currencymodel();
        $all_currency = $currency_model->where('property_id',$property_id)->findall();
        $data['currencies'] = $all_currency;

        if ($this->request->getMethod() == 'post') {
            if ($this->validate('currency')) {
                $data = [
                    'symbol' => $this->request->getVar('symbol'),
                    'name' => $this->request->getVar('name'),
                    'property_id' => $property_id,
                ];
                $insert = $currency_model->save($data);
                if (isset($insert)) {
                    $all_currency = $currency_model->where('property_id',$property_id)->findall();
                    $data['currencies'] = $all_currency;
                    $data['insert_success'] = "Data Saved";
                    return view('admin/setting/currency_setup', $data);
                }
            } else {
                $data['validation'] = $this->validator;
                return view('admin/setting/currency_setup', $data);
            }
        } else {
            return view('admin/setting/currency_setup', $data);
        }
    }
    public function currency_update($id = null)
    {
        $property_id=$this->session->get('rs_property_id');

        $currency_model = new Currencymodel();
        $currency = $currency_model->where('id', $id)->first();
        $data['currency'] = $currency;
        $all_currency = $currency_model->findall();
        $data['currencies'] = $all_currency;

        if ($this->request->getMethod() == 'post') {
            if ($this->validate('currency')) {
                $data = [
                    'symbol' => $this->request->getVar('symbol'),
                    'name' => $this->request->getVar('name'),
                ];
                $update = $currency_model->update($id, $data);
                if (isset($update)) {
                    $all_currency = $currency_model->where('property_id',$property_id)->findall();
                    $data['currencies'] = $all_currency;
                    $data['update_success'] = "Data Updated";
                    return view('admin/setting/currency_setup', $data);
                }
            } else {
                $data['validation'] = $this->validator;
                return view('admin/setting/currency_update', $data);
            }
        } else {
            return view('admin/setting/currency_update', $data);
        }
    }
    public function currency_delete($id = null)
    {
        $property_id=$this->session->get('rs_property_id');
        $currency_model = new Currencymodel();
        $delete = $currency_model->where('id', $id)->delete();
        if (isset($delete)) {
            $all_currency = $currency_model->findall();
            $data['currencies'] = $all_currency;
            $data['delete_success'] = "Data Deleted";
            return view('admin/setting/currency_setup', $data);
        }
    }
    public function system_setup()
    {
        $property_id=$this->session->get('rs_property_id');

        $setting_model= new Settingmodel();
        $data['currency'] = $setting_model->where('property_id',$property_id)->where('sname','currency')->first();
        $data['language'] = $setting_model->where('property_id',$property_id)->where('sname','language')->first();
        $data['email'] = $setting_model->where('property_id',$property_id)->where('sname','email')->first();
        $data['sms'] = $setting_model->where('property_id',$property_id)->where('sname','sms')->first();
        
        $currency_model = new Currencymodel();
        $data['currencies'] = $currency_model->where('property_id',$property_id)->findall();
        return view('admin/setting/system_setup', $data);
    }
    public function currency_setting()
    {
        $property_id=$this->session->get('rs_property_id');

        if ($this->validate('currencysett')) {
        $avatar = $this->request->getFile('image');
        if ($avatar != '') {

            $name = $avatar->getRandomName();

            $move = $avatar->move(WRITEPATH . '../public/admin/assets/super_admin/', $name);

            $image = \Config\Services::image()
                ->withFile(WRITEPATH . '../public/admin/assets/super_admin/' . $name)
                ->resize(200, 200, true, 'height')
                ->save(WRITEPATH . '../public/admin/assets/super_admin/thumbnail/' . $name);
        } else {
            $name = 'empty_image.jpg';
        }
        
        $currency = [
            'currency' => $this->request->getVar('currency'),
            'currency_separator' => $this->request->getVar('currency_separator'),
            'currency_position' => $this->request->getVar('currency_position'),
            'currency_decimal' => $this->request->getVar('currency_decimal'),
            'image' => $name,
            
        ];
        $currency_id=$this->request->getVar('currency_id');
        $currency_setup= json_encode($currency);
        $data = [
            'sname' => 'currency',
            'sgroup' => 'system',
            'svalue' => $currency_setup,
        ];
        $setting_model= new Settingmodel();
        $builder=$this->db->table('settings');
        $builder->where('sname','currency');
        $builder->where('id',$currency_id);
        $insert= $builder->update($data);
         
        if(isset($insert)){
            $currency_model = new Currencymodel();
            $setting_model= new Settingmodel();
            $data['currency'] = $setting_model->where('property_id',$property_id)->where('sname','currency')->first();
            $data['language'] = $setting_model->where('property_id',$property_id)->where('sname','language')->first();
            $data['email'] = $setting_model->where('property_id',$property_id)->where('sname','email')->first();
            $data['sms'] = $setting_model->where('property_id',$property_id)->where('sname','sms')->first();
            $data['currencies'] = $currency_model->where('property_id',$property_id)->findall();
            $data['update_success'] = "Data Updated";
            return view('admin/setting/system_setup', $data);
        }
    }else{
        $data['validation'] = $this->validator;
        $currency_model = new Currencymodel();
        
        $data['currencies'] = $currency_model->findall();
        return view('admin/setting/system_setup', $data);

    }

    }
    public function language_setting(){
        $property_id=$this->session->get('rs_property_id');

        if ($this->validate('language')) {
            $languages = [
                'language' => $this->request->getVar('language'),
            ];
            $language= json_encode($languages);
        $data = [
            'sname' => 'language',
            'sgroup' => 'system',
            'svalue' => $language,
        ];
        $language_id=$this->request->getVar('language_id');
        $setting_model= new Settingmodel();
        $builder=$this->db->table('settings');
        $builder->where('sname','language');
        $builder->where('id',$language_id);
        $insert= $builder->update($data);
            if(isset($insert)){
                $currency_model = new Currencymodel();
                $setting_model= new Settingmodel();
                $data['currency'] = $setting_model->where('property_id',$property_id)->where('sname','currency')->first();
                $data['language'] = $setting_model->where('property_id',$property_id)->where('sname','language')->first();
                $data['email'] = $setting_model->where('property_id',$property_id)->where('sname','email')->first();
                $data['sms'] = $setting_model->where('property_id',$property_id)->where('sname','sms')->first();
                $data['currencies'] = $currency_model->where('property_id',$property_id)->findall();
                $data['update_success'] = "Data Updated";
                return view('admin/setting/system_setup', $data);
            }

        }else{
            $data['validation'] = $this->validator;
            $currency_model = new Currencymodel();
            
            $data['currencies'] = $currency_model->findall();
            return view('admin/setting/system_setup', $data);
        }
        
    }
    public function email_setting(){
        $property_id=$this->session->get('rs_property_id');

        if ($this->validate('emailsetting')) {
            $email_sett = [
                'mail_option' => $this->request->getVar('mail_option'),
                'smtp_hostname' => $this->request->getVar('smtp_hostname'),
                'smtp_username' => $this->request->getVar('smtp_username'),
                'smtp_password' => $this->request->getVar('smtp_password'),
                'smtp_post' => $this->request->getVar('smtp_post'),
                'smtp_secure' => $this->request->getVar('smtp_secure'),
            ];
            $email_settings= json_encode($email_sett);
            $data = [
                'sname' => 'email',
                'sgroup' => 'system',
                'svalue' => $email_settings,
            ];
            $setting_model= new Settingmodel();

            $email_id=$this->request->getVar('email_id');

            $builder=$this->db->table('settings');
            $builder->where('sname','email');
            $builder->where('id',$email_id);
            $insert= $builder->update($data);
            if(isset($insert)){
                $currency_model = new Currencymodel();
                $setting_model= new Settingmodel();
                $data['currency'] = $setting_model->where('property_id',$property_id)->where('sname','currency')->first();
                $data['language'] = $setting_model->where('property_id',$property_id)->where('sname','language')->first();
                $data['email'] = $setting_model->where('property_id',$property_id)->where('sname','email')->first();
                $data['sms'] = $setting_model->where('property_id',$property_id)->where('sname','sms')->first();
                $data['currencies'] = $currency_model->where('property_id',$property_id)->findall();
                $data['update_success'] = "Data Updated";
                return view('admin/setting/system_setup', $data);
            }

        }else{
            $data['validation'] = $this->validator;
            $currency_model = new Currencymodel();
            
            $data['currencies'] = $currency_model->findall();
            return view('admin/setting/system_setup', $data);
        }
        
    }
    public function sms_setting(){
        $property_id=$this->session->get('rs_property_id');

        if ($this->validate('smssetting')) {
            $sms_all = [
                'clickAtell_username' => $this->request->getVar('clickAtell_username'),
                'clickAtell_password' => $this->request->getVar('clickAtell_password'),
                'clickAtell_api_key' => $this->request->getVar('clickAtell_api_key'),
            ];
            $sms= json_encode($sms_all);
            $data = [
                'sname' => 'sms',
                'sgroup' => 'system',
                'svalue' => $sms,
            ];
            $setting_model= new Settingmodel();

            $sms_id=$this->request->getVar('sms_id');

            $builder=$this->db->table('settings');
            $builder->where('id',$sms_id);
            $insert= $builder->update($data);
            if(isset($insert)){
                $currency_model = new Currencymodel();
                $setting_model= new Settingmodel();
                $data['currency'] = $setting_model->where('property_id',$property_id)->where('sname','currency')->first();
                $data['language'] = $setting_model->where('property_id',$property_id)->where('sname','language')->first();
                $data['email'] = $setting_model->where('property_id',$property_id)->where('sname','email')->first();
                $data['sms'] = $setting_model->where('property_id',$property_id)->where('sname','sms')->first();
                $data['currencies'] = $currency_model->where('property_id',$property_id)->findall();
                $data['update_success'] = "Data Updated";
                return view('admin/setting/system_setup', $data);
            }

        }else{
            $data['validation'] = $this->validator;
            $currency_model = new Currencymodel();
            
            $data['currencies'] = $currency_model->findall();
            return view('admin/setting/system_setup', $data);
        }
        
    }

    /////
    public function billSetupAdd()
    {
        $property_id=$this->session->get('rs_property_id');

        $billSetUp = new Billsetupmodel();
        $data['getBillSetups'] = $billSetUp->where('property_id',$property_id)->findAll();

        if ($this->request->getMethod() == 'post') {
            if (!$this->validate('billSetupValidate')) {
                $data['validation'] = $this->validator;
            } else {
                $billCreate = [
                    'billtype' => $this->request->getVar('bill_type'),
                    'property_id' => $property_id,
                ];

                $billSetUp->insert($billCreate);
                return redirect()->to(base_url('/admin/billsetup_add'));
            }
        }
        return view('admin/setting/billsetup-add', $data);
    }
    public function billSetupEdit($id)
    {
        $property_id=$this->session->get('rs_property_id');

        $billSetUp = new Billsetupmodel();

        $data['billSetupEdit'] = $billSetUp->where('property_id',$property_id)->where('id', $id)->first();
        $data['getBillSetups'] = $billSetUp->where('property_id',$property_id)->findAll();

        if ($this->request->getMethod() == 'post') {
            if (!$this->validate('billSetupValidate')) {
                $data['validation'] = $this->validator;
            } else {
                $billUpdate = [
                    'billtype' => $this->request->getVar('bill_type'),
                ];

                $billSetUp->update($id, $billUpdate);
                return redirect()->to(base_url('/admin/billsetup_add'));
            }
        }
        return view('admin/setting/billsetup-edit', $data);
    }

    public function billSetupDelete($id)
    {
        $property_id=$this->session->get('rs_property_id');

        $billSetUp = new Billsetupmodel();
        $billSetUp->delete($id);
        return redirect()->to(base_url('/admin/billsetup_add'));
    }

    public function utilitySetup()
    {
        $property_id=$this->session->get('rs_property_id');

        $utilitySetUp = new Settingmodel();
        $data['getUtilitySetup'] = $utilitySetUp->where('property_id',$property_id)->where('sname', 'utilitybill')->first();

        if ($this->request->getMethod() == 'post') {
            if (!$this->validate('utilitySetupValidate')) {
                $data['validation'] = $this->validator;
            } else {
                $sname = $this->request->getVar('sname');

                $myupdate = [
                    'gas_bill'=> $this->request->getVar('gas_bill'),
                    'security_bill'=> $this->request->getVar('security_bill'),
                    'property_id'=> $property_id,
                ];
                
                $insertField = [
                    'svalue' => json_encode($myupdate),
                ];

                $utilitySetUp->where('sname', $sname)
                            ->where('property_id',$property_id)
                            ->set($insertField)
                            ->update();

                return redirect()->to(base_url('/admin/utility_setup'))->with('success', 'Updated Utility Bill Information Successfully');
            }
        }
        return view('admin/setting/utility-setup', $data);
    }


    public function memberSetupAdd()
    {
        $property_id=$this->session->get('rs_property_id');

        $memberSetUp = new Membersetupmodel();
        $data['getMemberSetups'] = $memberSetUp->where('property_id',$property_id)->findAll();


        if ($this->request->getMethod() == 'post') {
            if (!$this->validate('memberSetupValidate')) {
                $data['validation'] = $this->validator;
            } else {
                $memberCreate = [
                    'membertype' => $this->request->getVar('member_type'),
                    'property_id' => $property_id,
                ];

                $memberSetUp->insert($memberCreate);
                return redirect()->to(base_url('/admin/membersetup_add'));
            }
        }
        return view('admin/setting/membersetup-add', $data);
    }

    public function memberSetupEdit($id)
    {
        $property_id=$this->session->get('rs_property_id');

        $memberSetUp = new Membersetupmodel();
        $data['getMemberSetups'] = $memberSetUp->where('property_id',$property_id)->findAll();
        $data['getSetupEdit'] = $memberSetUp->where('property_id',$property_id)->where('id', $id)->first();

        if ($this->request->getMethod() == 'post') {
            if (!$this->validate('memberSetupValidate')) {
                $data['validation'] = $this->validator;
            } else {
                $memberUpdate = [
                    'membertype' => $this->request->getVar('member_type'),
                ];

                $memberSetUp->update($id, $memberUpdate);
                return redirect()->to(base_url('/admin/membersetup_add'));
            }
        }
        return view('admin/setting/membersetup-edit', $data);
    }

    public function memberSetupDelete($id)
    {
        $property_id=$this->session->get('rs_property_id');

        $memberSetUp = new Membersetupmodel();
        $memberSetUp->delete($id);
        return redirect()->to(base_url('/admin/membersetup_add'));
    }

    public function monthSetupAdd()
    {
        $property_id=$this->session->get('rs_property_id');

        $monthSetUp = new Monthsetupmodel();
        $data['getMonthSetups'] = $monthSetUp->where('property_id',$property_id)->findAll();

        if ($this->request->getMethod() == 'post') {
            if (!$this->validate('monthSetupValidate')) {
                $data['validation'] = $this->validator;
            } else {
                $monthCreate = [
                    'monthname' => $this->request->getVar('month_name'),
                    'property_id' => $property_id,
                ];

                $monthSetUp->insert($monthCreate);
                return redirect()->to(base_url('/admin/monthsetup_add'));
            }
        }
        return view('admin/setting/monthsetup-add', $data);
    }

    public function monthSetupEdit($id)
    {
        $property_id=$this->session->get('rs_property_id');

        $monthSetUp = new Monthsetupmodel();
        $data['getMonthSetups'] = $monthSetUp->where('property_id',$property_id)->findAll();
        $data['getSetupEdit'] = $monthSetUp->where('property_id',$property_id)->where('id', $id)->first();

        if ($this->request->getMethod() == 'post') {
            if (!$this->validate('monthSetupValidate')) {
                $data['validation'] = $this->validator;
            } else {
                $monthUpdate = [
                    'monthname' => $this->request->getVar('month_name'),
                ];

                $monthSetUp->update($id, $monthUpdate);
                return redirect()->to(base_url('/admin/monthsetup_add'));
            }
        }
        return view('admin/setting/monthsetup-edit', $data);
    }

    public function monthSetupDelete($id)
    {
        $monthSetUp = new Monthsetupmodel();
        $monthSetUp->delete($id);
        return redirect()->to(base_url('/admin/monthsetup_add'));
    }

    public function notificationSetup()
    {
        $notification = new Notificationmodel();
        $data['getNotification'] = $notification->findAll();
        $data['summernote'] = 1;

        return view('admin/setting/notification/notification-setup', $data);
    }

    public function notificationSetupEdit()
    {
        $id = $this->request->getVar('id');
        $notification = new Notificationmodel();
        $data['getNotification'] = $notification->find($id);

        $result = view('admin/setting/notification/notification-edit', $data);
        echo json_encode($result);
    }

    public function notificationSetupUpdate(){

        $notification = new Notificationmodel();

        $id = $this->request->getVar('n_id');
        $notificationUpdate = [
            'mailsub' => $this->request->getVar('mail_subject'),
            'mailbody' => $this->request->getVar('mail_body'),
        ];

        $notification->update($id, $notificationUpdate);

        // echo "<pre>";
        // print_r($notificationUpdate);
        // die();

        echo json_encode('success');
    }
}
