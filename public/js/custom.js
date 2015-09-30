$(document).ready(function() {


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

});