<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Validator;
use Validator;
use App\Employee;
use App\Profile;
use Auth;
use DB;

class EmployeeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
    	if (request()->ajax()) {
            $user_id = Auth::user()->id;
            $project_id = Profile::where('user_id',$user_id)->pluck('project_id')[0];
            $getData = DB::table('employees')
                        ->join('add_projects','add_projects.id','=','employees.project_id')
                        ->where('employees.project_id','=',$project_id)
                        ->select('employees.*','add_projects.project_name')
                        ->get();
            return datatables()->of($getData)
                            ->addColumn('action', function($data){
                                $button = '<button class="btn btn-default btn-xs emp_update" data-id="'.$data->id.'"><i class="fa fa-pencil-alt text-primary"></i></button>';
                                $button .= '<button class="btn btn-default btn-xs emp_details" data-id="'.$data->id.'"><i class="fa  fa-eye text-secondary"></i></button>';
                                $button .= '<button class="btn btn-default btn-xs emp_delete" data-id="'.$data->id.'"><i class="fa  fa-trash-alt text-danger"></i></button>';
                                return $button;
                            })
                            ->rawColumns(['action'])
                            ->addIndexColumn()
                            ->make(true);
        }
        return view('employes.employes');
    }

    public function employeeAdd(Request $request)
    {
    	$user_id = Auth::user()->id;
        $project_id = Profile::where('user_id',$user_id)->pluck('project_id')[0];
        $validator = Validator::make($request->all(),[
            'name' => 'required|string',
            'designation' => 'required|string',
            'mobile' => 'required|numeric|digits:11|regex:/(^(01)[0-9]+?$)/|unique:employees',
            'date_of_birth' => 'required|date',
            'joining_date' => 'required|date',
            'salary' => 'required|numeric',
        ]);
        if ($validator->fails()) {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }else{
            $data = array(
                'project_id' => $project_id, 
                'emp_name' => $request->name,
                'mobile' => $request->mobile,
                'dob' => $request->date_of_birth,
                'designation' => $request->designation,
                'joinning_date' => $request->joining_date,
                'release_date' => null,
                'salary' => $request->salary,
                'home_allowns' => 0,
                'medicle_allowns' => 0,
            );
            Employee::create($data);            
            return response()->json(['success'=>'Data save successfully']);
        }
    	
    }

    public function updateEmployeeView($id)
    {
        if (request()->ajax()) {
            $employee = Employee::findOrFail($id);
            $employeeDetails = DB::table('employees')
                        ->join('add_projects','add_projects.id','=','employees.project_id')
                        ->join('profiles','profiles.project_id','=','employees.project_id')
                        ->select('employees.*','add_projects.project_name')
                        ->where('employees.id',$id)
                        ->get();
            return response()->json(['employee' => $employee,'employeeDetails'=>$employeeDetails]);
        }
    }

    public function updateEmployee(Request $request, $id)
    {
        if (request()->ajax()) {
            $validator = Validator::make($request->all(),[
                'name' => 'required|string',
                'designation' => 'required|string',
                'date_of_birth' => 'required|date',
                'joining_date' => 'required|date',
                'salary' => 'required|numeric',
                'homeAllowns' => 'required|numeric',
                'medicleAllowns' => 'required|numeric',
            ]);
            if ($validator->fails()) {
                return response()->json(['errors'=>$validator->errors()->all()]);
            }else{
                $data = array( 
                    'emp_name' => $request->name,
                    'dob' => $request->date_of_birth,
                    'designation' => $request->designation,
                    'joinning_date' => $request->joining_date,
                    'release_date' => null,
                    'salary' => $request->salary,
                    'home_allowns' => $request->homeAllowns,
                    'medicle_allowns' => $request->medicleAllowns,
                );
                Employee::whereId($id)->update($data);            
                return response()->json(['success'=>'Data update successfully']);
            }
        }
    }

    public function deleteEmployee($id)
    {
        if (request()->ajax()) {
            Employee::whereId($id)->delete();
            return response()->json(['success'=>'Delete successfully']);
        }
    }
}
