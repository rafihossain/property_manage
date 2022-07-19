<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Mailsmsmodel;
use App\Models\Tenantmodel;
use App\Models\Employeemodel;
use App\Models\Ownermodel;

use App\Models\Mailsmsdatamodel;

class Mailsmsdatacontroller extends BaseController
{
    public function getMailData()
    {
        $mailSmsData = new Mailsmsdatamodel();

        $maildata = new Mailsmsmodel();
        $tenant = new Tenantmodel();
        $employee = new Employeemodel();
        $owner = new Ownermodel();

        $todayDate = date('Y-m-d');
        $alldata = $maildata->where(['schedule' => $todayDate, 'mailstatus' => 0])->findAll();


        /*=============================================================
                    Get Tenant/ Owner / Employee 
        ===============================================================*/

        foreach ($alldata as $key => $mailData) {

            $mailTenant = $mailData['mailtenant'];

            if ($mailTenant != '') {
                if ($mailTenant == 0) {
                    $getTeValueName = $tenant->findAll();
                } else {
                    $teValue = explode(',', $mailTenant);
                    $getTeValueName = $tenant->whereIn('id', $teValue)->findAll();
                }

                $tenants = [];
                foreach ($getTeValueName as $teValueName) {

                    $tenants[] = $teValueName['tename'];
                    $tenants[] = $teValueName['teemail'];
                    $tenants[] = $teValueName['tecontrctno'];

                    $storeMailData['dmailname'] = $teValueName['tename'];
                    $storeMailData['dmailemail'] = $teValueName['teemail'];
                    $storeMailData['dmailphone'] = $teValueName['tecontrctno'];
                    $storeMailData['dmailsubject'] = $mailData['mailsub'];
                    $storeMailData['dmailmessage'] = $mailData['mailmess'];
                    $storeMailData['dmailstatus'] = 0;

                    $mailType = explode(',', $mailData['mailmesstype']);

                    if (in_array('sms', $mailType)) {
                        $storeMailData['dmailtype'] = 'sms';
                    }
                    if (in_array('email', $mailType)) {
                        $storeMailData['dmailtype'] = 'email';
                    }
                    if (count($mailType) == 2) {
                        $storeMailData['dmailtype'] = 'all';
                    }

                    $mailSmsData->insert($storeMailData);

                    //Mailsms Database Update
                    $id = $mailData['id'];
                    $mailSmsFieldUpdate = [
                        'mailstatus' => 1
                    ];
                    $maildata->update($id, $mailSmsFieldUpdate);
                }
                $alldata[$key]['tenants'] = $tenants;
            }

            $mailEmployee = $mailData['mailemployee'];

            if ($mailEmployee != '') {

                if ($mailEmployee == 0) {
                    $getEmValueName = $employee->findAll();
                } else {
                    $emValue = explode(',', $mailEmployee);
                    $getEmValueName = $employee->whereIn('id', $emValue)->findAll();
                }

                $employees = [];
                foreach ($getEmValueName as $emValueName) {

                    $employees[] = $emValueName['name'];
                    $employees[] = $emValueName['email'];
                    $employees[] = $emValueName['contact_no'];

                    $storeMailData['dmailname'] = $emValueName['name'];
                    $storeMailData['dmailemail'] = $emValueName['email'];
                    $storeMailData['dmailphone'] = $emValueName['contact_no'];
                    $storeMailData['dmailsubject'] = $mailData['mailsub'];
                    $storeMailData['dmailmessage'] = $mailData['mailmess'];
                    $storeMailData['dmailstatus'] = 0;

                    $mailType = explode(',', $mailData['mailmesstype']);

                    if (in_array('sms', $mailType)) {
                        $storeMailData['dmailtype'] = 'sms';
                    }
                    if (in_array('email', $mailType)) {
                        $storeMailData['dmailtype'] = 'email';
                    }
                    if (count($mailType) == 2) {
                        $storeMailData['dmailtype'] = 'all';
                    }

                    $mailSmsData->insert($storeMailData);

                    //Mailsms Database Update
                    $id = $mailData['id'];
                    $mailSmsFieldUpdate = [
                        'mailstatus' => 1
                    ];
                    $maildata->update($id, $mailSmsFieldUpdate);
                }
                $alldata[$key]['employees'] = $employees;
            }

            $mailOwner = $mailData['mailowner'];

            if ($mailOwner != '') {

                if ($mailOwner == 0) {
                    $getowValueName = $owner->findAll();
                } else {
                    $owValue = explode(',', $mailOwner);
                    $getowValueName = $owner->whereIn('owner_id', $owValue)->findAll();
                }

                $owners = [];
                foreach ($getowValueName as $owValueName) {
                    $owners[] = $owValueName['name'];
                    $owners[] = $owValueName['email'];
                    $owners[] = $owValueName['contact_no'];

                    $storeMailData['dmailname'] = $owValueName['name'];
                    $storeMailData['dmailemail'] = $owValueName['email'];
                    $storeMailData['dmailphone'] = $owValueName['contact_no'];
                    $storeMailData['dmailsubject'] = $mailData['mailsub'];
                    $storeMailData['dmailmessage'] = $mailData['mailmess'];
                    $storeMailData['dmailstatus'] = 0;

                    $mailType = explode(',', $mailData['mailmesstype']);

                    if (in_array('sms', $mailType)) {
                        $storeMailData['dmailtype'] = 'sms';
                    }
                    if (in_array('email', $mailType)) {
                        $storeMailData['dmailtype'] = 'email';
                    }
                    if (count($mailType) == 2) {
                        $storeMailData['dmailtype'] = 'all';
                    }

                    $mailSmsData->insert($storeMailData);

                    //Mailsms Database Update
                    $id = $mailData['id'];
                    $mailSmsFieldUpdate = [
                        'mailstatus' => 1
                    ];
                    $maildata->update($id, $mailSmsFieldUpdate);

                }
                $alldata[$key]['owners'] = $owners;
            }
        }

        /*=============================================================
                    End Section Get Tenant/ Owner / Employee 
        ===============================================================*/





    }
}
