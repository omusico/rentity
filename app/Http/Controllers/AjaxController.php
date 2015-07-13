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
use Mail;

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
        } else {

            $this->user->create([
                'firstName' => $this->request->firstname,
                'lastName' => $this->request->lastname,
                'email' => $this->request->email,
                'password' => bcrypt($this->request->password)
            ]);


            $this->sendWelcome($this->request->email);

            $return = ['status' => '200', 'message' => 'Saved'];
        }

        return json_encode($return);
    }

    public function sendWelcome($email) {

        $welcomeMessage = ['name' => 'Jeffrey'];

        \Mail::send('emails.welcome', $welcomeMessage, function ($message) use ($email) {

            $message->to($email)->subject("Your Registration at TextRiley");
        });
    }

    public function login()
    {
        if (\Auth::attempt(['email' => $this->request->email, 'password' => $this->request->password])) {
            $return = (['status' => 200]);
        } else {
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
       // $message->from($address, $name = null);
        //$message->sender($address, $name = null);
        //$message->to($address, $name = null);
        //$message->cc($address, $name = null);
        //$message->bcc($address, $name = null);
        //$message->replyTo($address, $name = null);
        //$message->subject($subject);
        //$message->priority($level);
        //$message->attach($pathToFile, array $options = []);

// Attach a file from a raw $data string...
        //$message->attachData($data, $name, array $options = []);

// Get the underlying SwiftMailer message instance...
       // $message->getSwiftMessage();
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
