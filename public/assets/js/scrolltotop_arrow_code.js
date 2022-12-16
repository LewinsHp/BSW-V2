/*JS file of the Responsive JavaScript ScrollToTop Arrow by Fabian Lins*/

    /*Change this variable to adjust the start position of the fade in.*/
    scrolltotop_fadein_start_position=200;

    /*True means you have a circle, false means you have a rectangle with round corners.*/
    scrolltotop_circle_mode=true;

    function scrolltotop_fadein_fadeout(){
        if (window.pageYOffset >= scrolltotop_fadein_start_position) {
            document.getElementById("scrolltotop_parent").classList.add("scrolltotop_fadein");
            document.getElementById("scrolltotop_parent").classList.remove("scrolltotop_fadeout");
        }
        else {
            document.getElementById("scrolltotop_parent").classList.add("scrolltotop_fadeout");
            document.getElementById("scrolltotop_parent").classList.remove("scrolltotop_fadein");
        }
    }

    function scrolltotop_function(){
        window.scrollTo({
            top: 0,
            behavior: "smooth"
        });
        document.activeElement.blur(); 
    }

    /*Make the rectangle a circle or give it round corners.*/
    if(scrolltotop_circle_mode==true){
        document.getElementById("scrolltotop_parent").classList.add("scrolltotop_circle");
    }
    else{
        document.getElementById("scrolltotop_parent").classList.add("scrolltotop_round_corners");
    }

    setTimeout(function() {
        scrolltotop_fadein_fadeout();
    }, 1);

    /*Scrolls to the top of the page.*/
    document.getElementById("scrolltotop_parent").addEventListener("click",function(){
        scrolltotop_function();
    });

    document.getElementById("scrolltotop_parent").addEventListener("keydown", e => {
		var key_pressed = e.keykey_pressed || e.which;
		/* Enter Key */
		if (key_pressed == "13") {
			scrolltotop_function();
		}
	});

    /*Fades the scrolltotop box in and out while scrolling.*/
    document.addEventListener("scroll",function() {
        scrolltotop_fadein_fadeout();
    });

	/* Keyboard accessibility */
    document.addEventListener("keydown", e => {
		var key_pressed = e.keykey_pressed || e.which;
		/* Esc Key */
		if (key_pressed == "27") {
			if(document.activeElement===document.getElementById("scrolltotop_arrow")) {
			    document.activeElement.blur();	
		    }
        }
    });