$(function () {

$('tr').hover(function () {
    $(this).addClass('info');
},function () {
    $(this).removeClass('info');
});

$('#task_1').on('click',function () {
        $.ajax({
            url:"index2.php",
            type:"POST",
            data:{type:1},
            success:function (data) {
                doContent(data);
            }
        });
});
$('#task_2').on('click',function () {
        $.ajax({
            url:"index2.php",
            type:"POST",
            data:{type:2},
            success:function (data) {
                doContent(data);
            }
        });
});



});

/**
//error processing
 */
function doContent(data) {
    if(data=='')
    {
        $('#result').html('<h1>No data on your request</h1>');
    }
    else
    {
        $('#result').html(data);
    }}
