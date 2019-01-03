        <form method="post" action="{{ url('/job-detail/applyjob') }}" enctype="multipart/form-data">
        {{ csrf_field() }}
         <input type="text" hidden name="job_id" value="{{$job_id}}">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h2>Apply Jobs</h2>
         </div>
         <div class="modal-body">
             <div class="resum-form padd-tb">
                <div class="col-md-12">
            <label>Cover Letter *</label>
            <textarea name="coverletter" placeholder="Write Short Description"  required 
           ></textarea>
            <small class="text-danger">{{ $errors->first('email') }}</small>
         </div>
         <div class="col-md-12">
            <label>Aspected Salary *</label>
            <input type="text" name="salary" placeholder="Aspected Salary"  required 
           >
            <small class="text-danger">{{ $errors->first('password') }}</small>
         </div>
         
               </div>
         </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
               <button type="submit" value="Submit" class="btn btn-primary">Apply</button>
            </div>
      </form>
     
















