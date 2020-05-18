<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AddProject;
use Auth;
use Validator;

class AddProjectController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
    	if (Auth::check()) {
    		$user = Auth::user()->user_type;
	    	if ($user == 'admin') {
		        return view('project.add_projects');
		    }else{
		    	return redirect('home');
		    }
    	}else{
    		return redirect()->back();
    	}

    }

    public function projectAdd(Request $request)
    {
    	if (Auth::check()) {
    		$user = Auth::user()->user_type;
	    	if ($user == 'admin') {
		        $validator=	Validator::make($request->all(),[
					    'project_id' => 'required|numeric|unique:add_projects',
					    'project_name' => 'required',
					    'contract_amount' => 'required|numeric',
					    'project_location' => 'required',
					]);
				if ($validator->passes()) {

					$data = array(
						'project_id' => $request->project_id, 
						'project_name' => $request->project_name, 
						'contract_amount' => $request->contract_amount, 
						'veriation_amount' => $request->veriation_amount, 
						'project_location' => $request->project_location, 
					);
					AddProject::create($data);
					$success = 'Data added successfully';

					return response()->json(['success'=>$success]);
		        }

		    	return response()->json(['errors'=>$validator->errors()->all()]);
		    }else{
		    	return redirect()->back();
		    }
    	}else{
    		return redirect()->back();
    	}
	    
    }

    public function projectList()
    {
    	echo AddProject::all();
    }

    public function editProjectView(Request $request,$id)
    {
    	if ($request->ajax()) {
    		$data = AddProject::findOrFail($id);
    		return response()->json(['data'=>$data]);
    	}
    	
    }

    public function updateProject(Request $request, $id)
    {
    	if (Auth::check()) {
    		$user = Auth::user()->user_type;
    		if ($user == 'admin') {
    			$validator=	Validator::make($request->all(),[
					    'project_id' => 'required|numeric',
					    'project_name' => 'required',
					    'contract_amount' => 'required|numeric',
					    'project_location' => 'required',
					]);
    			if ($validator->passes()) {
    				$data = array(
						'project_id' => $request->project_id, 
						'project_name' => $request->project_name, 
						'contract_amount' => $request->contract_amount, 
						'veriation_amount' => $request->veriation_amount, 
						'project_location' => $request->project_location, 
					);
					AddProject::whereId($id)->update($data);
					$success = 'Data update successfully';

					return response()->json(['success'=>$success]);
    			}
    			return response()->json(['errors'=>$validator->errors()->all()]);
    		}else{
    			return redirect()->back();
    		}
    	}else{
    		return redirect()->back();
    	}
    }

    public function deleteProject($id)
    {
    	if (Auth::check()) {
    		$user = Auth::user()->user_type;
    		if ($user == 'admin') {
    			AddProject::whereId($id)->delete();
    			return response()->json(['success'=>'Delete successfully']);
    		}else{
    			return redirect()->back();
    		}
    	}else{
    		return redirect()->back();
    	}
    }
}
