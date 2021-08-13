
let info ={
    email : document.getElementsByName("user").value,
    password : document.getElementsByName("password").value
}

function validateLogin (info){

    //const validate = ()=> {(info==null) ? console.log("vacio") : console.log(info)}
    const validate = (info==null) ? console.log("vacio") : console.log(info);
}

let formDate ={
    document: document.getElementsByName("doc").value,
    first_name: document.getElementsByName("f_name").value,
    last_name: document.getElementsByName("l_name").value,
    address: document.getElementsByName("address").value,
    number: document.getElementsByName("number").value,
    birthday: document.getElementsByName("birthday").value
}

function validateUnregister(form){

    const new_dates = (form==null) ? console.log("vacio") : console.log(info);
}

function birthday(form.birthday()) {
    let today = new Date();
    let birthday = new Date(fecha);
    let age = today.getFullYear() - birthday.getFullYear();
    let month = today.getMonth() - birthday.getMonth();

    if (month < 0 || (month === 0 && today.getDate() < birthday.getDate())) {  age--;    }
        return age;
}

function gender() {

}
 //let validation = document.getElementById("register")

/*


function dates (validation){

    if(validation == null){
        console.log("vacio")
    }
}

const conection = new XMLHttpRequest();
conection.onload=function(){
    document.getElementById().value
}*/

//console.log("ok");

function request() {
    const xmlhttp = new XMLHttpRequest();
    xmlhttp.open("POST", "file.txt", true);
    xmlhttp.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
    xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == XMLHttpRequest.DONE) {   // XMLHttpRequest.DONE == 4
            if (xmlhttp.status == 200) {
                //document.getElementById("myDiv").innerHTML = xmlhttp.responseText;
                console.log("complete")

            }
            else if (xmlhttp.status == 400) {
                alert('There was an error 400');
            }
            else {
                alert('something else other than 200 was returned');
            }
        }
    };
    xmlhttp.send();
}

//request();

