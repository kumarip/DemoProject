/**
 * Redirecting edit function to routes.php
 * @param {string} $userId
 * @returns null
 **/ 
function editUserDetail($userId) {
    //alert($userId);
    $(location).attr("href", "/login/edit/" + $userId);
    
}
/**
 * Redirecting delete function to routes.php
 * @param {string} $userId
 * @returns null
 **/
function deleteUserDetail($userId) {
    //alert($userId);
    $(location).attr("href", "/login/delete/" + $userId);
}
/**
 * Redirecting to update function routes.php
 * @param {string} $userId
 * @returns null
 **/
/*function UpdateUserDetail($userId) {
    //alert($userId);
    $(location).attr("href", "/login/update/" + $userId);
}
*/