<?php
$message = '';
if (isset($_POST['submit'])) {
    $firstname = $_POST['firstname'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];
    $country = $_POST['country'];
    if(isset($_POST['gender'])){
        $gender = $_POST['gender'];
    }
    
    if (empty($firstname) || empty($surname) || empty($email) || empty($password) || empty($phone) || empty($gender) || empty($country)) {
        $message = "<div style='color:red'>All fields are required</div>";
    }
    else {
        $message = "<div style='color:green'>No error found after validation</div>";
    }
    // echo $message;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SIgnUp Form</title>
    <link rel="stylesheet" type="text/css" href="style.css">  
</head>

<body>
        <form method="post" name="signup" action="" onsubmit="return validateForm()">
            <div style="background-color: rgb(236, 234, 234);padding:0px;margin-right:500px;">
            <?php
            if (!empty($message)) {
                echo $message;
            }
            ?>
            <fieldset>
                <legend>
                    <h2>SignUp Form:</h2>
                </legend>
                <table>
                    <tr>
                        <td><b>FirstName:</b>
                        </td>
                        <td>
                            <input type="text" name="firstname" value="" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <b>LastName:</b>
                        </td>
                        <td>
                            <input type="text" name="surname" value="" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <b>Email:</b>
                        </td>
                        <td>
                            <input type="email" name="email" value="" placeholder="Enter a valid e-mail" style="font-style:italic">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <b>Password:</b>
                        </td>
                        <td>
                            <input type="password" name="password" value='' />
                        </td>
                    </tr>
                    <!-- <tr>
                        <td>
                            <b>Confirm Password:</b>
                        </td>
                        <td>
                            <input type="password" name="cpassword" />
                        </td>
                    </tr> -->
                    <tr>
                        <td>
                            <b>Phone:</b> </td>
                        <!-- had to set a max length to my tel field -->
                        <td>
                            <input type="number" name="phone" value="" maxlength="11" minlength="11">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <b> Gender:</b></td>
                        <td>

                            <input type="radio" name="gender" value="female">
                            <label for="female"><b>Female</b></label>
                            <input type="radio" name="gender" value="male">
                            <label for="male"><b>Male</b></label>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label for="country"><b>Country:</b></label>
                        </td>
                        <td>
                            <select name="country" id="country">
                                <option value="Nigeria">Nigeria</option>
                                <option value="China">China</option>
                                <option value="Uk">Uk</option>
                                <option value="Turkey">Turkey</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <b>Submit:</b>
                        </td>
                         <td>
                            <input type="submit" name="submit" value="Submit" class="submitbutton" >
                            
                        </td>
                        <!-- <div class="field-wrapper">
                                <input type="submit" onclick="showThankYou()">
                              </div> -->
                    </tr>



                </table>
            
            </fieldset>
        </div>
        </form>
 
</body>

</html>