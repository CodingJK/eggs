<?php
 
namespace App\Http\Controllers;
 
use App\upload;
use App\Candidate;

use App\photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Intervention\Image\Facades\Image;
 
class UploadController extends Controller
{
 
        /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return view('home');
    }

    public function drop(){
        return view('test');
    }

    public function newCandidate(Request $request){
        $this->validate($request,[
            'firstname' => 'required|max:50',
            'lastname' =>  'required|max:50',
            'phone' => 'required|max:15',
            'email' => 'required|max:50|unique:candidates',
        ]);
        
        $candidate = new Candidate;
        $candidate->firstname = $request->firstname;
        $candidate->lastname = $request->lastname;
        $candidate->phone = $request->phone;
        $candidate->email = $request->email;
        $candidate->display = 0;
        $candidate->save();

    } 

    public function savePic(Request $request){
        // $this->validate($request,[
        //     'images' => 'required|image',
        // ]);

        $messages = [
            'email.required' => 'waner ne ?',
        ];

        

        $this->validate($request,[
            'firstname' => 'required|max:50',
            'lastname' =>  'required|max:50',
            'phone' => 'required|max:15',
            'email' => 'required|max:50|email',
            'image'=>'required|image|mimes:jpeg,jpg,png,tif,mbp| max:12000 |min:2000'
        ]);

        

        $file = $request->image;
        $name = $file->getClientOriginalName();
        $ext = $file->getClientOriginalExtension();
        
        
        $candidate = new Candidate;
        $candidate->firstname = $request->firstname;
        $candidate->lastname = $request->lastname;
        $candidate->phone = $request->phone;
        $candidate->email = $request->email;
        $candidate->images = 'waiting';
        $candidate->display = 0;
        $candidate->save();

        $candidate->images = $candidate->id.'.'.$ext;

        $candidate->save();

        $name = $candidate->id.'.'.$ext;
        $location = public_path('upload');
        $file->move($location, $name);
        $orignal= $location.'/'.$name;
        $rimg = Image::make($orignal);
        $rimg->resize(300,null, function ($constraint) { $constraint->aspectRatio(); }); 
        $newName = $candidate->id.'_small.'.$ext;
        
        $rimg->save('upload/'.$newName);
        
        return view('thankyou');
        
    }
 

 //$person = Candidate::find(1)->upload_image()->create(['']);

}