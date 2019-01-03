        <form method="post" action="{{url('job-seeker/create-education')}}" enctype="multipart/form-data">
         {{ csrf_field() }}
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h2>Add Education</h2>
         </div>
         <div class="modal-body">
             <div class="resum-form padd-tb">
                  <div class="row">
                     <div class="col-md-12">
                        <input name="certificate_degree_name" required="" type="text" placeholder="Certificate/Degree_name">
                     </div>
                     <div class="col-md-12">
                        <input name="major" required="" type="text" placeholder="Major">
                     </div>
                     <div class="col-md-12">
                        <input name="institute_name" required="" type="text" placeholder="Institute Name">
                     </div>
                     <div class="col-md-6">
                        <input class="unstyled" name="start_date" required="" type="date" placeholder="Start Date">
                     </div>
                     <div class="col-md-6">
                        <input name="end_date" required="" type="date" placeholder="End Date">
                     </div>
                     <div class="col-md-12">
                        <textarea name="summary"></textarea>
                     </div>
                  </div>
               </div>
         </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
               <button type="submit" value="Submit" class="btn btn-primary">Save changes</button>
            </div>
      </form>
     
















