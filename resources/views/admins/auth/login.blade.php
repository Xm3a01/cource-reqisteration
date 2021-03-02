@include('admins.dashboard._includes.styles')

<div class="container">
   
    <div class="card card-nav-tabs col-md-6 offset-md-3 mt-38 justify-center">
        
        <div class="card-body items-center">
          <h4 class="card-title">Dashboard Login</h4>
         
            <div class="">
    
                <form action="{{route('admins.login')}}" method="POST">
                  @csrf
                    <div class="form-group">
                      <label for="exampleInputEmail1">Email address</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">
                      @error('email')
                          <small id="emailHelp" class="form-text text-muted text-danger">{{ $message }}</small> 
                       </p>
                      @enderror
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Password</label>
                      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" value="">
                            Remmber me
                            <span class="form-check-sign">
                                <span class="check"></span>
                            </span>
                        </label>
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Sign In</button>
                  </form>
            </div>
        </div>
      </div>
</div>


  @include('admins.dashboard._includes.scripts')
  @include('admins.dashboard._includes.messages')
