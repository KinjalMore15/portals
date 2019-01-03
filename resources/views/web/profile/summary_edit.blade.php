
         <form method="post" action="{{url('job-seeker/edit-summary')}}" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="modal-header">
               <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
               <h2>Edit Summery</h2>
            </div>
            <div class="modal-body">
               <div class="resum-form padd-tb">
                  <div class="row">
                     <div class="col-md-12">
                        <textarea name="summary">
                           @if(!empty($seeker_detail->jsSeekerDetail->summary))
                           {{$seeker_detail->jsSeekerDetail->summary}}
                           @endif
                        </textarea>
                     </div>
                  </div>
               </div>
            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
               <button type="submit" value="Submit" class="btn btn-primary">Save changes</button>
            </div>
         </form>
    