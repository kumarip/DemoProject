/*
 * Validate User REgistration Form
 * Created By: Kumari Pallavi
 */

 // When the browser is ready...
$(function() {
    // Validate the User Registration Form
    // @param :flag
    $('#validate').on("click",function() {
        var flag = 0;
        if($("#firstName").val() === "" ) {
            $("#firstName").focus();
            $("#fname").html("Enter the First Name");
            flag = 1;
        }
        if($("#lastName").val() === "") {
            $("#lastName").focus();
            $("#lname").html("Enter the Last Name");
            flag = 1;
        }
        var reg = /^([A-Za-z0-9_\-\.]){1,}\@([A-Za-z0-9_\-\.]){1,}\.([A-Za-z]{2,4})$/;
        if($("#email").val() === ""  && $("#email").val() === reg ) {
            $("#email").focus();
            $("#eml").html("Enter valid email");
            flag = 1;
        }
        if($('input[name=gender]:checked').length<=0) {
            $("#gen").html("Select gender");
            flag = 1;
        }
        if($("#address").val() === "") {
            $("#address").focus();
            $("#addrs").html("Enter your address");
            flag = 1;
        }
        if(flag == 1) {
            return false;
        }
        else {
            $.ajax({
                url: 'php/addUser.php',
                type: 'post',
                data: {
                   'fname' : $('#fisrtName').val(),
                   'lname' : $('#lastName').val(),
                   'email' : $('#email').val(),
                   'gender' : $('#gender').val(),
                   'address' : $('#address').val()
                   
                },
                success: function(response) {
                    //console.log(response);
                    if(data == "ok") {
                    $('#mytable').html(response);
                    //var numfollowers = parseInt($('#followercnt').html()) + 1;
                    //$('#followercnt').html(numfollowers);
                    }
                }
            });
            return true;
        }
        
    });    
    
});
