/**
 * Validate User Registration Form
 * Created By: Kumari Pallavi
 **/

 // When the browser is ready...
$(function() {
    /**
     * Validate the User Registration Form
     * @param : string
     * @return :boolean
     **/
    $('#validate').on("click",function() {
        var flag = 0;
       
        var reg = /^([A-Za-z0-9_\-\.]){1,}\@([A-Za-z0-9_\-\.]){1,}\.([A-Za-z]{2,4})$/;
        if($("#email").val() === ""  && $("#email").val() === reg ) {
            $("#email").focus();
            $("#eml").html("Enter valid email");
            flag = 1;
        }
     
        if(flag == 1) {
            return false;
        }
        else {