<?php

namespace App\Http\Controllers\V1;

use App\Dao\UserDao;
use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterUserRequest;
use App\Services\AccountService;
use App\Services\AesService;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Tymon\JWTAuth\Facades\JWTAuth;

class AuthController extends Controller
{
    public function register(RegisterUserRequest $request)
    {
        try {
            $AccountService = new AccountService();
            $result_array = $AccountService->encrypt_register($request->all());
            $message = 'success';
        } catch (\Exception  $e) {
            $message = $e->getMessage();
            $result_array = [];
        }
        return $this->showJsonMessage(200, $message, $result_array);
    }

    public function login(Request $request)
    {
        try {
            $user_information = UserDao::get_user_by_name($request['name']);
            if (!isset($user_information)) {
                throw new \Exception('Error: Without this user.', 304);
            }
            $user_information = $user_information->toArray();
            $credentials = $request->only('name', 'password');
            $customClaims = ['id' => $user_information['id']];
            if (!$token = JWTAuth::attempt($credentials, $customClaims)) {
                throw new \Exception('Error: Invalid Credentials.', 305);
            }
            $update_array = ['api_token' => $token, 'login_time' => Carbon::now()];
            UserDao::update_by_name($request['name'], $update_array);
            $jwt_ttl = env('JWT_TTL');
            if (strtotime(Carbon::now()) - strtotime($user_information['login_time']) < $jwt_ttl * 60) {
                $api_token = $user_information['api_token'];
                if (!empty($api_token)) {
                    JWTAuth::invalidate($api_token);
                }
            }
            $data = ['userid' => $user_information['id'],
                'token' => $token,
                'username' => $user_information['name'],
                'mobile' => $user_information['phone'],
                'email' => $user_information['email'],
                'avatar' => $user_information['avatar'],
                'permission' => $user_information['permission'],];
            $message = 'success';
            $code = 200;
        } catch (\Exception  $e) {
            $message = $e->getMessage();
            $code = $e->getCode();
            $data = [];
        }
        return $this->showJsonMessage($code, $message, $data);
    }

    public function logout()
    {
        JWTAuth::invalidate();
        return $this->showJsonMessage(200, ['Logged out Successfully.']);
    }

    public function forgot_password(Request $request)
    {
        try {
            $rules = [
                'email' => 'required|email|exists:user,email',
            ];
            $need_validate = [
                'email' => $request['email'],
            ];
            $messages = [
                'email.exists' => '此邮箱没有注册!',
                'email.email' => '邮箱格式不对!',
            ];
            $validator = \Validator::make($need_validate, $rules, $messages);
            if ($validator->fails()) {
                throw new \Exception($validator->errors()->all()[0]);
            }

            $send_mail_address = $request['email'];
            $subject = "找回密码";
            $time_stamp = time() + 3600;
            $AesService = new AesService();
            $token = $AesService->encryption($time_stamp);
            $body = "请在一小时有效时间内打开链接，进入页面找回密码 " . \App\Utilities\UrlUtility::getClientDomain() . "/#/resetPassword?&email=" . $send_mail_address . '&token=' . $token;

            $SendgridMailController = new SendgridMailController;
            $SendgridMailController->send($send_mail_address, $subject, $body);
            $code = 200;
            $message = "success";
        } catch (\Exception  $e) {
            $code = 304;
            $message = $e->getMessage();
        }
        return $this->showJsonMessage($code, $message);

    }

    public function reset_password(Request $request)
    {
        try {
            $AesService = new AesService();
            $time_stamp = $AesService->decryption($request['token']);
            if ($time_stamp < time()) {
                throw new \Exception("令牌以过期");
            }
            $rules = [
                'email' => 'required|email|exists:user,email',
                'password' => 'required|string|min:6|confirmed',
                'password_confirmation' => 'required|string|min:6',
            ];
            $need_validate = [
                'email' => $request['email'],
                'password' => $request['password'],
                'password_confirmation' => $request['password_confirmation'],
            ];

            $messages = [
                'email.exists' => '此邮箱没有注册!',
                'email.email' => '邮箱格式不对!',
                'password.confirmed' => '两次密码不一致!!',
            ];
            $validator = \Validator::make($need_validate, $rules, $messages);
            if ($validator->fails()) {
                throw new \Exception($validator->errors()->all()[0]);
            }
            unset($need_validate['password_confirmation']);
            $AccountService = new AccountService();
            $AccountService->encrypt_update_by_email($request['email'], $need_validate);
            $code = 200;
            $message = "success";
        } catch (\Exception  $e) {
            $code = 304;
            $message = $e->getMessage();
        }
        return $this->showJsonMessage($code, $message);
    }
}
