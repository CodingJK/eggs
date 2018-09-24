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
        
        if($request->hasFile('image')){
            $file = $request->image;
            $name = $file->getClientOriginalName();
            $location = public_path('upload');
            $file->move($location, $name);
            $orignal= $location.'/'.$name;
            $rimg = Image::make($orignal);
            $rimg->resize(300,null, function ($constraint) { $constraint->aspectRatio(); }); 
            $newName = $name.'small';
            $resizepath='upload/'.$newName.'.jpg';
            $rimg->save('upload/'.$newName.'.jpg');
            $upload = new Upload();
            // $person = Candidate::find(1)->upload_image()->create(['']);
            $person = Candidata::orderBy('id','desc')->first();
            dd($person);
            $upload->person_id = $person->id;
            $upload->original_name = $orignal;
            $upload->resized_name = $resizepath;
            $upload->save();
        }
        else{
            return 123;
        }
       //return redirect()->back()->with('status','Success');
    }
 

 //$person = Candidate::find(1)->upload_image()->create(['']);

}