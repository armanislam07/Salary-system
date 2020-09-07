
$(document).ready(function(){
  $.ajaxSetup({

      headers: {

          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }

  });

  $(document).bind('contextmenu',function(e){
    alert('Due to security reason, Right Click is not allowed');
    return false;
  });

  $("#save_project").click(function(e){

        e.preventDefault();

        var project_id = $("input[name=project_id]").val();
        var project_name = $("input[name=project_name]").val();
        var contract_amount = $("input[name=contract_amount]").val();
        var veriation_amount = $("input[name=veriation_amount]").val();
        var project_location = $("input[name=project_location]").val();

        $.ajax({

           type:'POST',
           url:'/project/add/save',
           data:{
                project_id:project_id, 
                project_name:project_name, 
                contract_amount:contract_amount,
                veriation_amount:veriation_amount,
                project_location:project_location
              },
              // cache:false,
              dataType:"json",

           success:function(data){
              
              $('#message').html('');
              if (data.success) {
                $("form").trigger("reset");  
                $('#message').fadeIn().html('<div class="alert alert-success">'+data.success+'</div>');  
                setTimeout(function(){  
                     $('#message').fadeOut("Slow");  
                }, 2000);
                $("#tableDataSearch tbody").html('');                  
                projectListView();

                  // window.location.reload(true);
              }
              
              $.each(data.errors, function(key,value) {
                  $('#message').append('<div class="alert alert-danger">'+value+'</div>');
                });
              
              

           }

        });
  });


    projectListView();
    function projectListView(){
      
      $.get("/project/list", function(o) {
        if (o.length>0) {
          for (var i = 0; i < o.length; i++)
          {
            var j = i+1;
              var tr_str =
                  '<tr> ' +
                      '<td>' + j + '</td>' +
                      '<td>' + o[i].project_id + '</td>' +
                      '<td>' + o[i].project_name + '</td>' +
                      '<td>' + o[i].contract_amount + '</td>' +
                      '<td>' + o[i].veriation_amount + '</td>' +
                      '<td>' + o[i].project_location + '</td>' +
                      '<td>' + 
                      '<button class="btn btn-default btn-xs update" data-id="'+o[i].id+'"><i class="fa fa-pencil-alt text-primary"></i></button>' +
                      '<button class="btn btn-default btn-xs delete" id="delete" data-id="'+o[i].id+'"><i class="fa fa-trash-alt text-danger"></i></button>' +
                      '</td>' +
                  '</tr>';
              $("#tableDataSearch tbody").append(tr_str);
              // $('#tableDataSearch').DataTable();

          }
          searchTableData();
        }else{
          var tr_str = "<tr>" +
                  "<td align='center' colspan='7'>No record found.</td>" +
                  "</tr>";

                  $("#tableDataSearch tbody").append(tr_str);
        }
                
    }, 'json');

    }

    // $('#project_list_view').click(function(){
    //   projectListView();
    // });

      // Table data search
      function searchTableData(){
        $('#tableDataSearch').DataTable();
      };

      $(document).on("click",".update",function(){
        $('#exampleModal').modal('show');
        $('#update_project').show();
        $('#save_project').hide();
        $('#exampleModalLabel').text('Update Project');
        $("#message").text('');
        // $("form").trigger("reset");
        var project_id = $(this).data('id');
        $.ajax({
            url:'/project/edit/'+project_id,
            type:'get',
            success:function(html){
              $('#id').val(html.data.id);              
              $('#project_id').val(html.data.project_id);              
              $('#project_name').val(html.data.project_name);              
              $('#contract_amount').val(html.data.contract_amount);              
              $('#veriation_amount').val(html.data.veriation_amount);              
              $('#project_location').val(html.data.project_location);              
            }
          });
        // alert(project_id);
      });
      
      $('#update_project').on('click', function(e){
        e.preventDefault();

        var id = $('#id').val();
        var project_id = $("input[name=project_id]").val();
        var project_name = $("input[name=project_name]").val();
        var contract_amount = $("input[name=contract_amount]").val();
        var veriation_amount = $("input[name=veriation_amount]").val();
        var project_location = $("input[name=project_location]").val();
        
        $.ajax({
          url:'/project/update/'+id,
          type:'POST',
          data:{
                project_id:project_id, 
                project_name:project_name, 
                contract_amount:contract_amount,
                veriation_amount:veriation_amount,
                project_location:project_location
              },
          dataType:'json',
          success:function(data){
            $('#message').html('');
            if (data.success) {
              $('#update_message').html('');
              $("form").trigger("reset");  
              $('#update_message').fadeIn().html('<div class="alert alert-success">'+data.success+'</div>');  
              setTimeout(function(){  
                   $('#update_message').fadeOut("Slow");  
              }, 2000);
              $("#tableDataSearch tbody").html('');                  
              projectListView();
              $('#exampleModal').modal('hide');
            }

            $.each(data.errors,function(key, value){
              $('#message').append('<div class="alert alert-danger">'+value+'</div>');
            });
          }
        });
        // alert(id);
        
      });

      $(document).on('click','.delete',function(){
        $('#deleteModal').modal('show');
        var project_id = $(this).data('id');
        var delete_id = $('#id').val(project_id);                
      });

      $('#yesbtn').on('click', function(){
        var delete_id = $('#id').val();

        $.ajax({
          url:'/project/delete/'+delete_id,
          type:'get',
          success:function(data){
            $('#deleteModal').modal('hide');
            $('#update_message').html('');
            $('#update_message').fadeIn().html('<div class="alert alert-success">'+data.success+'</div>');  
            setTimeout(function(){  
                 $('#update_message').fadeOut("Slow");  
            }, 2000);
            $("#tableDataSearch tbody").html('');                  
            projectListView();

            // console.log(data);
          }
        });
      });

      //add model view
      $('#add_project_btn').on('click', function(){
        $('#exampleModal').modal('show');
        $('#update_project').hide();
        $('#save_project').show();
        $('#exampleModalLabel').text('Add Project');
        $("form").trigger("reset");
        $("#message").text('');
      });

      //profile
      
      profile();
      function profile(){
        $.ajax({
          url:'/profile/view',
          type:'get',
          dataType:'json',
          success:function(data){
            if (data.profile.length>0) {
              for (var i=0;i<data.profile.length;i++){
                var html = '<div class="col-md-3">'+
                         '<img src="/images/usersImage/'+data.profile[i].photo+'" class="rounded float-left" alt="Company Logo" style="height:200px; wight: 200px;" >'+
                         '</div>'+
                         '<div class="col-md-6">'+
                         '<h3 class="text-bold">'+data.profile[i].name+'</h3>'+
                         '<h5 class="text">Designation: '+data.profile[i].designation+'</h5>'+
                         '<h5 class="text">Project: '+data.profile[i].project_name+'</h5>'+
                         '<h5 class="text">Project location: '+data.profile[i].project_location+'</h5>'+
                         '<h5 class="text">Account Opening: '+data.profile[i].created_at+'</h5>'+
                         '<button class="btn btn-primary" id="update_profile">Update</button>'+
                         '</div>'+
                         '<div class="col-md-3"></div>';
              $('#profile-content').append(html);
              }
              // console.log(data);
            }else{
              var html = '<center>'+
                         '<button type="button" class="btn btn-primary create_profile_btn" id="create_profile_btn" data-whatever="Update Profile" style="margin: 10px;">Update your profile</button>'+
                         '</center>';
              $('#profile_btn_show').append(html);
            }            
          }
        });
      }
      project_list();
      function project_list(){
        $.get("/project/list", function(o) {
          if (o.length>0) {
            for (var i = 0; i < o.length; i++)
            {                
              var tr_str ='<option value="'+o[i].id+'">'+o[i].project_name+'</option>';
              // $("#project_name").html('');
              $("#project_name").html('<option value="" selected>--Select Project--</option>');
              $("#project_name").append(tr_str);
            }
          }else{
            var tr_str = '<option value="" selected>--Select Project--</option>';
            $("#project_name").append(tr_str);
          }
                  
        }, 'json');
      }
      $(document).on('click','#create_profile_btn',function(){
        $('#profileModal').modal('show');
        $('#profileModalLabel').text('Update Profile');
        $("form").trigger("reset");
        $("#message").text('');
        $('#update_project').hide();
        $('#save_project').show();
        $('#name_error').hide();
        $('#desination_error').hide();
        $('#project_name_error').hide(); 
        project_list();
                
      });

      $('#save_profile').on('click',function(e){
        e.preventDefault();
        var name = $("#name").val();
        var designation = $("#designation").val();
        var project_name = $("#project_name").val();
        var user_photo = $("#user_photo").val();
        // var formData = new FormData(this);
        var formData = new FormData($(".form_profile")[0]);
                
        if (name == '') {
          $('#name_error').show();
          $('#name_error').text('Name field require');
          
          // alert('Please select Project Name');
        }else{
          $('#name_error').hide();
        }
        if(designation == ''){
          $('#desination_error').show();
          $('#desination_error').text('Designation field require');
        }else{
          $('#desination_error').hide();
        }
        if(project_name == ''){
          $('#project_name_error').show();
          $('#project_name_error').text('Project name field require');
        }else{
          $('#project_name_error').hide();
        }
        
        if (name && designation && project_name !='') {
          $.ajax({            
            url:'/user/profile/created',
            type:'POST',            
            data:formData,
            dataType:'JSON',
            contentType: false,
            cache: false,
            processData: false,
            success:function(data){
              $('#message').html('');
              if (data.success) {
                $('#profileModal').modal('hide');
                $('#update_message').html('');
                $('#update_message').fadeIn().html('<div class="alert alert-success">'+data.success+'</div>');  
                setTimeout(function(){  
                     $('#update_message').fadeOut("Slow");  
                }, 2000);
                profile();
                $('#create_profile_btn').hide();
              }
              $.each(data.errors, function(key,value) {
                  $('#message').append('<div class="alert alert-danger">'+value+'</div>');
                });              
            },
            error:function(errorData){
              console.log(errorData);
            }
          });
        }
      });

      //Employee section
      
      $('#employeetableDataSearch').DataTable({
        "processing": true,
        "serverSide": true,
        "ajax":{
          "url":"/employes",
          "type":"get"
        },
        "columns":[
          {data:"DT_RowIndex",name: "DT_RowIndex"},
          {data:"emp_name",name: "emp_name"},
          {data:"mobile",name: "mobile"},
          {data:"designation",name: "designation"},
          {data:"salary",name: "salary"},
          {data:"project_name",name: "project_name"},
          {data:"action",name:"action",orderable: false,searchable:false}
        ]
      });
      // employeeList();
      // function employeeList(){
      //   $.ajax({
      //     url:'/employes/view',
      //     type:'get',
      //     dataType:'json',
      //     success:function(data){
      //       console.log(data);
      //     },
      //     error:function(data){
      //       console.log(data);
      //     }
      //   });
      // }
      
      $(function () {
        $('.date').datepicker();
      });

      $('#add_employee_btn').on('click',function(){
        $('#addEmployeeModal').modal('show');
        $("form").trigger("reset");
        $("#employeeModalLabel").text('Add Employee');
        $("#message").text('');
        $('#update_employee').hide();
        $('.homeAllowns').hide();
        $('.medicleAllowns').hide();
        $('#save_employee').show();
        $('.emp_details_table').hide();
        $('.form_employee').show();
        $('#mobile').attr('disabled', false);
        // $('.date').datepicker();
        // project_list();
      });

      $('#save_employee').on('click',function(e){
        e.preventDefault();
        var formData = new FormData($(".form_employee")[0]);
        $.ajax({
          type:'post',
          url:'/employes/add',
          data: formData,
          dataType:'json',
          cache:false,
          contentType:false,
          processData:false,
          success:function(data){
            $("#message").text('');
            if (data.success) {
              $('#message').fadeIn().html('<div class="alert alert-success">'+data.success+'</div>');  
              setTimeout(function(){  
                   $('#message').fadeOut("Slow");  
              }, 2000);
              $('form').trigger('reset');
              $('#employeetableDataSearch').DataTable().ajax.reload();
            }
            $.each(data.errors, function(key, value){
              $('#message').append('<div class="alert alert-danger">'+value+'</div>');
            });
          },
          error:function(data){
            console.log(data);
          }

        });
      });

      $(document).on('click','.emp_update', function(){
        var emp_id = $(this).data('id');        
        $('#addEmployeeModal').modal('show');
        $('form').show();
        $("form").trigger("reset");
        $("#employeeModalLabel").text('Update Employee');
        $("#message").text('');
        $('#update_employee').show();
        $('#save_employee').hide();
        $('.emp_details_table').hide();
        $('.homeAllowns').show();
        $('.medicleAllowns').show();
        $('#mobile').attr('disabled', true);

        $.ajax({
          url:'/employes/update/view/'+emp_id,
          type:'get',
          cache:false,
          contentType:false,
          processData:false,
          dataType:'json',
          success:function(data){ 
            $('#id').val(data.employee.id);           
            $('#name').val(data.employee.emp_name);
            $('#designation').val(data.employee.designation);
            $('#mobile').val(data.employee.mobile);
            $('#date_of_birth').val(data.employee.dob);
            $('#joining_date').val(data.employee.joinning_date);
            $('#salary').val(data.employee.salary);
            $('#homeAllowns').val(data.employee.home_allowns);
            $('#medicleAllowns').val(data.employee.medicle_allowns);
          },
          error:function(data){
            console.log(data);
          }
        });
      });

      $('#update_employee').on('click',function(e){
        e.preventDefault();
        var emp_id = $('#id').val();
        var formData = new FormData($('.form_employee')[0]);
        $.ajax({
          url:'/employes/update/'+emp_id,
          type:'post',
          data:formData,
          cache:false,
          contentType:false,
          processData:false,
          dataType:'json',
          success:function(data){
            $('#message').html('');
            if (data.success) {
              $('#update_message').html('');
                $('#update_message').fadeIn().html('<div class="alert alert-success">'+data.success+'</div>');  
                setTimeout(function(){  
                     $('#update_message').fadeOut("Slow");  
                }, 2000);
                $('#addEmployeeModal').modal('hide');
                $('#employeetableDataSearch').DataTable().ajax.reload();
            }
            $.each(data.errors, function(key, value){
              $('#message').append('<div class="alert alert-danger">'+value+'</div>');
            });
          },
          error:function(data){
            console.log(data);
          }
        });
      });

      $(document).on('click','.emp_details',function(){
        $('#addEmployeeModal').modal('show');        
        $("#employeeModalLabel").text('Employee Details');
        $('form').hide();
        $('#update_employee').hide();
        $('#save_employee').hide();
        var emp_id = $(this).data('id');
        $.ajax({
          url:'/employes/update/view/'+emp_id,
          type:'get',
          cache:false,
          contentType:false,
          processData:false,
          dataType:'json',
          success:function(data){
            var html = '<table class="table emp_details_table">'+
                      '<tr>'+
                      '<td>Name </td>'+
                      '<td class="text-bold">'+data.employeeDetails[0].emp_name+'</td>'+
                      '</tr>'+
                      '<tr>'+
                      '<td>Mobile </td>'+
                      '<td class="text-bold">'+data.employeeDetails[0].mobile+'</td>'+
                      '</tr>'+
                      '<tr>'+
                      '<td>Designation </td>'+
                      '<td class="text-bold">'+data.employeeDetails[0].designation+'</td>'+
                      '</tr>'+
                      '<tr>'+
                      '<tr>'+
                      '<td>Project Name </td>'+
                      '<td class="text-bold">'+data.employeeDetails[0].project_name+'</td>'+
                      '</tr>'+
                      '<tr>'+
                      '<td>Salary </td>'+
                      '<td class="text-bold">'+data.employeeDetails[0].salary+'</td>'+
                      '</tr>'+
                      '<td>Home Allowns </td>'+
                      '<td class="text-bold">'+data.employeeDetails[0].home_allowns+'</td>'+
                      '</tr>'+
                      '<td>Medicle Allowns </td>'+
                      '<td class="text-bold">'+data.employeeDetails[0].medicle_allowns+'</td>'+
                      '</tr>'+
                      '<td>Joining Date </td>'+
                      '<td class="text-bold">'+data.employeeDetails[0].joinning_date+'</td>'+
                      '</tr>'+
                      '</table>';
            $('.employee_details').html(html);
          },
          error:function(data){
            console.log(data);
          }
        });
      });

      $(document).on('click','.emp_delete', function(){
        $('#deleteEmployeeModal').modal('show');
        var emp_id = $(this).data('id');
        var deleteEmp_id = $('#id').val(emp_id);
      });

      $('#yesEmployeeBtn').on('click',function(){
        var deleteEmp_id = $('#id').val();
        $.ajax({
          url:'/employes/delete/'+deleteEmp_id,
          type:'get',
          cache:false,
          contentType:false,
          processData:false,
          success:function(data){
            $('#deleteEmployeeModal').modal('hide');
            $('#update_message').html('');
            $('#update_message').fadeIn().html('<div class="alert alert-danger">'+data.success+'</div>');  
            setTimeout(function(){  
                 $('#update_message').fadeOut("Slow");  
            }, 2000);
            $('#employeetableDataSearch').DataTable().ajax.reload();
          },
          error:function(data){
            console.log(data);
          }
        });
      });
      $('#employeeSalarytable').DataTable({
        "processing":true,
        "serverSide":true,
        "ajax":{
          "url":"/employes/salary/list",
          "type":"get"
        },
        "columns":[
          {data:"DT_RowIndex",name: "DT_RowIndex"},
          {data:"emp_name",name: "emp_name"},
          {data:"designation",name: "designation"},
          {data:"project_name",name: "project_name"},
          {data:"salary",name: "salary"},
          {data:"home_allowns",name: "h_allowns"},
          {data:"medicle_allowns",name: "m_allowns"},
          {data:"total",name: "total"},
          {data:"action",name:"action",orderable: false,searchable:false}
        ]
      });

      $(document).on('click','.emp_salary_paid',function(){
        var emp_id = $(this).data('id');
        var salary = 'salary';
        $('#id').val(emp_id);
        $('#employeeSalaryModal').modal('show');
        $('#employeeSalaryModalLabel').text('Salary Payment');
        $("form").trigger("reset");
        $('.form_employee_salary :input').prop('disabled',true);
        $('#installment').prop('disabled',false);
        $('.advanceSalaryInput-1').show();
        $('.advanceSalaryInput-2').show();
        $('#save_employee_salary').show();
        $('#save_employee_salary').text('Payment');
        $('#advance_emp_salary').hide();

        employeeSalaryDetails(emp_id,salary);        

      });

      function employeeSalaryDetails(emp_id,action){
        $.ajax({
          url:'/salary/payment/details/'+emp_id,
          type:'get',
          cache:false,
          contentType:false,
          processData:false,
          dataType:'json',
          success:function(data){
            $('#name').val(data.details[0].emp_name);
            $('#designation').val(data.details[0].designation);
            var option = '<option selected="true" value="'+data.details[0].project_id+'">'+data.details[0].project_name+'</option>'
            $('#project_name').html(option);
            $('#basic').val(data.details[0].salary);
            $('#h_allowns').val(data.details[0].home_allowns);
            $('#m_allowns').val(data.details[0].medicle_allowns);
            if (action == 'salary') {
              if (data.advance == 0) {
                $('.advance').hide();
              }else{
                $('.advance').show();
                $('#advance').val(data.advance.amount);
              }
              if (data.loan == 0) {
                $('.installment').hide();
              }else{
                $('.installment').show();
                $('#installment').val(data.loan.per_month_amount);
              }
            }
            employeeSalarySumation();
          },
          error:function(data){
            console.log(data);
          }
        });
      }

      function employeeSalarySumation(){
        var bonus_parsent = $('#bonus_parsent').val();
        var basic = $('#basic').val();      
        var h_allowns = $('#h_allowns').val();      
        var m_allowns = $('#m_allowns').val();
        // var bonus = $('#bonus').val();
        var advance = $('#advance').val();
        var installment = $('#installment').val();        
        if (bonus_parsent == 0 || bonus_parsent == null) {
          $('.bonus').hide();
          var sum = parseInt(basic) + parseInt(h_allowns) + parseInt(m_allowns);
        }else{ 
          $('.bonus').show();                  
          var sumBonus = (parseInt(basic)*parseInt(bonus_parsent))/100;
          var sum = parseInt(basic) + parseInt(h_allowns) + parseInt(m_allowns) + sumBonus; 
          $('#bonus').val(sumBonus);
        }        
        var total = $('#total').val(sum);
        var gtotal = sum-(parseInt(advance)+parseInt(installment));
        var payment = $('#payment').val(gtotal);
      }

      $('#save_employee_salary').click(function(){
        var emp_id = $('#id').val();
        alert(emp_id);
      });
      

      $(document).on('click','.emp_salary_advance',function(){
        var emp_id = $(this).data('id');
        var advance = 'advance';  
        var check_advance = $('#advance').val();
        var installment = $('#installment').val();
        $('#id').val(emp_id);
        $('#employeeSalaryModal').modal('show');
        $('#employeeSalaryModalLabel').text('Salary Advance');
        $("form").trigger("reset");
        $('.form_employee_salary :input').prop('disabled',true);
        $('#installment').prop('disabled',false);
        // $('.advanceSalaryInput-1').hide();
        $('.advanceSalaryInput-2').hide();
        $('#save_employee_salary').hide();
        $('#advance_emp_salary').show();
        $('.advance').show();
        if (check_advance == 0) {$('#advance').prop('disabled',false);}        
        $('#bonus_parsent').val(0);
        employeeSalaryDetails(emp_id,advance);
      });

      $('#advance_emp_salary').on('click',function(){
        var emp_id = $('#id').val();
        alert(emp_id);
      });

      $('#employee_btn').click(function(){
        let newWindow = open('/employes/salary/list', 'example', 'width=600,height=400');
      });
      
      
});

 