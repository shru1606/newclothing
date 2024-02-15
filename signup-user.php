<?php require_once "controllerUserData.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Signup Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <!-- Include Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        .mobile-input {
            margin-bottom: 15px; /* Adjust the margin as needed */
        }
    </style>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-4 offset-md-4 form">
            <form action="signup-user.php" method="POST" autocomplete="">
                <h2 class="text-center">Signup Form</h2>
               
                <!-- PHP Error Handling -->
                <?php
                if(count($errors) == 1){
                    ?>
                    <div class="alert alert-danger text-center">
                        <?php
                        foreach($errors as $showerror){
                            echo $showerror;
                        }
                        ?>
                    </div>
                    <?php
                }elseif(count($errors) > 1){
                    ?>
                    <div class="alert alert-danger">
                        <?php
                        foreach($errors as $showerror){
                            ?>
                            <li><?php echo $showerror; ?></li>
                            <?php
                        }
                        ?>
                    </div>
                    <?php
                }
                ?>
                <div class="form-group">
                    <input class="form-control" type="text" name="name" placeholder="Name" required value="<?php echo $name ?>">
                </div>
                <div class="form-group">
                    <input class="form-control" type="email" name="email" placeholder="Email Address" required value="<?php echo $email ?>">
                </div>
                <div class="form-group">
                    <input class="form-control mobile-input" type="text" name="mobile" placeholder="Mobile" required>
                </div>
                <div class="form-group">
                    <select class="form-control" name="gender" required>
                        <option value="">Select Gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Other">Other</option>
                    </select>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <input class="form-control" type="password" name="password" id="password" placeholder="Password" required>
                        <div class="input-group-append">
                            <button type="button" id="togglePassword" class="btn btn-sm btn-outline-secondary"><i class="fas fa-eye" aria-hidden="true"></i></button>
                        </div>
                    </div>
                </div>
                <!-- Repeat similar structure for Confirm Password -->
                <div class="form-group">
                    <div class="input-group">
                        <input class="form-control" type="password" name="cpassword" id="cpassword" placeholder="Confirm password" required>
                        <div class="input-group-append">
                            <button type="button" id="toggleCPassword" class="btn btn-sm btn-outline-secondary"><i class="fas fa-eye" aria-hidden="true"></i></button>
                        </div>
                    </div>
                </div>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="terms" required>
                    <label class="form-check-label" for="terms">I agree to the terms & conditions</label>
                </div>
                <div class="form-group">
                    <input class="form-control button" type="submit" name="signup" value="Signup">
                </div>
                <div class="link login-link text-center">Already a member? <a href="login-user.php">Login here</a></div>
            </form>
        </div>
    </div>
</div>

<!-- Include Font Awesome -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>

<script>
    // JavaScript to toggle password visibility
    document.getElementById("togglePassword").addEventListener("click", function() {
        var passwordField = document.getElementById("password");
        if (passwordField.type === "password") {
            passwordField.type = "text";
        } else {
            passwordField.type = "password";
        }
    });

    // JavaScript to toggle confirm password visibility
    document.getElementById("toggleCPassword").addEventListener("click", function() {
        var cPasswordField = document.getElementById("cpassword");
        if (cPasswordField.type === "password") {
            cPasswordField.type = "text";
        } else {
            cPasswordField.type = "password";
        }
    });
</script>

</body>
</html>