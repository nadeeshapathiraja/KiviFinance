<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Finane Form 1</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
    .files input {
        outline: 2px dashed #92b0b3;
        outline-offset: -10px;
        -webkit-transition: outline-offset .15s ease-in-out, background-color .15s linear;
        transition: outline-offset .15s ease-in-out, background-color .15s linear;
        padding: 120px 0px 85px 35%;
        text-align: center !important;
        margin: 0;
        width: 100% !important;
    }

    .files input:focus {
        outline: 2px dashed #92b0b3;
        outline-offset: -10px;
        -webkit-transition: outline-offset .15s ease-in-out, background-color .15s linear;
        transition: outline-offset .15s ease-in-out, background-color .15s linear;
        border: 1px solid #92b0b3;
    }

    .files {
        position: relative
    }

    .files:after {
        pointer-events: none;
        position: absolute;
        top: 60px;
        left: 0;
        width: 50px;
        right: 0;
        height: 56px;
        content: "";
        background-image: url(https://image.flaticon.com/icons/png/128/109/109612.png);
        display: block;
        margin: 0 auto;
        background-size: 100%;
        background-repeat: no-repeat;
    }

    .color input {
        background-color: #f1f1f1;
    }

    .files:before {
        position: absolute;
        bottom: 10px;
        left: 0;
        pointer-events: none;
        width: 100%;
        right: 0;
        height: 57px;
        content: " or drag it here. ";
        display: block;
        margin: 0 auto;
        color: #2ea591;
        font-weight: 600;
        text-transform: capitalize;
        text-align: center;
    }

    body {
        background-color: #DCDCDC;
    }
    </style>
</head>

<body>

    <Form action="Form1.php" method="post">
        <div class="container-fluid" style="width: 1300px; margin-bottom: 50px; margin-top: 100px;
        background-color:white;">
            <br>
            <!-- Part 1 -->
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="title">Title</label>
                        <select id="title" name="title" class="form-control" required>
                            <option selected value="">CHOOSE...</option>
                            <option value="Doctor">Doctor</option>
                            <option value="Miss">Miss</option>
                            <option value="Mister">Mister</option>
                            <option value="Mrs">Mrs</option>
                            <option value="Ms">Ms</option>
                            <option value="Unknown">Unknown</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Middle Name</label>
                        <input type="text" class="form-control" id="middle_name" name="middle_name" required>
                    </div>
                    <div class="form-group">
                        <label for="gender">Gender</label>
                        <select id="gender" name="gender" class="form-control" required>
                            <option selected value="">CHOOSE...</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Unknown">Unknown</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Date Of Birth(DD/MM/YYYY)</label>
                        <input type="date" class="form-control" placeholder="Borrower must be at least 18 years of age"
                            id="dob" name="dob" required>
                    </div>
                    <div class="form-group">
                        <label>Phone Work</label>
                        <input type="tel" class="form-control" id="work_phone" name="work_phone">
                    </div>
                    <div class="form-group">
                        <label>Email Address</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label>First Name</label>
                        <input type="text" class="form-control" id="first_name" name="first_name" required>
                    </div>
                    <div class="form-group">
                        <label>Surname </label>
                        <input type="text" class="form-control" id="surname" name="surname" required>
                    </div>
                    <div class="form-group">
                        <label>Marital Status</label>
                        <select id="marital_status" name="marital_status" class="form-control" required>
                            <option selected value="">CHOOSE...</option>
                            <option value="Single">Single</option>
                            <option value="Married/Defacto/Civil Union">Married/Defacto/Civil Union</option>
                            <option value="Unknown">Unknown</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Phone Home</label>
                        <input type="text" class="form-control" id="home_phone" name="home_phone">
                    </div>
                    <div class="form-group">
                        <label>Mobile</label>
                        <input type="text" class="form-control" id="mobile" name="mobile" required>
                    </div>
                    <div class="form-group">
                        <label>Drivers Licence(Required for Loan)</label>
                        <select id="drivers_Licence" name="drivers_Licence" class="form-control" required>
                            <option selected value="">CHOOSE...</option>
                            <option value="Full">Full</option>
                            <option value="Restricted">Restricted</option>
                            <option value="Learners">Learners</option>
                            <option value="International">International</option>
                            <option value="Not Held">Not Held</option>
                        </select>
                    </div>
                </div>
            </div>

            <!-- Part 2 -->
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group files">
                        <label>Upload Your File </label>
                        <input type="file" class="form-control" multiple="">
                    </div>
                </div>
            </div>

            <!-- Part 3 -->
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Best time and phone number to contact</label>
                                <input type="text" class="form-control" id="time_contact" name="time_contact">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>NZ Resident (If no, we will require a co-borrower who is a permanent resident)
                                </label>
                                <div class="row">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-3">
                                        <input class="form-check-input" type="radio" name="checkResident"
                                            id="checkResident" value="Yes" checked>
                                        <label class="form-check-label">
                                            Yes
                                        </label>
                                    </div>
                                    <div class="col-md-3">
                                        <input class="form-check-input" type="radio" name="checkResident"
                                            id="checkResident" value="No" checked>
                                        <label class="form-check-label">
                                            No
                                        </label>
                                    </div>
                                    <div class="col-md-5"></div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>How many dependent children do you have?</label>
                                <select id="childern_count" name="childern_count" class="form-control" required>
                                    <option selected value="">CHOOSE...</option>
                                    <?php
                                    for ($i = 1; $i <= 10; $i++) {

                                        echo "<option value=" . $i . ">" . $i . "</option>";
                                    }
                                    ?>
                                </select>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Current Address</label>
                                <input type="text" class="form-control" id="current_addres" name="current_addres"
                                    required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Current Address Status</label>
                                <select id="address_status" name="address_status" class="form-control" required>
                                    <option selected value="">CHOOSE...</option>
                                    <option value="Boarding">Boarding</option>
                                    <option value="Renting">Renting</option>
                                    <option value="Own a house with a mortgage">Own a house with a mortgage</option>
                                    <option value="Own a house that is freehold">Own a house that is freehold</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>How long have you been living here?</label>
                                <select id="living_year" name="living_year" class="form-control" required>
                                    <option selected value="">CHOOSE...</option>
                                    <?php
                                    for ($i = 0; $i <= 9; $i++) {

                                        echo "<option value=" . $i . ">" . $i . " Years</option>";
                                    }
                                    ?>
                                    <option value="10">10+ Years</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>How long have you been living here?</label>
                                <select id="living_month" name="living_month" class="form-control" required>
                                    <option selected value="">CHOOSE...</option>
                                    <?php
                                    for ($i = 0; $i <= 11; $i++) {

                                        echo "<option value=" . $i . ">" . $i . " Months </option>";
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Current Occupation</label>
                                <input type="text" class="form-control" id="current_ocupation" name="current_ocupation"
                                    required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Current Employer</label>
                                <input type="text" class="form-control" id="current_employee" name="current_employee"
                                    required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Employed Status</label>
                                <select id="employee_status" name="employee_status" class="form-control" required>
                                    <option selected value="">CHOOSE...</option>
                                    <option value="Full Time">Full Time</option>
                                    <option value="Part Time">Part Time</option>
                                    <option value="Self Employed">Self Employed</option>
                                    <option value="Unemployed">Unemployed</option>
                                    <option value="Beneficiary">Beneficiary</option>
                                    <option value="Retired">Retired</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Permanent Employment</label>
                                <div class="row">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-3">
                                        <input class="form-check-input" type="radio" name="permanent_employee"
                                            id="permanent_employee" value="yes" checked required>
                                        <label class="form-check-label">
                                            Yes
                                        </label>
                                    </div>
                                    <div class="col-md-3">
                                        <input class="form-check-input" type="radio" name="permanent_employee"
                                            id="permanent_employee" value="no" checked>
                                        <label class="form-check-label">
                                            No
                                        </label>
                                    </div>
                                    <div class="col-md-5"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">

                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>How long have you been working there?</label>
                                <select id="working_year" name="working_year" class="form-control" required>
                                    <option selected value="">CHOOSE...</option>
                                    <?php
                                    for ($i = 0; $i <= 9; $i++) {

                                        echo "<option value=" . $i . ">" . $i . " Years</option>";
                                    }
                                    ?>
                                    <option value="10">10+ Years</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>How long have you been working there?</label>
                                <select id="workin_month" name="workin_month" class="form-control" required>
                                    <option selected value="">CHOOSE...</option>
                                    <?php
                                    for ($i = 0; $i <= 11; $i++) {

                                        echo "<option value=" . $i . ">" . $i . " Months </option>";
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Comments / Questions (max 250 characters)</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" id="comment"
                                    name="comment" rows="3"></textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Where Did You Hear About Kiwi Auto Trader</label>
                                <div class="row">
                                    <div class="col-md-12">
                                        <input type="checkbox" name="check_list[]" value="Friend or Relative">
                                        <label class="form-check-label">
                                            Friend or Relative
                                        </label>
                                        <input type="checkbox" name="check_list[]" value="Google">
                                        <label class="form-check-label">
                                            Google
                                        </label>
                                        <input type="checkbox" name="check_list[]" value="Facebook">
                                        <label class="form-check-label">
                                            Facebook
                                        </label>
                                        <input type="checkbox" name="check_list[]" value="Radio">
                                        <label class="form-check-label">
                                            Radio
                                        </label>
                                        <input type="checkbox" name="check_list[]" value="BillBoard">
                                        <label class="form-check-label">
                                            BillBoard
                                        </label>
                                    </div>
                                </div>
                                <div class="row" style="margin-top: 5px;">
                                    <div class="col-md-12">
                                        <input type="checkbox" name="check_list[]" value="News">
                                        <label class="form-check-label">
                                            News
                                        </label>
                                        <input type="checkbox" name="check_list[]" value="Mortgage Advisor">
                                        <label class="form-check-label">
                                            Mortgage Advisor
                                        </label>
                                        <input type="checkbox" name="check_list[]" value="Other">
                                        <label class="form-check-label">
                                            Other
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <input class="btn btn-primary" style="width: 100%;" type="submit" value="NEXT">
                </div>
            </div>
        </div>

        </div>
    </Form>

</body>

</html>

<?php
session_start();

$_SESSION['title'] = $_POST['title'];
$_SESSION['middle_name'] = $_POST['middle_name'];
$_SESSION['gender'] = $_POST['gender'];
$_SESSION['dob'] = $_POST['dob'];
$_SESSION['work_phone'] = $_POST['work_phone'];
$_SESSION['email'] = $_POST['email'];
$_SESSION['first_name'] = $_POST['first_name'];
$_SESSION['surname'] = $_POST['surname'];
$_SESSION['marital_status'] = $_POST['marital_status'];
$_SESSION['home_phone'] = $_POST['home_phone'];
$_SESSION['mobile'] = $_POST['mobile'];
$_SESSION['drivers_Licence'] = $_POST['drivers_Licence'];
$_SESSION['time_contact'] = $_POST['time_contact'];
$_SESSION['checkResident'] = $_POST['checkResident'];
$_SESSION['childern_count'] = $_POST['childern_count'];
$_SESSION['current_addres'] = $_POST['current_addres'];
$_SESSION['address_status'] = $_POST['address_status'];
$_SESSION['living_year'] = $_POST['living_year'];
$_SESSION['living_month'] = $_POST['living_month'];
$_SESSION['current_ocupation'] = $_POST['current_ocupation'];
$_SESSION['current_employee'] = $_POST['current_employee'];
$_SESSION['employee_status'] = $_POST['employee_status'];
$_SESSION['permanent_employee'] = $_POST['permanent_employee'];
$_SESSION['working_year'] = $_POST['working_year'];
$_SESSION['workin_month'] = $_POST['workin_month'];
$_SESSION['comment'] = $_POST['comment'];
$_SESSION['source'] = $_POST['source'];

?>