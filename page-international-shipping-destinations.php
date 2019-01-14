<?php get_header();
the_post();
?>
<div class="container country">
    <div id="international-banner-img">
        <img src="<?= get_field('hero_image')['url']; ?>" alt="<?= get_field('hero_image')['alt']; ?>">
    </div>
    <div class="row country-text">
        <?= get_field('page_text'); ?>
    </div>

    <div class="row">
        <div class="quick-quote">
            <div class="quick-quote-box">

                <div class="row">
                    <h2>
                        Get an Instant Quote
                    </h2>
                </div>

                <div class="form-group">

                    <div class="row">
                        <p>
                            Send from any UK postcode
                        </p>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                        <p>
                            <label for="qq-deliver-to-p8q2mp">Deliver to:</label><br>
                            <select id="qq-deliver-to-p8q2mp" class="form-control" required="">
                                <option value=""></option><option value="Afghanistan">Afghanistan</option><option value="Albania">Albania</option><option value="Algeria">Algeria</option><option value="American Samoa">American Samoa</option><option value="Andorra">Andorra</option><option value="Angola">Angola</option><option value="Anguilla">Anguilla</option><option value="Antigua">Antigua</option><option value="Argentina">Argentina</option><option value="Armenia">Armenia</option><option value="Aruba">Aruba</option><option value="Australia">Australia</option><option value="Austria*">Austria*</option><option value="Azerbaijan">Azerbaijan</option><option value="Bahamas">Bahamas</option><option value="Bahrain">Bahrain</option><option value="Bangladesh">Bangladesh</option><option value="Barbados">Barbados</option><option value="Belarus">Belarus</option><option value="Belgium*">Belgium*</option><option value="Belize">Belize</option><option value="Benin">Benin</option><option value="Bermuda">Bermuda</option><option value="Bhutan">Bhutan</option><option value="Bolivia">Bolivia</option><option value="Bonaire">Bonaire</option><option value="Bosnia Herzegovina">Bosnia Herzegovina</option><option value="Botswana">Botswana</option><option value="Brazil">Brazil</option><option value="Brunei">Brunei</option><option value="Bulgaria*">Bulgaria*</option><option value="Burkina Faso">Burkina Faso</option><option value="Burundi">Burundi</option><option value="Cambodia">Cambodia</option><option value="Cameroon">Cameroon</option><option value="Canada">Canada</option><option value="Canary Islands">Canary Islands</option><option value="Cape Verde Islands">Cape Verde Islands</option><option value="Cayman Islands">Cayman Islands</option><option value="Central African Rep.">Central African Rep.</option><option value="Chad">Chad</option><option value="Channel Islands">Channel Islands</option><option value="Chile">Chile</option><option value="China, Peoples Rep.">China, Peoples Rep.</option><option value="Colombia">Colombia</option><option value="Comoros Islands">Comoros Islands</option><option value="Congo">Congo</option><option value="Congo, Dem. Rep.">Congo, Dem. Rep.</option><option value="Cook Islands">Cook Islands</option><option value="Costa Rica">Costa Rica</option><option value="Croatia*">Croatia*</option><option value="Cuba">Cuba</option><option value="Curacao">Curacao</option><option value="Cyprus*">Cyprus*</option><option value="Czech Republic*">Czech Republic*</option><option value="Denmark*">Denmark*</option><option value="Djibouti">Djibouti</option><option value="Dominica">Dominica</option><option value="Dominican Rep.">Dominican Rep.</option><option value="East Timor">East Timor</option><option value="Ecuador">Ecuador</option><option value="Egypt">Egypt</option><option value="El Salvador">El Salvador</option><option value="Equatorial Guinea">Equatorial Guinea</option><option value="Eritrea">Eritrea</option><option value="Estonia*">Estonia*</option><option value="Ethiopia">Ethiopia</option><option value="Falkland Islands">Falkland Islands</option><option value="Faroe Islands">Faroe Islands</option><option value="Fiji">Fiji</option><option value="Finland*">Finland*</option><option value="France* - Paris">France* - Paris</option><option value="France* - All Other Locations">France* - All Other Locations</option><option value="French Guiana">French Guiana</option><option value="Gabon">Gabon</option><option value="Gambia">Gambia</option><option value="Georgia">Georgia</option><option value="Germany* - Cologne">Germany* - Cologne</option><option value="Germany* - Frankfurt">Germany* - Frankfurt</option><option value="Germany* - All Other Locations">Germany* - All Other Locations</option><option value="Ghana">Ghana</option><option value="Gibraltar">Gibraltar</option><option value="Greece*">Greece*</option><option value="Greenland">Greenland</option><option value="Grenada">Grenada</option><option value="Guadeloupe">Guadeloupe</option><option value="Guam">Guam</option><option value="Guatemala">Guatemala</option><option value="Guinea Rep.">Guinea Rep.</option><option value="Guinea-Bissau">Guinea-Bissau</option><option value="Guyana">Guyana</option><option value="Haiti">Haiti</option><option value="Honduras Rep.">Honduras Rep.</option><option value="Hong Kong">Hong Kong</option><option value="Hungary*">Hungary*</option><option value="Iceland">Iceland</option><option value="India">India</option><option value="Indonesia">Indonesia</option><option value="Iran">Iran</option><option value="Iraq">Iraq</option><option value="Ireland Republic of*">Ireland Republic of*</option><option value="Israel">Israel</option><option value="Italy*">Italy*</option><option value="Ivory Coast">Ivory Coast</option><option value="Jamaica">Jamaica</option><option value="Japan">Japan</option><option value="Jordan">Jordan</option><option value="Kazakhstan">Kazakhstan</option><option value="Kenya">Kenya</option><option value="Kiribati">Kiribati</option><option value="Korea, D.P.R of (North)">Korea, D.P.R of (North)</option><option value="Korea, Rep of (South)">Korea, Rep of (South)</option><option value="Kosovo">Kosovo</option><option value="Kuwait">Kuwait</option><option value="Kyrgyzstan">Kyrgyzstan</option><option value="Laos Peoples Dem. Rep">Laos Peoples Dem. Rep</option><option value="Latvia*">Latvia*</option><option value="Lebanon">Lebanon</option><option value="Lesotho">Lesotho</option><option value="Liberia">Liberia</option><option value="Libya">Libya</option><option value="Liechtenstein">Liechtenstein</option><option value="Lithuania*">Lithuania*</option><option value="Luxembourg*">Luxembourg*</option><option value="Macau">Macau</option><option value="Macedonia">Macedonia</option><option value="Madagascar">Madagascar</option><option value="Malawi">Malawi</option><option value="Malaysia">Malaysia</option><option value="Maldives">Maldives</option><option value="Mali">Mali</option><option value="Malta*">Malta*</option><option value="Marshall Islands">Marshall Islands</option><option value="Martinique">Martinique</option><option value="Mauritania">Mauritania</option><option value="Mauritius">Mauritius</option><option value="Mayotte">Mayotte</option><option value="Mexico">Mexico</option><option value="Micronesia, Fed States Of">Micronesia, Fed States Of</option><option value="Moldova, Rep of">Moldova, Rep of</option><option value="Monaco">Monaco</option><option value="Mongolia">Mongolia</option><option value="Montenegro">Montenegro</option><option value="Montserrat">Montserrat</option><option value="Morocco">Morocco</option><option value="Mozambique">Mozambique</option><option value="Myanmar (Burma)">Myanmar (Burma)</option><option value="Namibia">Namibia</option><option value="Nauru, Rep of">Nauru, Rep of</option><option value="Nepal">Nepal</option><option value="Netherlands*">Netherlands*</option><option value="Nevis">Nevis</option><option value="New Caledonia">New Caledonia</option><option value="New Zealand">New Zealand</option><option value="Nicaragua">Nicaragua</option><option value="Niger">Niger</option><option value="Nigeria">Nigeria</option><option value="Niue">Niue</option><option value="Norway">Norway</option><option value="Oman">Oman</option><option value="Pakistan">Pakistan</option><option value="Palau">Palau</option><option value="Panama">Panama</option><option value="Papua New Guinea">Papua New Guinea</option><option value="Paraguay">Paraguay</option><option value="Peru">Peru</option><option value="Philippines">Philippines</option><option value="Poland*">Poland*</option><option value="Portugal*">Portugal*</option><option value="Puerto Rico">Puerto Rico</option><option value="Qatar">Qatar</option><option value="Reunion, Island of">Reunion, Island of</option><option value="Romania*">Romania*</option><option value="Russian Federation">Russian Federation</option><option value="Rwanda">Rwanda</option><option value="Samoa">Samoa</option><option value="San Marino">San Marino</option><option value="Sao Tome &amp; Principe">Sao Tome &amp; Principe</option><option value="Saudi Arabia">Saudi Arabia</option><option value="Senegal">Senegal</option><option value="Serbia">Serbia</option><option value="Seychelles">Seychelles</option><option value="Sierra Leone">Sierra Leone</option><option value="Singapore">Singapore</option><option value="Slovakia*">Slovakia*</option><option value="Slovenia*">Slovenia*</option><option value="Solomon Islands">Solomon Islands</option><option value="Somalia">Somalia</option><option value="Somaliland Rep. Of">Somaliland Rep. Of</option><option value="South Africa">South Africa</option><option value="South Sudan">South Sudan</option><option value="Spain*">Spain*</option><option value="Sri Lanka">Sri Lanka</option><option value="St Barthelemy">St Barthelemy</option><option value="St Eustatius">St Eustatius</option><option value="St Helena">St Helena</option><option value="St Kitts">St Kitts</option><option value="St Lucia">St Lucia</option><option value="St Maarten">St Maarten</option><option value="St Vincent">St Vincent</option><option value="Sudan">Sudan</option><option value="Suriname">Suriname</option><option value="Swaziland">Swaziland</option><option value="Sweden*">Sweden*</option><option value="Switzerland">Switzerland</option><option value="Syria">Syria</option><option value="Tahiti">Tahiti</option><option value="Taiwan">Taiwan</option><option value="Tajikistan">Tajikistan</option><option value="Tanzania">Tanzania</option><option value="Thailand">Thailand</option><option value="Togo">Togo</option><option value="Tonga">Tonga</option><option value="Trinidad &amp; Tobago">Trinidad &amp; Tobago</option><option value="Tunisia">Tunisia</option><option value="Turkey">Turkey</option><option value="Turks &amp; Caicos Islands">Turks &amp; Caicos Islands</option><option value="Tuvalu">Tuvalu</option><option value="Uganda">Uganda</option><option value="Ukraine">Ukraine</option><option value="United Arab Emirates">United Arab Emirates</option><option value="United Kingdom*">United Kingdom*</option><option value="Uruguay">Uruguay</option><option value="USA">USA</option><option value="Uzbekistan">Uzbekistan</option><option value="Vanuatu">Vanuatu</option><option value="Venezuela">Venezuela</option><option value="Vietnam">Vietnam</option><option value="Virgin Islands, British">Virgin Islands, British</option><option value="Virgin Islands, US">Virgin Islands, US</option><option value="Yemen">Yemen</option><option value="Zambia">Zambia</option><option value="Zimbabwe">Zimbabwe</option>
                            </select>
                        </p>
                        </div>
                        <div class="col-md-6">
                        <p>
                            <label for="qq-weight-p8q2mp">Weight [kg]:</label><br>
                            <input type="number" id="qq-weight-p8q2mp" min="0.5" max="1000" step="0.5" value="1" required="" class="form-control">
                        </p>
                        </div>
                    </div>
                    <div class="row">
                        <p class="radio">
                            <label><input type="radio" name="qq-type-p8q2mp" value="docs">Documents</label>
                        </p>
                        <p class="radio">
                            <label><input type="radio" name="qq-type-p8q2mp" value="non_docs" checked="">Non-documents</label>
                        </p>
                    </div>
                    <div class="row">
                        <p>
                            <button type="submit" id="qq-submit-p8q2mp" class="btn btn-default btn-lg">Get price</button>
                        </p>
                    </div>
                    <div class="row">
                        <p>&nbsp;<br>Today's price<span id="qq-text-p8q2mp"> for 1 kg of non-documents shipped to USA</span>: <b>£<span id="qq-price-p8q2mp">22.59</span></b></p>
                    </div>

                    <div class="row">
                        <p>
                            <button type="submit" id="qq-book-now" class="btn btn-default btn-lg">Book Now</button>
                        </p>
                    </div>

                    <script>
                        $(function () {
                            function quickQuoteGetPrice() {
                                var deliverTo = $('#qq-deliver-to-p8q2mp').val(),
                                    weight    = parseFloat($('#qq-weight-p8q2mp').val()),
                                    type      = $("input[name='" + 'qq-type-p8q2mp' + "']:checked").val();
                                if (deliverTo && weight) {
                                    $.post("https://ieapi2.stehlik.co.uk/api/quickquote/getQQPrice", {
                                        "collect_from": "United Kingdom*",
                                        "deliver_to": deliverTo,
                                        "weight": weight,
                                        "type": type
                                    }, function (data) {
                                        var text  = $('#qq-text-p8q2mp'),
                                            price = $('#qq-price-p8q2mp');
                                        if (data && data["res"]) {
                                            var typeName = (type === "docs" ? "documents" : "non-documents");
                                            text.text(" for " + weight + " kg of " + typeName + " shipped to " + deliverTo);
                                            price.text(parseFloat(data["res"]).toFixed(2));
                                        } else {
                                            text.text("");
                                            price.text("");
                                        }
                                    });
                                }
                            }
                            $('#qq-deliver-to-p8q2mp').val('USA');
                            $('#qq-weight-p8q2mp').val(parseFloat('') || 1);
                            $('#qq-submit-p8q2mp').on("click", function (e) {
                                e.preventDefault();
                                e.stopPropagation();
                                quickQuoteGetPrice();
                            });
                            quickQuoteGetPrice();
                            $('#qq-book-now').on('click', function(e) {
                                e.preventDefault();
                                e.stopPropagation();
                                location.href = "https://impactexpress.co.uk/portal/?method=login";
                            });
                        });
                    </script>
                </div>
            </div>
        </div>
    </div>

    <div id="country-grid">
        <div class="row">
            <div class="col-md-4 country-box">
                <div class="country-img">
                    <a href="<?= site_url('/international-shipping-prices/'.get_field('grid_url_1')); ?>"><img src="<?= get_field('grid_image_1')['url']; ?>" alt="<?= get_field('grid_image_1')['alt']; ?>"></a>
                </div>
            </div>
            <div class="col-md-4 country-box">
                <div class="country-img">
                    <a href="<?= site_url('/international-shipping-prices/'.get_field('grid_url_2')); ?>"><img src="<?= get_field('grid_image_2')['url']; ?>" alt="<?= get_field('grid_image_2')['alt']; ?>"></a>
                </div>
            </div>
            <div class="col-md-4 country-box">
                <div class="country-img">
                    <a href="<?= site_url('/international-shipping-prices/'.get_field('grid_url_3')); ?>"><img src="<?= get_field('grid_image_3')['url']; ?>" alt="<?= get_field('grid_image_3')['alt']; ?>"></a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 country-box">
                <div class="country-img">
                    <a href="<?= site_url('/international-shipping-prices/'.get_field('grid_url_4')); ?>"><img src="<?= get_field('grid_image_4')['url']; ?>" alt="<?= get_field('grid_image_4')['alt']; ?>"></a>
                </div>
            </div>
            <div class="col-md-4 country-box">
                <div class="country-img">
                    <a href="<?= site_url('/international-shipping-prices/'.get_field('grid_url_5')); ?>"><img src="<?= get_field('grid_image_5')['url']; ?>" alt="<?= get_field('grid_image_5')['alt']; ?>"></a>
                </div>
            </div>
            <div class="col-md-4 country-box">
                <div class="country-img">
                    <a href="<?= site_url('/international-shipping-prices/'.get_field('grid_url_6')); ?>"><img src="<?= get_field('grid_image_6')['url']; ?>" alt="<?= get_field('grid_image_6')['alt']; ?>"></a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 country-box">
                <div class="country-img">
                    <a href="<?= site_url('/international-shipping-prices/'.get_field('grid_url_7')); ?>"><img src="<?= get_field('grid_image_7')['url']; ?>" alt="<?= get_field('grid_image_7')['alt']; ?>"></a>
                </div>
            </div>
            <div class="col-md-4 country-box">
                <div class="country-img">
                    <a href="<?= site_url('/international-shipping-prices/'.get_field('grid_url_8')); ?>"><img src="<?= get_field('grid_image_8')['url']; ?>" alt="<?= get_field('grid_image_8')['alt']; ?>"></a>
                </div>
            </div>
            <div class="col-md-4 country-box">
                <div class="country-img">
                    <a href="<?= site_url('/international-shipping-prices/'.get_field('grid_url_9')); ?>"><img src="<?= get_field('grid_image_9')['url']; ?>" alt="<?= get_field('grid_image_9')['alt']; ?>"></a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 country-box">
                <div class="country-img">
                    <a href="<?= site_url('/international-shipping-prices/'.get_field('grid_url_10')); ?>"><img src="<?= get_field('grid_image_10')['url']; ?>" alt="<?= get_field('grid_image_10')['alt']; ?>"></a>
                </div>
            </div>
            <div class="col-md-4 country-box">
                <div class="country-img">
                    <a href="<?= site_url('/international-shipping-prices/'.get_field('grid_url_11')); ?>"><img src="<?= get_field('grid_image_11')['url']; ?>" alt="<?= get_field('grid_image_11')['alt']; ?>"></a>
                </div>
            </div>
            <div class="col-md-4 country-box">
                <div class="country-img">
                    <a href="<?= site_url('/international-shipping-prices/'.get_field('grid_url_12')); ?>"><img src="<?= get_field('grid_image_12')['url']; ?>" alt="<?= get_field('grid_image_12')['alt']; ?>"></a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 country-box">
                <div class="country-img">
                    <a href="<?= site_url('/international-shipping-prices/'.get_field('grid_url_13')); ?>"><img src="<?= get_field('grid_image_13')['url']; ?>" alt="<?= get_field('grid_image_13')['alt']; ?>"></a>
                </div>
            </div>
            <div class="col-md-4 country-box">
                <div class="country-img">
                    <a href="<?= site_url('/international-shipping-prices/'.get_field('grid_url_14')); ?>"><img src="<?= get_field('grid_image_14')['url']; ?>" alt="<?= get_field('grid_image_14')['alt']; ?>"></a>
                </div>
            </div>
            <div class="col-md-4 country-box">
                <div class="country-img">
                    <a href="<?= site_url('/international-shipping-prices/'.get_field('grid_url_15')); ?>"><img src="<?= get_field('grid_image_15')['url']; ?>" alt="<?= get_field('grid_image_15')['alt']; ?>"></a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 country-box">
                <div class="country-img">
                    <a href="<?= site_url('/international-shipping-prices/'.get_field('grid_url_16')); ?>"><img src="<?= get_field('grid_image_16')['url']; ?>" alt="<?= get_field('grid_image_16')['alt']; ?>"></a>
                </div>
            </div>
            <div class="col-md-4 country-box">
                <div class="country-img">
                    <a href="<?= site_url('/international-shipping-prices/'.get_field('grid_url_17')); ?>"><img src="<?= get_field('grid_image_17')['url']; ?>" alt="<?= get_field('grid_image_17')['alt']; ?>"></a>
                </div>
            </div>
            <div class="col-md-4 country-box">
                <div class="country-img">
                    <a href="<?= site_url('/international-shipping-prices/'.get_field('grid_url_18')); ?>"><img src="<?= get_field('grid_image_18')['url']; ?>" alt="<?= get_field('grid_image_18')['alt']; ?>"></a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 country-box">
                <div class="country-img">
                    <a href="<?= site_url('/international-shipping-prices/'.get_field('grid_url_19')); ?>"><img src="<?= get_field('grid_image_19')['url']; ?>" alt="<?= get_field('grid_image_19')['alt']; ?>"></a>
                </div>
            </div>
            <div class="col-md-4 country-box">
                <div class="country-img">
                    <a href="<?= site_url('/international-shipping-prices/'.get_field('grid_url_20')); ?>"><img src="<?= get_field('grid_image_20')['url']; ?>" alt="<?= get_field('grid_image_20')['alt']; ?>"></a>
                </div>
            </div>
            <div class="col-md-4 country-box">
                <div class="country-img">
                    <a href="<?= site_url('/international-shipping-prices/'.get_field('grid_url_21')); ?>"><img src="<?= get_field('grid_image_21')['url']; ?>" alt="<?= get_field('grid_image_21')['alt']; ?>"></a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
