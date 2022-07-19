<?php



if (!function_exists("rs_send_email")) {
    function rs_send_email($email, $emailSubject, $emailBody)
    {
        $session=\Config\Services::session();
        $property_id=$session->get('rs_property_id');

        $email = \Config\Services::email();
        $setting = new \App\Models\Settingmodel();

        $getSetting = $setting->where('property_id',$property_id)->where('sname', 'email')->first();
        $settingValue = json_decode($getSetting['svalue']);

        $config = [
            'protocol' => $settingValue->mail_option,
            'SMTPHost' => $settingValue->smtp_hostname,
            'SMTPUser' => $settingValue->smtp_username,
            'SMTPPass' => $settingValue->smtp_password,
            'SMTPPort' => $settingValue->smtp_post,
            'SMTPCrypto' => $settingValue->smtp_secure,
            'mailType' => 'html',
        ];

        $email->initialize($config);

        $email->setFrom($settingValue->smtp_username, 'Rafi Hossain');
        $email->setTo('afiqur@sahajjo.com');

        $email->setSubject($emailSubject);
        $email->setMessage($emailBody);

        $email->send();

        if (!$email->send()) {
            return $email->printDebugger();
        } else {
            return "Email Sent Successfully";
        }
    }
}
