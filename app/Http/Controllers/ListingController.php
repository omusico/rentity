<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Properties;
use App\User;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Response;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Validator;

class ListingController extends Controller
{

    public function __construct(REQUEST $request, PROPERTIES $properties, USER $user)
    {
        $this->request = $request;
        $this->property = $properties;
        $this->user = $user;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $property = $this->user->find(\Auth::user()->id)->property()->get();

        return view('dashboard.listing', ['properties' => $property, 'title' => 'My Listing']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('dashboard.add-list')->with('title', 'Add Listing');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {

        $validator = Validator::make($this->request->all(), [
            'title' => 'required|min:5',
            'address' => 'required',
            'description' => 'required|min:5',
            'price' => 'required',
            'available' => 'required'
        ]);

        if ($validator->fails()) {

            return json_encode(['message', 'Validation Fails']);

        } else {

            if ($this->request->input('amenities')) {

                $amenities = implode(',', $this->request->input('amenities'));
            } else {

                $amenities = "none";

            }


            if ($this->request->input('pets')) {

                $pets = implode(',', $this->request->input('pets'));
            } else {

                $pets = 'none';

            }

            // will use try and catch later

            $this->request->merge(['amenities' => $amenities]);

            $this->request->merge(['pets' => $pets]);

            if ($this->request->hasFile('file'))
            {

                $file_name = str_random(30);

                $file_extenson = $this->request->file('file')->getClientOriginalExtension();

                $newFilename = $file_name . '.' . $file_extenson;

                $this->request->file('file')->move(public_path() . '/images/properties/covers/', $newFilename);

                $this->request->merge(['cover' => $newFilename]);

            }

            $this->property->create($this->request->all());

            return Response::json(['status' => 200, 'message' => 'Saved']);

        }
    }


    /**
     * Save image file to public folder
     *
     * @param $file
     * @return bool
     */

    public function saveFile($file)
    {

        return true;

    }


    /**
     * Convert array to strings
     *
     * @param $array
     * @return string
     *
     */

    public function fileNames($array)
    {

    }


    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function show($id)
    {
        $property = $this->property->find($id);
        return view('dashboard.list', ['id' => $property, 'title' => 'List']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id)
    {
        $property = $this->property->find($id)->where('manager_id', \Auth::user()->id)->firstOrFail();
        return view('dashboard.list', ['property' => $property, 'title' => 'List']);
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
