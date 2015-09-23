$(document).ready(function() {

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
               //console.log(data);

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