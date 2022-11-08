$('#register').click(function(e) {
    let name = $('#name').val().trim();
    let password = $('#pass').val().trim();
    let email = $('#email').val().trim();
    let mobilenumber = $('#num').val().trim();
    if (name == '' || name == undefined || password == '' || password == undefined || email == '' || email == undefined || mobilenumber == '' || mobilenumber == undefined) {
        alert("Fill Out All The Fields");
    } else {
        $.ajax({
            type: 'POST',
            url: '/guvi/php/signup.php',
            data: {
                name: name,
                email: email,
                pass: password,
                num: mobilenumber
            },
            success: function(data) {
                if (data.result == 0) {
                    alert("Registration failed");
                    $('#name').val('');
                    $('#email').val('');
                    $('#password').val('');
                    $('#mobilenumber').val('');
                } else if (data.result == 2) {
                    alert("user already exist");
                } else {
                    alert("Registered successfully");
                    localStorage.setItem("email", data.email)
                    localStorage.setItem("name", data.name)

                    location.href = "/guvi/profile.html"
                }
            },
            dataType: 'json',
        })
    }

})