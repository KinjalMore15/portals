        <form method="post" action="{{url('job-seeker/edit-edudetail')}}" enctype="multipart/form-data">
         {{ csrf_field() }}
         <input type="text" name="edu_id" hidden value="{{$education->id}}">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h2>Edit Experiance</h2>
         </div>
         <div class="modal-body">
             <div class="resum-form padd-tb">
                  <div class="row">
                     <div class="col-md-12">
                        <input name="certificate_degree_name" required="" type="text" placeholder="Certificate/Degree_name" value="{{$education->certificate_degree_name}}">
                     </div>
                     <div class="col-md-12">
                        <input name="major" required="" type="text" placeholder="Major"  value="{{$education->major}}">
                     </div>
                     <div class="col-md-12">
                        <input name="institute_name" required="" type="text" placeholder="Institute Name" value="{{$education->institute_name}}">
                     </div>
                     <div class="col-md-6">
                        <input class="unstyled" name="start_date" required="" type="date" placeholder="Start Date" value="{{$education->start_date}}">
                     </div>
                     <div class="col-md-6">
                        <input name="end_date" required="" type="date" placeholder="End Date" value="{{$education->end_date}}">
                     </div>
                     <div class="col-md-12">
                        <textarea name="summary" value="{{$education->summary}}"></textarea>
                     </div>
                  </div>
               </div>
         </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
               <button type="submit" value="Submit" class="btn btn-primary">Save changes</button>
            </div>
      </form>
     
















