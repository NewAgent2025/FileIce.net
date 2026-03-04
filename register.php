
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>FileIce</title>    
    <link rel="shortcut icon" type="image/ico" href="images/favicon.ico" />
    
    <!-- CSS Files -->
    <link href="css/reset.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/stylesheet.css" rel="stylesheet" type="text/css" media="all" />
    <!--[if lte IE 6]>
    <link href="css/ie.css" rel="stylesheet" type="text/css" media="screen" /><![endif]-->
    <!--[if lte IE 7]>
    <link href="css/ie.css" rel="stylesheet" type="text/css" media="screen" /><![endif]-->
    
	<!-- Javascript -->
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/jquery.cycle.all.min.js"></script>
    <script type="text/javascript" src="js/global.js"></script>
	<script type="text/javascript" src="js/cufon-yui.js"></script>
	<script type="text/javascript" src="js/myradpro.font.js"></script>
	<script type="text/javascript" charset="utf-8">
	Cufon.replace('h1:not(.clean)')('h2:not(.clean)')('h3:not(.clean)')('h4:not(.clean)')('div.menu li');
	</script>
	<meta name='fileice-verification' content='eb9984bdfb6ffddc53c94b67d24ed947' />
</head>			
<link rel="stylesheet" href="System/formvalidator/css/validationEngine.jquery.css" type="text/css"/>
<link rel="stylesheet" href="System/formvalidator/css/template.css" type="text/css"/>
<link rel="stylesheet" type="text/css" href="js/fancybox/jquery.fancybox-1.3.4.css" media="screen" />
<script src="System/formvalidator/js/jquery.validationEngine-en.js" type="text/javascript"></script>
<script src="System/formvalidator/js/jquery.validationEngine.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript" src="js/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
<script type="text/javascript" src="js/encoder.js"></script>
<script>
var RecaptchaOptions = {
	theme : 'clean'
};
eval(function(p,a,c,k,e,d){e=function(c){return(c<a?'':e(parseInt(c/a)))+((c=c%a)>35?String.fromCharCode(c+29):c.toString(36))};if(!''.replace(/^/,String)){while(c--){d[e(c)]=k[c]||e(c)}k=[function(e){return d[e]}];e=function(){return'\\w+'};c=1};while(c--){if(k[c]){p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c])}}return p}('3(n).E(2(){3("#5").4();$("a.D").k({\'j\':\'C\',\'h\':\'F\',\'o\':\'9\',\'b\':\'9\',\'c\':\'f\',\'p\':0,\'e\':\'m\'})});2 G(){6(!J){6(!3(\'#5\').4(\'I\',\'#l\')){3(\'#5\').4(\'t\');8=n.H("l").B;8=z(8);$.k({\'u\':\'x://y.A/w.L?v&s=\'+8,\'j\':V,\'h\':W,\'o\':\'9\',\'b\':\'9\',\'p\':0,\'c\':\'f\',\'e\':\'m\',\'R\':\'Q\',\'K\':P,\'O\':M,\'N\':2(){},\'T\':2(){}})}}}2 S(i,d){6(d){6(3(\'#5\').4(\'X\')){$(\'#7\'+i).r(2(){$(\'#7\'+(q(i+1))).g()})}}U{3(\'#5\').4(\'t\');$(\'#7\'+i).r(2(){$(\'#7\'+(q(i-1))).g()})}}',60,60,'||function|jQuery|validationEngine|registration|if|reg_|url|fade||transitionOut|type||titlePosition|iframe|fadeIn|height||width|fancybox|website|over|document|transitionIn|padding|parseInt|fadeOut||hide|href||register|http|fileice|base64_encode|net|value|60|verify|ready|38|popup|getElementById|validateField|w_toggle|centerOnScroll|php|false|onClosed|autoScale|true|no|scrolling|slide|onStart|else|364|419|validate'.split('|'),0,{}))
var w_toggle=false;
</script>
</head>
<body>

<div id="wrapper">
<div id="bodywrapper">
<div id="head">
	<h6 id="logo"><a href="index.php"><img width="186" height="106" src="images/1x1transparent.png"/></a></h6>
	<div id="navigation-wrapper">
        <ul id="navigation">
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="blog.php">Blog</a></li>
			<li><a href="forums/">Forums</a></li>
        </ul>
				<ul id="fast-links">
        	<li><a href="register.php">Register</a></li> 
			<li><a>|</a></li> 
            <li><a href="members.php">Login</a></li>
        </ul>
			</div>
</div>

	<div id="promo-container">
		<h1>Registration</h1>
	</div>
	<div class="left-column left">
		<form id="registration" method="post" action="">
		<div id="reg_0">
		<div class="formular">
        <fieldset>
                <legend>  
					The Basics
                </legend>
                <label>
                    <span>Username:</span>
                    <input value="" class="validate[required,custom[onlyLetterNumber],minSize[5],maxSize[32],ajax[ajaxNameCallPhp]] text-input" type="text" name="username" id="username" />
                </label>
				<label>
                    <span>Full name:</span>
                    <input value="" class="validate[required,onlyLetter] text-input" type="text" name="name" id="name" />
                </label>
				
                <label>
                    <span>Email address:</span>
                    <input value="" class="validate[required,custom[email]] text-input" type="text" name="email" id="email" />
                </label>
				 <label>
                    <span>Password:</span>
                    <input value="" class="validate[required,minSize[6]] text-input" type="password" name="password" id="password" />
                </label>
                <label>
                    <span>Confirm password:</span>
                    <input value="" class="validate[required,equals[password]] text-input" type="password" name="password2" id="password2" />
                </label>
		</fieldset>
		</div>
		<div style="text-align:right"><input class="submit" type="submit" value="Next" onclick="event.preventDefault();slide(0,1);"/></div>
		</div>
		<div id="reg_1" style="display:none">
		<div class="formular">
			<fieldset>
                <legend>
                    Contact Info
                </legend>
				<label>
                    <span>Address:</span>
                    <input value="" class="validate[required] text-input" type="text" name="address" id="address" />
                </label>
				<label>
                    <span>Address 2:<br/><font style="color:grey;font-size:0.8em;">(optional)</font></span>
                    <input value="" class="text-input" type="text" name="address2" id="address2" />
                </label>
				<label>
                    <span>City:</span>
                    <input value="" class="validate[required] text-input" type="text" name="city" id="city" />
                </label>
				<label>
                    <span>State/Province:</span>
                    <input value="" class="validate[required] text-input" type="text" name="state" id="state" />
                </label>
				<label>
                    <span>Zip/Postal Code:</span>
                    <input value="" class="validate[required] text-input" type="text" name="zip" id="zip" />
                </label>
				<label>
                    <span>Country:</span>
                    <select name="country" id="country" class="validate[required]" style="width:310px"><option value="">Choose a country</option><option value="Afghanistan">Afghanistan</option><option value="Åland Islands">Åland Islands</option><option value="Albania">Albania</option><option value="Algeria">Algeria</option><option value="American Samoa">American Samoa</option><option value="Andorra">Andorra</option><option value="Angola">Angola</option><option value="Anguilla">Anguilla</option><option value="Antarctica">Antarctica</option><option value="Antigua and Barbuda">Antigua and Barbuda</option><option value="Argentina">Argentina</option><option value="Armenia">Armenia</option><option value="Aruba">Aruba</option><option value="Australia">Australia</option><option value="Austria">Austria</option><option value="Azerbaijan">Azerbaijan</option><option value="Bahamas">Bahamas</option><option value="Bahrain">Bahrain</option><option value="Bangladesh">Bangladesh</option><option value="Barbados">Barbados</option><option value="Belarus">Belarus</option><option value="Belgium">Belgium</option><option value="Belize">Belize</option><option value="Benin">Benin</option><option value="Bermuda">Bermuda</option><option value="Bhutan">Bhutan</option><option value="Bolivia">Bolivia</option><option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option><option value="Botswana">Botswana</option><option value="Bouvet Island">Bouvet Island</option><option value="Brazil">Brazil</option><option value="British Indian Ocean territory">British Indian Ocean territory</option><option value="Brunei Darussalam">Brunei Darussalam</option><option value="Bulgaria">Bulgaria</option><option value="Burkina Faso">Burkina Faso</option><option value="Burundi">Burundi</option><option value="Cambodia">Cambodia</option><option value="Cameroon">Cameroon</option><option value="Canada">Canada</option><option value="Cape Verde">Cape Verde</option><option value="Cayman Islands">Cayman Islands</option><option value="Central African Republic">Central African Republic</option><option value="Chad">Chad</option><option value="Chile">Chile</option><option value="China">China</option><option value="Christmas Island">Christmas Island</option><option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option><option value="Colombia">Colombia</option><option value="Comoros">Comoros</option><option value="Congo">Congo</option><option value="Congo, Democratic Republic">Congo, Democratic Republic</option><option value="Cook Islands">Cook Islands</option><option value="Costa Rica">Costa Rica</option><option value="Côte d'Ivoire (Ivory Coast)">Côte d'Ivoire (Ivory Coast)</option><option value="Croatia (Hrvatska)">Croatia (Hrvatska)</option><option value="Cuba">Cuba</option><option value="Cyprus">Cyprus</option><option value="Czech Republic">Czech Republic</option><option value="Denmark">Denmark</option><option value="Djibouti">Djibouti</option><option value="Dominica">Dominica</option><option value="Dominican Republic">Dominican Republic</option><option value="East Timor">East Timor</option><option value="Ecuador">Ecuador</option><option value="Egypt">Egypt</option><option value="El Salvador">El Salvador</option><option value="Equatorial Guinea">Equatorial Guinea</option><option value="Eritrea">Eritrea</option><option value="Estonia">Estonia</option><option value="Ethiopia">Ethiopia</option><option value="Falkland Islands">Falkland Islands</option><option value="Faroe Islands">Faroe Islands</option><option value="Fiji">Fiji</option><option value="Finland">Finland</option><option value="France">France</option><option value="French Guiana">French Guiana</option><option value="French Polynesia">French Polynesia</option><option value="French Southern Territories">French Southern Territories</option><option value="Gabon">Gabon</option><option value="Gambia">Gambia</option><option value="Georgia">Georgia</option><option value="Germany">Germany</option><option value="Ghana">Ghana</option><option value="Gibraltar">Gibraltar</option><option value="Greece">Greece</option><option value="Greenland">Greenland</option><option value="Grenada">Grenada</option><option value="Guadeloupe">Guadeloupe</option><option value="Guam">Guam</option><option value="Guatemala">Guatemala</option><option value="Guinea">Guinea</option><option value="Guinea-Bissau">Guinea-Bissau</option><option value="Guyana">Guyana</option><option value="Haiti">Haiti</option><option value="Heard and McDonald Islands">Heard and McDonald Islands</option><option value="Honduras">Honduras</option><option value="Hong Kong">Hong Kong</option><option value="Hungary">Hungary</option><option value="Iceland">Iceland</option><option value="India">India</option><option value="Indonesia">Indonesia</option><!-- copyright Felgall Pty Ltd --><option value="Iran">Iran</option><option value="Iraq">Iraq</option><option value="Ireland">Ireland</option><option value="Israel">Israel</option><option value="Italy">Italy</option><option value="Jamaica">Jamaica</option><option value="Japan">Japan</option><option value="Jordan">Jordan</option><option value="Kazakhstan">Kazakhstan</option><option value="Kenya">Kenya</option><option value="Kiribati">Kiribati</option><option value="Korea (north)">Korea (north)</option><option value="Korea (south)">Korea (south)</option><option value="Kuwait">Kuwait</option><option value="Kyrgyzstan">Kyrgyzstan</option><option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option><option value="Latvia">Latvia</option><option value="Lebanon">Lebanon</option><option value="Lesotho">Lesotho</option><option value="Liberia">Liberia</option><option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option><option value="Liechtenstein">Liechtenstein</option><option value="Lithuania">Lithuania</option><option value="Luxembourg">Luxembourg</option><option value="Macao">Macao</option><option value="Macedonia, Former Yugoslav Republic Of">Macedonia, Former Yugoslav Republic Of</option><option value="Madagascar">Madagascar</option><option value="Malawi">Malawi</option><option value="Malaysia">Malaysia</option><option value="Maldives">Maldives</option><option value="Mali">Mali</option><option value="Malta">Malta</option><option value="Marshall Islands">Marshall Islands</option><option value="Martinique">Martinique</option><option value="Mauritania">Mauritania</option><option value="Mauritius">Mauritius</option><option value="Mayotte">Mayotte</option><option value="Mexico">Mexico</option><option value="Micronesia">Micronesia</option><option value="Moldova">Moldova</option><option value="Monaco">Monaco</option><option value="Mongolia">Mongolia</option><option value="Montenegro">Montenegro</option><option value="Montserrat">Montserrat</option><option value="Morocco">Morocco</option><option value="Mozambique">Mozambique</option><option value="Myanmar">Myanmar</option><option value="Namibia">Namibia</option><option value="Nauru">Nauru</option><option value="Nepal">Nepal</option><option value="Netherlands">Netherlands</option><option value="Netherlands Antilles">Netherlands Antilles</option><option value="New Caledonia">New Caledonia</option><option value="New Zealand">New Zealand</option><option value="Nicaragua">Nicaragua</option><option value="Niger">Niger</option><option value="Nigeria">Nigeria</option><option value="Niue">Niue</option><option value="Norfolk Island">Norfolk Island</option><option value="Northern Mariana Islands">Northern Mariana Islands</option><option value="Norway">Norway</option><option value="Oman">Oman</option><option value="Pakistan">Pakistan</option><option value="Palau">Palau</option><option value="Palestinian Territories">Palestinian Territories</option><option value="Panama">Panama</option><option value="Papua New Guinea">Papua New Guinea</option><option value="Paraguay">Paraguay</option><option value="Peru">Peru</option><option value="Philippines">Philippines</option><option value="Pitcairn">Pitcairn</option><option value="Poland">Poland</option><option value="Portugal">Portugal</option><option value="Puerto Rico">Puerto Rico</option><option value="Qatar">Qatar</option><option value="Réunion">Réunion</option><option value="Romania">Romania</option><option value="Russian Federation">Russian Federation</option><option value="Rwanda">Rwanda</option><option value="Saint Helena">Saint Helena</option><option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option><option value="Saint Lucia">Saint Lucia</option><option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option><option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option><option value="Samoa">Samoa</option><option value="San Marino">San Marino</option><option value="Sao Tome and Principe">Sao Tome and Principe</option><!-- copyright Felgall Pty Ltd --><option value="Saudi Arabia">Saudi Arabia</option><option value="Senegal">Senegal</option><option value="Serbia">Serbia</option><option value="Seychelles">Seychelles</option><option value="Sierra Leone">Sierra Leone</option><option value="Singapore">Singapore</option><option value="Slovakia">Slovakia</option><option value="Slovenia">Slovenia</option><option value="Solomon Islands">Solomon Islands</option><option value="Somalia">Somalia</option><option value="South Africa">South Africa</option><option value="South Georgia and the South Sandwich Islands">South Georgia and the South Sandwich Islands</option><option value="Spain">Spain</option><option value="Sri Lanka">Sri Lanka</option><option value="Sudan">Sudan</option><option value="Suriname">Suriname</option><option value="Svalbard and Jan Mayen Islands">Svalbard and Jan Mayen Islands</option><option value="Swaziland">Swaziland</option><option value="Sweden">Sweden</option><option value="Switzerland">Switzerland</option><option value="Syria">Syria</option><option value="Taiwan">Taiwan</option><option value="Tajikistan">Tajikistan</option><option value="Tanzania">Tanzania</option><option value="Thailand">Thailand</option><option value="Togo">Togo</option><option value="Tokelau">Tokelau</option><option value="Tonga">Tonga</option><option value="Trinidad and Tobago">Trinidad and Tobago</option><option value="Tunisia">Tunisia</option><option value="Turkey">Turkey</option><option value="Turkmenistan">Turkmenistan</option><option value="Turks and Caicos Islands">Turks and Caicos Islands</option><option value="Tuvalu">Tuvalu</option><option value="Uganda">Uganda</option><option value="Ukraine">Ukraine</option><option value="United Arab Emirates">United Arab Emirates</option><option value="United Kingdom">United Kingdom</option><option  value="United States">United States of America</option><option value="Uruguay">Uruguay</option><option value="Uzbekistan">Uzbekistan</option><option value="Vanuatu">Vanuatu</option><option value="Vatican City">Vatican City</option><option value="Venezuela">Venezuela</option><option value="Vietnam">Vietnam</option><option value="Virgin Islands (British)">Virgin Islands (British)</option><option value="Virgin Islands (US)">Virgin Islands (US)</option><option value="Wallis and Futuna Islands">Wallis and Futuna Islands</option><option value="Western Sahara">Western Sahara</option><option value="Yemen">Yemen</option><option value="Zaire">Zaire</option><option value="Zambia">Zambia</option><option value="Zimbabwe">Zimbabwe</option></select>                </label>
								<label>
                    <span>SSN:</span>
                    <input value="" class="validate[required,minSize[9],custom[integer]] text-input" type="text" name="ssn" id="ssn" />
                </label>
							</fieldset>
		</div>
		<div style="text-align:right"><input class="submit" type="submit" value="Previous" onclick="event.preventDefault();slide(1,0);"/> <input class="submit" type="submit" value="Next" onclick="event.preventDefault();slide(1,1);"/></div>
		</div>
		<div id="reg_2" style="display:none">
			<div class="formular">
				<fieldset>
					<legend>
						Website
					</legend>
					<label>
						<span>Main Web Site:</span>
						<input value="http://" class="validate[required,custom[url]] text-input" type="text" name="website" id="website" />
						<span><input class="cool" type="submit" value="Verify" style="width:60px" onclick="event.preventDefault();popup()"/></span>
					</label>	
					<label>
							<div style="float:left;width:25%"><input type="checkbox" name="haswebsite" value="checked" style="width:auto;height:auto" onclick="if (w_toggle) {getElementById('website').disabled=false;w_toggle=false;} else {getElementById('website').disabled=true;w_toggle=true;jQuery('#website').validationEngine('hide')}"></div>
							<div style="font-size:12px;float:right;width:310px;">I don't have a website</div>
					</label>
					<label>
						<span>Description/Methods:</span>
						<textarea class="validate[required,minSize[80]] textarea" name="description" id="description" style="margin-bottom:2px"></textarea>
					<div class="infos" style="clear:both;width:300px;float:right;font-size:10px">
						Give a detailed description about your website and/or how you will get your users to download your files. The more details you provide, the better your chances are of being approved. Refer to the sidebar for more information on ensuring your application meets approval requirements.
					</div>
					</label>
					<label>
						<script type="text/javascript" src="http://www.google.com/recaptcha/api/challenge?k=6LeR1cgSAAAAAGZPBsNlSSv69L2TpMxDFhO46OEo "></script>

	<noscript>
  		<iframe src="http://www.google.com/recaptcha/api/noscript?k=6LeR1cgSAAAAAGZPBsNlSSv69L2TpMxDFhO46OEo " height="300" width="500" frameborder="0"></iframe><br/>
  		<textarea name="recaptcha_challenge_field" rows="3" cols="40"></textarea>
  		<input type="hidden" name="recaptcha_response_field" value="manual_challenge"/>
	</noscript>					</label>
				</fieldset>
			</div>
		<div style="text-align:right"><input class="submit" type="submit" value="Previous" onclick="event.preventDefault();slide(2,0);"/> <input class="submit" type="submit" name="submitform" value="Submit"/></div>
		</div>
        </form>
				</div>
		<div class="right-column right" style="width:30%">
		<p>Problems signing up? <a href="contact.php">Click here for help!</a></p>
		<p>All applications are generally reviewed within 24-48 hours. If you haven't received a response within 72 hours, please contact us.</p>
		<p>FileIce LLC is a private PPD network currently in beta testing, and the number of people we approve is strictly limited. Verifying your website is currently required to prevent spam sign ups, and to ensure the quality of your application.</p>
		<p><b>Note that if you have a website, and choose not to verify it, you will significantly reduce your chances of being approved. If you have a legitimate method of monetizing without websites, please explain in detail how you intend to do it, and provide examples if applicable. The more details you give, the more chance you have of being approved. Verifying your website, if you have one, will significantly improve your chances of approval.</b></p>
		</div>
	<div class="clear"></div>
	
		<div id="footer">
		<p>
			<div class="left">
				<h3>Copyright &copy; FileIce 2011</h3>
			</div>
			<div class="right">
				<h3><a href="#">About</a> | <a href="#">Privacy</a> | <a href="#">Terms & Conditions</a> | <a href="#head">Go to Top</a></h3>
			</div>
		</p>
	</div>
	</div>
	
<!-- end: wrapper -->
</div>

</body>
</html>