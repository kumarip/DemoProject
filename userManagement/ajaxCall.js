/**
 * Making Ajax Call to the php file
 *
 */
$(document).ready(function() {
    $.ajax({
        url: 'php/addUser.php',
        type: 'post',
        data: {
            'action': 'follow',
            'userid': '11239528343'
        },
        success: function(data, status) {
            if(data == "ok") {
            $('#followbtncontainer').html('<p><em>Following!</em></p>');
            var numfollowers = parseInt($('#followercnt').html()) + 1;
            $('#followercnt').html(numfollowers);
            }
        }
    });

}); // end ajax call
    
    
    