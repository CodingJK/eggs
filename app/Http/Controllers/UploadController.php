<?php
 
namespace App\Http\Controllers;
 
use App\upload;
use App\Candidate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Intervention\Image\Facades\Image;
 
class UploadController extends Controller
{
 
    private $photos_path;
 
    /**
     * Display all of the images.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $photos = Upload::all();
        return view('show', compact('photos'));
    }
 
    /**
     * Show the form for creating uploading new images.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('test');
    }
 
    /**
     * Saving images uploaded through XHR Request.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function newCandidate(Request $request){
        $this->validate($request,[
            'firstname' => 'required|max:50',
            'lastname' =>  'required|max:50',
            'phone' => 'required|max:15',
            // 'city' => 'required|max:50',
            // 'address' => 'required|max:50',
            // 'province' => 'required|max:50',
            // 'country' => 'required|max:50',
            // 'postalcode' =>  'required|max:8',
            'email' => 'required|max:50|unique:candidates',
            // 'title' => 'required|max:50',
            // 'images' => 'required|image',
            // 'description' => 'required',
        ]);
            
        $uploads = new upload();

        $uploads->firstname = $request->firstname;
         $uploads->lastname = $request->lastname;
        $uploads->phone = $request->phone;
        // $candidate->city = $request->city;
        // $candidate->address = $request->address;
        // $candidate->province = $request->province;
        // $candidate->country = $request->country;
        // $candidate->postalcode = $request->postalcode;
         $uploads->email = $request->email;

         $uploads->save();

        if ($request->hasFile('images')) {
            echo "images";
            $image = $request->file('file');
            $fileName = $image->getClientOriginalName();
            $image->storeAs('public/upload',$request->firstname.'-'.$request->lastname.$fileName);
            // $uploads = new uploads();
            $uploads->$resized_name = $image;
            $uploads->save();
        }else{
            
        }

        return redirect()->back()->with('status','Success');
    }
 

}