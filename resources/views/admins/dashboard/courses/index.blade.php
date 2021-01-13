
@extends('admins.dashboard.master')

@section('content')
    
      <td class="text-center">
        <a target="_blank" href="addc.html" class="btn btn-round btn-primary">Add Course</a>
      </td>
    <div class="card">
        <div class="card-header">
          <h4 class="card-title"> All Courses</h4>
        </div>
        <div class="card-body">
          <div class="table" >
            <table class="table">
              <thead class=" text-primary">
                <tr>
                  <th>Course Name</th>
                  <th>H/week</th>
                  <th>feeses</th>
                  <th>description</th>
                  <th>actions</th>
              </tr>
            </thead>
              <tbody>
                <tr>
                  <td>Test Data</td>
                  <td>Test Data</td>
                  <td>Test Data</td>
                  <td>Test Data</td>
                <td >
                  <a title="Add managers"  href="#" class="btn btn-round btn-primary"><i class="nc-icon nc-simple-add"></i></a>
                    <a title="Edit" href="edit.html" class="btn btn-round btn-primary"><i class="nc-icon nc-settings"></i></a>
                     <a title="Delete"  href="#" class="btn btn-round btn-danger"><i class="nc-icon nc-simple-remove"></i></a>

                </td>
                </tr>
              
              </tbody>
            </table>
          </div>
        </div>
      
  
</div>
        
  @stop