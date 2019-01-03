      <form method="post" action="{{url('job-seeker/create-certificate')}}" enctype="multipart/form-data">
         {{ csrf_field() }}
         <input type="text" name="certy_id" hidden value="{{$certificate->id}}">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h2>Add Certificates</h2>
         </div>
         <div class="modal-body">
             <div class="resum-form padd-tb">
                  <div class="row">
                     <div class="col-md-12">
                        <input name="certificate_name" required="" type="text" placeholder="add new Certificate or License " value="{{$certificate->certificate_name}}">
                     </div>
                     <div class="col-md-12">
                        <input name="aurthority_name" required="" type="text" placeholder="Publish Aurthority"  value="{{$certificate->issu_Authority}}">
                     </div>
                     <div class="col-md-12">
                        <input name="year" required="" type="text" placeholder="Year Received" value="{{$certificate->year}}">
                     </div>
                     
                     <div class="col-md-12">
                        <textarea name="description" >{{$certificate->description}}</textarea>
                     </div>
                  </div>
               </div>
         </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
               <button type="submit" value="Submit" class="btn btn-primary">Save changes</button>
            </div>
      </form>
     
















