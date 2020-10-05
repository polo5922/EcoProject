$(document).ready( function() {
    const pseudos = [
        'jean',
        'test',
        'jack'
    ]
    console.log("ready");
    $("#pseudo").on('focusout',function(){
        if($(this).val() > "")
        {
            if(!pseudos.includes($(this).val())){
                console.log('pseudo : '+$('#pseudo').val());
            } else {
                var flash = $(document.createElement('span'));
                flash.addClass('alert alert-danger alert-dismissible fade show').text('Pseudo déjà utilisé');
                $('#pseudo').parent().append(flash);
                console.log('pseudo deja pris');
            }
        }
        
    });
});