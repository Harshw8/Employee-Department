            <div class="row mt-2">
                <div class="col-md-6">
                <label for="country" class="form-label">Country</label>
                <input type="text" class="form-control" name="country" id="country" value="{{ $currency->country }}">
                </div>
            </div>

            <div class="row mt-2">
                <div class="col-md-6">
                <label for="currency_name" class="form-label">Currency Name</label>
                <input type="text" class="form-control" name="currency_name" id="currency_name" value="{{ $currency->currency_name }}">
                </div>
            </div>

            <div class="row mt-2">
                <div class="col-md-6">
                <label for="currency_symbol" class="form-label">Currency Symbol</label>
                <input type="text" class="form-control" name="currency_symbol" id="currency_symbol" value="{{ $currency?->currency_symbol }}">
                </div>
            </div>

            <div class="row mt-2">
                <div class="col-md-6">
                <button type="submit" class="btn btn-grd-primary px-4">SAVE</button>
                </div>
            </div>