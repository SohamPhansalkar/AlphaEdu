console.log("CS js activated!");

function calculateresistance() {
    var b1 = document.getElementById("b1").value;
    var b2 = document.getElementById("b2").value;
    var b3 = document.getElementById("b3").value;
    var b4 = document.getElementById("b4").value;
    //console.log(b1);
    //console.log(b2);
    //console.log(b3);
    //console.log(b4);

    var a = b1.toString()+b2.toString();
    var b = parseInt(a) * b3;
    console.log(b);

    var span = document.getElementById("calc1");
    span.textContent = "Check values of color in the table";

    var span = document.getElementById("calc2");
    span.textContent = "Step 1: Taking the values of the 1st & 2 band together :"+a;

    var span = document.getElementById("calc3");
    span.textContent = "Step 2: multiplying the value with the value of the 3rd band: "+b+" ±"+b4+"% Ω";

    var span = document.getElementById("finalans");
    span.textContent = a.toString()+" * "+b3.toString()+" = "+b+" ±"+b4+"% Ω";

}

// Light wala khilona 

function gates() {
    console.log("GATES");
    var gateName = document.getElementById("Gin").value;
    var a = document.getElementById("Ain").value;
    var b = document.getElementById("Bin").value;

    if(gateName == "AND"){
        andgate(a,b);
    }else if(gateName == "OR"){
        orgate(a,b);
    }else if(gateName == "NOR"){
        norgate(a,b);
    }else if(gateName == "NAND"){
        nandgate(a,b);
    }else if(gateName == "XOR"){
        xorgate(a,b);
    }else if(gateName == "XNOR"){
        xnorgate(a,b);
    }

}

function andgate(a,b) {
    document.getElementById("gatename").innerHTML = "AND Gate";
    document.getElementById("gateicon").src = "https://www.homemade-circuits.com/wp-content/uploads/2018/02/AND-gate.png";
    document.getElementById("gateicon").style.height = "40%";
    document.getElementById("gateicon").style.width = "75%";

    if(a == 1 && b == 1){
        document.getElementById("ansbulb").src = "https://img.icons8.com/color/60/null/reflector-bulb.png";
    }else{
        document.getElementById("ansbulb").src = "https://img.icons8.com/ios/60/null/mirrored-reflector-bulb.png";
    }

    document.getElementById("op1").innerHTML = "HIGH";
    document.getElementById("op2").innerHTML = "LOW";
    document.getElementById("op3").innerHTML = "LOW";
    document.getElementById("op4").innerHTML = "LOW";
}

function orgate(a,b) {
    document.getElementById("gatename").innerHTML = "OR Gate";
    document.getElementById("gateicon").src = "https://www.electronicshub.org/wp-content/uploads/2015/08/2.OR-Symbol.jpg";
    document.getElementById("gateicon").style.height = "40%";
    document.getElementById("gateicon").style.width = "75%";

    if(a == 1 || b == 1){
        document.getElementById("ansbulb").src = "https://img.icons8.com/color/60/null/reflector-bulb.png";
    }else{
        document.getElementById("ansbulb").src = "https://img.icons8.com/ios/60/null/mirrored-reflector-bulb.png";
    }

    document.getElementById("op1").innerHTML = "HIGH";
    document.getElementById("op2").innerHTML = "HIGH";
    document.getElementById("op3").innerHTML = "HIGH";
    document.getElementById("op4").innerHTML = "LOW";
}

function norgate(a,b) {
    document.getElementById("gatename").innerHTML = "NOR Gate";
    document.getElementById("gateicon").src = "https://upload.wikimedia.org/wikipedia/commons/thumb/c/c6/NOR_ANSI_Labelled.svg/1200px-NOR_ANSI_Labelled.svg.png";
    document.getElementById("gateicon").style.height = "40%";
    document.getElementById("gateicon").style.width = "75%";

    if(a == 0 && b == 0){
        document.getElementById("ansbulb").src = "https://img.icons8.com/color/60/null/reflector-bulb.png";
    }else{
        document.getElementById("ansbulb").src = "https://img.icons8.com/ios/60/null/mirrored-reflector-bulb.png";
    }

    document.getElementById("op1").innerHTML = "LOW";
    document.getElementById("op2").innerHTML = "LOW";
    document.getElementById("op3").innerHTML = "LOW";
    document.getElementById("op4").innerHTML = "HIGH";
}

function nandgate(a,b) {
    document.getElementById("gatename").innerHTML = "NAND Gate";
    document.getElementById("gateicon").src = "https://upload.wikimedia.org/wikipedia/commons/thumb/5/58/Nand-gate-en.svg/1200px-Nand-gate-en.svg.png";
    document.getElementById("gateicon").style.height = "40%";
    document.getElementById("gateicon").style.width = "75%";

    if(a == 0 || b == 0){
        document.getElementById("ansbulb").src = "https://img.icons8.com/color/60/null/reflector-bulb.png";
    }else{
        document.getElementById("ansbulb").src = "https://img.icons8.com/ios/60/null/mirrored-reflector-bulb.png";
    }

    document.getElementById("op1").innerHTML = "LOW";
    document.getElementById("op2").innerHTML = "HIGH";
    document.getElementById("op3").innerHTML = "HIGH";
    document.getElementById("op4").innerHTML = "HIGH";
}

function xorgate(a,b) {
    document.getElementById("gatename").innerHTML = "XOR Gate";
    document.getElementById("gateicon").src = "https://upload.wikimedia.org/wikipedia/commons/c/c9/Logic-gate-xor-us.png";
    document.getElementById("gateicon").style.height = "40%";
    document.getElementById("gateicon").style.width = "75%";

    if(a == 0 && b == 0){
        document.getElementById("ansbulb").src = "https://img.icons8.com/color/60/null/reflector-bulb.png";
    }else if(a == 1 && b ==1){
        document.getElementById("ansbulb").src = "https://img.icons8.com/color/60/null/reflector-bulb.png";
    }else{
        document.getElementById("ansbulb").src = "https://img.icons8.com/ios/60/null/mirrored-reflector-bulb.png";
    }


    document.getElementById("op1").innerHTML = "HIGH";
    document.getElementById("op2").innerHTML = "LOW";
    document.getElementById("op3").innerHTML = "LOW";
    document.getElementById("op4").innerHTML = "HIGH";
}

function xnorgate(a,b) {
    document.getElementById("gatename").innerHTML = "XNOR Gate";
    document.getElementById("gateicon").src = "https://upload.wikimedia.org/wikipedia/commons/thumb/3/35/Xnor-gate-en.svg/1280px-Xnor-gate-en.svg.png";
    document.getElementById("gateicon").style.height = "40%";
    document.getElementById("gateicon").style.width = "75%";

    if(a == 0 && b == 0){
        document.getElementById("ansbulb").src = "https://img.icons8.com/ios/60/null/mirrored-reflector-bulb.png";
    }else if(a == 1 && b ==1){
        document.getElementById("ansbulb").src = "https://img.icons8.com/ios/60/null/mirrored-reflector-bulb.png";
    }else{
        document.getElementById("ansbulb").src = "https://img.icons8.com/color/60/null/reflector-bulb.png";        
    }

    document.getElementById("op1").innerHTML = "HIGH";
    document.getElementById("op2").innerHTML = "LOW";
    document.getElementById("op3").innerHTML = "LOW";
    document.getElementById("op4").innerHTML = "HIGH";
}

