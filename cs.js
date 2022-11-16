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

