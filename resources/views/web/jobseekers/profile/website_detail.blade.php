
         <form method="post" action="{{url('job-seeker/edit-website')}}" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="modal-header">
               <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
               <h2>Edit Websites</h2>
            </div>
            <div class="modal-body">
               <div class="resum-form padd-tb">
                  <div class="">
                     <div class="row">
                        <div class="col-md-12">
                           <input name="fb_link"  type="text" placeholder="{{ (!empty(($seeker_detail->jsSeekerDetail->fb_link))) ? ($seeker_detail->jsSeekerDetail->fb_link)  : 'Facebook' }}" value="{{ (!empty(($seeker_detail->jsSeekerDetail->fb_link))) ? ($seeker_detail->jsSeekerDetail->fb_link)  : null }}">
                        </div>
                        <div class="col-md-12">
                           <input name="gmail_link"  type="text" placeholder="{{ (!empty(($seeker_detail->jsSeekerDetail->gmail_link))) ? ($seeker_detail->jsSeekerDetail->gmail_link)  : 'Gmail' }}" value="{{ (!empty(($seeker_detail->jsSeekerDetail->gmail_link))) ? ($seeker_detail->jsSeekerDetail->gmail_link)  : null }}">
                        </div>
                        <div class="col-md-12">
                           <input name="tweet_link"  type="text" placeholder="{{ (!empty(($seeker_detail->jsSeekerDetail->tweet_link))) ? ($seeker_detail->jsSeekerDetail->tweet_link)  : 'Gmail' }}" value="{{ (!empty(($seeker_detail->jsSeekerDetail->tweet_link))) ? ($seeker_detail->jsSeekerDetail->tweet_link)  : null }}">
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
    