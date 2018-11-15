<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Candidate;
use Mail;
use App\Mail\Eggs;

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
        try{
             Mail::to("$candidate->email")->send(new eggs($candidate));
        }catch(Excention $e){

        }

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
        $candidates = Candidate::paginate(10);
        return view('campaign.allCandidates',compact('candidates'));
    }

    

    public function show($id){
        $candidate = Candidate::find($id);
        if ($candidate){
            $candidate->display = !$candidate->display;
            $candidate->save();
        }else{
            return 1;
        }

        if ($candidate->display==true) {
            $candidate->sp = false;
            $candidate->gp = false;

            $candidate->save();
        }
        return response()->json(['candidate'=>$candidate],200);  
    }


    public function sp($id){
        $candidate = Candidate::find($id);
        
        $totalSP = count(Candidate::where('sp',true)->get());

        if ($totalSP>=10&&$candidate->sp==false) {
            return response()->json(['sp_number'=>"FULL"],200);
        }else{

        }
        if ($candidate) {
            $candidate->sp = !$candidate->sp;
            $candidate->save();
        }else{
            return 1;
        }

        if ($candidate->sp==true) {
            $candidate->gp = false;

            $candidate->save();
        }
        return response()->json(['candidate'=>$candidate],200);  
    }


    public function gp($id){
        $candidate = Candidate::find($id);

        $totalGP = count(Candidate::where('gp',true)->get());

        if ($totalGP>=1&&$candidate->gp==false) {
            return response()->json(['sp_number'=>"FULL"],200);
        }else{

        }
        if ($candidate) {
            $candidate->gp = !$candidate->gp;
            $candidate->save();
        }else{
            return 1;
        }

        if ($candidate->gp==true) {
            $candidate->sp = false;

            $candidate->save();
        }
        return response()->json(['candidate'=>$candidate],200);   
    }

    public function prizeNumber(){
        $totalSP = count(Candidate::where('sp',true)->get());
        $totalGP = count(Candidate::where('gp',true)->get());

        return response()->json(['gp'=>$totalGP,'sp'=>$totalSP],200);
    }

    public function sc(){
        header('Location: https://sc.eggsaregood.ca/');
    }


    public function grandPrize(){
        $gp = Candidate::where('gp',true)->first();
        return view('campaign.grandPrize', compact('gp'));
    }

    public function changeGP(){
        $gp = Candidate::where('gp',true)->first();
        $gp->gp = false;
        $gp->save();
        
        return redirect()->action('CampaignController@allCandidates');
    }

    public function secondaryPrize(){
        $candidates = Candidate::where('sp',true)->paginate(10);
        return view('campaign.secondaryPrize',compact('candidates'));
    }

    public function earlyBird(){
        $candidates = Candidate::where('display',false)->take(50)->paginate(10);
        return view('campaign.earlyBird',compact('candidates'));
    }

    public function test(){
        // $candidate = Candidate::all();

        // foreach ($candidate as $i) {
        //     Mail::to("$i->email")->send(new eggs($i));
        // }
        
    }

    public function testEmail(){
        // $candidate = Candidate::find(1);
        // return view('email.eggs',compact('candidate'));
    }

    public function over(){
        return view('/over');
    }
}
