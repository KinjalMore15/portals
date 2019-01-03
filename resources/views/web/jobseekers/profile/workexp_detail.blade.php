      <form method="post" action="{{url('job-seeker/create-workexp')}}" enctype="multipart/form-data">
         {{ csrf_field() }}
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h2>Add Experiance</h2>
         </div>
         <div class="modal-body">
            <div class="resum-form padd-tb">
               <div class="row">
                  <div class="col-md-6">
                     <input name="job_title" required pattern="[a-zA-Z ]+" type="text" placeholder="Job Titel">
                  </div>
                  <div class="col-md-6">
                     <input name="compnay_name" required pattern="[a-zA-Z0-9]+" type="text" placeholder="Company Name" >
                  </div>
                 <div class="col-md-12 col-sm-12"> 
                     <select class="full-width" name="ind_id">
                        @foreach ($industries as $industry)
                        <option value="{{$industry->id}}">{{$industry->name}}</option>
                        @endforeach                       
                     </select>
                  </div>
                  <div class="col-md-6">
                     <input class="unstyled" name="statrt_date" required="" pattern="\d{1,2}/\d{1,2}/\d{4}" type="date" placeholder="Start Date" >
                  </div>
                  <div class="col-md-6">
                     <input class="unstyled" name="end_date" required="" pattern="\d{1,2}/\d{1,2}/\d{4}" type="date" placeholder="End Date" >
                  </div>
                  <div class="col-md-12">
                  <div class="selector">
                     <select class="full-width getLocation" name="zip" value="{{ old('zip') }}">
                     </select>
                  </div>
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
 @section('scripts')
 <script>
    $('.getLocation').select2({
           placeholder: 'Select an item',
           ajax: {
             url: '{{ url('/get/citystatezip') }}',
             dataType: 'json',
             delay: 250,
             method: 'post',
            data: function (params) {
                       return {
                           "_token": "{{ csrf_token() }}",
                           city: $.trim(params.term)
                       };
                   },
             processResults: function (data) {
               return {
                 results:  $.map(data, function (item) {
                       var str1 = item.city;
                       var str2 = "  -  ";
                       var str3 = item.state;
                       var str4 = item.zip;
                       var res = str1.concat( str2).concat( str3).concat( str2).concat( str4);
                       return {
                           text: res,
                           id: item.zip
                       }
                   })
               };
             },
             cache: true
           }
         });
</script>
@stop    