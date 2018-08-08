/**
 * Created by Jānis Mozais on 11.11.2017..
 */
function addZero( value ) {
    if( value < 10 ){
        return '0' + value;
    }
    return value;
}
function checkCounter() {
    var data = {
        'action': 'check_countdown'
    };
    jQuery.ajax({
        url: ajaxurl,
        data: data,
        type: 'GET',
        success: function (response) {
            var date = null;
            if( response != '' ){

                var countDownDate = new Date(response.replace(/\s+/g, 'T').concat('.000+03:00')).getTime();

                // Update the count down every 1 second
                var x = setInterval(function() {

                    // Get todays date and time
                    var now = new Date().getTime();

                    // Find the distance between now an the count down date
                    var distance = countDownDate - now;

                    // Time calculations for days, hours, minutes and seconds
                    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

                    if(  jQuery( '.counter-wrap .days .counter-number' ).text() != days && days >= 0 ){
                        days = addZero( days );
                        jQuery( '.counter-wrap .days .counter-number' ).text( days );
                    }else{
                        if( days >= 0 ){
                            days = addZero( days );
                            jQuery( '.counter-wrap .days .counter-number' ).text( days );
                        }else{
                            jQuery( '.counter-wrap .days .counter-number' ).text( '00' );
                        }
                    }


                    if( jQuery( '.counter-wrap .hours .counter-number' ).text() != hours && hours >= 0 ){
                        jQuery( '.counter-wrap .hours .counter-number' ).hide();
                        hours = addZero( hours );
                        jQuery( '.counter-wrap .hours .counter-number' ).text( hours );
                        jQuery( '.counter-wrap .hours .counter-number' ).fadeIn( "slow");
                    }else{
                        if( hours >= 0 ){
                            hours = addZero( hours );
                            jQuery( '.counter-wrap .hours .counter-number' ).text( hours );
                        }else{
                            jQuery( '.counter-wrap .hours .counter-number' ).text( '00' );
                        }
                    }


                    if( jQuery( '.counter-wrap .minutes .counter-number' ).text() != minutes && minutes >= 0 ){
                        jQuery( '.counter-wrap .minutes .counter-number' ).hide();
                        minutes = addZero( minutes );
                        jQuery( '.counter-wrap .minutes .counter-number' ).text( minutes );
                        jQuery( '.counter-wrap .minutes .counter-number' ).fadeIn( "slow");
                    }else{
                        if( minutes >= 0 ){
                            minutes = addZero( minutes );
                            jQuery( '.counter-wrap .minutes .counter-number' ).text( minutes );
                        }else{
                            jQuery( '.counter-wrap .minutes .counter-number' ).text( '00' );
                        }
                    }

                    if( jQuery('.counter-wrap .seconds .counter-number').text() != seconds && seconds >= 0 ){
                        jQuery( '.counter-wrap .seconds .counter-number' ).hide();
                        seconds = addZero( seconds );
                        jQuery( '.counter-wrap .seconds .counter-number' ).text( seconds );
                        jQuery( '.counter-wrap .seconds .counter-number' ).fadeIn( "slow");
                    }else{
                        if( minutes >= 0 ){
                            seconds = addZero( seconds );
                            jQuery( '.counter-wrap .seconds .counter-number' ).text( seconds );
                        }else{
                            jQuery( '.counter-wrap .seconds .counter-number' ).text( '0' );
                        }
                    }



                    // If the count down is finished, write some text
                    if (distance < 0) {
                        clearInterval(x);
                        //
                    }
                }, 1000);
                setTimeout( function () {
                    jQuery( '.counter-text' ).css( 'display', 'block' );
                }, 1000 );

            }
        }
    });
}

$( document ).ready( function(){
    checkCounter();
});