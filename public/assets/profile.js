$(document).on('change', "input[type='file']",function(){
    if ($(this).val()) {
        console.log($(this).val());
        var filename = $(this).val().split("\\");
    
        filename = filename[filename.length-1];

        $('.fileName').text(filename);
    }
});