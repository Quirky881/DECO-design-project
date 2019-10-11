function changeImage(){

    element=document.getElementById('manfig')
    if (element.src.match("select"))
    {
        element.src="images/select.jpg";
    }
    else
    {
        element.src="images/aboriginals3.jpg";
    } 
}

$(document).ready(function() {

    $("button").click(function() {

        var startingPosition = $('#man').position();
        // probably based upon a stick element that is position absolute
        var finalPosition = $(this).position();
        // probably need to tweak top and left values based upon stick dimensions

        var finalTop = finalPosition.top; // tweak
        var finalLeft = finalPosition.left; // tweak

        // animate stick from starting position to final position

        /*

            using: https://api.jquery.com/animate/

            $('#stick).animate({
                top: finalTop,
                left: finalLeft,
            });

        */

        console.log('button clicked...', $(this).position());

        console.log('man position', $('#man').position());
        

    });

});