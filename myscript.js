/**
*   Author vusani.com
*   Simple login with json
*/
jQuery(document).ready(function($) {
    $('#myform').submit(function() {   
        $("#mysuccess, #myerror").addClass("hidden");     
        var postdata = $('#myform').serialize(); //retrieve the username and password in json format
        $.ajax({
            type: 'POST',
            url: 'login.php',
            data: postdata, //pass the retrieved data json format
            dataType: 'json',
            success: function(json) {
                if(json.valid == 0) {
                    $("#mysuccess").html("<h1>"+json.msg+"</h1> <a class='btn btn-danger' href='index.php'>Logout</a>");
                    $("#mysuccess").toggleClass("hidden");
                    $("#mycontent").remove();
                }
                else {
                    $("#myerror").html(json.msg);
                    $("#myerror").toggleClass("hidden");
                }
            }
        }); 
        return false;
    });
});