      <form method="post" action="{{url('job-seeker/edit-workexp')}}" enctype="multipart/form-data">
         {{ csrf_field() }}
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h2>Edit Education</h2>
         </div>
         <div class="modal-body">
            <div class="resum-form padd-tb">
               <div class="row">
                  <div class="col-md-6">
                     <input type="text" name="exp_id" hidden value="{{$experience->id}}">
                     <input name="job_title" required pattern="[a-zA-Z ]+" type="text" placeholder="Job Titel" value="{{ $experience->job_title}}">
                  </div>
                  <div class="col-md-6">
                     <input name="compnay_name" required pattern="[a-zA-Z0-9]+" type="text" placeholder="Company Name" value="{{$experience->compnay_name}}">
                  </div>
                 <div class="col-md-12 col-sm-12"> 
                     <select class="full-width" name="ind_id">
                        @foreach ($industries as $industry)
                        <option value="{{$industry->id}}">{{$industry->name}}</option>
                        @endforeach                       
                     </select>
                  </div>
                  <div class="col-md-6">
                     <input class="unstyled" name="statrt_date" required="" pattern="\d{1,2}/\d{1,2}/\d{4}" type="date" placeholder="Start Date" value="{{$experience->statrt_date}}">
                  </div>
                  <div class="col-md-6">
                     <input class="unstyled" name="end_date" required="" pattern="\d{1,2}/\d{1,2}/\d{4}" type="date" placeholder="End Date" value="{{$experience->end_date}}" >
                  </div>
                  <div class="col-md-12">
                     <textarea name="summary" >{{$experience->summary}}</textarea>
                  </div>
                  <div class="col-md-12">
                  <div class="selector">
                     <select class="full-width getLocation" name="zip"  value="{{ old('zip') }}">
                     </select>
                  </div>
               </div>
               </div>
            </div>
         </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
               <button type="submit" value="Submit" class="btn btn-primary">Save changes</button>
            </div>
      </form>
     