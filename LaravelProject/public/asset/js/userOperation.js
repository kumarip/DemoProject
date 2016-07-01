/**
 *  Register New User
 *  @param null
 *  @return null
 **/
function registerNewUser() {
    //alert('hi');
    $(location).attr("href", "/login/new");
}
/**
 *  Add New User Details to the layout User
 *  @param null
 *  @return null
 **/
function addNewUserDetail() {
    $(location).attr("href", "/login/new/add");
}
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
function updateUserDetail() {
    //alert();
    $(location).attr("href", "/login/update");
}
/**
 * Logout User
 * @param null
 * @return null
 **/
function logout() {
    $(location).attr("href", "/logout");
}
