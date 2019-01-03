         <form method="post" action="{{url('job-seeker/create-achivement   ')}}" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="modal-header">
               <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
               <h2>Add Achivements</h2>
            </div>
            <div class="modal-body">
               <div class="resum-form ">
                  <div class="row">
                     <div class="col-md-12">
                        <textarea name="achievement"></textarea>
                     </div>
                  </div>
               </div>
            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
               <button type="submit" value="Submit" class="btn btn-primary">Save changes</button>
            </div>
         </form>
    