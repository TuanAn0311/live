// Tạo một đối tượng Date mới
var now = new Date();

// Lấy thông tin về ngày, tháng, năm, giờ, phút, giây
var ngay = now.getDate();
var thang = now.getMonth() + 1; // Tháng bắt đầu từ 0 nên cần cộng thêm 1
var nam = now.getFullYear();
var gio = now.getHours();
var phut = now.getMinutes();
var giay = now.getSeconds();

// Định dạng lại chuỗi thời gian theo định dạng "ngày-tháng-năm Giờ:Phút:Giây"
var thoiGianHienTai = ngay + '-' + thang + '-' + nam + ' ' + gio + ':' + phut + ':' + giay;
