// var username = document.getElementById("name").value;
// var password = document.getElementById("Password").value;
var logbtn = document.getElementById("logbtn");

var session_password = document.getElementById("session_username").value;
var session_name = document.getElementById("session_password").value;
document.getElementById("updateinfobtn").disabled = true;


function sleep(milliseconds) {
    let timeStart = new Date().getTime();
    while (true) {
        let elapsedTime = new Date().getTime() - timeStart;
        if (elapsedTime > milliseconds) {
            break;
        }
    }
}

//console.log(document.getElementById("name").value.length);

function testbtn() {
    if(document.getElementById("name").value.length == 0){
        document.getElementById("logbtn").disabled = true;
        document.getElementById("logbtn").style.bgcolor = "grey";
        alert("Please fill in the details"); 
        //document.getElementById("logbtn").disabled = false;
        setTimeout(() => {
            document.getElementById("logbtn").disabled = false;
            console.log(3000);
        }, 3000);
    }else if(document.getElementById("Password").value.length == 0) {
        document.getElementById("logbtn").disabled = true;
        document.getElementById("logbtn").style.bgcolor = "grey";
        alert("Please fill in the details"); 
        //document.getElementById("logbtn").disabled = false;
        setTimeout(() => {
            document.getElementById("logbtn").disabled = false;
            console.log(3000);
        }, 3000);
    }else{
        document.getElementById("logbtn").disabled = false;
    }
}

//var preview_pdf = document.getElementById("preview-pdf");

function mouseOver(){
    var x = document.getElementById("exampleInputPassword1");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}

function mouseOver2(){
    var x = document.getElementById("exampleInputPassword2");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}

function ask_pass() {
    console.log(document.getElementById("session_password").value);
    var input_password = window.prompt("enter your password");
    if (String(document.getElementById("session_password").value) == String(input_password)) {
        
    } else {
        var w_input_password = window.prompt("Your password was incorrect re-enter.");
        if (String(document.getElementById("session_password").value) == String(input_password)) {
            
        } else {
            alert("incorrect password redirecting to home page");
            window.location.href = "home.php";
        }
    }
}

function settingsbtn() {
    if (document.getElementById("exampleInputPassword2").value == document.getElementById("exampleInputPassword1").value) {
        document.getElementById("updateinfobtn").disabled = false;
    } else {
        document.getElementById("emailHelp2").style.display = "block";
        document.getElementById("emailHelp1").style.display = "block";
    }
}

//function submitupdateinfo(){
    //alert("submitupdateinfo()");
//}







