$('#setup').on('change',function(){
    var setup = $('#setup option:selected').val();

    if(setup == 2){
        $('#scratch').modal('toggle');
    }else if(setup == 3){
        $('#wizard').modal('toggle');
    }
});