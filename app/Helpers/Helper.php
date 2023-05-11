<?php

namespace App\Helpers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Redirect;

if (!function_exists('is_mobile')) {

    function is_mobile($type, $url = null, $data = null, $redirect_type = "redirect") {
        if ($type == "API") {
            return json_encode($data);
        } else {
            if ($redirect_type == 'redirect') {
//                return redirect($url)->with(['data' => $data]);
                return redirect()->route($url)->with(['data' => $data]);
//                return redirect()->route( 'clients.show' )->with( [ 'id' => $id ] );
            } else if ($redirect_type == 'route_with_message') {
                return route($url)->with(['data' => $data]);
            } else if ($redirect_type == 'view') {
                return view($url, ['data' => $data]);
            }
        }
    }
}
?>