<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Symfony\Component\HttpFoundation\Response;

class ProfileController extends Controller
{

    /**
     * Class Constructor
     * @param User $user
     */

    public function __construct(User $user, Request $request)
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

        $user = $this->user->find(\Auth::user()->id)->firstOrFail();

        return view('dashboard.profile', ['user' => $user]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
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
    public function update()
    {

        // to do : strip tags the "about"
        // or sanitize all request objects

        if ($this->request->hasFile('file')) {

            $assignFileName = str_random(30);

            $assignFileName = $assignFileName . '.' . $this->request->file('file')->getClientOriginalExtension();

            $this->request->file('file')->move(public_path() . '/images/avatars/' , $assignFileName);

            $this->request->merge(['avatar' => $assignFileName]);


        } else {

            $this->request->merge(['avatar' => 'none']);

        }
        $profile = $this->user->find(\Auth::user()->id); // search for logged in ID

        $profile->fill($this->request->all()); // fill record

        $profile->save();  // save it

        return \Response::json(['message' => 'Saved']); // return json response
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
