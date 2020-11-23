$(document).ready(function() {
    $("#loginBtn").click(function(e) {
        e.preventDefault();
        $('#usernameHelp').text('');
        $('#passwordHelp').text('');
        var login = $("#login").val();
        var password = $("#password").val();
        var remember_me = $("#remember_me").val() == 'on';
        if(login == "" || password == ""){
            alert("Điền thông tin đăng nhập");
            stop_wait_server()
        }else{
            $.ajaxSetup({
                headers: {
                    // 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    'X-CSRF-TOKEN': $("input[name='_token']").val()
                }
            });
            
            $.ajax({
                url: "/account/login",
                type: "POST",
                data: {login: login, password: password, remember_me: remember_me },
                success: function (data) {
                    handleLogin(data);
                },
            });
        }
    });
    $("#resetPswdBtn").click(function(e) {
        e.preventDefault();
        var email = $("#email").val();
        if(email == ""){
            alert("Điền email/username của bạn");
        }else{
            $.ajaxSetup({
                headers: {
                    // 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    'X-CSRF-TOKEN': $("input[name='_token']").val()
                }
            });
            
            $.ajax({
                url: "/account/forgot-password",
                type: "GET",
                data: {email: email},
                success: function (data) {
                    showAlert('.alert', data[1]);
                },
                error: function (data){
                    alert("error"+data);
                }
            });
        }
    });
});
showAlert();
stop_wait_server();
function handleLogin(msg) {
    console.log(msg[1]);
    if(msg[0] == 'success'){
        window.location.replace(msg[1]);
        // window.location = msg[1];
    }else if(msg[0] == 'error_info' || msg[0] == 'error_verify'){
        stop_wait_server();
        $('#usernameHelp').text(msg[1]);
    }else {
        stop_wait_server();
        $('#passwordHelp').text(msg[1]);
    }
}
