<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\DashboardUser;
use App\Models\UserLog;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Tymon\JWTAuth\Facades\JWTAuth;

class AccountController extends Controller
{

    public function login(Request $request)
    {
        $user_infor = DashboardUser::where('name', '=', $request['name'])->first();

        if (!isset($user_infor)) {
            $data = [
                'code' => 302,
                'status' => 'error',
                'error' => 'Without this user.',
                'msg' => 'Without this user.'
            ];
            return $this->showJsonMessage(302, "", $data);
        }
        $user_infor = $user_infor->toArray();
        $credentials = $request->only('name', 'password');
        $customClaims = ['id' => $user_infor['id'], 'level_id' => $user_infor['level_id'], 'property_id_list' => $user_infor['property_id_list']];
        if (!$token = JWTAuth::attempt($credentials, $customClaims)) {
            $data = [
                'code' => 301,
                'status' => 'error',
                'error' => 'invalid.credentials',
                'msg' => 'Invalid Credentials.'
            ];
            return $this->showJsonMessage(301, "", $data);
        }
        DashboardUser::where('name', '=', $request['name'])->update(['api_token' => $token,]);
        $userLog['user_id'] = $user_infor['id'];
        $userLog['login_time'] = Carbon::now();
        $userLogModel = UserLog::where('user_id', '=', Auth::user()->id)->orderBy('login_time', 'desc')->first();
        if (isset($userLogModel)) {
            $userLogModel->update(['logout_time' => Carbon::now()]);
            $lastLoginInfor = $userLogModel->toArray();
            $jwt_ttl = env('JWT_TTL');
            if (strtotime(Carbon::now()) - strtotime($lastLoginInfor['login_time']) < $jwt_ttl * 60) {
                $api_token = $user_infor['api_token'];
                JWTAuth::invalidate($api_token);
            }
        }
        UserLog::create($userLog);

        $data = [
            'token' => $token,
            'username' => $user_infor['name'],
        ];
        return $this->showJsonMessage(200, "success", $data);
    }

    public function logout()
    {
        JWTAuth::invalidate();
        UserLog::where('user_id', '=', Auth::user()->id)->orderBy('login_time', 'desc')->first()->update(['logout_time' => Carbon::now()]);

        return response([
            'status' => 'success',
            'msg' => 'Logged out Successfully.'
        ], 200);
    }
}