<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="utf-8">
</head>
<style>
    * {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .container {
        /* width: 80%; */
        margin: auto;

    }

    .body {
        /* width: 60%; */
        margin: auto;
        background-color: rgba(139, 185, 255, 0.185);
        border-radius: 10px;
        padding: 5px 20px 40px 20px;
        border: rgb(0, 119, 255) solid 1px;
    }

    h2 {
        color: rgb(0, 119, 255);
        text-align: center;
        font-size: 26px;
    }

    .text {
        text-align: center;
    }

    .button {
        width: 100%;
        text-align: center;
        margin-top: 40px;
    }
    a{
        width: fit-content;
        background-color: rgb(0, 119, 255);
        padding: 10px;
        color: rgb(248, 248, 248);
        text-decoration: none;
        border-radius: 5px;
        font-weight: bold;
    }
</style>

<body>
    <div class="container">
        <div class="body">
            <h2>Đổi mật khẩu VinaCourse. </h2>

            <div class="text">
                Nếu bạn không muốn đổi mật khẩu, hãy bỏ qua email này.
            </div>
            <div class="text">Vui lòng nhấn vào nút dưới đây để hoàn tất đăng ký.</div>
            <div class="button">
                <a href="{{ URL::to(route('change_password', ['code' => $confirmation_code])) }}">
                    Đổi mật khẩu
                </a>
            </div>
        </div>
    </div>


</body>

</html>
