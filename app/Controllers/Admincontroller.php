<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\User;
use App\Models\Notificationmodel;

class Admincontroller extends BaseController
{
    function __construct()
    {
        helper('text');
    }
    public function index()
    {
        $user = new User();

        $data = [
            'request' => $this->request,
        ];
        if ($this->request->getMethod() == 'post') {
            if (!$this->validate('login')) {
                $data['validation'] = $this->validator;
            } else {
                $email = $this->request->getVar('email');
                $password = SHA1($this->request->getVar('password'));
                $getUser = $user->where(['email' => $email, 'password' => $password])->first();

                // print_r($getUser);
                // $query = $this->db->getLastQuery();
                // echo (string) $query;
                // die();

                if (get_cookie('login') && !$getUser) {
                    $rememberkey = $this->request->getVar('password');
                    $getUser = $user->where(['email' => $email, 'rememberkey' => $rememberkey])->first();
                }
                // $query = $this->db->getLastQuery();
                // echo (string) $query;
                if ($getUser) {
                    $session_data = [
                        'userId' => $getUser['id'],
                        'name' => $getUser['name'],
                        'type' => $getUser['type'],
                        'isLoggedIn' => true,
                    ];
                    $this->session->set($session_data);

                    $this->setCookie($getUser, $user);

                    return redirect()->to(base_url('/admin/account_mode'));
                } else {
                    $data['error'] = "username and password didn't match!";
                }
            }
        }

        $getCookie = get_cookie('login');
        if ($getCookie != '') {
            $showGetCookie = base64_decode($getCookie);
            $cookieArray =  explode('|', $showGetCookie);

            $chookieCheck = $user->where(['email' => $cookieArray[0], 'rememberkey' => $cookieArray[1]])->first();

            if ($chookieCheck) {
                $data['email'] = $chookieCheck['email'];
                $data['rememberkey'] = $chookieCheck['rememberkey'];
            }

            // print_r($data['rememberkey']);
        }

        return view('admin/login/login', $data);
    }

    protected function setCookie($getUser, $user)
    {
        $remCheck = $this->request->getVar('remember');
        if ($remCheck) {

            $test['rememberkey'] = random_string('alnum', 40);
            $id = $getUser['id'];

            $user->update($id, $test);

            $cookie = [
                'name'          => 'login',
                'value'         => base64_encode($getUser['email'] . '|' . $test['rememberkey']),
                'expire'        => time() + 86500 * 30,
                'domain'        => '',
                'path'          => '/',
                'prefix'        => '',
                'secure'        => false,
                'httpOnly'      => false,
                'sameSite'      => '',
            ];
            set_cookie($cookie);
        }
    }
    public function adminLogout()
    {
        $remove_session=[
            'userId','name','isLoggedIn','type','property_id'
        ];
        $this->session->remove($remove_session);
        
        

        return redirect()->to(base_url('/'));
    }

    public function forgotPass()
    {
        $data = array();
        $user = new User();
        $notification = new Notificationmodel();

        if ($this->request->getMethod() == 'post') {
            if (!$this->validate('forgotValidate')) {
                $data['validation'] = $this->validator;
            } else {
                $email = $this->request->getVar('user_email');
                $getUser = $user->where('email', $email)->first();

                // echo "<pre>";
                // print_r($getUser);
                // die();

                if ($getUser) {
                    $id = $getUser['id'];
                    $token = random_string('alnum', 8);
                    $passToken = [
                        'passresttoken' => $token,
                    ];
                    $user->update($id, $passToken);

                    $getNotification = $notification->where('id', 2)->first();

                    $change = ["{app_name}"];
                    $changeTo = ["RS Property"];
                    $emailSubject = str_replace($change, $changeTo, $getNotification['mailsub']);

                    $link = base_url() . '/reset_pass/' . $token;
                    $source = ["{receiver_name}", "{app_name}", "{link}"];
                    $dist = [$getUser['name'], "RS Property", $link];
                    $emailBody = str_replace($source, $dist, $getNotification['mailbody']);
                    
                    $email = $getUser['email'];

                    $check = rs_send_email($email, $emailSubject, $emailBody);

                    // echo "<pre>";
                    // print_r($check);
                    // die();
                    $data['success'] = '<div class="alert alert-success text-center">We are sending password reset link to your email please check!</div>';


                } else {
                    $data['error'] = '<div class="alert alert-warning text-center">Email Does Not Match!</div>';
                }
            }
        }
        return view('admin/login/forgot-pass', $data);
    }
    public function resetPass($userToken)
    {
        $user = new User();
        $getToken = $user->where('passresttoken', $userToken)->first();

        $data['token'] = $userToken;

        if ($getToken) {
            if ($this->request->getMethod() == 'post') {
                if (!$this->validate('resetValidate')) {
                    $data['validation'] = $this->validator;
                } else {
                    $pass = $this->request->getVar('user_pass');
                    $rePass = $this->request->getVar('re_pass');

                    if (strlen($pass == $rePass)) {
                        $passUpdate = [
                            'password' => SHA1($this->request->getVar('user_pass')),
                            'passresttoken' => '',
                        ];

                        $user->where('passresttoken', $userToken)
                        ->set($passUpdate)
                        ->update();

                        $data['success'] = '<div class="alert alert-success text-center">Password update successfully!</div>';
                    } else {
                        $data['error'] = '<div class="alert alert-warning text-center">Password and confirm password does not match!</div>';
                    }
                }
            }
            return view('admin/login/reset-pass', $data);
        } else {
            $data['invalidToken'] = '<div class="alert alert-warning text-center">Invalid Token!</div>';
            return view('admin/login/invalid-token', $data);
        }
    }

}
