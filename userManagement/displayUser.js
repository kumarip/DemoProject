/*********************************
 * Make a ajax call each time the form is loaded
 * Created By: Kumari Pallavi
 * Date: 20/06/2016
 * ******************************/
var USERID;
$(document).ready(function(){
    displayUser();
    bindClickonUpdate();
    //bindClickonSearch();
});

/*********************************
 * Display function on calling
 * @argument: null
 * @param: string
 * @return: null
 ********************************/
function displayUser() {
    // making a ajax call to
    $.ajax({
        url: 'php/displayUser.php',
        type: 'post',
        data:  "",
        dataType: "json",
        success: function(response) {
            $.each(response.records,function() {
                $('#mytable').append('<tr><td>' + this.firstName  +
                '</td><td>'+ this.lastName + '</td><td> ' + this.email + '</td><td>' +
                this.gender + '</td><td>' + this.address + '</td><td>' +
                '<input type="button" value="EDIT" id="edit" onclick="editUser(' + this.userId +
                ');">/<input type="button" value="DELETE" onclick="deleteUser(' + this.userId + ');">' +
                '</td></tr>');
            });
           
        }
    });//end of ajax call
     
}

/********************************
 * Edit User of the table/layout
 * @argument: UserId
 * @param : null
 * ******************************/
function editUser(userId) {
    USERID = userId;
    $.ajax({
    url: 'php/editUser.php',
    type: 'post',
    data: {
        'userId':userId,
    },
    dataType: "json",
    success: function(response) {
        console.log(response.records[0]);
        $('#firstName').val(response.records[0].firstName);
        $('#lastName').val(response.records[0].lastName);
        $('#email').val(response.records[0].email);
        if(response.records[0].gender == 'male') {
            $('#male').prop('checked', true);    
        }
        else {
            $('#female').prop('checked', true);
        }
        $('#address').val(response.records[0].address);        
    }
    });//end of ajax call
}

/************************************
 * Delete User from the table/layout
 * @argument:
 * @param: null
 * **********************************/
function deleteUser(userId)
{   USERID = userId;
    $.ajax({
    url: 'php/deleteUser.php',
    type: 'post',
    data: {
        'userId':userId,
    },
    dataType: "json",
    success: function(response) {
        console.log(response);
        $(this.userId).closest('tr').remove();

    }
});
    
}
/****************************************************
 * Update the User Details
 * @param: string
 * @returns: null
 * **************************************************/
function bindClickonUpdate() {
    $('#updateUser').on('click',function() {
     // making a ajax call to updateUser.php
    $.ajax({
        url: 'php/updateUser.php',
        type: 'post',
        data: {
           'firstName' : $('#firstName').val(),
            'lastName' : $('#lastName').val(),
            'email' : $('#email').val(),
            'gender' : $('input[name=gender]:checked').val(),
            'address' : $('#address').val(),
            'userId': USERID
           
        },
        success: function(response) {

            displayUser();
        }
    });//end of ajax call
    });   
}

/****************************************************
 * Compound Search made on the table/layout
 * @param: string
 * @returns: null
 * *************************************************/
//function bindClickonSearch() {
    $('#searchUser').keyup(function() {
        $.ajax({
            url: 'php/searchUser.php',
            type: 'post',
            dataType: "json",
            data: {
             'data': $('#searchElement').val(),    
            },
            success: function(response) {
                console.log(response.records);
                $.each(response.records,function() {
                    $('#mytable').append('<tr><td>' + this.firstName  +
                    '</td><td>'+ this.lastName + '</td><td> ' + this.email + '</td><td>' +
                    this.gender + '</td><td>' + this.address + '</td><td>' +
                    '<input type="button" value="EDIT" id="edit" onclick="editUser(' + this.userId +
                    ');">/<input type="button" value="DELETE" onclick="deleteUser(' + this.userId + ');">' +
                    '</td></tr>');
                    });
            }
       });//end of ajax call
    });
//}