@extends ('layout.master')

@section('content')

<div class="row">
        <div class="col-md-7">
            <section class="widget">
                <header>
                    <h4><i class="fa fa-user"></i> Account Profile <small>Create new or edit existing user</small></h4>
                </header>
                <div class="body">
                    <form id="user-form" class="form-horizontal label-left"
                          novalidate="novalidate"
                          method="post"
                          data-validate="parsley">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="text-align-center">
                                    <img class="img-circle" src={{URL::asset("img/15.jpg")}} alt="64x64" style="height: 112px;">
                                </div>
                            </div>
                            <div class="col-md-8">
                                <h3 class="no-margin">Maryna Dorash</h3>
                                <address>
                                    <strong>Development manager</strong> at <strong><a href="#">Allspana Inc.</a></strong><br>
                                    <abbr title="Work email">e-mail:</abbr> <a href="mailto:#">maryna.dorash@allspana.by</a><br>
                                    <abbr title="Work Phone">phone:</abbr> (123) 456-7890
                                </address>
                            </div>
                        </div>
                        <fieldset>
                            <legend>Account Edit Form <small>Some explanation text</small></legend>
                        </fieldset>
                        <fieldset>
                            <legend class="section">Personal Info</legend>
                            <div class="control-group">
                                <label class="control-label" for="prefix">Prefix</label>
                                <div class="controls form-group">
                                    <input type="text" id="prefix" name="prefix" class="col-sm-6 col-xs-12">
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="first-name">First Name <span class="required">*</span></label>
                                <div class="controls form-group">
                                    <input type="text" id="first-name" name="first-name" required="required" class="col-xs-12" >
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="last-name">Last Name <span class="required">*</span></label>
                                <div class="controls form-group">
                                    <input type="text" id="last-name" name="last-name" required="required" class="col-xs-12" >
                                </div>
                            </div>
                            <div class="control-group">
                                <label for="middle-name" class="control-label">Middle Name / Initial</label>
                                <div class="controls form-group">
                                    <input id="middle-name" class="col-xs-12" type="text" name="middle-name" value="">
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Gender</label>
                                <div class="controls form-group">
                                    <div id="gender" class="btn-group" data-toggle="buttons">
                                        <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                            <input type="radio" name="gender" value="male"> &nbsp; Male &nbsp;
                                        </label>
                                        <label class="btn btn-primary active" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                            <input type="radio" name="gender" value="female"> Female
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="control-group">
                                <label for="date-of-birth" class="control-label">Date Of Birth <span class="required">*</span></label>
                                <div class="controls form-group">
                                    <input id="date-of-birth" class="col-sm-6 col-xs-12 date-picker" required="required" type="text" name="date-of-birth" value="">
                                </div>
                            </div>
                        </fieldset>
                        <fieldset>
                            <legend class="section">Contact Info</legend>
                            <div class="control-group">
                                <label id="email-label" for="email" class="control-label">Email <span class="required">*</span></label>
                                <div class="controls form-group">
                                    <div class="col-xs-12 col-sm-8">
                                        <div class="input-group">
                                            <input id="email" type="email"
                                                   data-trigger="change" required="required"
                                                   class="form-control"
                                                   name="email">
                                            <span class="input-group-btn">
                                                <button class="btn btn-success" type="button">Write an email</button>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="control-group">
                                <label for="phone" class="control-label">Phone <span class="required">*</span></label>
                                <div class="controls form-group">
                                    <div class="col-xs-12 col-sm-8">
                                        <div class="input-group">
                                            <input id="phone" class="form-control  mask"
                                                   required="required" type="text"
                                                   name="phone" maxlength="28">
                                            <span class="input-group-btn">
                                                <select id="phone-type" class="selectpicker" data-style="btn-default">
                                                    <option>Mobile</option>
                                                    <option>Home</option>
                                                    <option>Work</option>
                                                </select>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="control-group">
                                <label for="fax" class="control-label">Fax</label>
                                <div class="controls form-group">
                                    <div class="col-xs-12 col-sm-8">
                                        <div class="input-group">
                                            <input id="fax" class="form-control" type="text"
                                                   name="phone" maxlength="28">
                                            <span class="input-group-btn">
                                                 <select id="fax-type" class="selectpicker" data-style="btn-default">
                                                     <option>Mobile</option>
                                                     <option>Home</option>
                                                     <option>Work</option>
                                                 </select>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                        <fieldset>
                            <legend class="section">
                                Address
                                <button type="button" class="btn btn-primary btn-xs pull-right">
                                    <i class="fa fa-plus"></i>
                                    Add Address
                                </button>
                            </legend>
                            <div class="control-group">
                                <label for="address" class="control-label">Address <span class="required">*</span></label>
                                <div class="controls form-group">
                                    <div class="col-xs-12 col-sm-8">
                                        <div class="input-group">
                                            <input id="address" class="form-control" type="text"
                                                   name="address">
                                            <span class="input-group-btn">
                                                 <select id="address-type" class="selectpicker" data-style="btn-default">
                                                     <option>Mobile</option>
                                                     <option>Home</option>
                                                     <option>Work</option>
                                                 </select>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="controls form-group">
                                    <div class="col-xs-12 col-sm-6">
                                        <input id="address-2" class="form-control" type="text" value="" name="address-2">
                                    </div>
                                </div>
                            </div>
                            <div class="control-group">
                                <label for="city" class="control-label">City <span class="required">*</span></label>
                                <div class="controls form-group">
                                    <div class="col-xs-12 col-sm-6"><input id="city" class="form-control" required="required" type="text" value="" name="city"></div>
                                </div>
                            </div>
                            <div class="control-group">
                                <label for="state" class="control-label">State <span class="required">*</span></label>
                                <div class="controls form-group">
                                    <select id="state" data-placeholder="Select state"
                                            required="required" class="col-xs-12 col-sm-6 chzn-select" name="state">
                                        <option value=""></option>
                                        <option value="AL">Alabama</option>
                                        <option value="AK">Alaska</option>
                                        <option value="AZ">Arizona</option>
                                        <option value="AR">Arkansas</option>
                                        <option value="CA">California</option>
                                        <option value="CO">Colorado</option>
                                        <option value="CT">Connecticut</option>
                                        <option value="DE">Delaware</option>
                                        <option value="DC">District Of Columbia</option>
                                        <option value="FL">Florida</option>
                                        <option value="GA">Georgia</option>
                                        <option value="HI">Hawaii</option>
                                        <option value="ID">Idaho</option>
                                        <option value="IL">Illinois</option>
                                        <option value="IN">Indiana</option>
                                        <option value="IA">Iowa</option>
                                        <option value="KS">Kansas</option>
                                        <option value="KY">Kentucky</option>
                                        <option value="LA">Louisiana</option>
                                        <option value="ME">Maine</option>
                                        <option value="MD">Maryland</option>
                                        <option value="MA">Massachusetts</option>
                                        <option value="MI">Michigan</option>
                                        <option value="MN">Minnesota</option>
                                        <option value="MS">Mississippi</option>
                                        <option value="MO">Missouri</option>
                                        <option value="MT">Montana</option>
                                        <option value="NE">Nebraska</option>
                                        <option value="NV">Nevada</option>
                                        <option value="NH">New Hampshire</option>
                                        <option value="NJ">New Jersey</option>
                                        <option value="NM">New Mexico</option>
                                        <option value="NY">New York</option>
                                        <option value="NC">North Carolina</option>
                                        <option value="ND">North Dakota</option>
                                        <option value="OH">Ohio</option>
                                        <option value="OK">Oklahoma</option>
                                        <option value="OR">Oregon</option>
                                        <option value="PA">Pennsylvania</option>
                                        <option value="RI">Rhode Island</option>
                                        <option value="SC">South Carolina</option>
                                        <option value="SD">South Dakota</option>
                                        <option value="TN">Tennessee</option>
                                        <option value="TX">Texas</option>
                                        <option value="UT">Utah</option>
                                        <option value="VT">Vermont</option>
                                        <option value="VA">Virginia</option>
                                        <option value="WA">Washington</option>
                                        <option value="WV">West Virginia</option>
                                        <option value="WI">Wisconsin</option>
                                        <option value="WY">Wyoming</option>
                                    </select>
                                </div>
                            </div>
                            <div class="control-group">
                                <label for="country" class="control-label">Country <span class="required">*</span></label>
                                <div class="controls form-group">
                                    <select id="country" required="required"
                                            data-placeholder="Select country" class="col-xs-12 col-sm-6 chzn-select" name="country">
                                        <option value=""></option>
                                        <option value="United States">United States</option>
                                        <option value="United Kingdom">United Kingdom</option>
                                        <option value="Afghanistan">Afghanistan</option>
                                        <option value="Albania">Albania</option>
                                        <option value="Algeria">Algeria</option>
                                        <option value="American Samoa">American Samoa</option>
                                        <option value="Andorra">Andorra</option>
                                        <option value="Angola">Angola</option>
                                        <option value="Anguilla">Anguilla</option>
                                        <option value="Antarctica">Antarctica</option>
                                        <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                        <option value="Argentina">Argentina</option>
                                        <option value="Armenia">Armenia</option>
                                        <option value="Aruba">Aruba</option>
                                        <option value="Australia">Australia</option>
                                        <option value="Austria">Austria</option>
                                        <option value="Azerbaijan">Azerbaijan</option>
                                        <option value="Bahamas">Bahamas</option>
                                        <option value="Bahrain">Bahrain</option>
                                        <option value="Bangladesh">Bangladesh</option>
                                        <option value="Barbados">Barbados</option>
                                        <option value="Belarus">Belarus</option>
                                        <option value="Belgium">Belgium</option>
                                        <option value="Belize">Belize</option>
                                        <option value="Benin">Benin</option>
                                        <option value="Bermuda">Bermuda</option>
                                        <option value="Bhutan">Bhutan</option>
                                        <option value="Bolivia">Bolivia</option>
                                        <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                        <option value="Botswana">Botswana</option>
                                        <option value="Bouvet Island">Bouvet Island</option>
                                        <option value="Brazil">Brazil</option>
                                        <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                        <option value="Brunei Darussalam">Brunei Darussalam</option>
                                        <option value="Bulgaria">Bulgaria</option>
                                        <option value="Burkina Faso">Burkina Faso</option>
                                        <option value="Burundi">Burundi</option>
                                        <option value="Cambodia">Cambodia</option>
                                        <option value="Cameroon">Cameroon</option>
                                        <option value="Canada">Canada</option>
                                        <option value="Cape Verde">Cape Verde</option>
                                        <option value="Cayman Islands">Cayman Islands</option>
                                        <option value="Central African Republic">Central African Republic</option>
                                        <option value="Chad">Chad</option>
                                        <option value="Chile">Chile</option>
                                        <option value="China">China</option>
                                        <option value="Christmas Island">Christmas Island</option>
                                        <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                        <option value="Colombia">Colombia</option>
                                        <option value="Comoros">Comoros</option>
                                        <option value="Congo">Congo</option>
                                        <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
                                        <option value="Cook Islands">Cook Islands</option>
                                        <option value="Costa Rica">Costa Rica</option>
                                        <option value="Cote D'ivoire">Cote D'ivoire</option>
                                        <option value="Croatia">Croatia</option>
                                        <option value="Cuba">Cuba</option>
                                        <option value="Cyprus">Cyprus</option>
                                        <option value="Czech Republic">Czech Republic</option>
                                        <option value="Denmark">Denmark</option>
                                        <option value="Djibouti">Djibouti</option>
                                        <option value="Dominica">Dominica</option>
                                        <option value="Dominican Republic">Dominican Republic</option>
                                        <option value="Ecuador">Ecuador</option>
                                        <option value="Egypt">Egypt</option>
                                        <option value="El Salvador">El Salvador</option>
                                        <option value="Equatorial Guinea">Equatorial Guinea</option>
                                        <option value="Eritrea">Eritrea</option>
                                        <option value="Estonia">Estonia</option>
                                        <option value="Ethiopia">Ethiopia</option>
                                        <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                                        <option value="Faroe Islands">Faroe Islands</option>
                                        <option value="Fiji">Fiji</option>
                                        <option value="Finland">Finland</option>
                                        <option value="France">France</option>
                                        <option value="French Guiana">French Guiana</option>
                                        <option value="French Polynesia">French Polynesia</option>
                                        <option value="French Southern Territories">French Southern Territories</option>
                                        <option value="Gabon">Gabon</option>
                                        <option value="Gambia">Gambia</option>
                                        <option value="Georgia">Georgia</option>
                                        <option value="Germany">Germany</option>
                                        <option value="Ghana">Ghana</option>
                                        <option value="Gibraltar">Gibraltar</option>
                                        <option value="Greece">Greece</option>
                                        <option value="Greenland">Greenland</option>
                                        <option value="Grenada">Grenada</option>
                                        <option value="Guadeloupe">Guadeloupe</option>
                                        <option value="Guam">Guam</option>
                                        <option value="Guatemala">Guatemala</option>
                                        <option value="Guinea">Guinea</option>
                                        <option value="Guinea-bissau">Guinea-bissau</option>
                                        <option value="Guyana">Guyana</option>
                                        <option value="Haiti">Haiti</option>
                                        <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
                                        <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                                        <option value="Honduras">Honduras</option>
                                        <option value="Hong Kong">Hong Kong</option>
                                        <option value="Hungary">Hungary</option>
                                        <option value="Iceland">Iceland</option>
                                        <option value="India">India</option>
                                        <option value="Indonesia">Indonesia</option>
                                        <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                                        <option value="Iraq">Iraq</option>
                                        <option value="Ireland">Ireland</option>
                                        <option value="Israel">Israel</option>
                                        <option value="Italy">Italy</option>
                                        <option value="Jamaica">Jamaica</option>
                                        <option value="Japan">Japan</option>
                                        <option value="Jordan">Jordan</option>
                                        <option value="Kazakhstan">Kazakhstan</option>
                                        <option value="Kenya">Kenya</option>
                                        <option value="Kiribati">Kiribati</option>
                                        <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                                        <option value="Korea, Republic of">Korea, Republic of</option>
                                        <option value="Kuwait">Kuwait</option>
                                        <option value="Kyrgyzstan">Kyrgyzstan</option>
                                        <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                                        <option value="Latvia">Latvia</option>
                                        <option value="Lebanon">Lebanon</option>
                                        <option value="Lesotho">Lesotho</option>
                                        <option value="Liberia">Liberia</option>
                                        <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                                        <option value="Liechtenstein">Liechtenstein</option>
                                        <option value="Lithuania">Lithuania</option>
                                        <option value="Luxembourg">Luxembourg</option>
                                        <option value="Macao">Macao</option>
                                        <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
                                        <option value="Madagascar">Madagascar</option>
                                        <option value="Malawi">Malawi</option>
                                        <option value="Malaysia">Malaysia</option>
                                        <option value="Maldives">Maldives</option>
                                        <option value="Mali">Mali</option>
                                        <option value="Malta">Malta</option>
                                        <option value="Marshall Islands">Marshall Islands</option>
                                        <option value="Martinique">Martinique</option>
                                        <option value="Mauritania">Mauritania</option>
                                        <option value="Mauritius">Mauritius</option>
                                        <option value="Mayotte">Mayotte</option>
                                        <option value="Mexico">Mexico</option>
                                        <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                                        <option value="Moldova, Republic of">Moldova, Republic of</option>
                                        <option value="Monaco">Monaco</option>
                                        <option value="Mongolia">Mongolia</option>
                                        <option value="Montserrat">Montserrat</option>
                                        <option value="Morocco">Morocco</option>
                                        <option value="Mozambique">Mozambique</option>
                                        <option value="Myanmar">Myanmar</option>
                                        <option value="Namibia">Namibia</option>
                                        <option value="Nauru">Nauru</option>
                                        <option value="Nepal">Nepal</option>
                                        <option value="Netherlands">Netherlands</option>
                                        <option value="Netherlands Antilles">Netherlands Antilles</option>
                                        <option value="New Caledonia">New Caledonia</option>
                                        <option value="New Zealand">New Zealand</option>
                                        <option value="Nicaragua">Nicaragua</option>
                                        <option value="Niger">Niger</option>
                                        <option value="Nigeria">Nigeria</option>
                                        <option value="Niue">Niue</option>
                                        <option value="Norfolk Island">Norfolk Island</option>
                                        <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                        <option value="Norway">Norway</option>
                                        <option value="Oman">Oman</option>
                                        <option value="Pakistan">Pakistan</option>
                                        <option value="Palau">Palau</option>
                                        <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
                                        <option value="Panama">Panama</option>
                                        <option value="Papua New Guinea">Papua New Guinea</option>
                                        <option value="Paraguay">Paraguay</option>
                                        <option value="Peru">Peru</option>
                                        <option value="Philippines">Philippines</option>
                                        <option value="Pitcairn">Pitcairn</option>
                                        <option value="Poland">Poland</option>
                                        <option value="Portugal">Portugal</option>
                                        <option value="Puerto Rico">Puerto Rico</option>
                                        <option value="Qatar">Qatar</option>
                                        <option value="Reunion">Reunion</option>
                                        <option value="Romania">Romania</option>
                                        <option value="Russian Federation">Russian Federation</option>
                                        <option value="Rwanda">Rwanda</option>
                                        <option value="Saint Helena">Saint Helena</option>
                                        <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                        <option value="Saint Lucia">Saint Lucia</option>
                                        <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                                        <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
                                        <option value="Samoa">Samoa</option>
                                        <option value="San Marino">San Marino</option>
                                        <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                        <option value="Saudi Arabia">Saudi Arabia</option>
                                        <option value="Senegal">Senegal</option>
                                        <option value="Serbia and Montenegro">Serbia and Montenegro</option>
                                        <option value="Seychelles">Seychelles</option>
                                        <option value="Sierra Leone">Sierra Leone</option>
                                        <option value="Singapore">Singapore</option>
                                        <option value="Slovakia">Slovakia</option>
                                        <option value="Slovenia">Slovenia</option>
                                        <option value="Solomon Islands">Solomon Islands</option>
                                        <option value="Somalia">Somalia</option>
                                        <option value="South Africa">South Africa</option>
                                        <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
                                        <option value="Spain">Spain</option>
                                        <option value="Sri Lanka">Sri Lanka</option>
                                        <option value="Sudan">Sudan</option>
                                        <option value="Suriname">Suriname</option>
                                        <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                                        <option value="Swaziland">Swaziland</option>
                                        <option value="Sweden">Sweden</option>
                                        <option value="Switzerland">Switzerland</option>
                                        <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                                        <option value="Taiwan, Province of China">Taiwan, Province of China</option>
                                        <option value="Tajikistan">Tajikistan</option>
                                        <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                                        <option value="Thailand">Thailand</option>
                                        <option value="Timor-leste">Timor-leste</option>
                                        <option value="Togo">Togo</option>
                                        <option value="Tokelau">Tokelau</option>
                                        <option value="Tonga">Tonga</option>
                                        <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                        <option value="Tunisia">Tunisia</option>
                                        <option value="Turkey">Turkey</option>
                                        <option value="Turkmenistan">Turkmenistan</option>
                                        <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                        <option value="Tuvalu">Tuvalu</option>
                                        <option value="Uganda">Uganda</option>
                                        <option value="Ukraine">Ukraine</option>
                                        <option value="United Arab Emirates">United Arab Emirates</option>
                                        <option value="United Kingdom">United Kingdom</option>
                                        <option value="United States">United States</option>
                                        <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                                        <option value="Uruguay">Uruguay</option>
                                        <option value="Uzbekistan">Uzbekistan</option>
                                        <option value="Vanuatu">Vanuatu</option>
                                        <option value="Venezuela">Venezuela</option>
                                        <option value="Viet Nam">Viet Nam</option>
                                        <option value="Virgin Islands, British">Virgin Islands, British</option>
                                        <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                                        <option value="Wallis and Futuna">Wallis and Futuna</option>
                                        <option value="Western Sahara">Western Sahara</option>
                                        <option value="Yemen">Yemen</option>
                                        <option value="Zambia">Zambia</option>
                                        <option value="Zimbabwe">Zimbabwe</option>
                                    </select>
                                </div>
                            </div>
                        </fieldset>
                        <div class="form-actions">
                            <button type="submit" class="btn btn-primary">Validate &amp; Submit</button>
                            <button type="button" class="btn btn-default">Cancel</button>
                        </div>
                    </form>
                </div>
            </section>
        </div>
        <div class="col-md-5">
            <section class="widget">
                <header>
                    <h4><i class="fa fa-cogs"></i> Account settings</h4>
                    <div class="actions">
                        <button class="btn btn-xs btn-inverse"><i class="fa fa-arrow-down"></i> View more</button>
                    </div>
                </header>
                <div class="body">
                    <form method="post">
                        <fieldset>
                                <div class="form-group">
                                    <label for="exp">Account expiration date</label>
                                    <input id="exp" class="form-control date-picker" type="text" name="exp" value="">
                                    <p class="help-block">Bootstrap datepicker</p>
                                </div>
                                <div class="form-group">
                                    <label for="website">Associate to Website</label>
                                    <select id="website" class="chzn-select select-block-level"
                                            data-width="off"
                                            data-minimum-results-for-search="10"
                                            name="website">
                                        <option selected="selected" value="0">Admin</option>
                                        <option value="1">Main Website</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="created_by">Created By</label>

                                    <input id="created_by" class="form-control" type="text" name="created_by"
                                           value="Admin" disabled="disabled">

                                </div>
                                <div class="form-group">
                                    <label for="groups">Account Group</label>
                                    <select id="groups" name="groups" class="chzn-select select-block-level" multiple
                                            data-placeholder="Choose one or more groups for account"
                                            data-width="off">
                                        <option value="0">Subscriber</option>
                                        <option value="1">Retailer</option>
                                        <option value="2">Supplier</option>
                                        <option value="3">Manager</option>
                                    </select>

                                </div>
                                <div class="control-group">
                                    <div class="controls">
                                        <label class="checkbox" for="change-password">
                                        <input type="checkbox" id="change-password" name="change-password">
                                            Request password change
                                        </label>
                                    </div>
                                </div>
                        </fieldset>
                    </form>
                </div>
            </section>
        </div>
    </div>
	
@stop