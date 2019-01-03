        <form method="post" action="{{ url('job-seeker') }}" enctype="multipart/form-data">
        {{ csrf_field() }}
   
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h2>Login</h2>
         </div>
         <div class="modal-body">
             <div class="resum-form padd-tb">
                <div class="col-md-12">
            <label>Email *</label>
            <input type="text" name="email" placeholder="Your email Addresss"  required 
           >
            <small class="text-danger">{{ $errors->first('email') }}</small>
         </div>
         <div class="col-md-12">
            <label>password *</label>
            <input type="text" name="password" placeholder="Your password"  required 
           >
            <small class="text-danger">{{ $errors->first('password') }}</small>
         </div>
         
               </div>
         </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
               <button type="submit" value="Submit" class="btn btn-primary">Login</button>
            </div>
      </form>
     
















