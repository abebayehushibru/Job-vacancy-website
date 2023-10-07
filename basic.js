var x = 0;
        function viewed() {
           
        var menubtn = document.getElementById("menuBtn");
            if (x == 0) {
                menubtn.classList.remove("menuBtn");
                menubtn.classList.add("change");
                document.querySelector(".menuview").style.visibility = "visible";
                document.querySelector(".menu_container").style.transform = "translate(0%)";
                x = 1;
            } else {
                menubtn.classList.remove("change");
                menubtn.classList.add("menuBtn");
                document.querySelector(".menuview").style.visibility = "hidden";
                document.querySelector(".menu_container").style.transform = "translate(-100%)";
                x = 0;
            }

        }
