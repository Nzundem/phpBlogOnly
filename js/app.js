$(document).ready(function () {
    //Login verification of use
    $('#login').click(function () {
        email = $("#email").val();
        password = $("#password").val();

        $.ajax({
            type: "POST",
            url: "pcheck.php",
            data: "email="+email+"&password="+password,
            success: function (html) {
                if (html == 'true') {
                    $("#add_err").html('<div class="alert alert-success"> \
                    <strong> Account </strong> processed. </div>');
                    window.location.href = "index.php";
                }
                else if (html == 'false') {
                    $("#add_err").html('<div class="alert alert-danger"> \
                    <strong>Email Address </strong> already in system. </div>');
                }
                else {
                    $("#add_err").html('<div class="alert alert-danger"> \
                    <strong>Error </strong> processing request. Please try again later  </div>  ')
                }
            },
            beforeSend: function () {
                $("#add_err").html("loading...")
            }

        });
        return false;
    });
    $('#register').click(function () {
        fname = $("#fname").val();
        lname = $("#lname").val();
        email = $("#email").val();
        password = $("#password").val();

        $.ajax({
            type: "POST",
            url: "addUser.php",
            data: "fname=" + fname + "&lname=" + lname + "&email=" + email + "&password=" + password,
            success: function (html) {
                if (html === 'true') {
                    $("#add_err").html('<div class="alert alert-success"> \
                    <strong> Account </strong> processed. </div>');
                    window.location.href = "index.php";
                }
                else if (html === 'false') {
                    $("#add_err").html('<div class="alert alert-danger"> \
                    <strong>Email Address </strong> already in system. </div>');
                }
                else if (html === 'fname') {
                    $("#add_err").html('<div class="alert alert-danger"> \
                    <strong>First Name </strong> is required.  </div>');
                }
                else if (html === 'lname') {
                    $("#add_err").html('<div class="alert alert-danger"> \
                    <strong>Last Name </strong> is required. </div>');
                }
                else if (html === 'eshort') {
                    $("#add_err").html('<div class="alert alert-danger"> \
                    <strong>Email Address </strong> is required. </div>')
                }
                else if (html === 'eformat') {
                    $("#add_err").html('<div class="alert alert-danger"> \
                    <strong>Email Address Name </strong> format is not valid. </div>')
                }
                else if (html === 'pshort') {
                    $("#add_err").html('<div class="alert alert-danger"> \
                    <strong>Password </strong> must be atleast 4 characters. </div>')
                }
                else {
                    $("#add_err").html('<div class="alert alert-danger"> \
                    <strong>Error </strong> processing request. Please try again  </div>  ')
                }
            },
            beforeSend: function () {
                $("#add_err").html("loading...")
            }

        });
        return false;
    });




});

