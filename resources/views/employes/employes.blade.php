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
            <div class="modal fade" id="addEmployeeModal" tabindex="-1" role="dialog" aria-labelledby="employeeModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="employeeModalLabel">Add Employee</h5>
                    <button type="button" id="closebtn" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body" id="modal_boday">
                    <div class="employee_details"></div>
                    <div id="message" ></div>
                    <form class="form_employee" method="POST">
                        @csrf
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
                            <span class="input-group-text" id="basic-addon1">Mobile</span>
                          </div>
                          <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Mobile" aria-label="Mobile" aria-describedby="basic-addon1" required>
                      </div> 
                      <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Date of Birth</span>
                          </div>
                          <input type="date" class="form-control date" id="date_of_birth" name="date_of_birth" placeholder="Date of Birth" aria-label="Date of Birth" aria-describedby="basic-addon1">
                          <!-- <select class="form-control" id="project_name" name="project_name">
                            <option selected="true">--Select Project--</option>
                          </select> -->
                      </div> 
                      <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Joining Date</span>
                          </div>
                          <input type="date" class="form-control date" id="joining_date" name="joining_date" placeholder="Joining Date" aria-label="Joining Date" aria-describedby="basic-addon1">
                      </div> 
                      <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Basic Salary</span>
                          </div>
                          <input type="text" class="form-control" id="salary" name="salary" placeholder="Basic Salary" aria-label="Basic Salary" aria-describedby="basic-addon1">
                      </div>
                      <div class="input-group mb-3 homeAllowns">
                          <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1" >Home Allowns</span>
                          </div>
                          <input type="number" class="form-control" id="homeAllowns" name="homeAllowns" placeholder="Home Allowns" aria-label="Home Allowns" aria-describedby="basic-addon1" >
                      </div>
                      <div class="input-group mb-3 medicleAllowns">
                          <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1" >Medicle Allowns</span>
                          </div>
                          <input type="number" class="form-control" id="medicleAllowns" name="medicleAllowns" placeholder="Medicle Allowns" aria-label="Medicle Allowns" aria-describedby="basic-addon1">
                      </div>  
                                    
                    </form>
                  </div>
                  <div class="modal-footer">
                    <button type="button" id="closebtn" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" id="save_employee" class="btn btn-primary">Save</button>
                    <button type="button" id="update_employee" class="btn btn-primary" style="display: none;">Update</button>
                  </div>
                </div>
              </div>
            </div>
            <div class="card">
                <div class="card-header h4">Employee List</div>

                <div class="card-body">
                    <div id="update_message" ></div>
                    <button type="button" class="btn btn-primary" id="add_employee_btn" data-whatever="add employee" style="margin: 10px;">Add Employee</button>

                    <table id="employeetableDataSearch" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>Sl</th>
                                <th>Name</th>
                                <th>Mobile</th>
                                <th>Designation</th>
                                <th>Salary</th>
                                <th>Project</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <!-- <tbody> -->
                            <!-- show ajax data -->
                            
                        <!-- </tbody> -->
                        <tfoot>
                            <tr>
                                <th>Sl</th>
                                <th>Name</th>
                                <th>Mobile</th>
                                <th>Designation</th>
                                <th>Salary</th>
                                <th>Project</th>
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