
<!DOCTYPE html>
<html>
<head>
    <title>DANH BẠ ĐIỆN TỬ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="../../public/assets/css/styles.css">
</head>
<body>  
<div class="container-fluid">
        <?php
            require_once 'header.php';
        ?>
        <main class="mt-3">
            <div class="container" style=" padding-right: 0;">
                <h3>CHỨC NĂNG CHÍNH CỦA WEBSITE</h3>
                <div style="display: flex; padding: 0 150px" class="mt-4 mb-5">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>STT</th>
                            <th>Chức năng</th>
                            <th>Mô tả</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1</td>
                            <td>Lưu trữ thông tin liên lạc</td>
                            <td>Danh bạ điện tử cho phép người dùng lưu trữ các thông tin liên lạc cơ bản của mọi người như tên, chức vụ, số điện thoại, địa chỉ email, địa chỉ nhà và thông tin liên lạc khác.</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Quản lý danh sách liên lạc</td>
                            <td>Người dùng có thể tổ chức và quản lý danh sách liên lạc của họ theo nhiều cách khác nhau, bao gồm sắp xếp theo tên, nhóm, hoặc tự do tạo nhãn để dễ dàng tìm kiếm và truy cập thông tin.</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Tìm kiếm nhanh chóng</td>
                            <td>Danh bạ điện tử cung cấp chức năng tìm kiếm giúp người dùng nhanh chóng tìm kiếm và truy cập thông tin liên lạc của mọi người trong danh sách liên lạc của họ.</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Chia sẻ thông tin liên lạc</td>
                            <td>Người dùng có thể chia sẻ thông tin liên lạc với người khác từ danh bạ điện tử của họ, giúp dễ dàng giao tiếp và kết nối với bạn bè, đồng nghiệp, và đối tác kinh doanh.</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
        <footer class="mt-4">
            <?php
                require_once 'footer.php';
            ?>
        </footer>
    </div>
</body>
</html>