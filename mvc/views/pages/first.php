<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/live/mvc/views/resource/css/first.css">
    <link rel="stylesheet" href="/live/mvc/views/resource/css/formOverLay.css">
</head>
<body>
    <div class="container-fluid" id="background-image-div">
        <div class="row">
            <div class="col-1"></div>
            <div class="col-6" id="content-index">
                <span >Tìm kiếm những Freelancer tài năng cùng với vô số dịch vụ về</span><br>
                <span id="text" style="border: none;"></span>
                <span class="blinking-cursor">|</span><br>
                <button id="troThanhFreelancer">Trở thành Freelancer</button>
                <button id="dangDuAnMoi" onclick="openForm()">Đăng dự án mới</button><br>
                <div style="display: flex; align-items: center;">
                    <div class="timKiemTrangChu">
                        <div class="bi bi-search" style="font-size: 20px; color: gray; align-items: center;"></div>
                        <input type="search" placeholder="Bạn đang tìm dịch vụ gì?">
                    </div>
                    <button id="submit" type="submit">Tìm kiếm</button>
                </div>
            </div>
            <div class="col-5"></div>
        </div>
    </div>

    <div class="overlay" id="formOverlay">
        <div class="form-container">
            <span class="close-button" onclick="closeForm()">×</span>
            <h2>Nhập thông tin cần thiết</h2>
            <form>
                <fieldset >
                    <legend>Disabled fieldset example</legend>
                    <div class="mb-3">
                        <label for="disabledTextInput" class="form-label">Disabled input</label>
                        <input type="text" id="disabledTextInput" class="form-control" placeholder="Disabled input">
                    </div>
                    <div class="mb-3">
                    <label for="disabledSelect" class="form-label">Disabled select menu</label>
                    <select id="disabledSelect" class="form-select">
                        <option>Disabled select</option>
                    </select>
                    </div>
                    <div class="mb-3">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="disabledFieldsetCheck" >
                        <label class="form-check-label" for="disabledFieldsetCheck">
                        Can't check this
                        </label>
                    </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </fieldset>
                </form>
        </div>
    </div>

</body>
<script src="../mvc/views/resource/js/trangchu.js"></script>
<script src="../mvc/views/resource/js/formOverLay.js"></script>
</html>