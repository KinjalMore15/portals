
             <form method="post" action="{{url('job-seeker/edit-contact')}}" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="modal-header">
                   <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                   <h4>Edit Contact</h4>
                </div>
                <div class="modal-body">
                   <div class="resum-form padd-tb">
                      <div class="">
                         <div class="row">
                            <div class="col-md-12">
                               <input name="email"  type="text" placeholder="{{ (!empty(($seeker_detail->email))) ? ($seeker_detail->email)  : 'Facebook' }}" value="{{ (!empty(($seeker_detail->email))) ? ($seeker_detail->email)  : null }}">
                            </div>
                            <div class="col-md-12">
                               <input name="phone_number"  type="text" placeholder="{{ (!empty(($seeker_detail->phone_number))) ? ($seeker_detail->phone_number)  : 'Gmail' }}" value="{{ (!empty(($seeker_detail->phone_number))) ? ($seeker_detail->phone_number)  : null }}">
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
          