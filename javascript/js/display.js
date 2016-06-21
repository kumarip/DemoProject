var rowIndx = "";
function validateForm() {
    var flag = 0;
    var fstname = document.forms.register.firstname.value;
    var lstname = document.forms.register.lastname.value;
    var email_id = document.forms.register.email.value;
    var reg = /^([A-Za-z0-9_\-\.]){1,}\@([A-Za-z0-9_\-\.]){1,}\.([A-Za-z]{2,4})$/;
    var male  =  document.getElementById("male").checked;
    var female =  document.getElementById("female").checked;
    var ad = document.forms.register.add.value;
    if(fstname === null || fstname === "") {
        document.getElementById('fname').innerHTML = " *Name Required";
        flag = 1;
    }      
    if(lstname === null || lstname === "") {
        document.getElementById('lname').innerHTML = " *Required";
        flag = 1;
    } 
    if(reg.test(email_id) === false || email_id === null || email_id === "") {
       document.getElementById('eml').innerHTML = " *Required valid email id";
       flag = 1;
    }
    if(male === false && female === false) {
         //alert ("hello");
        document.getElementById('female').innerHTML = " *Select Gender";
        flag = 1;
    }
    if(ad === null || ad === ""){
        document.getElementById('addr').innerHTML = " *Address Required";
        flag  = 1;
    }
    if(flag == 1) {
        return false;
    }
    else {
        return true;
    }
}      
function addrow() {
    if(validateForm() === false) {
        return;
    }
    else {
    var table = document.getElementById("mytable");
    var fname = document.getElementById("firstname").value;
    var lname = document.getElementById('lastname').value;
    var eml = document.getElementById('email').value;
    var gen_value;
    var ad = document.getElementById('add').value;
    var rowCount = table.rows.lenght;
    var row = table.insertRow(rowCount);
    var cell1 = row.insertCell(0);
    var cell2 = row.insertCell(1);
    var cell3 = row.insertCell(2);
    var cell4 = row.insertCell(3);
    var cell5 = row.insertCell(4);
    var cell6 = row.insertCell(5);
    cell1.innerHTML = fname;
    cell2.innerHTML = lname;
    cell3.innerHTML = eml;
    if(document.getElementById('male').checked) {
        gen_value = document.getElementById('male').value;
    }
    if(document.getElementById('female').checked) {
        gen_value = document.getElementById('female').value;
    }
    cell4.innerHTML = gen_value;
    cell5.innerHTML = ad;
    cell6.innerHTML = '<input type="button" value="EDIT" id="edit" onclick="editRow(this);">/<input type="button" value="DELETE" onclick="deleteRow(this);">';     
    register.reset();
  }
}

function editRow(r) {
    var i = r.parentNode.parentNode.rowIndex;
    var table = document.getElementById("mytable");
    var row = table.rows[i];
    rowIndx = i;
    document.getElementById('firstname').value= row.cells[0].innerHTML;
    document.getElementById('lastname').value= row.cells[1].innerHTML;
    if(row.cells[3].innerHTML === "male") {
      document.getElementById('male').checked = true;
    } 
    else {
      document.getElementById('female').checked = true;
    }
    document.getElementById('email').value = row.cells[2].innerHTML;
    document.getElementById('add').value = row.cells[4].innerHTML;
}

function update(){
    var table = document.getElementById("mytable");
    var row = table.rows[rowIndx];
    var fname = document.getElementById("firstname").value;
    var lname = document.getElementById('lastname').value;
    var eml = document.getElementById('email').value;
    var gen;
    var ad = document.getElementById('add').value;
    if(document.getElementById('male').checked){
        gen = document.getElementById('male').value;
    }
    else {
        gen = document.getElementById('female').value;
    }    
    row.cells[0].innerHTML = fname;
    row.cells[1].innerHTML = lname;
    row.cells[2].innerHTML = eml;
    row.cells[3].innerHTML = gen ;
    row.cells[4].innerHTML = ad;
    rowIndx = "";
    register.reset(); 
}
  
function deleteRow(row) {
    var i = row.parentNode.parentNode.rowIndex;
    document.getElementById("mytable").deleteRow(i);
}