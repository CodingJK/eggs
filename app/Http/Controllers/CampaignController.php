<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Candidate;

class CampaignController extends Controller
{
    public function index(){
        return view('campaign');
    }

    public function newCandidate(Request $request){
        $this->validate($request,[
            'firstname' => 'required|max:50',
            'lastname' =>  'required|max:50',
            'phone' => 'required|max:15',
            'city' => 'required|max:50',
            'address' => 'required|max:50',
            'province' => 'required|max:50',
            'country' => 'required|max:50',
            'postalcode' =>  'required|max:8',
            'email' => 'required|max:50|unique:candidates',
            'title' => 'required|max:50',
            'images' => 'required|image',
            'description' => 'required',
        ]);
            
        $candidate = new Candidate;

        $candidate->firstname = $request->firstname;
        $candidate->lastname = $request->lastname;
        $candidate->phone = $request->phone;
        $candidate->city = $request->city;
        $candidate->address = $request->address;
        $candidate->province = $request->province;
        $candidate->country = $request->country;
        $candidate->postalcode = $request->postalcode;
        $candidate->email = $request->email;

        $candidate->save();

        if ($request->hasFile('images')) {
            $image = $request->file('images');
            $fileName = $image->getClientOriginalName();
            $image->storeAs('public/upload',$request->firstname.'-'.$request->lastname.$fileName);

            $candidate->myImages()->create([
                'path'=>$request->firstname.'-'.$request->lastname.$fileName,
                'votes'=>0,
                'title'=>'321321',
                'description'=>$request->description,
            ]);
        }else{
            
        }

        return redirect()->back()->with('status','Success');
    }

    public function admin(){
        return view('auth.login');
    }

    public function allCandidates(){
        $candidates = Candidate::orderBy('display','desc')->paginate(15);
        return view('campaign.allCandidates',compact('candidates'));
    }

    public function show($id){
        $candidate = Candidate::find($id);

        if ($candidate) {
            $candidate->display = !$candidate->display;
            $candidate->save();
        }else{
            return 1;
        }
        return response()->json(['candidate'=>$candidate],200);  
    }
}
