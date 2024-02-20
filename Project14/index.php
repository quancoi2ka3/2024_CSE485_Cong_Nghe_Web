<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
</head>

<body>
<div class="container"> 
    <h5>Basic Info<hr></h5>
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <div class="form-group">
            <label for="id">Employee ID</label>
            <input type="text" name="id" id="id" class="form-control"  placeholder="Employee">
        </div>
        <div class="form-group">
            <label for="lastname">Last Name</label>
            <input type="lastname" name="lastname" id="lastname" class="form-control"  placeholder="Lastname">
        </div>
        <div class="form-group">
            <label for="firstname">First Name</label>
            <input type="firstname" name="firstname" id="firstname" class="form-control"  placeholder="First name">
        </div>
        <div class="form-group">
            <label for="gender">Gender</label>
            <div>
                <input type="radio" name="gender" value="female"> Female
                <input type="radio" name="gender" value="male"> Male
                <input type="radio" name="gender" value="xxx"> XXX
                <input type="radio" name="gender" value="xxx"> ZZZ
            </div>
        </div>

        <div class="form-group">
            <label for="title">Title</label>
            <input type="title" name="title" id="title" class="form-control"  placeholder="Title">
        </div>

        <div class="form-group">
            <label for="suffix">Suffix</label>
            <input type="suffix" name="suffix" id="suffix" class="form-control"  placeholder="Suffix">
        </div>

        <div class="form-group">
            <label for="birthdate">BirthDate</label>
            <input type="birthdate" name="birthdate" id="birthdate" class="form-control"  placeholder="Birthdate">
        </div>
        <div class="form-group">
            <label for="hiredate">HireDate</label>
            <input type="hiredate" name="hiredate" id="hiredate" class="form-control" placeholder="Hiredate">
        </div>
        <div class="form-group">
            <label for="ssn">SSN # (if applicable)</label>
            <input type="ssn" name="ssn" id="ssn" class="form-control" placeholder="SSN">
        </div>

        <div class="form-group">
            <label for="reports">Reports To</label>
            <select name="reports" id="reports" class="form-control">
                <option value="option1">Option 1</option>
                <option value="option2">Option 2</option>
                <option value="option3">Option 3</option>
            </select>
        </div>



        
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    
</div>
</body>
