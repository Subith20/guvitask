$('#login').click(function(e) {
console.log("aaa")
    let username = $('#username').val().trim();
    let password = $('#password').val().trim();
    if (username == '' || username == undefined || password == '' || password == undefined) {
        alert("Fill Out All The Fields");
    } else {
        $.ajax({
            type: 'POST',
            url: '/guvi/php/login.php',
            data: {

                email1: username,
                pass: password,
            },
            success: function(data) {
                if (data.result == 0) {
                    alert("incorrect crediantials");
                    $('#username').val('');
                    $('#password').val('');
                } else {
                    alert("logged in successfully");
                    console.log(data)
                    localStorage.setItem("email", data.email)
                    localStorage.setItem("name", data.name)

                    location.href = "/guvi/profile.html"
                }
            },
            dataType: 'json',
        })
    }

})