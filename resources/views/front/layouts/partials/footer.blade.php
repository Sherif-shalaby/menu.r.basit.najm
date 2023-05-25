<script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
<script>
    $(".entypo-export").click(function () {
        $(".social").slideToggle("600");
        var type=$('.entypo-export i').attr('type');
        console.log(type);
        if(type == 1){
            // <i class="fas fa-times"></i>
            $('.entypo-export i').attr('type',0);
            $('.entypo-export i').removeClass('fa-comments').addClass('fa-times');
        }else{
            $('.entypo-export i').attr('type',1);
            $('.entypo-export i').removeClass('fa-times').addClass('fa-comments');

        }

    });
</script>
<script src="{{ asset('vendor/sweetalert/sweetalert.min.js') }}"></script>


