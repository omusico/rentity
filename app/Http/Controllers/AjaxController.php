<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use App\User;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Illuminate\Support\Facades\Auth;
use Validator;

class AjaxController extends Controller
{

    use AuthenticatesAndRegistersUsers;

    public function __construct(Request $request, User $user)
    {
        $this->user = $user;
        $this->request = $request;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $validator = Validator::make($this->request->all(), [
            'email' => 'required|email|max:255|unique:users'
        ]);

        if ($validator->fails()) {
            $return = ['status' => 400, 'message' => 'Email Exists'];
        }
        else {

            $this->user->create([
                'firstname' => $this->request->firstname,
                'lastname' => $this->request->lastname,
                'email' => $this->request->email,
                'password' => bcrypt($this->request->password)
            ]);

            $return = ['status' => '200', 'message' => 'Saved'];
        }
        return json_encode($return);
    }

    public function login()
    {
        if (\Auth::attempt(['email' => $this->request->email, 'password' => $this->request->password]))
        {
            $return = (['status' => 200]);
        }
        else
        {
            $return = (['status' => 400, 'message' => 'Invalid Credentials']);
        }
        return \Response::json($return);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

}
