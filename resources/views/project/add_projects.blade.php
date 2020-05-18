@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="modal fade" id="deleteModal" role="dialog" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Delete</h5>
                            <button type="button" id="closebtn" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <h5 class="text-center">Are your sure you wont to remove this data?</h5>
                        </div>
                        <div class="modal-footer">
                            <button type="button" id="yesbtn" value="yes" class="btn btn-danger">Yes</button>
                            <button type="button" id="nobtn" class="btn btn-secondary" data-dismiss="modal">No</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Project</h5>
                    <button type="button" id="closebtn" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <div id="message" ></div>
                    <form class="form_project" method="POST">
                        @csrf
                      <div class="input-group mb-3">
                        <input type="hidden" class="form-control " id="id" name="id" hidden="true">
                          <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Project ID</span>
                          </div>
                          <input type="number" class="form-control " id="project_id" name="project_id" placeholder="Project ID" aria-label="Project ID" aria-describedby="basic-addon1">
                      </div>
                      <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Project Name</span>
                          </div>
                          <input type="text" class="form-control" id="project_name" name="project_name" placeholder="Project Name" aria-label="Project Name" aria-describedby="basic-addon1" required>
                      </div> 
                      <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Contract Amount</span>
                          </div>
                          <input type="number" class="form-control" id="contract_amount" name="contract_amount" placeholder="Contract Amount" aria-label="Contract Amount" aria-describedby="basic-addon1">
                      </div> 
                      <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Varriation Amount</span>
                          </div>
                          <input type="number" class="form-control" id="veriation_amount" name="veriation_amount" placeholder="Varriation Amount" aria-label="Varriation Amount" aria-describedby="basic-addon1">
                      </div> 
                      <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Project Location</span>
                          </div>
                          <input type="text" class="form-control" id="project_location" name="project_location" placeholder="Project Location" aria-label="Project Location" aria-describedby="basic-addon1">
                      </div> 
                                    
                    </form>
                  </div>
                  <div class="modal-footer">
                    <button type="button" id="closebtn" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" id="save_project" id="action" class="btn btn-primary">Save</button>
                    <button type="button" id="update_project" class="btn btn-primary" style="display: none;">Update</button>
                  </div>
                </div>
              </div>
            </div>
            <div class="card">
                <div class="card-header h4">Projects List</div>

                <div class="card-body">
                    <div id="update_message" ></div>
                    <button type="button" class="btn btn-primary" id="add_project_btn" data-whatever="add project" style="margin: 10px;">Add Project</button>

                    <table id="tableDataSearch" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>Sl</th>
                                <th>Project ID</th>
                                <th>Project Name</th>
                                <th>Contract Taka</th>
                                <th>Varriation Taka</th>
                                <th>Location</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- show ajax data -->
                            
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Sl</th>
                                <th>Project ID</th>
                                <th>Project Name</th>
                                <th>Contract Taka</th>
                                <th>Varriation Taka</th>
                                <th>Location</th>
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