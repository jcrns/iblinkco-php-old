    //instagram functions
    function displayShow() {
        document.getElementById("visable").style.display = "block";
        document.getElementById("visable2").style.display = "none";
    }
    function displayNone() {
        document.getElementById("visable").style.display = "none";
        document.getElementById("visable2").style.display = "block";
    }
    function displayNone2() {
        location.href = "#";
        document.getElementById("visabletext").style.display = "none";
        document.getElementById("visable2").style.display = "block";
    }

    //facebook functions
    function FBdisplayShow() {
        document.getElementById("visableFB").style.display = "block";
        document.getElementById("visable2FB").style.display = "none";
    }
    function FBdisplayNone() {
        document.getElementById("visableFB").style.display = "none";
        document.getElementById("visable2FB").style.display = "block";
    }
    function FBdisplayNone2() {
        if (window.onload) {
            location.href = "#";
            document.getElementById("visabletextFB").style.display = "none";
            document.getElementById("visable2FB").style.display = "block";
        }
    }

    //Dashboard Pages
    function Adisplay1(){
        document.getElementById("A-visable").style.display = "none";
        document.getElementById("A-visable2").style.display = "block";
    }
    function Adisplay2(){
        document.getElementById("A-visable").style.display = "block";
        document.getElementById("A-visable2").style.display = "none";
    }