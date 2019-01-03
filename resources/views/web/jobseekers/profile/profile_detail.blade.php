<style type="text/css">

  .upload-box {
    float: right !important;
  }
  .resum-form .upload-box .btn-file {
    margin: 0;
}
.resum-form .upload-box .btn-file {
    float: left !important;
    margin: 0;
}
</style>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script> 
             <form method="post" action="{{url('job-seeker/profile-picture')}}" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="modal-header">
                   <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                   <h4>Edit Contact</h4>
                </div>
                <div class="modal-body">
                   <div class="resum-form padd-tb">
                 
                         <div class="row" style="text-align: center;">
                            <img src="../storage/app/photos/{{$seeker_detail->photo}}" id="profile-img-tag" width="200px" style=" align-items: center;;
}" />

                            <div class="col-md-12">
                             
                                <div class="upload-box">
               <span class="btn-file"> Browse File
               <input type="file" name="photo" accept="application/msword,text/plain, application/pdf," id="profile-img">
               </span>
             
            </div>
                            </div>
                            <div class="col-md-12">
                               <input name="f_name"  type="text" placeholder="{{ (!empty(($seeker_detail->f_name))) ? ($seeker_detail->f_name)  : '' }}" value="{{ (!empty(($seeker_detail->f_name))) ? ($seeker_detail->f_name)  : null }}">
                            </div>
                            <div class="col-md-12">
                               <input name="l_name"  type="text" placeholder="{{ (!empty(($seeker_detail->l_name))) ? ($seeker_detail->l_name)  : '' }}" value="{{ (!empty(($seeker_detail->l_name))) ? ($seeker_detail->l_name)  : null }}">
                            </div>
                         </div>
                   
                   </div>
                </div>
                <div class="modal-footer">
                   <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                   <button type="submit" value="Submit" class="btn btn-primary">Save changes</button>
                </div>
             </form>

<script type="text/javascript">
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function (e) {
                $('#profile-img-tag').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#profile-img").change(function(){
        readURL(this);
    });
</script>