<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Finane Form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
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
    <Form action="Form3.php" method="post">
        <div class="container-fluid" style="width: 1300px; margin-bottom: 50px; margin-top: 100px;
        background-color:white;">

            <!-- row 1 -->
            <div class="row">
                <div class="col-md-12">
                    <h4>LOAN DETAILS</h4>
                    <div class="form-group">
                        <label>Loan Amount</label>
                        <input type="number" class="form-control" id="loan_amount" name="loan_amount">
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
                                <input type="text" class="form-control" id="make" name="make">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Year</label>
                                <input type="number" class="form-control" id="year" name="year">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Model</label>
                                <input type="text" class="form-control" id="model" name="model">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Color</label>
                                <input type="text" class="form-control" id="color" name="color">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Registration Number</label>
                                <input type="text" class="form-control" id="register_number" name="register_number">
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
                                <input type="text" class="form-control" id="make" name="make">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Year</label>
                                <input type="number" class="form-control" id="year" name="year">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Model</label>
                                <input type="text" class="form-control" id="model" name="model">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Color</label>
                                <input type="text" class="form-control" id="color" name="color">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Warrant of Fitness Expiry</label>
                                <input type="date" class="form-control" id="warranty" name="warranty">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Renewal of Vehicle Licence (rego) Due Date</label>
                                <input type="date" class="form-control" id="renewal" name="renewal">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">

                            <div class="form-group files">
                                <label>Upload Your File </label>
                                <input type="file" class="form-control" multiple="">
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
                        <div class="card">
                            <div class="card-body">
                                <!-- Repeate One -->
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Income Amount</label>
                                            <input type="number" class="form-control" id="income_amount[]"
                                                name="income_amount[]">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Income Type</label>
                                            <select id="income_type[]" name="income_type[]" class="form-control">
                                                <option selected>CHOOSE...</option>
                                                <option value="Salary or Wages">Salary or Wages</option>
                                                <option value="Benifit Income">Benifit Income</option>
                                                <option value="Self Employed Income">Self Employed Income</option>
                                                <option value="Seasonal Income">Seasonal Income</option>
                                                <option value="Retirement Income">Retirement Income</option>
                                                <option value="Unknown">Unknown</option>
                                                <option value="Other">Other</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Income Frequency</label>
                                            <select id="income_frequency[]" name="income_frequency[]"
                                                class="form-control">
                                                <option selected>CHOOSE...</option>
                                                <option value="Weekly">Weekly</option>
                                                <option value="Fortnightly">Fortnightly</option>
                                                <option value="Monthly">Monthly</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Repete -->
                            </div>
                        </div>
                        <br>
                        <button class="btn btn-primary active add_field_button">+ADD INCOME</button><br><br>
                    </div>



                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Total Income</label>
                        <div class="col-sm-10">
                            <input type="text" readonly class="form-control-plaintext" id="totalIncome"
                                name="totalIncome" value="10000">
                        </div>
                    </div>

                </div>
            </div>

            <!-- div income function add field and cal income -->
            <script>
            $(document).ready(function() {
                var max_fields = 15; //maximum input boxes allowed
                var wrapper = $(".input_fields_wrap"); //Fields wrapper
                var add_button = $(".add_field_button"); //Add button ID
                var x = 1; //initlal text box count
                $(add_button).click(function(e) { //on add input button click
                    e.preventDefault();
                    if (x < max_fields) { //max input box allowed
                        x++; //text box increment
                        $(wrapper).append(
                            '<div class="card"><div class="card-body"><div style="cursor:pointer;background-color:red;" class="remove_field btn btn-info">X</div><div class="row"><div class="col-md-4"><div class="form-group"><label>Income Amount</label><input type="number" class="form-control" id="income_amount[]" name="income_amount[]"></div></div><div class="col-md-4"><div class="form-group"><label>Income Type</label><select id="income_type[]" name="income_type[]" class="form-control"><option selected>CHOOSE...</option><option value="Salary or Wages">Salary or Wages</option><option value="Benifit Income">Benifit Income</option><option value="Self Employed Income">Self Employed Income</option><option value="Seasonal Income">Seasonal Income</option><option value="Retirement Income">Retirement Income</option><option value="Unknown">Unknown</option><option value="Other">Other</option></select></div></div><div class="col-md-4"><div class="form-group"><label>Income Frequency</label><select id="income_frequency[]" name="income_frequency[]" class="form-control"><option selected>CHOOSE...</option><option value="Weekly">Weekly</option><option value="Fortnightly">Fortnightly</option><option value="Monthly">Monthly</option></select></div></div></div></div></div>'
                        ); //add input box
                    }
                });

                $(wrapper).on("click", ".remove_field", function(e) { //user click on remove text
                    e.preventDefault();
                    $(this).parent('div').remove();
                    x--;
                })
            });
            </script>

            <!-- row 5 -->
            <div class="row">
                <div class="col-md-12">
                    <h4>HOUSING EXPENSES</h4>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Mortgage / Rent / Board Expenses </label>
                                <input type="text" class="form-control" id="motage_rent" name="motage_rent">
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
                                    name="income_amount">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Income Frequency</label>
                                <select id="Loan_creditcard_frequency" name="Loan_creditcard_frequency"
                                    class="form-control">
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
                        <div class="card">
                            <div class="card-body">
                                <!-- Div Repeate -->
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Asset Type</label>
                                                    <select id="asset_type[]" name="asset_type[]" class="form-control">
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
                                                    <input type="text" class="form-control" id="money_owing[]"
                                                        name="money_owing[]">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label>Repayment</label>
                                                    <input type="text" class="form-control" id="repayment[]"
                                                        name="repayment[]">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Frequency</label>
                                                    <div class="row">
                                                        <div class="col-md-1"></div>
                                                        <div class="col-md-3">
                                                            <input class="form-check-input" type="radio"
                                                                name="frequency_Radio[]" id="frequency_Radio[]"
                                                                value="Weekly" checked>
                                                            <label class="form-check-label">
                                                                Weekly
                                                            </label>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <input class="form-check-input" type="radio"
                                                                name="frequency_Radio[]" id="frequency_Radio[]"
                                                                value="Fortnight" checked>
                                                            <label class="form-check-label">
                                                                Fortnight
                                                            </label>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <input class="form-check-input" type="radio"
                                                                name="frequency_Radio[]" id="frequency_Radio[]"
                                                                value="Monthly" checked>
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
                                <!-- end Repete -->
                            </div>
                        </div>
                        <br>

                        <button class="btn btn-primary active add_asset_button">+ADD ASSET</button><br><br>
                    </div>


                    <!-- Script -->
                    <script>
                    $(document).ready(function() {
                        var max_fields = 15; //maximum input boxes allowed
                        var wrapper = $(".input_fields_wrap2"); //Fields wrapper
                        var add_button = $(".add_asset_button"); //Add button ID
                        var x = 1; //initlal text box count
                        $(add_button).click(function(e) { //on add input button click
                            e.preventDefault();
                            if (x < max_fields) { //max input box allowed
                                x++; //text box increment
                                $(wrapper).append(
                                    '<div class="card"><div class="card-body"><div style="cursor:pointer;background-color:red;" class="remove_field btn btn-info">X</div><div class="row"><div class="col-md-12"><div class="row"><div class="col-md-4"><div class="form-group"><label>Asset Type</label><select id="asset_type[]" name="asset_type[]" class="form-control"><option selected>CHOOSE...</option><option value="Property">Property</option><option value="Household Asset">Household Asset</option><option value="Motor Vehicle">Motor Vehicle</option><option value="Savings">Savings</option><option value="Shares">Shares</option><option value="Others">Others</option></select></div></div><div class="col-md-4"><div class="form-group"><label>Value</label><input type="text" class="form-control" id="asset_value[]" name="asset_value[]"></div></div><div class="col-md-4"> <div class="form-group"><label>Money Owing</label><input type="text" class="form-control" id="money_owing[]" name="money_owing[]"></div></div></div><div class="row"><div class="col-md-8"><div class="form-group"><label>Repayment</label><input type="text" class="form-control" id="repayment[]" name="repayment[]"></div></div><div class="col-md-4"><div class="form-group"><label>Frequency</label><div class="row"><div class="col-md-1"></div><div class="col-md-3"><input class="form-check-input" type="radio" name="frequency_Radio[]"id="frequency_Radio[]" value="Weekly" checked><label class="form-check-label">Weekly</label></div><div class="col-md-3"><input class="form-check-input" type="radio" name="frequency_Radio[]"id="frequency_Radio[]" value="Fortnight" checked><label class="form-check-label">Fortnight</label></div><div class="col-md-3"><input class="form-check-input" type="radio" name="frequency_Radio[]"id="frequency_Radio[]" value="Monthly" checked><label class="form-check-label">Monthly</label></div><div class="col-md-2"></div></div></div></div></div></div></div></div></div>'
                                ); //add input box
                            }
                        });

                        $(wrapper).on("click", ".remove_field", function(e) { //user click on remove text
                            e.preventDefault();
                            $(this).parent('div').remove();
                            x--;
                        })
                    });
                    </script>



                </div>
            </div>

            <!-- row 7 -->
            <div class="row">
                <div class="col-md-12">
                    <h4>LIABILITIES</h4>
                    <div class="input_fields_wrap3">
                        <div class="card">
                            <div class="card-body">
                                <!-- Repete Start -->
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Asset Type</label>
                                                    <input type="text" class="form-control"
                                                        id="liabilities_asset_type[]" name="liabilities_asset_type[]">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Value</label>
                                                    <input type="text" class="form-control" id="liabilities_value[]"
                                                        name="liabilities_value[]">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Money Owing</label>
                                                    <input type="text" class="form-control"
                                                        id="liabilities_money_owing[]" name="liabilities_money_owing[]">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Repayment</label>
                                                    <input type="text" class="form-control" id="liabilities_repayment[]"
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
                                                                id="liabilities_frequency_Radio[]" value="Weekly"
                                                                checked>
                                                            <label class="form-check-label">
                                                                Weekly
                                                            </label>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <input class="form-check-input" type="radio"
                                                                name="liabilities_frequency_Radio[]"
                                                                id="liabilities_frequency_Radio[]" value="Fortnight"
                                                                checked>
                                                            <label class="form-check-label">
                                                                Fortnight
                                                            </label>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <input class="form-check-input" type="radio"
                                                                name="liabilities_frequency_Radio[]"
                                                                id="liabilities_frequency_Radio[]" value="Monthly"
                                                                checked>
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

                                <!-- Script -->
                                <script>
                                $(document).ready(function() {
                                    var max_fields = 15; //maximum input boxes allowed
                                    var wrapper = $(".input_fields_wrap3"); //Fields wrapper
                                    var add_button = $(".add_liability_button"); //Add button ID
                                    var x = 1; //initlal text box count
                                    $(add_button).click(function(e) { //on add input button click
                                        e.preventDefault();
                                        if (x < max_fields) { //max input box allowed
                                            x++; //text box increment
                                            $(wrapper).append(
                                                '<div class="card"><div class="card-body"><div style="cursor:pointer;background-color:red;" class="remove_field btn btn-info">X</div><div class="row"><div class="col-md-12"><div class="row"><div class="col-md-6"><div class="form-group"><label>Asset Type</label><input type="text" class="form-control" id="liabilities_asset_type[]"name="liabilities_asset_type[]"></div></div><div class="col-md-6"><div class="form-group"><label>Value</label><input type="text" class="form-control" id="liabilities_value[]" name="liabilities_value[]"></div></div></div><div class="row"><div class="col-md-6"><div class="form-group"><label>Money Owing</label><input type="text" class="form-control" id="liabilities_money_owing[]"name="liabilities_money_owing[]"></div></div><div class="col-md-6"><div class="form-group"><label>Repayment</label><input type="text" class="form-control" id="liabilities_repayment[]" name="liabilities_repayment[]"></div></div></div><div class="row"><div class="col-md-6"><div class="form-group"><label>Frequency</label><div class="row"><div class="col-md-1"></div><div class="col-md-3"><input class="form-check-input" type="radio" name="liabilities_frequency_Radio[]" id="liabilities_frequency_Radio[]" value="Weekly" checked><label class="form-check-label">Weekly</label></div><div class="col-md-3"><input class="form-check-input" type="radio"name="liabilities_frequency_Radio[]" id="liabilities_frequency_Radio[]"value="Fortnight" checked><label class="form-check-label">Fortnight</label></div><div class="col-md-3"><input class="form-check-input" type="radio" name="liabilities_frequency_Radio[]" id="liabilities_frequency_Radio[]" value="Monthly" checked><label class="form-check-label">Monthly</label></div><div class="col-md-2"></div></div></div></div><div class="col-md-6"></div></div></div></div></div></div>'
                                            );
                                        }
                                    });
                                    $(wrapper).on("click", ".remove_field", function(e) {
                                        e.preventDefault();
                                        $(this).parent("div").remove();
                                        x--;
                                    })
                                });
                                </script>

                                <!-- end Repete -->
                            </div>
                        </div><br>
                        <button class="btn btn-primary active add_liability_button">+ADD LIABILITY</button><br><br>
                    </div>


                    <br>



                </div>


            </div>

            <!-- row 8 -->
            <div class="row">
                <div class="col-md-6">
                    <input class="btn btn-danger" style="width: 100%;" value="BACK">
                </div>
                <div class="col-md-6">
                    <input class="btn btn-primary" name="submit" id="submit" style="width: 100%;" type="submit"
                        value="NEXT">
                </div>
            </div>

        </div>
    </Form>
</body>

</html>

<?php
if (isset($_POST['submit'])) {
    $count = count($_POST["income_amount"]);
    //Getting post values
    $skill = $_POST["income_amount"];
    echo $skill;
}

?>