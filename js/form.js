document.getElementById('contact-form').addEventListener('submit', function(event) {
    event.preventDefault();

    var form = this; // store reference to form
    var formData = new FormData(form);

    fetch('send_email.php', {
        method: 'POST',
        body: formData
    }).then(function(response) {
        if (response.ok) {
            swal("Good job!", "Your message has been sent successfully!", "success");
            // clear form fields
            for (var pair of formData.entries()) {
                if (form[pair[0]]) {
                    form[pair[0]].value = '';
                }
            }
        } else {
            swal("Oops!", "Something went wrong. Please try again.", "error");
        }
    }).catch(function(error) {
        swal("Oops!", "Something went wrong. Please try again.", "error");
    });
});
