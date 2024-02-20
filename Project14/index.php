<?php
$countries = array (
    "Afghanistan", "Albania", "Algeria", "Andorra", "Angola", "Anguilla",
    "Antigua & Barbuda",
    "Argentina", "Armenia", "Aruba", "Australia", "Austria", "Azerbaijan",
    "Bahamas", "Bahrain",
    "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin",
    "Bermuda", "Bhutan",
    "Bolivia", "Bosnia & Herzegovina", "Botswana", "Brazil", "British Virgin
    Islands", "Brunei",
    "Bulgaria", "Burkina Faso", "Burundi", "Vietnam"
);

$reports = array (
    "Option 1", "Option 2", "Option 3"
);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="assets/css/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
</head>

<body>
<div id="form"> 
    <div>
        <h5>Basic Info<hr></h5>
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <div class="form-group">
                <label for="id">Employee ID</label>
                <input type="text" name="id" id="id" class="form-control"  placeholder="ID">
            </div>
            <div class="form-group">
                <label for="lastname">Last Name</label>
                <input type="text" name="lastname" id="lastname" class="form-control"  placeholder="Last name">
            </div>
            <div class="form-group">
                <label for="city">First Name</label>
                <input type="text" name="firstname" id="firstname" class="form-control"  placeholder="First name">
            </div>
            <div class="form-group">
                <label for="gender">Gender</label>
                <div>
                   <div>
                        <input type="radio" name="gender" value="female"> Female
                   </div>
                   <div>
                        <input type="radio" name="gender" value="male"> Male
                   </div>
                   <div>
                        <input type="radio" name="gender" value="xxx"> XXX
                   </div>
                   <div>
                        <input type="radio" name="gender" value="xxx"> ZZZ
                   </div>
                </div>
            </div>

            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" id="title" class="form-control"  placeholder="Title">
            </div>

            <div class="form-group">
                <label for="suffix">Suffix</label>
                <input type="text" name="suffix" id="suffix" class="form-control"  placeholder="Suffix">
            </div>

            <div class="form-group">
                <label for="birthdate">BirthDate</label>
                <input type="date" name="birthdate" id="birthdate" class="form-control"  placeholder="Birthdate">
            </div>
            <div class="form-group">
                <label for="hiredate">HireDate</label>
                <input type="date" name="hiredate" id="hiredate" class="form-control" placeholder="Hiredate">
            </div>
            <div class="form-group">
                <label for="ssn">SSN # (if applicable)</label>
                <input type="text" name="ssn" id="ssn" class="form-control" placeholder="SSN">
            </div>

            <div class="form-group">
                <label for="country">Reports To</label>
                <select name="reports" id="reports" class="form-control">
                    <?php
                        foreach($reports as $report) {
                            echo '<option value="'. $report .'">'.$report.'</option>';
                        }
                    ?>
                </select>
            </div>
        </form>
    </div>

    <div>
        <h5>Contact Info<hr></h5>
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" name="email" id="email" class="form-control"  placeholder="name@example.com">
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" name="address" id="address" class="form-control"  placeholder="address">
            </div>
            <div class="form-group">
                <label for="city">City</label>
                <input type="text" name="city" id="city" class="form-control"  placeholder="London">
            </div>
            <div class="form-group">
                <label for="region">Region</label>
                <input type="text" name="region" id="region" class="form-control"  placeholder="Region">
            </div>
            <div class="form-group">
                <label for="postalcode">Postal Code</label>
                <input type="text" name="postalcode" id="postalcode" class="form-control"  placeholder="WG2 7LT">
            </div>
            <div class="form-group">
                <label for="country">Country</label>
                <select name="country" id="country" class="form-control">
                    <?php
                    foreach($countries as $country) {
                        echo '<option value="'. $country .'">'.$country.'</option>';
                    }
                    ?>
                </select>
            </div>
            <div class="form-group">
                <label for="homephone">US Home Phone</label>
                <input type="text" name="homephone" id="homephone" class="form-control"  placeholder="(234)234-2342">
            </div>
            <div class="form-group">
                <label for="photo">Photo</label>
                <input type="text" name="photo" id="photo" class="form-control"  placeholder="EmpID9.bmp">
            </div>
        </form>
    </div>

    <div>
        <h5>Optional Info<hr></h5>
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <div class="form-group">
                <label for="notes">Notes</label>
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
            <div class="form-group">
                <label for="preferredshift">Preferred Shift Active?</label>
                <div>
                    <input type="checkbox" name="preferredshift[]" value="option1" id="option1">
                    <label for="option1">Option 1</label>
                </div>
                <div>
                    <input type="checkbox" name="preferredshift[]" value="option2" id="option2">
                    <label for="option2">Option 2</label>
                </div>
                <div>
                    <input type="checkbox" name="preferredshift[]" value="option3" id="option3">
                    <label for="option3">Option 3</label>
                </div>
            </div>

            <div>
            <div class="form-group">
                <label for="areyouhuman">Are you human?</label>
                <input type="text" name="areyouhuman" id="areyouhuman" class="form-control" placeholder="Enter the code">
            </div>
        </form>
    </div>
   <div class="button">
        <button type="submit" class="btn btn-primary"><i class="fas fa-sd-card"></i> Submit</button>
        <button type="submit" class="btn btn-danger"><i class="fas fa-times"></i> Cancel</button>
   </div>
</div>
</body>
