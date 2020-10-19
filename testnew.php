<div class="card" id="dynamic_field">
    <div class="card-body">
        <!-- Repeate One -->
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label>Income Amount</label>
                    <input type="number" class="form-control" id="income_amount[]" name="income_amount[]">
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
                    <select id="income_frequency[]" name="income_frequency[]" class="form-control">
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
                                <input type="text" class="form-control" id="asset_value[]" name="asset_value[]">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Money Owing</label>
                                <input type="text" class="form-control" id="money_owing[]" name="money_owing[]">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-group">
                                <label>Repayment</label>
                                <input type="text" class="form-control" id="repayment[]" name="repayment[]">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Frequency</label>
                                <div class="row">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-3">
                                        <input class="form-check-input" type="radio" name="frequency_Radio[]"
                                            id="frequency_Radio[]" value="Weekly" checked>
                                        <label class="form-check-label">
                                            Weekly
                                        </label>
                                    </div>
                                    <div class="col-md-3">
                                        <input class="form-check-input" type="radio" name="frequency_Radio[]"
                                            id="frequency_Radio[]" value="Fortnight" checked>
                                        <label class="form-check-label">
                                            Fortnight
                                        </label>
                                    </div>
                                    <div class="col-md-3">
                                        <input class="form-check-input" type="radio" name="frequency_Radio[]"
                                            id="frequency_Radio[]" value="Monthly" checked>
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