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
                    console.log(data.mss);
                    showAlert('.alert', data.mss);
                },
                error: function (data){
                    alert("Lỗi: "+data.mss);
                }
            });
        }
    });
    
    $('#saveCourse').click(function(e, course_id='new'){
        e.preventDefault();
        var course ={};
        course.id = $("#edit_course").attr("course_id");
        course.name = $('#course_name').val();
        course.intro = $('#course_intro').val();
        course.price = $('#course_price').val();
        course.topic = [];
        $('.topic_list .topic_item').each(function(e){
            course.topic.push($(this).text().trim());
        });
        course.sections = [];
        $('#parent .section').each(function(e){
            var section = {};
            section.name = $(this).find('.section_name').text();
            section.lessons = [];
            $(this).find('.lesson').each(function(e){
                var lesson = {};
                lesson.name = $(this).find('.lesson_name').text();
                lesson.length = $(this).find('.lesson_length').text();
                lesson.info = $(this).find('.lesson_info').val();
                lesson.url = $(this).find('.lesson_url').val();
                section.lessons.push(lesson);
                // lesson = {};
            });
            section.quizzes = [];
            $(this).find('.quiz').each(function(e){
                var quiz = {};
                quiz.name = $(this).find('.quiz_name').text();
                quiz.question = $(this).find('.quiz_question').val();
                quiz.answers = [];
                $(this).find('.quiz_answer').each(function(e){
                    var answer = {};
                    answer.isAnswer = $(this).find('input.isAnswer').is(':checked');
                    answer.content = $(this).find('input.ans_content').val();
                    quiz.answers.push(answer);
                })
                section.quizzes.push(quiz);
            });
            course.sections.push(section);
            // section = {};
        });
        console.log(course);
        $.ajaxSetup({
            headers: {
                // 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                'X-CSRF-TOKEN': $("input[name='_token']").val()
            }
        });
        
        $.ajax({
            url: "/instructor/edit-course",
            type: "POST",
            data: {course: course},
            success: function (data) {
                handleLogin(data);
            },
            error: function (data){
                alert("Lỗi: "+data);
                stop_wait_server();
            }
        });
    })
});

function sendVerify(ele, e){
        // debugger
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
