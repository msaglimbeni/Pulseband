$(document).ready(function() {

    //UPCOMING SHOWS

    $('.left-contain > .left-arrow').click(function() {
        var showStrip = $('.shows-strip'),
            increment = showStrip.data('increment');

        increment = parseInt(increment) + parseInt(showStrip.data('position'));
        increment = increment + 'px';

        if(parseInt(showStrip.css('left')) + parseInt(increment) > 0){
            showStrip.css('left', 0);
        }else{
            showStrip.css('left', increment);
        }

        showStrip.data('position', showStrip.css('left'));

    });

    $('.right-contain > .right-arrow').click(function() {
        var showStrip = $('.shows-strip'),
            increment = '-' + showStrip.data('increment');

        increment = parseInt(increment) + parseInt(showStrip.data('position'));
        increment = increment + 'px';

        containers = $('.show');

        totalWidth = 0;
        $.each(containers, function(index,show) {

            totalWidth += parseInt($(show).css('width'));
        });

        totalWidth -= parseInt($('.shows').css('width'));

        totalWidth = '-' + totalWidth;
        console.log(totalWidth);


        if(parseInt(showStrip.css('left')) + parseInt(increment) < totalWidth){
            showStrip.css('left', totalWidth+'px');
            console.log('first');
        }else{
            showStrip.css('left', increment);
        }

        showStrip.data('position', showStrip.css('left'));
    });


    //GALLERY

    $('.bios-gallery').flexslider({
        directionNav:true,
        controlNav:true,
        slideshow:true,
        animation:"slide",
        pauseOnHover: true
    });

    //YOUTUBE

    $.ajax( {
        method: "GET",
        url: "https://www.googleapis.com/youtube/v3/search?order=date&part=snippet&type=video&maxResults=2&channelId=UC1voaUJaImOZD51PF0yl6VA&key=AIzaSyAOBmFN9xrChpjW8yNkTPOGOYHJpTKhO04",
        dataType:'json'

    })
        .done(function(data, status){

            $.each(data.items, function(index, value) {

                $html = '<div class="video">';
                $html += "<iframe src='https://www.youtube.com/embed/" + value.id.videoId + "' frameborder=0 allowfullscreen></iframe>";
                $html += '</div>';

                $('.videos').append($html);
            } );

        });

    //SOUNDCLOUD

    SC.initialize({
        client_id: "45d3103837ca07bf2c216ad5eaab651c"
    });

    SC.get('/users/pulseband-2/tracks?limit=4', function(response, error) {
        $.each(response, function(index, soundcloud){
            SC.oEmbed(soundcloud.uri, function(response) {
                $('.song-player').append('<div class="song">'+response.html+'</div>');
            });
        });
    });

    //FORM

    $('.contact-form').submit(function(event) {
      event.preventDefault();

      var $form = $( this ),
          email = $form.find( "input[name='email']" ).val(),
          phone = $form.find( "input[name='phone']" ).val(),
          message = $form.find( "input[name='message']" ).val(),
          url = $form.attr( "action"),
          alertBox = $('.alerts'),
          alerts = alertBox.children('ul');

      $.ajax({
         method: "POST",
         url: url,
         data: $form.serialize(),
         dataType: 'json',
         statusCode: {
            //laravel
            422: function(data) {
               alertBox.addClass('alert alert-danger');
               alerts.empty();
               alertBox.children('p').remove();
               $.each(data.responseJSON, function(index, value) {
                  alerts.append('<li>' + value + '</li>');
               });
            }
         }
      })
       .done(function(data, textStatus) {
             alertBox.removeClass();
             alerts.empty();
             alertBox.addClass('alerts alert alert-success');
             alertBox.append('<p>' + data.message + '</p>');
      });

    });


    //SMOOTHSCROLLER

    $('.nav-anchor').each(function(index, div){
       $(div).click(function() {

           $('body').animate({
               scrollTop: $($(div).data('id')).offset().top,
               easing: "swing"
           }, 1000) ;

       });
    });


    //SCROLL ACTIVE
    //stackoverflow

    // Cache selectors
    var topMenu = $("#navbar"),
        topMenuHeight = topMenu.outerHeight()+15,
    // All list items
        menuItems = topMenu.find("a"),
    // Anchors corresponding to menu items
        scrollItems = menuItems.map(function(){
            var item = $($(this).data("id"));
            if (item.length) { return item; }
        });

    // Bind to scroll
    $(window).scroll(function(){
        // Get container scroll position
        var fromTop = $(this).scrollTop()+topMenuHeight;

        // Get id of current scroll item
        var cur = scrollItems.map(function(){
            if ($(this).offset().top < fromTop)
                return this;
        });
        // Get the id of the current element
        cur = cur[cur.length-1];
        var id = cur && cur.length ? cur[0].id : "";
        // Set/remove active class
        menuItems
            .parent().removeClass("active")
            .end().filter("[data-id=#"+id+"]").parent().addClass("active");
    });
});