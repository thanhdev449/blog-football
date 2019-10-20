<?php

namespace App\Http\Controllers;

use App\UserTbl;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserTblController extends Controller
{
    private $success = false;
    private $data = null;
    private $error = null;
    /**
     * @SWG\Get(
     *   path="/admin-manage/user/list",
     *   summary="User List",
     *     tags={"User Manage"},
     *   @SWG\Response(response=200, description="{<pre style='color:white'>&emsp;  'success': true | false,
    &emsp;  'data': {
    &emsp;            'id': 1,
    &emsp;            'api_token': 'eFAQOXsVkudj74VBaC0prLrbqBXP7U6TS3KwcJhQYb4SN7oxloWhgL0lMO2E',
    &emsp;            'username': null,
    &emsp;            'email': null,
    &emsp;            'phone_number': 906503546
    &emsp;          } | null,
    &emsp;  'error': null | ...</pre>}
    "),
     *   @SWG\Response( response=404, description="Building not found"),
     * )
     */

     /* display a listing of the resource.
    @param Request $request
    @return \Illuminate\Htpp\Response */
    public function index()
    {
        try {
            $this->data = UserTbl::all();
            $this->success = true;
        } catch (\Illuminate\Database\QueryException $ex) {
            \Log::error("[" . __METHOD__ . "][" . __LINE__ . "] error: " . $ex->getMessage());
            $this->error = $ex->getMessage();
        } catch (\Illuminate\Exception $ex) {
            \Log::error("[" . __METHOD__ . "][" . __LINE__ . "] error: " . $ex->getMessage());
            $this->error = $ex->getMessage();
        }
        return $this->doResponse($this->success, $this->data, $this->error);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\UserTbl  $userTbl
     * @return \Illuminate\Http\Response
     */
    public function show(UserTbl $userTbl)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\UserTbl  $userTbl
     * @return \Illuminate\Http\Response
     */
    public function edit(UserTbl $userTbl)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\UserTbl  $userTbl
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UserTbl $userTbl)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\UserTbl  $userTbl
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserTbl $userTbl)
    {
        //
    }
}
