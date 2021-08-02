/*
let info ={
    email : document.getElementsByName("user").value,
    password : document.getElementsByName("password").value
}
    let validate = (info!=null) ? console.log("vacio"): console.log(info.email+info.password)

let validation = document.getElementById("register")

$.ajax({
    data: param,
    url: "archivo.php",
    method: "post",
    success: function(data) {
        /*La variable data contiene la respuesta de tu script PHP*/
    }
});

*/

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

console.log("ok");

function loadXMLDoc() {
    const xmlhttp = new XMLHttpRequest();

    xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == XMLHttpRequest.DONE) {   // XMLHttpRequest.DONE == 4
            if (xmlhttp.status == 200) {
                document.getElementById("myDiv").innerHTML = xmlhttp.responseText;
            }
            else if (xmlhttp.status == 400) {
                alert('There was an error 400');
            }
            else {
                alert('something else other than 200 was returned');
            }
        }
    };

    xmlhttp.open("GET", "file.txt", true);
    xmlhttp.send();
}