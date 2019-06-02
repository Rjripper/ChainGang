import * as $ from 'jquery';
const Swal = require('sweetalert2');

$(".remove-user-icon").click(function() {
  let user_id = $(".remove-user-icon").attr("data-id");

  Swal.fire({
      title: 'Weet je het zeker?',
      text: "Je kan deze optie niet terug zetten.",
      type: 'warning',
      showCancelButton: true,
      cancelButtonText: 'Annuleren',
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Ja, verwijder ('+ user_id  +')!'
    }).then((result) => {
      if (result.value) {
        Swal.fire(
          'Verwijderd!',
          'Gebruiker is verwijderd!',
          'success'
        );
      }
  });
})