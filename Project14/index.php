<?php
    require_once './db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM</title>
    <link rel="stylesheet" href="assets/css/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
</head>

<body>
<div id="form"> 
    <div>
        <h4><b>Basic Info</b><hr></h4>
        <form method="POST" action="">
            <div class="form-group row">
                <label for="id" class="col-sm-3 col-form-label"><b>Employee ID</b></label>
                <div class="col-sm-9">
                    <input type="text" name="id" id="id" class="form-control"  placeholder="ID">
                </div>
            </div>
            <div class="form-group row">
                <label for="lastname" class="col-sm-3 col-form-label"><b>Last Name</b></label>
                <div class="col-sm-9">
                    <input type="text" name="lastname" id="lastname" class="form-control"  placeholder="Last name">
                </div>
            </div>
            <div class="form-group row">
                <label for="firstname" class="col-sm-3 col-form-label"><b>First Name</b></label>
                <div class="col-sm-9">
                    <input type="text" name="firstname" id="firstname" class="form-control"  placeholder="First name">
                </div>
            </div>
            <fieldset class="form-group">
                <div class="row">
                    <legend class="col-form-label col-sm-3 pt-0"><b>Gender</b></legend>
                    <div class="col-sm-9">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                            <label class="form-check-label" for="gridRadios1">Female</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2" checked>
                            <label class="form-check-label" for="gridRadios2">Male</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option3" checked>
                            <label class="form-check-label" for="gridRadios3">xxx</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios4" value="option4" checked>
                            <label class="form-check-label" for="gridRadios4">zzz</label>
                        </div>
                    </div>
                </div>
            </fieldset>   
            <div class="form-group row">
                <label for="title" class="col-sm-3 col-form-label"><b>Title</b></label>
                <div class="col-sm-9">
                    <input type="text" name="title" id="title" class="form-control"  placeholder="Title">
                </div>
            </div>

            <div class="form-group row">
                <label for="suffix" class="col-sm-3 col-form-label"><b>Suffix</b></label>
                <div class="col-sm-9">
                    <input type="text" name="suffix" id="suffix" class="form-control"  placeholder="Suffix">
                </div>
            </div>
            <div class="form-group row">
                <label for="birthdate" class="col-sm-3 col-form-label"><b>BirthDate</b></label>
                <div class="col-sm-9">
                    <input type="date" name="birthdate" id="birthdate" class="form-control"  placeholder="Birthdate">
                </div>
            </div>
            <div class="form-group row">
                <label for="hiredate" class="col-sm-3 col-form-label"><b>HireDate</b></label>
                <div class="col-sm-9">
                    <input type="date" name="hiredate" id="hiredate" class="form-control" placeholder="Hiredate">
                </div>
            </div>
            <div class="form-group row">
                <label for="ssn" class="col-sm-3 col-form-label"><b>SSN # (if applicable)</b></label>
                <div class="col-sm-9">
                    <input type="text" name="ssn" id="ssn" class="form-control" placeholder="SSN">
                </div>
            </div>
            <div class="form-group row">
                <label for="reports" class="col-sm-3 col-form-label"><b>Reports To</b></label>
                <div class="col-sm-9">
                    <select name="reports" id="reports" class="form-control">
                        <?php
                            foreach($reports as $report) {
                                echo '<option value="'. $report .'">'.$report.'</option>';
                            }
                        ?>
                    </select>
                </div>
            </div>
        </form>
    </div>

    <div>
        <h4><b>Contact Info</b><hr></h4>
        <form method="POST" action="">
            <div class="form-group row">
                <label for="email" class="col-sm-3 col-form-label"><b>Email</b></label>
                <div class="col-sm-9"> 
                    <input type="text" name="email" id="email" class="form-control"  placeholder="name@example.com">
                </div>
            </div>
            <div class="form-group row">
                <label for="address" class="col-sm-3 col-form-label"><b>Address</b></label>
               <div class="col-sm-9">
                    <input type="text" name="address" id="address" class="form-control"  placeholder="số nhà 12, ngách 2, thái thịnh 1">
               </div>
            </div>
            <div class="form-group row">
                <label for="city" class="col-sm-3 col-form-label"><b>City</b></label>
                <div class="col-sm-9">
                    <input type="text" name="city" id="city" class="form-control"  placeholder="London">
                </div>
            </div>
            <div class="form-group row">
                <label for="region" class="col-sm-3 col-form-label"><b>Region</b></label>
                <div class="col-sm-9">
                    <input type="text" name="region" id="region" class="form-control"  placeholder="Region">
                </div>
            </div>
            <div class="form-group row">
                <label for="postalcode" class="col-sm-3 col-form-label"><b>Postal Code</b></label>
                <div class="col-sm-9">
                    <input type="text" name="postalcode" id="postalcode" class="form-control"  placeholder="WG2 7LT">
                </div>
            </div>
            <div class="form-group row">
                <label for="country" class="col-sm-3 col-form-label"><b>Country</b></label>
                <div class="col-sm-9">
                    <select name="country" id="country" class="form-control">
                        <?php
                        foreach($countries as $country) {
                            echo '<option value="'. $country .'">'.$country.'</option>';
                        }
                        ?>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="homephone" class="col-sm-3 col-form-label"><b>US Home Phone</b></label>
               <div class="col-sm-9">
                    <input type="text" name="homephone" id="homephone" class="form-control"  placeholder="(234)234-2342">
               </div>
            </div>
            <div class="form-group row">
                <label for="photo" class="col-sm-3 col-form-label"><b>Photo</b></label>
                <div class="col-sm-9">
                    <input type="text" name="photo" id="photo" class="form-control"  placeholder="EmpID9.bmp">
                </div>
            </div>
        </form>
    </div>

    <div>
        <h4><b>Optional Info</b><hr></h4>
        <form method="POST" action="">
            <div class="form-group row">
                <label for="notes" class="col-sm-3 col-form-label"><b>Notes</b></label>
                <div class="col-sm-9">
                    <textarea name="notes" id="notes" class="form-control" placeholder="Notes"></textarea>
                    <script src="https://cdn.ckeditor.com/ckeditor5/29.2.0/classic/ckeditor.js"></script>
                    <script>
                        ClassicEditor
                            .create(document.querySelector('#notes'))
                            .catch(error => {
                                console.error(error);
                            });
                    </script>
                </div>
            </div>
            <div class="form-group row">
                <label for="preferredshift" class="col-sm-3 col-form-label"><b>Preferred Shift Active? </b></label>
                <div class="col-sm-9">
                    <div>
                        <input type="checkbox" name="preferredshift[]" value="option1" id="option1">
                        <label for="option1">Regular</label>
                    </div>
                    <div>
                        <input type="checkbox" name="preferredshift[]" value="option2" id="option2">
                        <label for="option2">Gravy Yard</label>
                    </div>
                    <div>
                        <input type="checkbox" name="preferredshift[]" value="option3" id="option3">
                        <label for="option3"></label>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="areyouhuman" class="col-sm-3 col-form-label"><b>Are you human?</b></label>
                <div class="col-sm-9">
                    <span id="verificationCode"></span>
                    <p>Click to change</p>
                    <input type="text" name="clicktochange" id="clicktochange" class="form-control" placeholder="Enter the code">
                </div>
            </div>
            <script>
                document.addEventListener("DOMContentLoaded", function() {
                    // Tạo một hàm để tạo mã kiểm tra ngẫu nhiên
                    function generateVerificationCode() {
                        // Mảng chứa tất cả các ký tự có thể xuất hiện trong mã
                        const characters = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz";
                        const length = 6; // Độ dài của mã kiểm tra
                        let code = ""; // Chuỗi sẽ chứa mã kiểm tra
                        // Tạo mã kiểm tra ngẫu nhiên bằng cách chọn ngẫu nhiên các ký tự từ mảng characters
                        for (let i = 0; i < length; i++) {
                            const randomIndex = Math.floor(Math.random() * characters.length);
                            code += characters.charAt(randomIndex);
                        }
                        return code; // Trả về mã kiểm tra đã tạo
                    }
                    // Hiển thị mã kiểm tra vào phần tử có id="verificationCode"
                    const verificationCodeElement = document.getElementById("verificationCode");
                    verificationCodeElement.textContent = generateVerificationCode();
                });
            </script>
        </form>
    </div>
    <br>
    <hr>
    <div class="form-group row">
        <div class="icon col-sm-7">
            <a href=""><i class="fas fa-square-caret-left"></i></a>
            <a href=""><i class="fas fa-square-caret-right"></i></a>
            <div>* required</div>
        </div>
        <div class="button col-sm-5">
                <button type="submit" class="btn btn-primary"><i class="fas fa-sd-card"></i> Submit</button>
                <button type="submit" class="btn btn-danger"><i class="fas fa-times"></i> Cancel</button>
        </div>
    </div>
</div>
</body>

