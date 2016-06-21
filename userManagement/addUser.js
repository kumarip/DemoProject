function callAddUser()
{
    $.ajax({
    url: 'php/display.php',
    type: 'post',
    data: {
       'fname' : $('#firstName').val(),
       'lname' : $('#lastName').val(),
       'email' : $('#email').val(),
       'gen' : $('input[name=gender]:checked').val(),
       'address' : $('#address').val()
       
    },
    success: function(response) {
        $.each(response.records,function() {
            $('#mytable').append('<tr><td>' + this.fname  +'</td><td>'+ this.lname + '</td><td> ' + this.email + '</td><td>' +
            this.gender + '</td><td>' + this.address + '</td><td>' + '<input type="button" value="EDIT" id="edit" onclick="editRow(this);">/<input type="button" value="DELETE" onclick="deleteRow(this);">' +
            '</td></tr>');
        });   
    }
});//end of ajax call