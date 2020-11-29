function removeAllActiveContent() {
    $(".content_layout").each(function(index, value) {
        $(this).removeClass("active");
    });
}
function activeContent(content_id) {
    removeAllActiveContent();
    $("#" + content_id).addClass("active");
}
function manageCourse() {
    activeContent("manage_course");
    $(".breadcrumb").empty();
    $(".breadcrumb").append(
        '<li class="breadcrumb-item"><a href="{{route(\'home\')}}">Home</a></li>'
    );
    $(".breadcrumb").append(
        '<li class="breadcrumb-item">Quản lý khoá học</li>'
    );
    $(".add_button").show();
}
function addCourse() {
    activeContent("edit_course");
    $(".breadcrumb").empty();
    $(".breadcrumb").append(
        '<li class="breadcrumb-item"><a href="{{route(\'home\')}}">Home</a></li>'
    );
    $(".breadcrumb").append(
        '<li class="manage_course_btn breadcrumb-item"><a style="cursor:pointer" onclick="manageCourse()">Quản lý khoá học</a></li>'
    );
    $(".breadcrumb").append(
        '<li class="breadcrumb-item active">Thêm khoá học</li>'
    );
    $(".add_button").hide();
}
function editCourse() {
    activeContent("edit_course");
    $(".breadcrumb").empty();
    $(".breadcrumb").append(
        '<li class="breadcrumb-item"><a href="{{route(\'home\')}}">Home</a></li>'
    );
    $(".breadcrumb").append(
        '<li class="manage_course_btn breadcrumb-item"><a style="cursor:pointer" onclick="manageCourse()">Quản lý khoá học</a></li>'
    );
    $(".breadcrumb").append(
        '<li class="breadcrumb-item active">Sửa khoá học</li>'
    );
    $(".add_button").hide();
}

$(document).on("dblclick", ".editable", function(e) {
    e.stopPropagation();
    var currentEle = $(this);
    var value = $(this).html();
    updateVal(currentEle, value);
});

function updateVal(currentEle, value) {
    $(currentEle).html(
        '<input class="thVal" type="text" value="' + value + '" />'
    );
    $(".thVal").focus();
    $(".thVal").keyup(function(event) {
        if (event.keyCode == 13) {
            $(currentEle).html(
                $(".thVal")
                    .val()
                    .trim()
            );
            currentEle = null;
        }
    });

    $(document).click(function(e) {
        if ($(e.target).attr("class") != "thVal") {
            $(currentEle).html($(".thVal").val());
            // $(document).off("click");
            currentEle = null;
        }

        // $(currentEle).html($(".thVal").val());
        // currentEle = null;
    });
}

$(function() {
    $(".accordion__menu")
        .sortable({
            connectWith: ".accordion__menu",
            handle: ".accordion__menu-link"
        });
});

//Edit-Course
$(document).on("click", ".accordion__toggle", function() {
    // debugger
    $(this)
        .next()
        .collapse("toggle");
});

section_count = 0;
function addNewSection(name = "Tên chương", section_id = null) {
    if (!section_id) {
        section_id = section_count++;
    }
    var section_template =
        `<div class="section accordion__item">
            <div class="btn_nav_group">
                <i onclick="addQuiz(this)" class="nav_btn add_quiz tooltip_owner fa fa-question-circle" aria-hidden="true">
                    <span class="tooltiptext">Thêm Quiz</span>
                </i>
                <i onclick="addNewLesson(this)" class="nav_btn add_lesson tooltip_owner fa fa-plus-circle" aria-hidden="true">
                    <span class="tooltiptext">Thêm Bài học</span>
                </i>
                <i onclick="deleteSection(this)" class="nav_btn delete_sector tooltip_owner fa fa-minus-circle" aria-hidden="true">
                    <span class="tooltiptext">Xoá Chương</span>
                </i>
            </div>
            <a class="accordion__toggle collapsed" data-toggle="collapse" data-target="#course-toc-` +
            section_count++ +
            `" data-parent="#parent">
            <span class="flex editable section_name">` +
            name +
            `</span>
            <span class="accordion__toggle-icon material-icons">keyboard_arrow_down</span>
            </a>
            <div class="accordion__menu collapse" id="course-toc-` +
            section_id++ +
            `">
        </div>
    </div>`;

    $("#parent").append(section_template);

    $(".accordion__menu")
        .sortable({
            connectWith: ".accordion__menu",
            handle: ".accordion__menu-link"
        });
}

function deleteSection(element) {
    // console.log(element.parentNode.parentNode);
    element.parentNode.parentNode.remove();
}
count_quiz = 0;
function addQuiz(element, name = "Quiz") {
    var quiz_template =
        `<div class="quiz">
            <div class="accordion__menu-link" id="quiz-` +count_quiz+`">
                <i class="material-icons text-70 icon-16pt icon--left">drag_handle</i>
                <a class="flex editable quiz_name">` +
                name +
                `</a>
                <button type="button" class="btn ml-2 btn-blue editQuiz" >Quiz</button>
            </div>
            <div id="quiz`+count_quiz++ +`" class="p-3 collapse">
                <div class="a_quiz">
                    <div class="form-group mb-32pt">
                        <label class="form-label">Câu hỏi</label>
                        <textarea class="form-control quiz_question" rows="3" placeholder="Câu hỏi..."></textarea>
                        <small class="form-text text-muted">Đọc <a href="https://viblo.asia/helps/cach-su-dung-markdown-bxjvZYnwkJZ" target="_blank">hướng dẫn </a>để sử dụng markdown</small>
                    </div>
                    <div class="quiz_answer form-row col-md-12 col-sm-12 ml-2">
                        <div class="ml-3 tooltip_owner">
                            <input type="checkbox" class="form-check-input isAnswer" value="answer">
                            <span class="tooltiptext">Câu trả lời đúng</span>    
                        </div>
                        <div class="ml-1 col-md-8 col-sm-8">
                            <input type="text" class="form-control ans_content" required placeholder="Câu trả lời ...">
                        </div>
                        <button type="button" class="btn btn-success" id="add_answer"><i class="fa fa-plus" aria-hidden="true"></i></button>
                    </div>
                </div>
            </div>
        </div>
        `;
    $(element.parentNode.nextElementSibling.nextElementSibling).append(
        quiz_template
    );
}
$(document).on("click", ".editQuiz", function() {
    $(this)
        .parent()
        .next()
        .collapse("toggle");
});

$(document).on('click', '#add_answer', function(){
    var templateSkill = `
    <div class="quiz_answer form-row col-md-12 col-sm-12 mt-2 ml-2">
        <div class="ml-3 tooltip_owner">
            <input type="checkbox" class="form-check-input isAnswer"  value="answer">
            <span class="tooltiptext">Câu trả lời đúng</span>    
        </div>
        <div class="ml-1 col-md-8 col-sm-8">
            <input type="text" class="form-control ans_content" required placeholder="Câu trả lời ...">
        </div>
        <button type="button" class="btn btn-success" id="add_answer"><i class="fa fa-plus" aria-hidden="true"></i></button>
        <button type="button" class="btn btn-danger rm_skill ml-1"><i class="fa fa-minus" aria-hidden="true"></i></button>
    </div>`;
    // var temp = $(templateSkill).insertBefore('.answer-help');
    $(this).parent().after(templateSkill);
})

$(document).on('click', '.rm_skill', function () {
    $(this).parent().remove();
    console.log($('.tempBr'));
    $('tempBr').remove();
});


count_lesson = 0;
lesson_quill_count = 0;
function addNewLesson(element, name = "Tên Bài", length = "10m 10s") {
    var lesson_template =
        `<div class="lesson">
            <div class="accordion__menu-link" id="lesson-` +count_lesson +`">
                <i class="material-icons text-70 icon-16pt icon--left">drag_handle</i>
                <a class="flex editable lesson_name">` +
                name +
                `</a>
                <span class="text-muted editable lesson_length">` +
                length +
                `</span>
                <button type="button" class="btn ml-2 btn-blue editLesson" >Sửa</button>
            </div>
            <div id="lesson`+count_lesson++ +`" class="p-3 collapse">
                <label class="form-label">Link Video/File Video</label>
                <div class="form-group row">
                    <input type="text" class="form-control lesson_url" placeholder="URL nhúng video ..." value="">
                    <input type="file" class="form-control mt-1" value="Hoặc tải lên file">
                </div>
                
                <div class="form-group mb-32pt">
                    <label class="form-label">Bài học</label>
                    <!--<textarea class="form-control lesson_info" rows="5" placeholder="Bài học..."></textarea>-->
                    <div id="lquill`+ lesson_quill_count +`" style="height: 150px;" class="mb-0 lesson_info" data-toggle="quill" data-quill-placeholder="Bài học...">
                        Bài học...
                    </div>
                    <small class="form-text text-muted">Đọc <a href="https://viblo.asia/helps/cach-su-dung-markdown-bxjvZYnwkJZ" target="_blank">hướng dẫn </a>để sử dụng markdown</small>
                </div>
            </div>
        </div>
        `;
    $(element.parentNode.nextElementSibling.nextElementSibling).append(
        lesson_template
    );

    // debugger
    var quill = new Quill($('#lquill'+ lesson_quill_count++).get(0), {
        theme: 'snow'
    });
    quill.focus()

}
$(document).on("click", ".editLesson", function() {
    if($(this).text() == 'Sửa'){
        $(this).text('Xong');
    }else{
        $(this).text('Sửa');
    }
    $(this)
        .parent()
        .next()
        .collapse("toggle");
});

$(document).on("dblclick", "#select_topic", function() {
    var option = $(this).find('option:selected');
    if (option.length>0){
        var topic = option.text().trim();
        var topic_id = option.attr("topic_id");
        option.remove();
        var topic_item = `
        <li class="topic_item" topic_id="`+topic_id+`">`+topic+`
            <i class="fa fa-times topic-remove"></i>
        </li>`;
        $('.topic_list').append(topic_item)
    }

});
$(document).on("click", ".topic-remove", function() {
    var topic = $(this).parent().text().trim();
    var topic_id = $(this).parent().attr("topic_id");
    var option = `<option topic_id="`+topic_id+`">`+topic+`</option>` 
    $('#select_topic').append(option);
    $(this).parent().remove();
});


//Nav bar toggle
// $(document).on("click", ".dropdown-toggle", function() {
//     console.log($(this).next());
//     $(this)
//         .next()
//         .collapse("toggle");
// });