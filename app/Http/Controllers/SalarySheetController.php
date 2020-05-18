<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Employee;
use App\Profile;
use App\SalarySheet;
use App\AdvanceSalary;
use App\LoanHistory;
use Auth;
use DB;

class SalarySheetController extends Controller
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
            
            $joining_salary_month = new Carbon('last day of last month');
            $joining_month_check = $joining_salary_month->format('yy-m-d');
            
            $p_salary = DB::table('employees')
                        ->join('add_projects','add_projects.id','=','employees.project_id')
                        ->where('employees.project_id','=',$project_id)
                        ->where('employees.joinning_date','<',$joining_month_check)
                        ->select('employees.*','add_projects.project_name')
                        ->get();
            return datatables()->of($p_salary)
                                ->addColumn('action', function($data){
                                    $salary_month = new Carbon('first day of last month');
                                    $pay_month_check = $salary_month->format('M, Y');
                                    $check_salary = SalarySheet::where('emp_id','=',$data->id)->where('salary_month','=',$pay_month_check)->count();
                                    if ($check_salary>0) {
                                        $status = 'disabled';
                                        $class = 'danger';
                                        $pay_status = 'Paid';
                                    }else{
                                        $status = '';
                                        $class = 'primary';
                                        $pay_status = 'Payment';
                                    }
                                    $button = '<button class="btn btn-'.$class.' btn-xs emp_salary_paid" data-id="'.$data->id.'" '.$status.'>'.$pay_status.'</button>&nbsp';
                                    $button .= '<button class="btn btn-success btn-xs emp_salary_advance" data-id="'.$data->id.'" >Advance</button>';
                                    return $button;
                                })
                                ->addColumn('total', function($data){
                                    $basic = $data->salary;
                                    $h_allowns = $data->home_allowns;
                                    $m_allowns = $data->medicle_allowns;
                                    $sum = $basic + $h_allowns + $m_allowns;
                                    $label = '<output class="total">'.$sum.'</output>';
                                    return $label;
                                })
                                ->rawColumns(['action','total'])
                                ->addIndexColumn()
                                ->make(true);
        }
    	return view('employes.salary_sheet');
    }

    public function employeeDetails($id)
    {
        if (request()->ajax()) {
            $user_id = Auth::user()->id;
            $project_id = Profile::where('user_id',$user_id)->pluck('project_id')[0];
            $advance = AdvanceSalary::where('emp_id',$id)->get();
            $loan = LoanHistory::where('emp_id',$id)->get();
            $details = DB::table('employees')
                        ->join('add_projects','add_projects.id','=','employees.project_id')
                        ->where('employees.id','=',$id)
                        ->where('employees.project_id','=',$project_id)
                        ->select('employees.*','add_projects.project_name')
                        ->get();
            return response()->json(['advance'=>$advance,'details'=>$details,'loan'=>$loan]);
        }
        return redirect()->route('employes.salary.list');
    }

    public function advance($id)
    {
        if (request()->ajax()) {
            # code...
        }
        return redirect()->route('employes.salary.list');
    }

    public function test()
    {
    	// $currentMonth = Carbon::now()->format('m-yy');
    	$user_id = Auth::user()->id;
    	$project_id = Profile::where('user_id',$user_id)->pluck('project_id')[0];
    	$currentMonth = Carbon::now();
    	// echo $currentMonth->format('m-yy'),'<br>';
    	// echo $end = new Carbon('last day of last month'),"<br>";
    	// $end = new Carbon('first day of first month');
    	$first = new Carbon('first day of last month');
    	$last = new Carbon('last day of last month');
        
        
    	// print_r($currentMonth->subMonth()->format('m-yy'));
    	// echo $end->format('d-m-yy'),'<br>';
    	$firstDate = $first->format('d-m-yy');
    	$lastDate = $last->format('yy-m-d');

    	$lastDay = $last->format('D');
    	$lastMonth = $last->format('m');
    	$lastYear = $last->format('Y');

    	$employee = Employee::where('joinning_date','<',$lastDate)->where('project_id',$project_id)->get();
    	// foreach ($employee as $emp => $value) {
    	// 	$joiningDate = $value->joinning_date;
    	// }
        $salary_month = new Carbon('last month');
        // echo $salary_month->days(5);
        $month_format = $salary_month->format('M, Y');
        $check_salary = AdvanceSalary::where('emp_id',1)->first();

        echo "<pre>";
        print_r($check_salary);
        
        
    	for ($i=0; $i < count($employee); $i++) { 
    		$joiningDate = $employee[$i]->joinning_date;
    	}
    	$joiningDay = new Carbon($joiningDate);
    	$joiningDays = $joiningDay->format('D');
    	$joiningMonth = $joiningDay->format('m');
    	$joiningYear = $joiningDay->format('Y');
    	$form = new Carbon($firstDate);
    	$to = new Carbon($lastDate);
    	// $total_day = $firstDate->diff($lastDate)->format('%y'.'.'.'%m');
    	$total_day = $currentMonth->diff($joiningDay);
    	if ($joiningYear<$lastYear) {
    	// 	echo("<pre>");
    	// print_r([$joiningYear]);
    	}
    	if ($joiningYear < $lastYear && $joiningMonth<=$lastMonth) {
    	// 	echo("<pre>");
    	// print_r([$lastMonth]);
    	}
    	
    }
}
