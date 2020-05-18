<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\User;
use App\Profile;
use Auth;
use Validate;
use DB;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
    	return view('profile.profile');
    	
    }
    public function profile()
    {
    	if (Auth::check()) {
    		$user_id = Auth::user()->id;
    		$profile = DB::table('profiles')
    						->join('users','profiles.user_id','=','users.id')
    						->join('add_projects','profiles.project_id','=','add_projects.id')
    						->select('users.name','users.photo','users.created_at','profiles.id','profiles.user_id','profiles.project_id','profiles.designation','add_projects.project_id','add_projects.project_name','add_projects.project_location')
    						->get();
    		// echo "<pre>";
    		// print_r($profile);
    		
    		return response()->json(['profile'=>$profile]);    		
    	}else{
    		return redirect()->back();
    	}
    }
    public function profileCreate(Request $request)
    {
    	$user_id = Auth::user()->id;
    	$check_profile = Profile::where('user_id',$user_id)->first();
    	if ($check_profile == null) {
    		$validator = Validator::make($request->all(),[
    					'name' => 'required|string',
    					'designation' => 'required|string',
    					'project_name' => 'required',
    					'user_photo' => 'image|mimes:jpeg,png,jpg,gif,svg',    					
    					// 'user_photo' => ['image','mimes:jpeg,jpg,png,gif','max:2048'],
    				]);    	
	    	if ($validator->fails()) {
	    		return response()->json(['errors'=>$validator->errors()->all()]);
	    	}else{
	    		if($request->hasFile('user_photo')){
		    		$photo = $request->file('user_photo');
		            $new_name = $user_id. '-'.$photo->getClientOriginalName();
		            // $photo_name = $photo->getClientOriginalName();
		            $filename = $photo->move(public_path("images/usersImage"), $new_name);
		            
		            $data = array('photo' => $new_name, );
		            User::whereId($user_id)->update($data);		                        
		        }
	    		$name_data = array('name' => $request->name, );
	            User::whereId($user_id)->update($name_data);
	    		$data = array(
	    			'user_id' => $user_id, 
	    			'designation' => $request->designation, 
	    			'project_id' => $request->project_name, 
	    		);
	    		Profile::create($data);
	    		return response()->json(['success'=>'Data save successfully']);
	    	}
    	}else{
    		return response()->json(['errors'=>'Profile already taken']);
    	}
    }

    public function api()
    {
    	$hash = 'OQNYXA5HRCPIA49FWJ0CYPWD75ET1VU4';
    	$client = new \GuzzleHttp\Client(['defaults' => ['verify' => false]]);
		$response = $client->request('GET', 'https://46.4.206.83:2087/cpsess1922120715/json-api/listaccts?api.version=1&search=jeet&searchtype=user&fbclid=');

		 $response->getStatusCode(); // 200
		 $response->getHeaderLine('application/json'); // 'application/json; charset=utf8' 'content-type'
		 echo $response->getBody();
		
		 
		// Initialize session and set URL.
		
		// $ch = curl_init();
		// $url = '<PROXY:SERVER>https://46.4.206.83:2087/cpsess1922120715/json-api/listaccts?api.version=1&search=jeet&searchtype=user&fbclid=IwAR0VRjgj9gM9adCQTF6BCUJJJkoo3yeUdmKK_1gfUVNFGxiNPwqnSkN5GFg';
		// curl_setopt($ch, CURLOPT_URL, $url);

		// // Set so curl_exec returns the result instead of outputting it.
		// // curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		// curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		    
		// // Get the response and close the channel.
		// $response = curl_exec($ch);
		// // echo $response;
		// curl_close($ch);
		// // print_r([$response]);
		// echo $response;


    	//biswjeet code

  //   	$server_login_link = '46.4.206.83';
		// $whmusername = 'root';
		// $hash = 'OQNYXA5HRCPIA49FWJ0CYPWD75ET1VU4';
		// $cscp='cpsess1922120715';

		// $query = "https://$server_login_link:2087/$cscp/json-api/get_domain_info?api.version=1";

		// $curl = curl_init();
		// curl_setopt($curl, CURLOPT_SSL_VERIFYHOST,0);
		// curl_setopt($curl, CURLOPT_SSL_VERIFYPEER,0);
		// curl_setopt($curl, CURLOPT_RETURNTRANSFER,1);

		// $header[0] = "Authorization: WHM $whmusername:" . preg_replace("'(\r|\n)'","",$hash);
		// curl_setopt($curl,CURLOPT_HTTPHEADER,$header);
		// curl_setopt($curl, CURLOPT_URL, $query);

		// $result = curl_exec($curl);
		// $obj=json_decode($result, true);
		// $convObj = $obj['data']['domains'][0]['domain'];
		
		// print_r($convObj);

    }
}
