<script>
  $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
</script>


<script>
  $(document).ready(function(){
    $(document).on('click','.add_activite',function(e){
        e.preventDefault();
        let nomActi = $('#nomActi').val();
        let typeActi = $('#typeActi').val();
        // console.log(nomActi+typeActi);

        $.ajax({
            url:"{{ route('add.activite') }}",
            methode:'post',
            data:{nomActi:nomActi,typeActi:typeActi},
            success:function(res){

            },error:function(err){
                let error = err.responseJSON;
                $.each(error.errors,function(index, value){
                    $('.errMsgContainer').append('<span class="text-danger">'+value+'</span>'+'<br>');
                });            
            }
        });
    })
  });

</script>