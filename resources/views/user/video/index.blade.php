@extends('layouts.user')
@section('title','Video list')
@section('content')
<div width="100%" id="video">
<h1>No Video for today.  your earn <strong>{{$earn}} US Doller</strong></h1>
   
</div>


<!-- Modal -->

@endsection
@section('page-script')
<script>
        $(document).ready(function() {
          $('#btnSubmit').on('click', function(ev) {
               $( "#btnSubmit" ).prop( "disabled", true );
 $("#Clickme")[0].src += "&autoplay=1";
 ev.preventDefault();


          var start = new Date;

setInterval(function() {
 $('.Timer').text((new Date - start) / 1000 );
   
}, 2000);

         
setTimeout( function(){ 
     $.ajax({
                  
                    url: url + '/user/video',
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

}  , 10000 );


});


       
        });

</script>
@endsection