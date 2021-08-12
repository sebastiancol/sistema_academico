
let info ={
    email : document.getElementsByName("user").value,
    password : document.getElementsByName("password").value
}
    //const validate = ()=> {(info==null) ? console.log("vacio") : console.log(info)}
    const validate = (info==null) ? console.log("vacio") : console.log(info);

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

