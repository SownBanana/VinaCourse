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
                error: function (data){
                    alert("Lỗi: "+data);
                    stop_wait_server();
                }
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
                    showAlert('.alert', data.mss);
                },
                error: function (data){
                    alert("Lỗi: "+data.mss);
                }
            });
        }
    });
    
});

function sendVerify(ele, e){
        debugger
        e = e || window.event;
        e.preventDefault();
        wait_server();
        var href = $('#verifyBtn').attr('href');
        // $.ajaxSetup({
        //     headers: {
        //         // 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        //         'X-CSRF-TOKEN': $("input[name='_token']").val()
        //     }
        // });
        
        $.ajax({
            url: href,
            type: "GET",
            data: {},
            success: function (data) {
                alert(data.mss);
                stop_wait_server();
            },
            error: function (data){
                alert("Lỗi: "+data.mss);
                stop_wait_server();
            }
        });
}
showAlert();
stop_wait_server();
function handleLogin(msg) {
    console.log(msg);
    if(msg.status == 'success'){
        window.location.replace(msg.mss);
        // window.location = msg[1];
    }else if(msg.status == 'error_info'){
        stop_wait_server();
        $('#usernameHelp').text(msg.mss);
    }else if(msg.status == 'error_verify'){
        stop_wait_server();
        $('#usernameHelp').text(msg.mss);
        $('#usernameHelp').append("<a id='verifyBtn' onclick='sendVerify(this, event)' href='/account/send-verify/"+msg.email+"'>&nbsp Gửi lại email xác thực</a>");
    }
    else {
        stop_wait_server();
        $('#passwordHelp').text(msg.mss);
    }
}
