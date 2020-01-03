<?php

namespace App\Http\Controllers\V1;

use App\Dao\UserDao;
use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterUserRequest;
use App\Models\User;
use App\Services\AccountService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class AccountController extends Controller
{
    public function query_account_list(Request $request)
    {
        $userInfo = Auth::user();
        $data = UserDao::query_account_list($request->all(), $userInfo->permission, $userInfo->id);
        return $this->showJsonMessage(200, "", $data);
    }

    public function store(RegisterUserRequest $request)
    {
        $userId = Auth::user()->id;
        $array = $request->all();
        $array['creator_id'] = $userId;
        $AccountService = new AccountService();
        $result_array = $AccountService->encrypt_register($array);
        return $this->showJsonMessage(200, "操作成功", $result_array);
    }

    public function destroy(Request $request)
    {
        $userId = Auth::user()->id;
        if ($userId != $request['id']) {
            $data = UserDao::delete_by_id($request['id']);
            return $this->showJsonMessage(200, "删除成功", $data);
        }

        return $this->showJsonMessage(308, "不能删除自己");
    }

    public function update(Request $request)
    {
        try {
            $rules = [
                'id' => ['required',
                    'integer'],
                'email' => [
                    'email',
                    Rule::unique('user', 'email')->ignore($request['id']),
                ],
                'name' => [
                    'string',
                    Rule::unique('user', 'name')->ignore($request['id']),
                ],
                'phone' => [
                    'integer',
                    Rule::unique('user', 'phone')->ignore($request['id']),
                ],
            ];

            $messages = [
                'id.required' => 'id不能为空',
                'email.email' => '请输入正确的 E-Mail 格式',
                'email.unique' => '邮箱已经存在',
                'name.unique' => '用户名已经被其他用户所使用',
                'phone.cn_phone' => '请输入大陆地区合法手机号码',
                'phone.unique' => '手机号码已经存在',
            ];

            $validator = \Validator::make($request->all(), $rules, $messages);
            if ($validator->fails()) {
                throw new \Exception($validator->errors()->all()[0], 414);
            }
            $AccountService = new AccountService();
            $data = $AccountService->encrypt_update($request['id'], $request->all());
            $message = "帐户信息修改成功";
            $code = 200;
        } catch (\Exception $e) {
            $message = $e->getMessage();
            $code = $e->getCode();
            $data = [];
        }
        return $this->showJsonMessage($code, $message, $data);
    }

    public function modify_password(Request $request)
    {
        $userInfo = Auth::user();
        $User = User::find($userInfo->id);
        $bValid = password_verify($request['old_password'], $User->password);
        if (!$bValid) {
            $arrMsg[] = 'The current password is not entered correctly, please re-enter.';
            return $this->showJsonMessage(200, $arrMsg);
        }
        $rules = [
            'id' => 'required|exists:vm_users,id',
            'password' => 'required|string|min:6|confirmed',
            'password_confirmation' => 'required|string|min:6',
        ];
        $need_validate = [
            'id' => $userInfo->id,
            'password' => $request['password'],
            'password_confirmation' => $request['password_confirmation'],
        ];
        $validator = \Validator::make($need_validate, $rules);
        if ($validator->fails()) {
            return $this->showJsonMessage(200, $validator->errors()->all());
        }
        $AccountService = new AccountService();
        unset($need_validate['password_confirmation']);
        $data = $AccountService->encrypt_update($request['id'], $need_validate);
        return $this->showJsonMessage(200, [], $data);
    }
}
