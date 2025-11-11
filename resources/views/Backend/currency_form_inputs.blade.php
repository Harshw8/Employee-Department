            <div>
                <label for="country">Country</label>
                <input type="text" name="country" id="country" value="{{ $currency->country }}">
            </div>

            <div>
                <label for="currency_name">Currency Name</label>
                <input type="text" name="currency_name" id="currency_name" value="{{ $currency->currency_name }}">
            </div>

            <div>
                <label for="currency_symbol">Currency Symbol</label>
                <input type="text" name="currency_symbol" id="currency_symbol" value="{{ $currency?->currency_symbol }}">
            </div>

            <div>
                <button type="submit">SAVE</button>
            </div>