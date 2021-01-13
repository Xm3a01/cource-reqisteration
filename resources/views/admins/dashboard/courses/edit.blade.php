@extends('admins.dashboard.master')
    @section('content')

    <div class="col-md-8">
        <div class="card card-user">
          <div class="card-header">
            <h5 class="card-title">Edite Course</h5>
          </div>
          <div class="card-body">
            <form>
                <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label>Course Name</label>
                        <input type="text" class="form-control" placeholder="">
                      </div>
                    </div>
                    <div class="col-md-6 pl-1">
                      <div class="form-group">
                        <label>H/week</label>
                        <input type="number" class="form-control" placeholder="" >
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 pr-1">
                        <div class="form-group">
                          <label>Feeses</label>
                          <input type="number" class="form-control" placeholder="" >
                        </div>
                      </div>
                    <div class="col-md-6 pl-1">
                      <div class="form-group">
                        <label>seats/group</label>
                        <input type="number" class="form-control" placeholder=" " >

                      </div>
                    </div>
                  </div>
              
                
              
              
              <div class="row">
                    <div class="col-md-6 pl-1">
                            <div class="form-group">
                              <label>image</label>
                              <input type="file" class="form-control" placeholder=" " >

                            </div>
                      </div>
                    <div class="col-md-6 pl-1">
                  <div class="form-group">
                    <label>Description</label>
                    <textarea class="form-control textarea"></textarea>
                  </div>
                </div>
              </div>
              
              
              
              <div class="row">
                <div class="update ml-auto mr-auto">
                  <button type="submit" class="btn btn-primary btn-round">confirm</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
              
         
        
        
       @stop