<?php

namespace App\Http\Controllers\students;

use App\Http\Controllers\Controller;
use App\Models\studentsModel;
use Illuminate\Http\Request;

use function App\Helpers\is_mobile;

class studentLoginController extends Controller
{
    public function auth(Request $request)
    {
        $type = $request->input('type');
        $email = $request->input('email');
        $password = $request->input('password');

        $data = studentsModel::where(['email' => $email, 'password' => md5($password)])->get()->toArray();
        $data = studentsModel::where(['email' => $email, 'password' => '$2a$12$lUBnPFHbqNOu8awUFJC/uuUMp..mzq4ze.41dFJp8wVuckjWwPdLW'])->get()->toArray();

        if(count($data) == 1){
            if($data['0']['status'] == 1)
            {

                    $res['status_code'] = 1;
                    $res['message'] = "Login successfully";

                    $request->session()->put('student_user_id', $data['0']['id']);
                    $request->session()->put('email', $data['0']['email']);
                    return is_mobile($type, "dashboard", $res);

            }else
            {
                $res['status_code'] = 0;
                $res['message'] = "Your account is suspended by admin.";

                return is_mobile($type, "floginview", $res);
            }
        }else{
            $res['status_code'] = 0;
            $res['message'] = "Your account does not exist.";

            return is_mobile($type, "floginview", $res);
        }
    }

    public function loginview(Request $request)
    {
        $type = $request->input('type');

        $res['status_code'] = 1;
        $res['message'] = "Fetched Successfully.";

        return is_mobile($type, "login", $res, "view");
    }

    public function dashboard(Request $request)
    {
        $type = $request->input('type');

        $res['status_code'] = 1;
        $res['message'] = "Successfully";

        return is_mobile($type, "index", $res, "view");
    }
}
