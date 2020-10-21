<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<style>
/* Default */
* {
    box-sizing: border-box;
}

body {
    background-color: #f1f1f1;
}

#finance_form {
    background-color: #ffffff;
    margin: 100px auto;
    font-family: Raleway;
    padding: 40px;
    width: 90%;
    min-width: 300px;
}

h1 {
    text-align: center;
}

input {
    padding: 10px;
    width: 100%;
    font-size: 17px;
    font-family: Raleway;
    border: 1px solid #aaaaaa;
}

/* Mark input boxes that gets an error on validation: */
input.invalid {
    background-color: #ffdddd;
}

/* Hide all steps by default: */
.tab {
    display: none;
}

button {
    background-color: #4CAF50;
    color: #ffffff;
    border: none;
    padding: 10px 20px;
    font-size: 17px;
    font-family: Raleway;
    cursor: pointer;

}

button:hover {
    opacity: 0.8;
}

#prevBtn {
    background-color: #bbbbbb;
}

/* Make circles that indicate the steps of the form: */
.step {
    height: 15px;
    width: 15px;
    margin: 0 2px;
    background-color: #bbbbbb;
    border: none;
    border-radius: 50%;
    display: inline-block;
    opacity: 0.5;
}

.step.active {
    opacity: 1;
}

/* Mark the steps that are finished and valid: */
.step.finish {
    background-color: #4CAF50;
}

/* Custom */
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
</style>

<body>

    <form id="finance_form" name="finance_form" method="post" action="#" enctype="multipart/form-data">

        <!-- One "tab" for each step in the form: -->
        <div class="tab">
            <div class="container-fluid" style="width: 1300px; margin-bottom: 50px; margin-top: 100px;
        background-color:white;">
                <br>
                <!-- Part 1 -->
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="title">Title</label><span class="required-mark text-danger">*</span>
                            <select id="title" name="title" class="form-control require_class" required>
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
                            <label>Middle Name</label><span class="required-mark text-danger">*</span>
                            <input type="text" class="form-control require_class" id="middle_name" name="middle_name"
                                required>
                        </div>
                        <div class="form-group">
                            <label for="gender">Gender</label><span class="required-mark text-danger">*</span>
                            <select id="gender" name="gender" class="form-control" required>
                                <option selected value="">CHOOSE...</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                <option value="Unknown">Unknown</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Date Of Birth(DD/MM/YYYY)</label><span class="required-mark text-danger">*</span>
                            <input type="date" class="form-control require_class"
                                placeholder="Borrower must be at least 18 years of age" id="dob" name="dob" required>
                        </div>
                        <div class="form-group">
                            <label>Phone Work</label>
                            <input type="number" class="form-control" id="work_phone" name="work_phone">
                        </div>
                        <div class="form-group">
                            <label>Email Address</label><span class="required-mark text-danger">*</span>
                            <input type="email" class="form-control require_class" id="email" name="email" required>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>First Name</label><span class="required-mark text-danger">*</span>
                            <input type="text" class="form-control require_class" id="first_name" name="first_name"
                                required>
                        </div>
                        <div class="form-group">
                            <label>Surname </label><span class="required-mark text-danger">*</span>
                            <input type="text" class="form-control require_class" id="surname" name="surname" required>
                        </div>
                        <div class="form-group">
                            <label>Marital Status</label><span class="required-mark text-danger">*</span>
                            <select id="marital_status" name="marital_status" class="form-control require_class"
                                required>
                                <option selected value="">CHOOSE...</option>
                                <option value="Single">Single</option>
                                <option value="Married/Defacto/Civil Union">Married/Defacto/Civil Union</option>
                                <option value="Unknown">Unknown</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Phone Home</label>
                            <input type="number" class="form-control" id="home_phone" name="home_phone">
                        </div>
                        <div class="form-group">
                            <label>Mobile</label><span class="required-mark text-danger">*</span>
                            <input type="number" class="form-control require_class" id="mobile" name="mobile" required>
                        </div>
                        <div class="form-group">
                            <label>Drivers Licence(Required for Loan)</label><span
                                class="required-mark text-danger">*</span>
                            <select id="drivers_Licence" name="drivers_Licence" class="form-control require_class"
                                required>
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
                            <input type="file" name="driving_license" id="driving_license" class="form-control"
                                multiple="">
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
                                    <label>NZ Resident (If no, we will require a co-borrower who is a permanent
                                        resident)
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
                                    <label>How many dependent children do you have?</label><span
                                        class="required-mark text-danger">*</span>
                                    <select id="childern_count" name="childern_count" class="form-control require_class"
                                        required>
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
                                    <label>Current Address</label><span class="required-mark text-danger">*</span>
                                    <input type="text" class="form-control require_class" id="current_addres"
                                        name="current_addres" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Current Address Status</label><span
                                        class="required-mark text-danger">*</span>
                                    <select id="address_status" name="address_status" class="form-control require_class"
                                        required>
                                        <option selected value="">CHOOSE...</option>
                                        <option value="Boarding">Boarding</option>
                                        <option value="Renting">Renting</option>
                                        <option value="Own a house with a mortgage">Own a house with a mortgage</option>
                                        <option value="Own a house that is freehold">Own a house that is freehold
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>How long have you been living here?</label><span
                                        class="required-mark text-danger">*</span>
                                    <select id="living_year" name="living_year" class="form-control require_class"
                                        required>
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
                                    <label>How long have you been living here?</label><span
                                        class="required-mark text-danger">*</span>
                                    <select id="living_month" name="living_month" class="form-control require_class"
                                        required>
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
                                    <label>Current Occupation</label><span class="required-mark text-danger">*</span>
                                    <input type="text" class="form-control" id="current_ocupation"
                                        name="current_ocupation" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Current Employer</label><span class="required-mark text-danger">*</span>
                                    <input type="text" class="form-control" id="current_employee"
                                        name="current_employee" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Employed Status</label><span class="required-mark text-danger">*</span>
                                    <select id="employee_status" name="employee_status"
                                        class="form-control require_class" required>
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
                                    <label>Permanent Employment</label><span class="required-mark text-danger">*</span>
                                    <div class="row">
                                        <div class="col-md-1"></div>
                                        <div class="col-md-3">
                                            <input class="form-check-input require_class" type="radio"
                                                name="permanent_employee" id="permanent_employee" value="yes" checked
                                                required>
                                            <label class="form-check-label">
                                                Yes
                                            </label>
                                        </div>
                                        <div class="col-md-3">
                                            <input class="form-check-input" type="radio" name="permanent_employee"
                                                id="permanent_employee" value="no">
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
                                    <label>How long have you been working there?</label><span
                                        class="required-mark text-danger">*</span>
                                    <select id="working_year" name="working_year" class="form-control require_class"
                                        required>
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
                                    <label>How long have you been working there?</label><span
                                        class="required-mark text-danger">*</span>
                                    <select id="workin_month" name="workin_month" class="form-control require_class"
                                        required>
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
            </div>
        </div>

        <div class="tab">
            <div class="container-fluid" style="width: 1300px; margin-bottom: 50px; margin-top: 100px;
        background-color:white;">

                <!-- row 1 -->
                <div class="row">
                    <div class="col-md-12">
                        <h4>LOAN DETAILS</h4>
                        <div class="form-group">
                            <label>Loan Amount</label><span class="required-mark text-danger">*</span>
                            <input type="number" class="form-control" id="loan_amount" name="loan_amount" required>
                        </div>
                    </div>
                </div>

                <!-- row 2 -->
                <div class="row">
                    <div class="col-md-12">
                        <h4>DETAILS – VEHICLE TO BE PURCHASED</h4>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Make</label>
                                    <input type="text" class="form-control" id="purchase_make" name="purchase_make">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Year</label>
                                    <input type="number" class="form-control" id="purchase_year" name="purchase_year">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Model</label>
                                    <input type="text" class="form-control" id="purchase_model" name="purchase_model">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Color</label>
                                    <input type="text" class="form-control" id="purchase_color" name="purchase_color">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Registration Number</label>
                                    <input type="text" class="form-control" id="purchase_register_number"
                                        name="purchase_register_number">
                                </div>
                            </div>
                            <div class="col-md-6"></div>
                        </div>
                    </div>
                </div>

                <!-- row 3 -->
                <div class="row">
                    <div class="col-md-12">
                        <h4>DETAILS – TRADE IN VEHICLE</h4>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Make</label>
                                    <input type="text" class="form-control" id="trade_make" name="trade_make">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Year</label>
                                    <input type="number" class="form-control" id="trade_year" name="trade_year">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Model</label>
                                    <input type="text" class="form-control" id="trade_model" name="trade_model">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Color</label>
                                    <input type="text" class="form-control" id="trade_color" name="trade_color">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Warrant of Fitness Expiry</label>
                                    <input type="date" class="form-control" id="trade_warranty" name="trade_warranty">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Renewal of Vehicle Licence (rego) Due Date</label>
                                    <input type="date" class="form-control" id="trade_renewal" name="trade_renewal">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">

                                <div class="form-group files">
                                    <label>Upload Your File </label>
                                    <input type="file" name="vehicle_image_file" id="vehicle_image_file"
                                        class="form-control" multiple="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- row 4 -->
                <div class="row">
                    <div class="col-md-12">
                        <h4>DETAILS OF YOUR INCOME</h4>
                        <div class="input_fields_wrap">
                            <!-- <div class="table-responsive" style="width: 500px;"> -->
                            <table class="table table-bordered " id="dynamic_field">
                                <tr>
                                    <td>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label>Income Amount</label><span
                                                    class="required-mark text-danger">*</span>
                                                <input type="number" class="form-control" id="income_amount[]"
                                                    name="income_amount[]" required value="" onchange="myFunction()">
                                            </div>
                                            <div class="col-md-4">
                                                <label>Income Type</label><span
                                                    class="required-mark text-danger">*</span>
                                                <select id="income_type[]" name="income_type[]" class="form-control"
                                                    required>
                                                    <option selected value="">CHOOSE...</option>
                                                    <option value="Salary or Wages">Salary or Wages</option>
                                                    <option value="Benifit Income">Benifit Income</option>
                                                    <option value="Self Employed Income">Self Employed Income</option>
                                                    <option value="Seasonal Income">Seasonal Income</option>
                                                    <option value="Retirement Income">Retirement Income</option>
                                                    <option value="Unknown">Unknown</option>
                                                    <option value="Other">Other</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4">
                                                <label>Income Frequency</label><span
                                                    class="required-mark text-danger">*</span>
                                                <select id="income_frequency[]" name="income_frequency[]"
                                                    class="form-control" required>
                                                    <option selected value="">CHOOSE...</option>
                                                    <option value="Weekly">Weekly</option>
                                                    <option value="Fortnightly">Fortnightly</option>
                                                    <option value="Monthly">Monthly</option>
                                                </select>
                                            </div>
                                        </div>
                                    </td>
                                </tr><br>
                                <tr></tr>
                                <tr><button type="button" name="income_add" id="income_add" class="btn btn-success">Add
                                        More</button></tr><br>
                            </table>

                            <!-- </div> -->
                        </div>


                        <!-- div income function add field and cal income -->
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Total Income</label>
                            <div class="col-sm-10">
                                <input type="text" readonly class="form-control-plaintext" id="totalIncome"
                                    name="totalIncome">
                            </div>
                        </div>

                        <script>
                        function myFunction() {
                            total = 0
                            $("input[name='income_amount[]']").each(function() {
                                total = parseInt(total) + parseInt($(this).val())
                            });
                            totalIncome.value = total;
                        }
                        </script>

                    </div>
                </div>


                <!-- row 5 -->
                <div class="row">
                    <div class="col-md-12">
                        <h4>HOUSING EXPENSES</h4>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Mortgage / Rent / Board Expenses </label><span
                                        class="required-mark text-danger">*</span>
                                    <input type="text" class="form-control" id="motage_rent" name="motage_rent"
                                        required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Frequency</label>
                                    <select id="frequency_motage" name="frequency_motage" class="form-control">
                                        <option selected>CHOOSE...</option>
                                        <option value="Weekly">Weekly</option>
                                        <option value="Fortnightly">Fortnightly</option>
                                        <option value="Monthly">Monthly</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Existing Loan repayments / HPs / Credit Cards Expenses</label>
                                    <input type="text" class="form-control" id="Loan_creditcard_expence"
                                        name="Loan_creditcard_expence" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Income Frequency</label>
                                    <select id="income_frequency" name="income_frequency" class="form-control">
                                        <option selected>CHOOSE...</option>
                                        <option value="Weekly">Weekly</option>
                                        <option value="Fortnightly">Fortnightly</option>
                                        <option value="Monthly">Monthly</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- row 6 -->
                <div class="row">
                    <div class="col-md-12">
                        <h4>YOUR ASSETS</h4>
                        <div class="input_fields_wrap2">
                            <!-- <div class="table-responsive" style="width: 500px;"> -->
                            <table class="table table-bordered " id="dynamic_field2">
                                <tr>
                                    <td>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>Asset Type</label>
                                                            <select id="asset_type[]" name="asset_type[]"
                                                                class="form-control">
                                                                <option selected>CHOOSE...</option>
                                                                <option value="Property">Property</option>
                                                                <option value="Household Asset">Household Asset</option>
                                                                <option value="Motor Vehicle">Motor Vehicle</option>
                                                                <option value="Savings">Savings</option>
                                                                <option value="Shares">Shares</option>
                                                                <option value="Others">Others</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>Value</label>
                                                            <input type="text" class="form-control" id="asset_value[]"
                                                                name="asset_value[]">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>Money Owing</label>
                                                            <input type="text" class="form-control"
                                                                id="asset_money_owing[]" name="asset_money_owing[]">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-8">
                                                        <div class="form-group">
                                                            <label>Repayment</label>
                                                            <input type="text" class="form-control"
                                                                id="asset_repayment[]" name="asset_repayment[]">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>Frequency</label>
                                                            <div class="row">
                                                                <div class="col-md-1"></div>
                                                                <div class="col-md-3">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="asset_frequency_Radio[]"
                                                                        id="asset_frequency_Radio[]" value="Weekly"
                                                                        checked>
                                                                    <label class="form-check-label">
                                                                        Weekly
                                                                    </label>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="asset_frequency_Radio[]"
                                                                        id="asset_frequency_Radio[]" value="Fortnight"
                                                                        checked>
                                                                    <label class="form-check-label">
                                                                        Fortnight
                                                                    </label>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="asset_frequency_Radio[]"
                                                                        id="asset_frequency_Radio[]" value="Monthly"
                                                                        checked>
                                                                    <label class="form-check-label">
                                                                        Monthly
                                                                    </label>
                                                                </div>
                                                                <div class="col-md-2"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- </div> -->
                                    </td>
                                </tr><br>
                                <tr></tr>
                                <tr><button type="button" name="asset_add" id="asset_add" class="btn btn-success">Add
                                        More</button></tr><br>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- row 7 -->
                <div class="row">
                    <div class="col-md-12">
                        <h4>LIABILITIES</h4>
                        <div class="input_fields_wrap2">
                            <!-- <div class="table-responsive" style="width: 500px;"> -->
                            <table class="table table-bordered " id="dynamic_field3">
                                <tr>
                                    <td>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Asset Type</label>
                                                            <input type="text" class="form-control"
                                                                id="liabilities_asset_type[]"
                                                                name="liabilities_asset_type[]">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Value</label>
                                                            <input type="text" class="form-control"
                                                                id="liabilities_value[]" name="liabilities_value[]">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Money Owing</label>
                                                            <input type="text" class="form-control"
                                                                id="liabilities_money_owing[]"
                                                                name="liabilities_money_owing[]">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Repayment</label>
                                                            <input type="text" class="form-control"
                                                                id="liabilities_repayment[]"
                                                                name="liabilities_repayment[]">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Frequency</label>
                                                            <div class="row">
                                                                <div class="col-md-1"></div>
                                                                <div class="col-md-3">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="liabilities_frequency_Radio[]"
                                                                        id="liabilities_frequency_Radio[]"
                                                                        value="Weekly" checked>
                                                                    <label class="form-check-label">
                                                                        Weekly
                                                                    </label>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="liabilities_frequency_Radio[]"
                                                                        id="liabilities_frequency_Radio[]"
                                                                        value="Fortnight" checked>
                                                                    <label class="form-check-label">
                                                                        Fortnight
                                                                    </label>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="liabilities_frequency_Radio[]"
                                                                        id="liabilities_frequency_Radio[]"
                                                                        value="Monthly" checked>
                                                                    <label class="form-check-label">
                                                                        Monthly
                                                                    </label>
                                                                </div>
                                                                <div class="col-md-2"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- </div> -->
                                    </td>
                                </tr><br>
                                <tr></tr>
                                <tr><button type="button" name="liabilities_add" id="liabilities_add"
                                        class="btn btn-success">Add
                                        More</button></tr><br>
                            </table>
                        </div>
                        <br>
                    </div>
                </div>

            </div>
        </div>

        <div class="tab">
            <div class="container-fluid" style="width: 1300px; margin-bottom: 50px; margin-top: 100px;
        background-color:white;">
                <div class="row">
                    <div class="col-md-12">
                        <p class="MsoNormal">
                            Acceptance of Terms and Conditions
                        </p>
                        <p class="MsoNormal">
                            Privacy Act Authorisation
                        </p>
                        <p class="MsoNormal">
                            1 Kiwi Auto Trader Ltd (hereinafter referred to as “we” and “us”) need to collect private
                            information from you, from others and share your information with others to:
                        </p>
                        <p class="MsoNormal">
                            assess your application for credit;
                        </p>
                        <p class="MsoNormal">
                            help us administer any loan and/or security you have with us;
                        </p>
                        <p class="MsoNormal">
                            enforce or defend our rights or collect any money owed by you;
                        </p>
                        <p class="MsoNormal">
                            offer a service or market a product to you that is either our product or a product that we
                            market or administer;
                        </p>
                        <p class="MsoNormal">
                            conduct market research, where the information is combined with other information and in a
                            form,
                            that does not identify you;
                        </p>
                        <p class="MsoNormal">
                            meet our internal operational requirements, such as for credit and risk management, system
                            or
                            product development and planning, insurance, audit and administrative purposes; and
                            facilitate the transfer or assignment our rights.
                        </p>
                        <p class="MsoNormal">
                            2. By signing this authority, you consent and authorise us and any referring broker or motor
                            vehicle dealer to:
                        </p>
                        <p class="MsoNormal">
                            (Note: if you do not consent your application will not be able to be considered by Kiwi Auto
                            Trader.)
                        </p>
                        <p class="MsoNormal">
                            Provide your personal information to a credit reporter, including Equifax New Zealand
                            Information Services and Solutions Limited or Illion, for identity verification, credit
                            reporting
                            (including for comprehensive credit reporting), monitoring services, or lodging a default on
                            your credit file both now and in the future.
                        </p>
                        <p class="MsoNormal">
                            Obtain information from, or provide personal information to, the Ministry of Justice to find
                            out
                            whether you have any outstanding fines.
                        </p>
                        <p class="MsoNormal">
                            Obtain and access your driver licence record using NZTA’s Driver Check service both now and
                            in
                            the
                            future including receiving notifications from Driver Check if information about
                            your driver licence changes.
                        </p>
                        <p class="MsoNormal">
                            Share your driver licence information with a credit reporter and/or the Ministry of Justice.
                            Disclosure of your driver licence number to a credit reporter or the Ministry of Justice is
                            voluntary so you can ask us not to disclose it in writing when you complete this
                            authorisation.
                        </p>
                        <p class="MsoNormal">
                            Make disclosure of any personal information to any third party that provides services to us
                            including but not limited to any bank, government department or agency, law firm, other
                            professional, debt collection agency, market research firm, insurer, potential assignee,
                            transferee
                            or other person whom we anticipate entering into contractual relations in connection
                            with this loan, any third party who has or may have a financial interest in this loan, or
                            any
                            other
                            person or organisation authorised by you, who has agreed to only collect, hold, use, and
                            share your personal information for the purposes for which it has been given to them.
                        </p>
                        <p class="MsoNormal">
                            Disclose and receive your personal information, including but not limited to details of this
                            loan,
                            any associated loan application, any financial dealings you may have with us, your
                            address, telephone number(s), the place where you work, details of your income and any
                            convictions
                            you may have, with the organisations set out in this clause and in relation to the
                            purposes described in clauses 1. You have a right to ask us not to use your personal
                            information
                            for
                            the purpose of marketing or offering a service to you.
                        </p>
                        <p class="MsoNormal">
                            3. You have the right to know the agencies that may hold your personal information and a
                            right
                            to
                            correct it if it is wrong. The addresses of agencies that may hold your personal
                            information are:
                        </p>
                        <p class="MsoNormal">
                            Electronic Communications4. You consent to us communicating with you electronically with
                            respect
                            to
                            your application and/or loan. You also consent to us sending you marketing
                            material and/or messageselectronically or otherwise, even after you have repaid your loan in
                            full.Declaration5. You declare and certify that you have read and understood this
                            authorisation and the loan documentation, the information provided is true and correct in
                            all
                            respects, you are not an undischarged bankrupt and you are no less than 18 years of age
                            and that you have disclosed any other names that you are currently known as and you aware
                            that
                            if
                            you have deliberately provided false information in this application you could face
                            fraud or dishonesty charges in a Court.
                        </p>

                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="checkbox">
                            <label><input type="checkbox" value="agree" required> I have read and agreed to the Privecy
                                Statement</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div style="overflow:auto;">
            <div style="float:right;">
                <button class="btn btn-danger" style="width: 100%;" id="prevBtn"
                    onclick="nextPrev(-1)">PREVIOUS</button>
                <button class="btn btn-primary" style="width: 100%;" id="nextBtn" onclick="nextPrev(1)">NEXT
                    STEP</button>
            </div>
        </div>
        <!-- Circles which indicates the steps of the form: -->
        <div style="text-align:center;margin-top:40px;">
            <span class="step"></span>
            <span class="step"></span>
        </div>
    </form>

    <!-- Default Sctript -->
    <script>
    var currentTab = 0; // Current tab is set to be the first tab (0)
    showTab(currentTab); // Display the current tab

    function showTab(n) {
        // This function will display the specified tab of the form...
        var x = document.getElementsByClassName("tab");
        x[n].style.display = "block";
        //... and fix the Previous/Next buttons:
        if (n == 0) {
            document.getElementById("prevBtn").style.display = "none";
        } else {
            document.getElementById("prevBtn").style.display = "inline";
        }
        if (n == (x.length - 1)) {
            document.getElementById("nextBtn").innerHTML = "Submit";
            // document.getElementById("nextBtn").setAttribute("type", submit);
        } else {
            document.getElementById("nextBtn").innerHTML = "Next";
        }

        //... and run a function that will display the correct step indicator:
        fixStepIndicator(n)
    }

    function nextPrev(n) {
        // This function will figure out which tab to display
        var x = document.getElementsByClassName("tab");
        // Exit the function if any field in the current tab is invalid:
        if (n == 1 && !validateForm()) return false;
        // Hide the current tab:
        x[currentTab].style.display = "none";
        // Increase or decrease the current tab by 1:
        currentTab = currentTab + n;
        // if you have reached the end of the form...
        if (currentTab >= x.length) {
            // ... the form gets submitted:
            document.getElementById("finance_form").submit();
            return false;
        }
        // Otherwise, display the correct tab:
        showTab(currentTab);
    }

    function validateForm() {
        // This function deals with validation of the form fields
        var x, y, i, valid = true;
        x = document.getElementsByClassName("tab");
        y = x[currentTab].getElementsByClassName("require_class");
        // A loop that checks every input field in the current tab:
        for (i = 0; i < y.length; i++) {

            if (y[i].value == "") {
                // add an "invalid" class to the field:
                y[i].className += " invalid";
                // and set the current valid status to false
                valid = false;
            }
        }
        // If the valid status is true, mark the step as finished and valid:
        if (valid) {
            document.getElementsByClassName("step")[currentTab].className += " finish";
        }
        return valid; // return the valid status
    }

    function fixStepIndicator(n) {
        // This function removes the "active" class of all steps...
        var i, x = document.getElementsByClassName("step");
        for (i = 0; i < x.length; i++) {
            x[i].className = x[i].className.replace(" active", "");
        }
        //... and adds the "active" class on the current step:
        x[n].className += " active";
    }
    </script>

    <!-- Custome Script -->
    <script>
    // Income Fieldset
    $(document).ready(function() {
        var i = 1;
        $('#income_add').click(function() {
            i++;
            $('#dynamic_field').append('<tr id="row' +
                i +
                '"><td><div><button type="button" name="remove" id="' +
                i +
                '" class="btn btn-danger btn_remove">X</button></div><div class="row"><div class="col-md-4"><label>Income Amount</label><input type="number" class="form-control" id="income_amount[]"name="income_amount[]" value="" onchange="myFunction()"></div><div class="col-md-4"><label>Income Type</label><select id="income_type[]" name="income_type[]" class="form-control"><option selected>CHOOSE...</option><option value="Salary or Wages">Salary or Wages</option><option value="Benifit Income">Benifit Income</option><option value="Self Employed Income">Self Employed Income</option><option value="Seasonal Income">Seasonal Income</option><option value="Retirement Income">Retirement Income</option><option value="Unknown">Unknown</option><option value="Other">Other</option></select></div><div class="col-md-4"><label>Income Frequency</label><select id="income_frequency[]" name="income_frequency[]"class="form-control"><option selected>CHOOSE...</option><option value="Weekly">Weekly</option><option value="Fortnightly">Fortnightly</option><option value="Monthly">Monthly</option></select></div></div></td></tr>'
            );
        });

        $(document).on('click', '.btn_remove', function() {
            var button_id = $(this).attr("id");
            $('#row' + button_id + '').remove();
            myFunction()
        });
    });

    // Asset Fieldset
    $(document).ready(function() {
        var i = 1;
        $('#asset_add').click(function() {
            i++;
            $('#dynamic_field2').append('<tr id="row' + i +
                '"><td><div><button type="button" name="remove" id="' +
                i +
                '" class="btn btn-danger btn_remove">X</button></div><div class="row"><div class="col-md-12"><div class="row"><div class="col-md-4"><div class="form-group"><label>Asset Type</label><select id="asset_type[]" name="asset_type[]" class="form-control"><option selected>CHOOSE...</option><option value="Property">Property</option><option value="Household Asset">Household Asset</option><option value="Motor Vehicle">Motor Vehicle</option><option value="Savings">Savings</option><option value="Shares">Shares</option><option value="Others">Others</option></select></div></div><div class="col-md-4"><div class="form-group"><label>Value</label><input type="text" class="form-control" id="asset_value[]" name="asset_value[]"></div></div><div class="col-md-4"><div class="form-group"><label>Money Owing</label><input type="text" class="form-control" id="asset_money_owing[]" name="asset_money_owing[]"></div></div></div><div class="row"><div class="col-md-8"><div class="form-group"><label>Repayment</label><input type="text" class="form-control" id="asset_repayment[]" name="asset_repayment[]"></div></div><div class="col-md-4"><div class="form-group"><label>Frequency</label><div class="row"><div class="col-md-1"></div><div class="col-md-3"><input class="form-check-input" type="radio" name="asset_frequency_Radio[]" id="asset_frequency_Radio[]" value="Weekly" checked><label class="form-check-label">Weekly</label></div><div class="col-md-3"><input class="form-check-input" type="radio" name="asset_frequency_Radio[]" id="asset_frequency_Radio[]" value="Fortnight"checked><label class="form-check-label">Fortnight</label></div><div class="col-md-3"><input class="form-check-input" type="radio" name="asset_frequency_Radio[]"id="asset_frequency_Radio[]" value="Monthly" checked><label class="form-check-label">Monthly</label></div><div class="col-md-2"></div></div></div></div></div></div></div></td></tr>'
            );
        });

        $(document).on('click', '.btn_remove', function() {
            var button_id = $(this).attr("id");
            $('#row' + button_id + '').remove();
        });
    });

    // Liabilities Fieldset
    $(document).ready(function() {
        var i = 1;
        $('#liabilities_add').click(function() {
            i++;
            $('#dynamic_field3').append('<tr id="row' + i +
                '"><td><div><button type="button" name="remove" id="' +
                i +
                '" class="btn btn-danger btn_remove">X</button></div><div class="row"><div class="col-md-12"><div class="row"><div class="col-md-6"><div class="form-group"><label>Asset Type</label> <input type="text" class="form-control" id="liabilities_asset_type[]" name="liabilities_asset_type[]"></div></div><div class="col-md-6"><div class="form-group"><label>Value</label><input type="text" class="form-control" id="liabilities_value[]" name="liabilities_value[]"></div></div></div><div class="row"><div class="col-md-6"><div class="form-group"><label>Money Owing</label><input type="text" class="form-control"id="liabilities_money_owing[]" name="liabilities_money_owing[]"></div></div><div class="col-md-6"><div class="form-group"><label>Repayment</label><input type="text" class="form-control" id="liabilities_repayment[]" name="liabilities_repayment[]"></div></div></div><div class="row"><div class="col-md-6"><div class="form-group"><label>Frequency</label><div class="row"><div class="col-md-1"></div><div class="col-md-3"><input class="form-check-input" type="radio" name="liabilities_frequency_Radio[]" id="liabilities_frequency_Radio[]" value="Weekly" checked><label class="form-check-label">Weekly</label></div><div class="col-md-3"><input class="form-check-input" type="radio" name="liabilities_frequency_Radio[]" id="liabilities_frequency_Radio[]" value="Fortnight" checked><label class="form-check-label">Fortnight</label></div><div class="col-md-3"><input class="form-check-input" type="radio" name="liabilities_frequency_Radio[]"id="liabilities_frequency_Radio[]" value="Monthly" checked><label class="form-check-label">Monthly</label></div><div class="col-md-2"></div></div></div></div><div class="col-md-6"></div></div></div></div>  </td></tr>'
            );
        });

        $(document).on('click', '.btn_remove', function() {
            var button_id = $(this).attr("id");
            $('#row' + button_id + '').remove();
        });
    });
    </script>

</body>

</html>

<?php
if (isset($_POST['title'])) {

    //Form 1
    $title = $_REQUEST['title'];
    $middle_name = $_REQUEST['middle_name'];
    $gender = $_REQUEST['gender'];
    $dob = $_REQUEST['dob'];
    $work_phone = $_REQUEST['work_phone'];
    $email = $_REQUEST['email'];
    $first_name = $_REQUEST['first_name'];
    $surname = $_REQUEST['surname'];
    $marital_status = $_REQUEST['marital_status'];
    $home_phone = $_REQUEST['home_phone'];
    $mobile = $_REQUEST['mobile'];

    //page 1 file input
    // $drivers_Licence = $_REQUEST['drivers_Licence'];
    // $file_name1 = $_FILES['drivers_Licence']['name'];

    $time_contact = $_REQUEST['time_contact'];
    $checkResident = $_REQUEST['checkResident'];
    $childern_count = $_REQUEST['childern_count'];
    $current_addres = $_REQUEST['current_addres'];
    $address_status = $_REQUEST['address_status'];
    $living_year = $_REQUEST['living_year'];
    $living_month = $_REQUEST['living_month'];
    $current_ocupation = $_REQUEST['current_ocupation'];
    $current_employee = $_REQUEST['current_employee'];
    $employee_status = $_REQUEST['employee_status'];
    $permanent_employee = $_REQUEST['permanent_employee'];
    $working_year = $_REQUEST['working_year'];
    $workin_month = $_REQUEST['workin_month'];
    $comment = $_REQUEST['comment'];

    // Source Slect Check box
    // $check_list = $_REQUEST['check_list'];

    //Form 2
    $loan_amount = $_REQUEST['loan_amount'];
    $purchase_make = $_REQUEST['purchase_make'];
    $purchase_year = $_REQUEST['purchase_year'];
    $purchase_model = $_REQUEST['purchase_model'];
    $purchase_color = $_REQUEST['purchase_color'];
    $purchase_register_number = $_REQUEST['purchase_register_number'];
    $trade_make = $_REQUEST['trade_make'];
    $trade_year = $_REQUEST['trade_year'];
    $trade_model = $_REQUEST['trade_model'];
    $trade_color = $_REQUEST['trade_color'];
    $trade_warranty = $_REQUEST['trade_warranty'];
    $trade_renewal = $_REQUEST['trade_renewal'];

    // Add Vehicle Pic
    // $vehicle_image_file = $_REQUEST['vehicle_image_file'];
    // $file_name2 = $_FILES['vehicle_image_file']['name'];

    $income_amount = $_REQUEST['income_amount'];
    $income_type = $_REQUEST['income_type'];
    $income_frequency = $_REQUEST['income_frequency'];

    $totalIncome = $_REQUEST['totalIncome'];
    $motage_rent = $_REQUEST['motage_rent'];
    $frequency_motage = $_REQUEST['frequency_motage'];
    $Loan_creditcard_expence = $_REQUEST['Loan_creditcard_expence'];
    $income_frequency = $_REQUEST['income_frequency'];

    $asset_type = $_REQUEST['asset_type'];
    $asset_value = $_REQUEST['asset_value'];
    $asset_money_owing = $_REQUEST['asset_money_owing'];
    $asset_repayment = $_REQUEST['asset_repayment'];
    $asset_frequency_Radio = $_REQUEST['asset_frequency_Radio'];

    $liabilities_asset_type = $_REQUEST['liabilities_asset_type'];
    $liabilities_value = $_REQUEST['liabilities_value'];
    $liabilities_money_owing = $_REQUEST['liabilities_money_owing'];
    $liabilities_repayment = $_REQUEST['liabilities_repayment'];
    $liabilities_frequency_Radio = $_REQUEST['liabilities_frequency_Radio'];

    echo $title . "  " . $first_name;
    echo $first_name;


    //     $to = "pdncpathiraja@gmail.com";
    //     $subject = "HTML email";

    //     $message = "
    // <html>
    // <head>
    //     <title>HTML email</title>
    // </head>
    // <body>
    //     <p>This email contains HTML Tags!</p>
    //     <table>
    //         <tr>
    //             <th>Full Name</th>
    //             <th>Email</th>
    //         </tr>
    //         <tr>
    //             <td>'$first_name'</td>
    //             <td>'$email'</td>
    //         </tr>
    //     </table>
    // </body>
    // </html>
    // ";

    //     // Always set content-type when sending HTML email
    //     $headers = "MIME-Version: 1.0" . "\r\n";
    //     $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    //     // More headers
    //     $headers .= 'From: pdncpathiraja95@gmail.com' . "\r\n";

    //     mail($to, $subject, $message, $headers);
}
?>