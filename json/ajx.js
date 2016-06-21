$(document).ready(function(){
    $.getJSON("UserData.json", function(arr){      
        $.each(arr, function(i) {
           $('#mytable').append('<tr><td>' + arr[i].fname  +'</td><td>'+ arr[i].lname + '</td><td> ' + arr[i].email + '</td><td>' +
           arr[i].gender + '</td><td>' + arr[i].address + '</td><td>' + '<input type="button" value="EDIT" id="edit" onclick="editRow(this);">/<input type="button" value="DELETE" onclick="deleteRow(this);">' +
           '</td></tr>');
        });
   
    });
});