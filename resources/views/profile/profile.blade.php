@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
              <div class="card-head"></div>
              <div class="card-body">
                <div class="row " id="profile-content">
                  <div class="col-md-12">
                    <div id="update_message" ></div>
                                      
                    <div class="align-center" id="profile_btn_show">
                        <!-- show button-->
                    </div>                  
                    
                    <div class="modal fade" id="profileModal" tabindex="-1" role="dialog" aria-labelledby="profileModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="profileModalLabel">Update Profile</h5>
                            <button type="button" id="closebtn" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <form class="form_profile" method="post" enctype="multipart/form-data"> 
                          <div class="modal-body">
                            <div id="message" ></div>
                               
                              @csrf
                              <div class="input-group mb-3">
                                <input type="hidden" class="form-control " id="id" name="id" hidden="true">
                                  <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">Name</span>
                                  </div>                                  
                                  <input type="text" class="form-control " id="name" name="name" value="{{Auth::user()->name}}" placeholder="Name" aria-label="Name" aria-describedby="basic-addon1" required="true">                                  
                              </div>
                              <label class="text-danger" id="name_error" style="display: none;"></label> 
                              <div class="input-group mb-3">
                                  <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">Designation</span>
                                  </div>                                  
                                  <input type="text" class="form-control " id="designation" name="designation" placeholder="Designation" aria-label="Designation" aria-describedby="basic-addon1" required="true">
                                  
                              </div> 
                              <label class="text-danger" id="desination_error" style="display: none;"></label>                                      
                              <div class="input-group mb-3">
                                  <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">Project Name</span>
                                  </div>
                                  <!-- <input type="number" class="form-control" id="contract_amount" name="contract_amount" placeholder="Contract Amount" aria-label="Contract Amount" aria-describedby="basic-addon1"> -->
                                  <select class="form-control" id="project_name" name="project_name">
                                    <option selected="true" value="">--Select Project--</option>
                                  </select>
                              </div>
                              <label class="text-danger" id="project_name_error" style="display: none;"></label> 
                              <div class="input-group mb-3">
                                  <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">Photo</span>
                                  </div>
                                  <input type="file" class="form-control" id="user_photo" name="user_photo" aria-label="User Photo" >
                              </div>              
                           
                          </div>
                          <div class="modal-footer">
                            <button type="button" id="closebtn" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" id="save_profile" class="btn btn-primary" >Save</button>
                            <button type="button" id="update_profile" class="btn btn-primary" style="display: none;">Update</button>
                          </div>                                                   
                          </form> 
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- <div class="col-md-12">                   -->
                    <!-- <div class="col-md-3">
                      <img src="/images/usersImage/default.png" class="rounded float-left" alt="Company Logo" >
                    </div>
                    <div class="col-md-6">
                      <h3 class="text-bold">md arman</h3>
                      <h5 class="text">designation</h5>
                      <h5 class="text">Project:</h5>
                      <h5 class="text">Project location:</h5>
                      <h5 class="text">Account Opening:</h5>
                    </div>
                    <div class="col-md-3"></div> -->
                  <!-- </div> -->
                </div>
              </div>
            </div>
        </div>
    </div>
</div>
@endsection