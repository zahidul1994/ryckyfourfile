@extends('layouts.user')
@section('title','Video list')
@section('content')
<div width="100%" id="video">

<span id="displayview" style="display:none">{!!$info->embedcode !!}</span>
<div class="Timer"></div>
<input id = "btnSubmit" type="submit" value="Play Video"/>

    
</div>


<!-- Modal -->

@endsection
@section('page-script')
<script>
        $(document).ready(function() {
          $('#btnSubmit').on('click', function(ev) {
              $("#displayview").removeAttr( 'style' );
               $( "#btnSubmit" ).prop( "disabled", true );
 $("#Clickme")[0].src += "&autoplay=1";
 ev.preventDefault();


          var start = new Date;

setInterval(function() {
 $('.Timer').text((new Date - start) / 1000 );
   
}, 1000);

         
setTimeout( function(){ 
     $.ajax({
                  
                    url: url+'/user/video',
                    method: "POST",
                    type: "POST",
                    data: {
                       

                    },
                    success: function(d) {
                         alert('Nice You earn');
                         location.reload();
                         
                        
                         //    swal({
                         //        title: "Collection Done",
                         //        text: "collection submit successfully",
                         //        timer: 2000,
                         //        buttons: false
                         //    });
                    },
                    error: function(d) {

                        alert('Sorry  Allready Paid');
                    }
                });

}  , 15000 );


});


       
        });

</script>
@endsection