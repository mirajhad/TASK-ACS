function startTimer(duration, display) {
    var timer = duration, minutes, seconds;
    //var timeout = setTimeout("location.reload(true);",600000);
    setInterval(function () {
        minutes = parseInt(timer / 60, 10);
        seconds = parseInt(timer % 60, 10);

        minutes = minutes < 10 ? "0" + minutes : minutes;
        seconds = seconds < 10 ? "0" + seconds : seconds;

        display.textContent = minutes + ":" + seconds;

        if (--timer < 0) {
            timer = setTimeout(function() { alert("Time Up!! Click");
            
        }, time);
        window.location.reload(true);
        
            timer = duration
        }
    }, 1000);
}

window.onload = function () {
    var fiveMinutes = 60 * 3,
        display = document.querySelector('#time');
    startTimer(fiveMinutes, display);
};



// captch code

function cap() {

    var alpha=['A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V'
               ,'W','X','Y','Z','1','2','3','4','5','6','7','8','9','0','a','b','c','d','e','f','g','h','i',
               'j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z'];

    var a=alpha[Math.floor(Math.random()*62)];
    var b=alpha[Math.floor(Math.random()*62)];
    var c=alpha[Math.floor(Math.random()*62)];
    var d=alpha[Math.floor(Math.random()*62)];
    var e=alpha[Math.floor(Math.random()*62)];
    var f=alpha[Math.floor(Math.random()*62)];

    var sum=a + b + c + d + e + f;

    document.getElementById("capt").value=sum;
}

     function validcap() {
    var string1 = document.getElementById('capt').value;
    var string2 = document.getElementById('textinput').value;
    if (string1 == string2){
       // alert("Form is validated Succesfully");
        // document.getElementById('btn').style.display = "block";
       // return true;
       document.getElementById("demo").innerHTML = "Form is validated Succesfully";
      // return true;
    }
    else {
        //alert("Please enter a valid captcha");
        //return false;
    }
}