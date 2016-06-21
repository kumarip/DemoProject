 
var xmlhttp = new XMLHttpRequest();
var url = "UserData.json";

xmlhttp.onreadystatechange = function() {
    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        var myArr = JSON.parse(xmlhttp.responseText);
        myFunction(myArr);
    }
};
xmlhttp.open("GET", url, true);
xmlhttp.send();


function myFunction(arr) {
    var i;
    var out = "";
    for(i = 0; i < arr.length; i++) {
        out += '<tr><td>' + arr[i].fname  +'</td><td>'+ arr[i].lname + '</td><td> ' + arr[i].email + '</td><td>' +
        arr[i].gender + '</td><td>' + arr[i].address + '</td><td>' + '<input type="button" value="EDIT" id="edit" onclick="editRow(this);">/<input type="button" value="DELETE" onclick="deleteRow(this);">' +
        '</td></tr>';
        
    }
    out += "";
    document.getElementById("mytable").innerHTML += out;
}
