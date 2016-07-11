function home() {
    $(location).attr("href", "/login/home");
}
/**
 *  Register New User
 *  @param null
 *  @return null
 **/
function registerNewUser() {
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
 * Search User
 * @param null
 * @return null
 **/
function searchUser() {
    $(location).attr("href", "/login/user/search");
}
/**
 * Redirecting edit function of current user to routes.php
 * @param {string} $userId
 * @returns null
 **/ 
function editCurrentUserDetail($userId) {
    //alert($userId);
    $(location).attr("href", "/login/currentUser/edit/" + $userId);
    
}
/**
 * Redirecting edit function of all User to routes.php
 * @param {string} $userId
 * @return null
 **/
function editUserDetail($userId) {
    $(location).attr("href", "/login/edit/" + $userId);
}
/**
 * Redirecting delete function of current user to routes.php
 * @param {string} $userId
 * @returns null
 **/
function deleteCurrentUserDetail($userId) {
    //alert($userId);
    $(location).attr("href", "/login/currentUser/delete/" + $userId);
}
/**
 * Redirecting to delete function of all user to routes.php
 * @param {string} $userId
 * @return null
 **/
function deleteUserDetail($userId) {
    $(location).attr("href", "/login/delete/" + $userId);
}
/**
 * Redirecting to update function routes.php
 * @param {string} $userId
 * @returns null
 **/
function updateUserDetail() {
    $(location).attr("href", "/login/update");
}
/**
 * Manage All User
 * @param null
 * @return null
 **/
function allUser() {
    $(location).attr("href", "/login/manageAllUser");
}
/**
 * Upload pic
 *
 *
 **/
function uploadPic() {
    //alert('');
    $(location).attr("href","/upload");
}
/**
 * Search User
 * @param null
 * @return null
 **/
function searchUser() {
    $(location).attr("href", "/login/user/search");
}
/**
 * Logout User
 * @param null
 * @return null
 **/
function logout() {
    $(location).attr("href", "/logout");
}
