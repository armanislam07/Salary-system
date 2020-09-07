@extends('layouts.master')

@section('content')
<div class="">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="modal fade" id="deleteEmployeeModal" role="dialog" aria-hidden="true" data-backdrop="static" data-keyboard="false">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Delete Employee</h5>
                            <button type="button" id="closebtn" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <h5 class="text-center">Are your sure you wont to remove this data?</h5>
                        </div>
                        <div class="modal-footer">
                            <button type="button" id="yesEmployeeBtn" value="yes" class="btn btn-danger">Yes</button>
                            <button type="button" id="nobtn" class="btn btn-secondary" data-dismiss="modal">No</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="employeeSalaryModal" tabindex="-1" role="dialog" aria-labelledby="employeeModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="employeeSalaryModalLabel">Add Employee</h5>
                    <button type="button" id="closebtn" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body" id="modal_boday">
                    <div id="message" ></div>
                    <form class="form_employee_salary" method="POST">
                        @csrf
                      <div class="full_form">
                      <div class="input-group mb-3">
                        <input type="hidden" class="form-control " id="id" name="id" hidden="true">
                          <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Name</span>
                          </div>
                          <input type="text" class="form-control " id="name" name="name" placeholder="Name" aria-label="Name" aria-describedby="basic-addon1">
                      </div>
                      <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Designation</span>
                          </div>
                          <input type="text" class="form-control" id="designation" name="designation" placeholder="Designation" aria-label="Designation" aria-describedby="basic-addon1" required>
                      </div>
                      <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Project</span>
                          </div>
                          <!-- <input type="text" class="form-control" id="project_name" name="project_name" placeholder="Project" aria-label="Project" aria-describedby="basic-addon1" required> -->
                          <select class="form-control" id="project_name" name="project_name">
                            <option selected="true">--Select Project--</option>
                          </select>
                      </div> 
                      <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Basic</span>
                          </div>
                          <input type="number" class="form-control date" id="basic" name="basic" placeholder="Basic" aria-label="Basic" aria-describedby="basic-addon1" disabled>
                          <!-- <select class="form-control" id="project_name" name="project_name">
                            <option selected="true">--Select Project--</option>
                          </select> -->
                      </div> 
                      <div class="advanceSalaryInput-1">
                      <div class="input-group mb-3 ">
                          <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Home Allowns</span>
                          </div>
                          <input type="text" class="form-control date" id="h_allowns" name="h_allowns" placeholder="Home Allowns" aria-label="Home Allowns" aria-describedby="basic-addon1" disabled>
                      </div> 
                      <div class="input-group mb-3 ">
                          <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Medicle Allowns</span>
                          </div>
                          <input type="text" class="form-control" id="m_allowns" name="m_allowns" placeholder="Medicle Allowns" aria-label="Medicle Allowns" aria-describedby="basic-addon1" disabled>
                      </div>
                      <div class="input-group mb-3 bonus">
                          <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Bonus</span>
                          </div>
                          <input type="text" class="form-control" id="bonus" name="bonus" value="0" placeholder="Bonus" aria-label="Bonus" aria-describedby="basic-addon1" >
                      </div>
                      <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Total</span>
                          </div>
                          <input type="text" class="form-control" id="total" name="total" placeholder="Total" aria-label="Total" aria-describedby="basic-addon1" disabled>
                      </div>
                      </div>                      
                      <div class="input-group mb-3 advance">
                          <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Advance</span>
                          </div>
                          <input type="text" class="form-control" id="advance" name="advance" value="0" placeholder="Advance" aria-label="Advance" aria-describedby="basic-addon1" disabled>
                      </div>
                      <div class="advanceSalaryInput-2">
                      <div class="input-group mb-3 installment">
                          <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Installment</span>
                          </div>
                          <input type="text" class="form-control" id="installment" name="installment" value="0" placeholder="Installment" aria-label="Installment" aria-describedby="basic-addon1" disabled>
                      </div>
                      <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Payment</span>
                          </div>
                          <input type="text" class="form-control" id="payment" name="payment" placeholder="Payment" aria-label="Payment" aria-describedby="basic-addon1" disabled>
                      </div>
                      </div>                                           
                     </div>               
                    </form>
                  </div>
                  <div class="modal-footer">
                    <button type="button" id="closebtn" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" id="save_employee_salary" class="btn btn-primary">Save</button>
                    <button type="button" id="payment_employee_salary" class="btn btn-primary">Payment </button>
                    <button type="button" id="advance_emp_salary" class="btn btn-primary">Advance Pay</button>
                  </div>
                </div>
              </div>
            </div>
            <div class="card">
                <div class="card-header h4">Employee Salary List</div>

                <div class="card-body">
                    <div id="update_message" ></div>
                    <button type="button" class="btn btn-primary" id="employee_btn" data-whatever="add employee" style="margin: 10px;" >Add Employee</button>
                    <input type="number" id="bonus_parsent" value="" name="bonus_parsent" placeholder="Bonus persent">

                    <table id="employeeSalarytable" class="table table-striped table-bordered text-center" style="width:100%">
                        <thead>
                            <tr class="table-info">
                                <th>Sl No.</th>
                                <th>Name</th>
                                <th>Designation</th>
                                <th>Project</th>
                                <th>Basic</th>
                                <th>Home Allowns</th>
                                <th>Medicle Allowns</th>
                                <th>Total (BDT)</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <!-- <tbody> -->
                            <!-- show ajax data -->
                            
                        <!-- </tbody> -->
                        <tfoot>
                            <tr class="table-info">
                                <th>Sl No.</th>
                                <th>Name</th>
                                <th>Designation</th>
                                <th>Project</th>
                                <th>Basic</th>
                                <th>Home Allowns</th>
                                <th>Medicle Allowns</th>
                                <th>Total (BDT)</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('jsfile')
<script src="{{asset('js/custom.js')}}" ></script>
@endsection