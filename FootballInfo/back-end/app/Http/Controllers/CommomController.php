<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Auth;

class CommomController extends Controller
{
    private $success = false;
    private $data = null;
    private $error = null;


    public function login(Request $request){
        try {
            $Validators  = Validator::make($request->all(),[
                'login_id'  => 'required|string|min:8|max:255', 
                'password'  => 'required|string|min:8|max:255', 
            ]);
            if ($Validators->fails()) {
                $this->error  = $Validators->errors()->first();
            }
            else{
                $login_info = array(
                    'login_id' => $request->input('login_id'),
                    'password' => $request->input('password')
                );
                if(Auth::guard('admin-web')->attempt($login_info)){
                    $user_info = Auth::guard('admin-web')->user();
                }
            }
        } catch (\Illuminate\Database\QueryException $ex) {
            \Log::error("[" . __METHOD__ . "][" . __LINE__ . "] error: " . $ex->getMessage());
            $this->error = $ex->getMessage();
        } catch (\Illuminate\Exception $ex) {
            \Log::error("[" . __METHOD__ . "][" . __LINE__ . "] error: " . $ex->getMessage());
            $this->error = $ex->getMessage();
        }
        return $this->doResponse($this->success, $this->data, $this->error);
    }
}
