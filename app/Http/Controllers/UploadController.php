<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Codingo\Dropzoner;
use Intervention\Image\Facades\Image;
use App\Candidate;
use App\Upload;

class UploadController extends Controller
{

	private $photos_path;
 
    public function __construct()
    {
        $this->photos_path = public_path('/images');
    }

    
    public function upload(){

    	return view('test');
    }

    /**
     * Saving images uploaded through XHR Request.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $photos = $request->file('file');
 
        if (!is_array($photos)) {
            $photos = [$photos];
        }
 
        if (!is_dir($this->photos_path)) {
            mkdir($this->photos_path, 0777);
        }
 
        for ($i = 0; $i < count($photos); $i++) {
            $photo = $photos[$i];
            $name = sha1(date('YmdHis') . str_random(30));
            $save_name = $name . '.' . $photo->getClientOriginalExtension();
            $resize_name = $name . str_random(2) . '.' . $photo->getClientOriginalExtension();
 
            Image::make($photo)
                ->resize(250, null, function ($constraints) {
                    $constraints->aspectRatio();
                })
                ->save($this->photos_path . '/' . $resize_name);
 
            $photo->move($this->photos_path, $save_name);
 
            $upload = new Upload();
            $upload->filename = $save_name;
            $upload->resized_name = $resize_name;
            $upload->original_name = basename($photo->getClientOriginalName());
            $upload->save();
        }
        return Response::json([
            'message' => 'Image saved Successfully'
        ], 200);
    }

    public function savePic(Request $request){
        // $this->validate($request,[
        //     'images' => 'required|image',
        // ]);
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
        $file->move('upload', $name);
        $orignal= 'upload'.'/'.$name;
        $rimg = Image::make($orignal);
        $rimg->resize(300,null, function ($constraint) { $constraint->aspectRatio(); }); 
        $newName = $candidate->id.'_small.'.$ext;
        // $resizepath='upload/'.$newName.'.jpg';
        $rimg->save('upload/'.$newName);
        
        return redirect()->route('thankyou');
        
    }
 
}