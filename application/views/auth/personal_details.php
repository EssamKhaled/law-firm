<div class="container">
    <!-- BEGIN SIDEBAR & CONTENT -->
    <div class="row margin-bottom-40" style="min-height: 700px;">
        <div class="col-md-2 col-sm-2">
            <?php $this->load->view('frontend/ads_left'); ?>
        </div>
        <div class="col-md-8 col-sm-8 well">

            <div class="content-form-page">
                <div class="row">
                    <div class="col-md-12" style="margin-bottom: 20px;margin-top: 20px;">
                        <div class="col-md-4">
                            <a class="btn btn-circle btn-icon-only btn-primary">
                                1
                            </a>   
                            <span style="padding-left: 10px;">Account Details</span>
                        </div>
                        <div class="col-md-4">
                            <a class="btn btn-circle btn-icon-only btn-primary">
                                2
                            </a>   
                            <span style="padding-left: 10px;">Additional Details</span>
                        </div> 
                        <div class="col-md-4">
                            <a class="btn btn-circle btn-icon-only btn-default" style="border: 1px solid #CFCCCC;">
                                3
                            </a>   
                            <span style="padding-left: 10px;">Interests</span>
                        </div>                         
                    </div>
                    <br>

                    <?php echo form_open("auth/create_user", array('class' => 'form-horizontal form-without-legend', 'role' => 'form')); ?>
                    <?php if ($message) : ?>
                        <div class="note note-danger" style="margin-top: 50px;"><?php echo $message; ?></div>                        
                    <?php endif; ?>
                    <div class="form-group">
                        <label  class="col-lg-3 control-label">
                            <strong style="display: block;width: 100%;padding: 0;padding-bottom: 5px;line-height: inherit;color: #939393;border: 0;border-bottom: 1px solid #ccc;">
                                Personal Details
                            </strong>
                        </label>                                             
                    </div>  
                    <div class="form-group">
                        <label  class="col-lg-3 control-label">National ID </label>
                        <div class="col-lg-8">
                            <?php echo form_input($national_id); ?>     
                        </div>
                    </div>                         
                    <div class="form-group">
                        <label  class="col-lg-3 control-label">WhatsApp Number</label>
                        <div class="col-lg-8">
                            <?php echo form_input($whatsapp); ?>
                        </div>
                    </div> 
                    <div class="form-group">
                        <label  class="col-lg-3 control-label">Education Level </label>
                        <div class="col-lg-8">
                            <select class="form-control" name="edu_level">
                                <option value="">Select</option><option value="Some Schooling">Some Schooling</option><option value="High School">High School</option><option value="Vocational">Vocational</option><option value="Diploma">Diploma</option><option value="Bachelor's Degree" selected="selected">Bachelor's Degree</option><option value="Master's Degree">Master's Degree</option><option value="Doctorate Degree">Doctorate Degree</option>
                            </select>                            
                        </div>
                    </div>                         
                    <div class="form-group">
                        <label  class="col-lg-3 control-label">Date Of Birth </label>
                        <div class="col-lg-2">
                            <select class="form-control" name="birth_day">
                                <option value="">Day</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option>
                            </select>
                        </div>
                        <div class="col-lg-2">
                            <select class="form-control" name="birth_month">
                                <option value="">Month</option><option value="1">Jan</option><option value="2">Feb</option><option value="3">Mar</option><option value="4">Apr</option><option value="5">May</option><option value="6">Jun</option><option value="7">Jul</option><option value="8">Aug</option><option value="9">Sep</option><option value="10">Oct</option><option value="11">Nov</option><option value="12">Dec</option>
                            </select>
                        </div> 
                        <div class="col-lg-2">
                            <select class="form-control" name="birth_year">
                                <option value="">Year</option><option value="2015">2015</option><option value="2014">2014</option><option value="2013">2013</option><option value="2012">2012</option><option value="2011">2011</option><option value="2010">2010</option><option value="2009">2009</option><option value="2008">2008</option><option value="2007">2007</option><option value="2006">2006</option><option value="2005">2005</option><option value="2004">2004</option><option value="2003">2003</option><option value="2002">2002</option><option value="2001">2001</option><option value="2000">2000</option><option value="1999">1999</option><option value="1998">1998</option><option value="1997">1997</option><option value="1996">1996</option><option value="1995">1995</option><option value="1994">1994</option><option value="1993">1993</option><option value="1992">1992</option><option value="1991">1991</option><option value="1990">1990</option><option value="1989">1989</option><option value="1988">1988</option><option value="1987">1987</option><option value="1986">1986</option><option value="1985">1985</option><option value="1984">1984</option><option value="1983">1983</option><option value="1982">1982</option><option value="1981">1981</option><option value="1980">1980</option><option value="1979">1979</option><option value="1978">1978</option><option value="1977">1977</option><option value="1976">1976</option><option value="1975">1975</option><option value="1974">1974</option><option value="1973">1973</option><option value="1972">1972</option><option value="1971">1971</option><option value="1970">1970</option><option value="1969">1969</option><option value="1968">1968</option><option value="1967">1967</option><option value="1966">1966</option><option value="1965">1965</option><option value="1964">1964</option><option value="1963">1963</option><option value="1962">1962</option><option value="1961">1961</option><option value="1960">1960</option><option value="1959">1959</option><option value="1958">1958</option><option value="1957">1957</option><option value="1956">1956</option><option value="1955">1955</option><option value="1954">1954</option><option value="1953">1953</option><option value="1952">1952</option><option value="1951">1951</option><option value="1950">1950</option><option value="1949">1949</option><option value="1948">1948</option><option value="1947">1947</option><option value="1946">1946</option><option value="1945">1945</option><option value="1944">1944</option><option value="1943">1943</option><option value="1942">1942</option><option value="1941">1941</option><option value="1940">1940</option><option value="1939">1939</option><option value="1938">1938</option><option value="1937">1937</option><option value="1936">1936</option><option value="1935">1935</option><option value="1934">1934</option><option value="1933">1933</option><option value="1932">1932</option><option value="1931">1931</option><option value="1930">1930</option><option value="1929">1929</option><option value="1928">1928</option><option value="1927">1927</option><option value="1926">1926</option><option value="1925">1925</option><option value="1924">1924</option><option value="1923">1923</option><option value="1922">1922</option><option value="1921">1921</option><option value="1920">1920</option><option value="1919">1919</option><option value="1918">1918</option><option value="1917">1917</option><option value="1916">1916</option><option value="1915">1915</option><option value="1914">1914</option><option value="1913">1913</option><option value="1912">1912</option><option value="1911">1911</option><option value="1910">1910</option><option value="1909">1909</option><option value="1908">1908</option><option value="1907">1907</option><option value="1906">1906</option><option value="1905">1905</option><option value="1904">1904</option><option value="1903">1903</option><option value="1902">1902</option><option value="1901">1901</option><option value="1900">1900</option>
                            </select>
                        </div>                         
                    </div>   
                    <div class="form-group">
                        <label  class="col-lg-3 control-label">Gender</label>
                        <div class="col-lg-2">
                            <select class="form-control" name="gender">
                                <option>Male</option>
                                <option>Female</option>
                            </select>
                        </div>
                    </div> 
                    <div class="form-group">
                        <label  class="col-lg-3 control-label">Marital Status</label>
                        <div class="col-lg-2">
                            <select class="form-control" name="marital_status">
                                <option>Single</option>
                                <option>Married</option>
                            </select>
                        </div>
                    </div>       
                    <div class="form-group">
                        <label  class="col-lg-3 control-label">No. of Children</label>
                        <div class="col-lg-2">
                            <select class="form-control" name="children">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>                            
                        </div>
                    </div> 
                    <div class="form-group">
                        <label  class="col-lg-3 control-label">Own a driving license? </label>
                        <div class="col-lg-2">
                            <select class="form-control" name="driving_license">
                                <option>Yes</option>
                                <option>No</option>
                            </select> 
                        </div>
                    </div>                          
                        
                        
                    <div class="form-group">
                        <label  class="col-lg-3 control-label">
                            <strong style="display: block;width: 100%;padding: 0;padding-bottom: 5px;line-height: inherit;color: #939393;border: 0;border-bottom: 1px solid #ccc;">
                                Address Details
                            </strong>
                        </label>                                             
                    </div>                        
                   <div class="form-group">
                        <label  class="col-lg-3 control-label">Country</label>
                        <div class="col-lg-8">
                            <select class="form-control" name="country"><option value="1">Egypt</option><option value="2">Afghanistan</option><option value="3">Albania</option><option value="4">Algeria</option><option value="5">American Samoa</option><option value="6">Andorra</option><option value="7">Angola</option><option value="8">Anguilla</option><option value="9">Antigua and Barbuda</option><option value="10">Argentina</option><option value="11">Armenia</option><option value="12">Aruba</option><option value="13">Australia</option><option value="14">Austria</option><option value="15">Azerbaijan</option><option value="16">Bahamas</option><option value="17">Bahrain</option><option value="18">Bangladesh</option><option value="19">Barbados</option><option value="20">Belarus</option><option value="21">Belgium</option><option value="22">Belize</option><option value="23">Benin</option><option value="24">Bermuda</option><option value="25">Bhutan</option><option value="26">Bolivia</option><option value="27">Botswana</option><option value="28">Brazil</option><option value="29">Brunei</option><option value="30">Bulgaria</option><option value="31">Burkina Faso</option><option value="32">Burundi</option><option value="33">Cameroon</option><option value="34">Canada</option><option value="35">Cape Verde</option><option value="36">Cayman Islands</option><option value="37">Central African Republic</option><option value="38">Chad</option><option value="39">Chile</option><option value="40">China</option><option value="41">Christmas Island</option><option value="42">Cocos Islands</option><option value="43">Colombia</option><option value="44">Comoros</option><option value="45">Congo</option><option value="46">Costa Rica</option><option value="47">Croatia</option><option value="48">Cuba</option><option value="49">Cyprus</option><option value="50">Czech Republic</option><option value="51">Denmark</option><option value="52">Djibouti</option><option value="53">Dominica</option><option value="54">Dominican Republic</option><option value="55">Ecuador</option><option value="56">Egypt</option><option value="57">El Salvador</option><option value="58">Equatorial Guinea</option><option value="59">Eritrea</option><option value="60">Estonia</option><option value="61">Ethiopia</option><option value="62">Faroe Islands</option><option value="63">Fiji</option><option value="64">Finland</option><option value="65">France</option><option value="66">French Polynesia</option><option value="67">Gabon</option><option value="68">Gambia</option><option value="69">Georgia</option><option value="70">Germany</option><option value="71">Ghana</option><option value="72">Gibraltar</option><option value="73">Greece</option><option value="74">Grenada</option><option value="75">Guam</option><option value="76">Guatemala</option><option value="77">Guinea</option><option value="78">Guyana</option><option value="79">Haiti</option><option value="80">Honduras</option><option value="81">Hong Kong</option><option value="82">Hungary</option><option value="83">Iceland</option><option value="84">India</option><option value="85">Indonesia</option><option value="86">Iran</option><option value="87">Iraq</option><option value="88">Ireland</option><option value="89">Palastine</option><option value="90">Italy</option><option value="91">Ivory Coast</option><option value="92">Jamaica</option><option value="93">Japan</option><option value="94">Jordan</option><option value="95">Kazakhstan</option><option value="96">Kenya</option><option value="97">Kiribati</option><option value="98">Kuwait</option><option value="99">Kyrgyzstan</option><option value="100">Latvia</option><option value="101">Lebanon</option><option value="102">Lesotho</option><option value="103">Liberia</option><option value="104">Libya</option><option value="105">Liechtenstein</option><option value="106">Lithuania</option><option value="107">Luxembourg</option><option value="108">Macau</option><option value="109">Macedonia</option><option value="110">Madagascar</option><option value="111">Malawi</option><option value="112">Malaysia</option><option value="113">Maldives</option><option value="114">Mali</option><option value="115">Malta</option><option value="116">Marshall Islands</option><option value="117">Mauritania</option><option value="118">Mauritius</option><option value="119">Mexico</option><option value="120">Micronesia</option><option value="121">Moldova</option><option value="122">Mongolia</option><option value="123">Montserrat</option><option value="124">Morocco</option><option value="125">Mozambique</option><option value="126">Myanmar</option><option value="127">Namibia</option><option value="128">Nauru</option><option value="129">Nepal</option><option value="130">Netherlands</option><option value="131">Netherlands Antilles</option><option value="132">New Caledonia</option><option value="133">New Zealand</option><option value="134">Nicaragua</option><option value="135">Niger</option><option value="136">Nigeria</option><option value="137">Norfolk Island</option><option value="138">North Korea</option><option value="139">Northern Mariana Islands</option><option value="140">Norway</option><option value="141">Oman</option><option value="142">Pakistan</option><option value="143">Palau</option><option value="144">Palestine</option><option value="145">Panama</option><option value="146">Papua New Guinea</option><option value="147">Paraguay</option><option value="148">Peru</option><option value="149">Philippines</option><option value="150">Poland</option><option value="151">Portugal</option><option value="152">Puerto Rico</option><option value="153">Qatar</option><option value="154">Romania</option><option value="155">Russian</option><option value="156">Rwanda</option><option value="157">Saint Kitts and Nevis</option><option value="158">Saint Lucia</option><option value="159">Saint Vincent and the Grenadines</option><option value="160">Samoa</option><option value="161">San Marino</option><option value="162">Sao Tome</option><option value="163">Saudi Arabia</option><option value="164">Senegal</option><option value="165">Serbia and Montenegro</option><option value="166">Seychelles</option><option value="167">Sierra Leone</option><option value="168">Singapore</option><option value="169">Slovakia</option><option value="170">Slovenia</option><option value="171">Solomon Islands</option><option value="172">Somalia</option><option value="173">South Africa</option><option value="174">South Korea</option><option value="175">Spain</option><option value="176">Sri Lanka</option><option value="177">Sudan</option><option value="178">Suriname</option><option value="179">Swaziland</option><option value="180">Sweden</option><option value="181">Switzerland</option><option value="182">Syria</option><option value="183">Taiwan</option><option value="184">Tajikistan</option><option value="185">Tanzania</option><option value="186">Thailand</option><option value="187">Tonga</option><option value="188">Trinidad &amp; Tobago</option><option value="189">Tunisia</option><option value="190">Turkey</option><option value="191">Turkmenistan</option><option value="192">Turks and Caicos Islands</option><option value="193">Tuvalu</option><option value="194">Uganda</option><option value="195">Ukraine</option><option value="196">United Arab Emirates</option><option value="197">United Kingdom</option><option value="198">United States</option><option value="199">Uruguay</option><option value="200">Uzbekistan</option><option value="201">Venezuela</option><option value="202">Vietnam</option><option value="203">Virgin Islands</option><option value="204">Western Sahara</option><option value="205">Yemen</option><option value="206">Zimbabwe</option></select>                            
                        </div>
                    </div> 
                    <div class="form-group">
                        <label  class="col-lg-3 control-label">City</label>
                        <div class="col-lg-8">
                            <input type="text" name="city" class="form-control" placeholder="Cairo" />
                        </div>
                    </div> 
                    <div class="form-group">
                        <label  class="col-lg-3 control-label">Area</label>
                        <div class="col-lg-8">
                            <input type="text" name="area" class="form-control" placeholder="Maadi" />
                        </div>
                    </div>                         
                    <div class="form-group">
                        <label  class="col-lg-3 control-label">Address</label>
                        <div class="col-lg-8">
                            <?php echo form_textarea($address); ?>
                        </div>
                    </div>                                                                
                    
                    <div class="form-group">
                        <label  class="col-lg-3 control-label">
                            <strong style="display: block;width: 100%;padding: 0;padding-bottom: 5px;line-height: inherit;color: #939393;border: 0;border-bottom: 1px solid #ccc;">Profession Details</strong>
                        </label>                                             
                    </div>
                    
                    <div class="form-group">
                        <label  class="col-lg-3 control-label">Job Industry </label>
                        <div class="col-lg-8">
                            <select class="form-control" name="job_industry">
                                <option value="1">Select</option><option value="2">Accounting and Auditing Services</option><option value="3">Advertising and PR Services</option><option value="4">Aerospace and Defense</option><option value="5">Agriculture/Forestry/Fishing/Farming</option><option value="6">Airlines/Aviation</option><option value="7">Alternative Medicine</option><option value="8">Animation</option><option value="9">Apparel and Fashion</option><option value="10">Architectural and Design Services</option><option value="11">Arts and Crafts</option><option value="12">Automotive and Parts Manufacturing</option><option value="13">Automotive Sales and Repair Services</option><option value="14">Aviation and Aerospace</option><option value="15">Banking</option><option value="16">Biotechnology</option><option value="17">Broadcasting, Music, and Film</option><option value="18">Business Services - Other</option><option value="19">Business Supplies and Equipment</option><option value="20">Capital Markets</option><option value="21">Chemicals/Petro-Chemicals</option><option value="22">Clothing and Textile Manufacturing</option><option value="23">Computer and Network Security</option><option value="24">Computer Games</option><option value="25">Computer Hardware</option><option value="26">Computer Networking</option><option value="27">Computer Software</option><option value="28">Computer/IT Services</option><option value="29">Construction - Industrial Facilities and Infrastructure</option><option value="30">Construction - Residential &amp; Commercial/Office</option><option value="31">Consumer Electronics</option><option value="32">Consumer Packaged Goods Manufacturing</option><option value="33">Consumer Services</option><option value="34">Cosmetics</option><option value="35">Dairy</option><option value="36">Education</option><option value="37">Electronics, Components, and Semiconductor Mfg</option><option value="38">Energy and Utilities</option><option value="39">Engineering - Mechanical or Industrial</option><option value="40">Engineering Services</option><option value="41">Entertainment</option><option value="42">Environmental Services</option><option value="43">Financial Services</option><option value="44">Fine Art</option><option value="116">FMCG</option><option value="45">Food and Beverage Production</option><option value="46">Furniture</option><option value="47">Government and Military</option><option value="48">Graphic Design</option><option value="49">Health, Wellness and Fitness</option><option value="50">Healthcare Services and Hospital</option><option value="51">Higher Education</option><option value="52">Hotels and Lodging</option><option value="53">Human Resources</option><option value="54">Import and Export</option><option value="55">Information Technology Services</option><option value="56">Insurance</option><option value="57">Internet Services</option><option value="58">Law Enforcement</option><option value="59">Legal Services</option><option value="60">Logistics and Supply Chain</option><option value="61">Luxury Goods and Jewelry</option><option value="62">Management Consulting Services</option><option value="63">Manufacturing</option><option value="64">Marine Manufacturing &amp; Services</option><option value="65">Market Research</option><option value="66">Marketing and Advertising</option><option value="67">Media Production</option><option value="68">Medical Devices and Supplies</option><option value="69">Military</option><option value="70">Mining and Metals</option><option value="71">Motion Pictures and Film</option><option value="72">Music</option><option value="73">Nanotechnology</option><option value="74">Nonprofit Charitable Organizations</option><option value="75">Oil and Energy</option><option value="76">Online Media</option><option value="77">Outsourcing/Offshoring</option><option value="78">Package/Freight Delivery</option><option value="79">Packaging and Containers</option><option value="80">Paper and Forest Products</option><option value="81">Performing and Fine Arts</option><option value="82">Personal and Household Services</option><option value="83">Pharmaceuticals</option><option value="84">Photography</option><option value="85">Plastics</option><option value="86">Primary/Secondary Education</option><option value="87">Printing and Publishing</option><option value="88">Professional Training and Coaching</option><option value="89">Public Policy</option><option value="90">Public Relations and Communications</option><option value="91">Real Estate/Property Management</option><option value="92">Recreational Facilities and Services</option><option value="93">Religious Institutions</option><option value="94">Renewables and Environment</option><option value="95">Research</option><option value="96">Restaurant/Food Services</option><option value="97">Retail</option><option value="98">Security and Surveillance</option><option value="99">Semiconductors</option><option value="100">Sports and Physical Recreation</option><option value="101">Staffing and Recruiting</option><option value="102">Supermarkets</option><option value="103">Telecommunications Services</option><option value="104">Textiles</option><option value="105">Translation and Localization</option><option value="106">Transportation/Trucking/Railroad</option><option value="107">Travel, Transportation and Tourism</option><option value="108">Venture Capital and Private Equity</option><option value="109">Veterinary</option><option value="110">Warehousing</option><option value="111">Waste Management</option><option value="112">Wholesale Trade</option><option value="113">Wireless</option><option value="114">Writing and Editing</option>
                            </select>                            
                        </div>
                    </div>                          
                    <div class="form-group">
                        <label  class="col-lg-3 control-label">Current Career Level </label>
                        <div class="col-lg-8">
                            <select class="form-control" name="career_level">
                                <option value="">Select</option><option value="Student">Student</option><option value="Entry level">Entry level</option><option value="Experienced (Non-Manager)" selected="selected">Experienced (Non-Manager)</option><option value="Manager">Manager</option><option value="Senior Management (e.g. VP, CEO)">Senior Management (e.g. VP, CEO)</option>
                            </select>                            
                        </div>
                    </div>  
                        
                    <div class="form-group">
                        <label  class="col-lg-3 control-label">Company</label>
                        <div class="col-lg-8">
                            <?php echo form_input($job_title); ?>
                        </div>
                    </div>                         
                    <div class="form-group">
                        <label  class="col-lg-3 control-label">Position</label>
                        <div class="col-lg-8">
                            <?php echo form_input($job_title); ?>
                        </div>
                    </div>                                  
                        
                    <div class="form-group">
                        <label  class="col-lg-3 control-label">
                            <strong style="display: block;width: 100%;padding: 0;padding-bottom: 5px;line-height: inherit;color: #939393;border: 0;border-bottom: 1px solid #ccc;">
                                Recommend Friend
                            </strong>
                        </label>                                             
                    </div>
                    <div class="form-group">
                        <label  class="col-lg-3 control-label">Friend Name</label>
                        <div class="col-lg-8">
                            <input type="text" name="friend_name" class="form-control" placeholder="Ahmed Kamal" />
                        </div>
                    </div> 
                    <div class="form-group">
                        <label  class="col-lg-3 control-label">Friend Email</label>
                        <div class="col-lg-8">
                            <input type="text" name="friend_email" class="form-control" placeholder="email@email.com" />
                        </div>
                    </div>     
                    <div class="form-group">
                        <label  class="col-lg-3 control-label">Friend Mobile</label>
                        <div class="col-lg-8">
                            <input type="text" name="friend_mobile" class="form-control" placeholder="011 42 82 36 24" />
                        </div>
                    </div>                         
                        
                    <div class="row">
                        <div class="col-lg-8 col-md-offset-4 padding-left-0 padding-top-20">
                            <button type="submit" class="btn btn-primary hidden">Next</button>
                            <a href="<?php echo site_url('auth/interests'); ?>" class="btn btn-primary">Next</a>
                            <a href="<?php echo site_url(''); ?>" class="btn btn-default">back</a>
                        </div>
                    </div>
                    <?php echo form_close(); ?>
                </div>
            </div>
        </div>
        <div class="col-md-2 col-sm-2">
            <?php $this->load->view('frontend/ads_right'); ?>
        </div>
    </div>
    <!-- END SIDEBAR & CONTENT -->
</div>



