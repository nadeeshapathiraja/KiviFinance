<?php


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Finane Form 2</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- <s                                                                                              cript src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script> -->
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
                                <input type="file" class="form-control" multiple="" name="trade_file" id="trade_file">
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
                                            <label>Income Amount</label>
                                            <input type="number" class="form-control" id="income_amount[]"
                                                name="income_amount[]" required>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Income Type</label>
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
                                            <label>Income Frequency</label>
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
                                name="totalIncome" value="10000">
                        </div>
                    </div>

                </div>
            </div>


            <!-- row 5 -->
            <div class="row">
                <div class="col-md-12">
                    <h4>HOUSING EXPENSES</h4>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Mortgage / Rent / Board Expenses </label>
                                <input type="text" class="form-control" id="motage_rent" name="motage_rent" required>
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
                                                        <input type="text" class="form-control" id="asset_money_owing[]"
                                                            name="asset_money_owing[]">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                                        <label>Repayment</label>
                                                        <input type="text" class="form-control" id="asset_repayment[]"
                                                            name="asset_repayment[]">
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
                                                                    id="asset_frequency_Radio[]" value="Weekly" checked>
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
                                                            id="liabilities_money_owing[]"
                                                            name="liabilities_money_owing[]">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Repayment</label>
                                                        <input type="text" class="form-control"
                                                            id="liabilities_repayment[]" name="liabilities_repayment[]">
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
            '" class="btn btn-danger btn_remove">X</button></div><div class="row"><div class="col-md-4"><label>Income Amount</label><input type="number" class="form-control" id="income_amount[]"name="income_amount[]"></div><div class="col-md-4"><label>Income Type</label><select id="income_type[]" name="income_type[]" class="form-control"><option selected>CHOOSE...</option><option value="Salary or Wages">Salary or Wages</option><option value="Benifit Income">Benifit Income</option><option value="Self Employed Income">Self Employed Income</option><option value="Seasonal Income">Seasonal Income</option><option value="Retirement Income">Retirement Income</option><option value="Unknown">Unknown</option><option value="Other">Other</option></select></div><div class="col-md-4"><label>Income Frequency</label><select id="income_frequency[]" name="income_frequency[]"class="form-control"><option selected>CHOOSE...</option><option value="Weekly">Weekly</option><option value="Fortnightly">Fortnightly</option><option value="Monthly">Monthly</option></select></div></div></td></tr>'
        );
    });

    $(document).on('click', '.btn_remove', function() {
        var button_id = $(this).attr("id");
        $('#row' + button_id + '').remove();
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

</html>

<?php

$_POST['loan_amount'];
$_POST['purchase_make'];
$_POST['purchase_year'];
$_POST['purchase_model'];
$_POST['purchase_color'];
$_POST['purchase_register_number'];
$_POST['trade_make'];
$_POST['trade_year'];
$_POST['trade_model'];
$_POST['trade_color'];
$_POST['trade_warranty'];
$_POST['trade_renewal'];
$_POST['trade_file'];

//Income Repeate div
$_POST['income_amount'];
$_POST['income_type'];
$_POST['income_frequency'];

$_POST['totalIncome'];
$_POST['motage_rent'];
$_POST['frequency_motage'];
$_POST['Loan_creditcard_expence'];
$_POST['income_frequency'];

//Asset Repeate div
$_POST['asset_type'];
$_POST['asset_value'];
$_POST['asset_money_owing'];
$_POST['asset_repayment'];
$_POST['asset_frequency_Radio'];

//Liabilities Repeate div
$_POST['liabilities_asset_type'];
$_POST['liabilities_value'];
$_POST['liabilities_money_owing'];
$_POST['liabilities_repayment'];
$_POST['liabilities_frequency_Radio'];

?>