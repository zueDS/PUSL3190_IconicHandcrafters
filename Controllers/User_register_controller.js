
function LoadCity() {

    var getval = document.getElementById('input-district').value;

    $.post("phpfiles/User_register_load_city.php",
            {
                districtname: getval

            },
    function(data, status) {


        var cities = JSON.parse(data);
        $('#input-city').empty();
        for (var i = 0; i < cities.length; i++) {
            $('#input-city').append('<option>' + cities[i].city + '</option>');
        }



    });

}

function registeruser() {

    var fname = $('#input-firstname').val();
    var lname = $('#input-lastname').val();
    var email = $('#input-email').val();
    var contactz = $('#input-telephone').val();
    var addresss = $('#input-address-1').val();
    var district = $('#input-district option:selected').text();
    var cityz = $('#input-city option:selected').text();
    var passwordz1 = $('#input-password').val();
    var passwordz2 = $('#input-confirm').val();
    var usertype = $('#input-usertype option:selected').text();


    
    


    if (fname == "" || lname == "" || email == "" || contactz == "" || addresss == "" || passwordz1 == "" || passwordz2 == "") {

        swal("Error!", "Please fill all  mandatory feilds....!", "error");
    } else if (district == "Select District") {

        swal("Error!", "Please select valid district....!", "error");
    } else if (cityz == "None" || cityz == "Select city" || cityz == "") {

        swal("Error!", "Please select valid City....!", "error");
    } else if (usertype == "Registered as") {

        swal("Error!", "Please select valid User type....!", "error");
    } else if ((contactz.length > 10) || (contactz.length < 10)) {

        swal("Error!", "Please enter valid contact number 10 digits....!", "error");
    } else if (!(passwordz1 == passwordz2)) {

        swal("Error!", "Passwords are not matched....!", "error");
    } else {

        $.post("phpfiles/User_register.php",
                {
                    fname: fname,
                    lname: lname,
                    email: email,
                    contactz: contactz,
                    addresss: addresss,
                    district: district,
                    cityz: cityz,
                    passwordz1: passwordz1,
                    usertype: usertype

                },
        function(data, status) {
            if (data == "ok") {


                swal("Done..!User Registered Sucessfully...!", {
                    icon: "success",
                });

                setTimeout(rideirecttoLogin(), 56000);


            }
            else if (data == "Already") {
                swal("Error!", "This Email is already taken....!", "error");

            } else {

                alert(data);
            }

        });
    }

}


function rideirecttoLogin() {

    window.location = "register.php";
}
