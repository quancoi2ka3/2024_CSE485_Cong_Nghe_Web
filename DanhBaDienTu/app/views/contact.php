<!DOCTYPE html>
<html>
<head>
    <title>Website Tra cứu Danh bạ</title>
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
                <div class="row">
                    <div class="col-md-9">
                        <div>
                            <br>
                            <!-- <h3>DANH BẠ ĐIỆN TỬ</h3> -->
                            <div class="row">
                                <div class="col-md-2">
                                    <select onchange="" id="search" class="form-select">
                                        <option selected value="0">Tên</option>
                                        <option value="1">Chức vụ</option>
                                        <option value="2">Số điện thoại</option>
                                        <option value="2">Email</option>
                                    </select>
                                </div>
                                <div class="col-md-7 ms-4">
                                    <input type="text" class="form-control" placeholder="Tìm kiếm">
                                </div>
                                <div class="col-md ms-2">
                                    <a href="search.php" class="btn btn-danger"> <i class="bi bi-search"></i> &nbsp Tìm kiếm nâng cao</a>
                                </div>
                            </div>
                        </div>
                        <div class="mt-5 info">
                            <h2>LIÊN HỆ</h2>
                                <br>
                                <p><b>Danh bạ điện tử trường Đại học Thủy Lợi</b></p>
                                <br>
                                <p>Địa chỉ: Số 175 Tây sơn - Đống Đa – Hà Nội</p>
                                <br>
                                <p>Điện thoại: (024) 3852 2201</p>
                                <br>
                                <p>Fax: (024) 3563 3351</p>
                                <br>
                                <p>Email: <a href="">phonghcth@tlu.edu.vn</a></p>

                        </div>
                    </div>
                    <div class="col-md-3">
                    <?php
                        require_once 'news/new.php';
                    ?>
                    </div>
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