$(document).ready(function() {
    // Adding rows to the table
    $('#addButton').click(function() {
        if(validateForm() === false) {
        return;
        }
        var obj = {
             $fname: $('#firstname').val());
             $lname: $('#lastname').val());
             $eml: $('#email').val());
             $gender: $('#gender').val());
             $address: $('#add').val());
        };
        $.each(obj, function(i) {
           $('#mytable').append('<tr><td>' + obj[i].fname  +'</td><td>'+ obj[i].lname + '</td><td> ' + obj[i].eml + '</td><td>' +
           obj[i].gender + '</td><td>' + obj[i].address + '</td><td>' + '<input type="button" value="EDIT" id="edit" onclick="editRow(this);">/<input type="button" value="DELETE" onclick="deleteRow(this);">' +
           '</td></tr>');
        });
        
    });
    // Delecting Rows from the table
    $('#deleteRow').click(function() {  
       $(this).closest('tr').remove();
       return false;       
    });
});
