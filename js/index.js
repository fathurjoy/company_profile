// $(document).ready(function(){
//     $('#foto').click(function () { 
//         $('#task').toggle();


        
//     });
// })
$(document).ready(function(){
    $('.task').hide()
    $('.foto').on('click', function () { 
        $('.task').toggle();
        
    });
});

// $(document).ready(function(){
//     $('.foto').toggle();
// })