
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


function dates (validation){

    if(validation == null){
        console.log("vacio")
    }
}