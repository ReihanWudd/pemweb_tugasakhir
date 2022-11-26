function toggleviewpass(){
    var x = document.getElementById('password');
    if(x.type === "password" ){
        x.type = "text" ;
    } else {
        x.type = "password";
    }
}

function toggleviewvalid(){
    var x = document.getElementById('validation');
    if(x.type === "password" ){
        x.type = "text" ;
    } else {
        x.type = "password";
    }
}