
    function displayShow() {
        document.getElementById("visable").style.display = "block";
        document.getElementById("visable2").style.display = "none";
    }
    function displayNone() {
       
        document.getElementById("visable").style.display = "none";
        document.getElementById("visable2").style.display = "block";
    }
    function displayNone2(e) {
        /******************* I have Add Some PHP HERE David ********************/

        // Submitted to DB Then Display Else Hide and reload
        if(e){
            document.getElementById("visabletext").style.display = "none";
            document.getElementById("visable2").style.display = "block";
        }
        else{

            document.getElementById("visabletext").style.display = "block";
            document.getElementById("visable2").style.display = "none";
 location.reload();
        }

    }
    function displayNone3() {
            document.getElementById("visabletext").style.display = "block";
            document.getElementById("visable2").style.display = "no";


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
            location.href = "#";
            document.getElementById("visabletextFB").style.display = "none";
            document.getElementById("visable2FB").style.display = "block";
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