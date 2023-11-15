<form action="../css/formtoemail.php" method="post" name="Application Form" onSubmit="return validate_form();">
				
                <div class="apply-form">
                    <center>
                        <p style="text-align:center;"><img src="../assets/img/images/1sm.jpg" alt="sign-loan-agreement" width="350" height="345"></p>
                        <p><strong>If Approved, The Lender Can Fund Your Bank Account Directly Within a Week.</strong></p>
                        <div class="main-heading">
                            <h1>Apply Now!</h1>
                            
                        </div>
                    </center>
            
                    
                    
                    <div class="row apply-row-1">
                        <div class="col-12">
                            <h6>How much is your Funding Request<sup><span>*</span></sup></h6>
                            <div class="form-control empty-padding">
                                <div class="label-dollar"><strong>$</strong></div>
                                <input type="text" name="Amount" id="amountInput" placeholder="Enter Loan Amount"
                                                                                max="150000" maxlength="8" required="required">
                                                        
                            </div>
                          <br>
                        <div class="error" id="amountError"></div>
                        </div>
                    </div>
        
                    <div class="col-12">
                        <h6>Detailed Use of Funds<sup><span>*</span></sup></h6>
                        <textarea id="fundUse" name="Fund-Use" cols="45" rows="2" class="form-control" placeholder="Details" required></textarea>
                    </div>
    
                    <div class="row apply-row-2">
                        <div class="col">
                            <label class="fw-bold pt-3">I am seeking Funding for the following Loan<sup><span>*</span></sup></label>
                            <div class="check-boxes">
                                <div class="col-md-6 clm-1">
                                    <div class="box-1">
                                        <input type="radio" name="LoanType" id="personalLoan" value="PersonalLoan" required>
                                        <span>Personal Loans</span>
                                    </div> 
                                    <div class="box-1">
                                        <input type="radio" name="LoanType" id="businessLoan" value="BusinessLoan">
                                        <span>Business Loans</span>
                                    </div> 
                                    <div class="box-1">
                                        <input type="radio" name="LoanType" id="autoLoan" value="Auto/Motorbike/RV/Boat">
                                        <span>Auto/Motorbike/RV/Boat</span>
                                    </div> 
                                    <div class="box-1">
                                        <input type="radio" name="LoanType" id="homeImprovement" value="HomeImprovement">
                                        <span>Home Improvement</span>
                                    </div> 
                                    <div class="box-1">
                                        <input type="radio" name="LoanType" id="debtConsolidation" value="DebtConsolidation">
                                        <span>Debt Consolidation</span>
                                    </div> 
                                    <div class="box-1">
                                        <input type="radio" name="LoanType" id="largePurchase" value="LargePurchase">
                                        <span>Large Purchase</span>
                                    </div> 
                                    </div>
                                    <div class="col-md-6 clm-2">
                                    <div class="box-2">
                                        <input type="radio" name="LoanType" id="medicalExpense" value="MedicalExpense">
                                        <span>Medical Expense</span>
                                    </div> 
                                    
                                    <div class="box-2">
                                        <input type="radio" name="LoanType" id="vacation" value="Vacationacation">
                                        <span>Vacation</span>
                                    </div>
                                    <div class="box-2">
                                        <input type="radio" name="LoanType" id="taxes" value="Taxes">
                                        <span>Taxes</span>
                                    </div> 
                                    <div class="box-2">
                                        <input type="radio" name="LoanType" id="other" value="Other">
                                        <span>Other</span>
                                    </div> 
                                   
                                    <div class="box-3">
                                        <!--  <input type="checkbox" class="box-3-check">-->
                                        <span> <input type="text" class="box-3-input form-control" placeholder="Other" id="otherInput" alue="OtherInput"> </span>				                        </div> 
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row apply-row-3">
                        <h5 class="pt-5 fw-bold">Primary Contact Information</h5>
                        <div class="row g-3">
                            <div class="col-sm-5">
                                <h6>Name<sup><span>*</span></sup></h6>
                                <input type="text"  name="FirstName" class="form-control" placeholder="First" aria-label="Name" id="firstName" required>
                            </div>
                            <div class="col-sm-2 pt-4">
                                <input type="text"  name="MiddleName" class="form-control" placeholder="MI" aria-label="Middlename" id="middleName" maxlength="1">
                            </div>
                            <div class="col-sm-5 pt-4">
                                <input type="text"  name="LastName" class="form-control" placeholder="Last" aria-label="Lastname" id="lastName" required>
                            </div>
                        </div>

                        <div class="row g-3">
                                <div class="col">
                                    <h6>Mobile Phone<sup><span>*</span></sup></h6>
                                    <input type="text"  name="MobilePhone" class="form-control" id="Phone"  maxlength="12" placeholder="Mobile #" oninput="formatPhoneNumber(this)" required>
                                    <p>Will be used for Verification.</p>
                                </div>
                                <div class="col-md-4">
                                      <h6>Contact Time <sup><span>*</span></sup></h6>
                                    <select id="inputBestTime"  name="ContactTime" class="form-select" id="contact-time" required>
                                       <option value="">Select One</option>
                                       <option value="Morning">Morning</option>
                                          <option value="Afternoon">Afternoon</option>
                                        <option value="Evening">Evening</option>
                                    </select>
                                </div>
                        </div>
                        <div class="row g-3">
                                <div class="col">
                                    <h6>Email<sup><span>*</span></sup></h6>
                                    <input type="email" name="Email" id="Email" class="form-control" aria-label="email" placeholder="Email Address" required>
                                </div>
                                <div class="col">
                                    <h6 for="">Confirm Email<sup><span>*</span></sup></h6>
                                    <input type="email" id="Email2" class="form-control" aria-label="email" placeholder="Confirm Email Address" required onBlur="checkEmailMatch()">
                                </div>
                        </div>
                                <script>
                                      function checkEmailMatch() {
                                    var Email1 = document.getElementById("Email").value;
                                    var Email2 = document.getElementById("Email2").value;
                                    var Email2Field = document.getElementById("Email2");
                                    var EmailError = document.getElementById("Email-error");
                                    
                                    if (Email1 !== Email2) {
                                      Email2Field.value = "";
                                      Email2Field.classList.add("formbold-form-input-error");
                                      EmailError.textContent = "Emails do not match";
                                    } else {
                                      Email2Field.classList.remove("formbold-form-input-error");
                                      EmailError.textContent = "";
                                    }
                                  }
                                  function formatPhoneNumber(input) {
                                      // Get input value and remove non-digits
                                      let val = input.value.replace(/\D/g, '');
                                      
                                      // If there are no digits, empty the input
                                      if (val === '') {
                                        input.value = '';
                                        return;
                                      }
                                      
                                      // Format value as 123-456-7890
                                      let formatted = val.substring(0, 3) + '-' + val.substring(3, 6) + '-' + val.substring(6, 10);
                                      
                                      // Set input value to formatted value
                                          input.value = formatted;
                                    }
                                </script>
                

                             <div class="row">
                                <h6>Home Address<sup><span>*</span></sup></h6>
                                <div class="col-12">
                                    <input type="text"  name="HomeAddress" class="form-control" id="InputAddress" placeholder="Address Line 1" required>
                                </div> 
                                <div class="col-12">
                                    <input type="text"  name="HomeAddress2" class="form-control" id="InputAddress2" placeholder="Address Line 2">
                                </div> 
                                <div class="row flex-3 d-flex gap-1 col-gap">
                                    <div class="col-md-5">
                                        <input type="text"  name="City" placeholder="City" class="form-control" id="City" required>
                                    </div>
                                    <div class="col-md-4">
                                        <select id="inputState"  name="State/Prov" class="form-select" required>

                                            <option value="">State/Province</option>
                                              <optgroup label="Canadian Provinces">
                                                  <option value="Alberta">Alberta</option>
                                                  <option value="British Columbia">British Columbia</option>
                                                  <option value="Manitoba">Manitoba</option>
                                                  <option value="New Brunswick">New Brunswick</option>
                                                  <option value="Newfoundland">Newfoundland</option>
                                                  <option value="Northwest Territories">Northwest Territories</option>
                                                  <option value="Nova Scotia">Nova Scotia</option>
                                                  <option value="Nunavut">Nunavut</option>
                                                  <option value="Ontario">Ontario</option>
                                                  <option value="Prince Edward Island">Prince Edward Island</option>
                                                  <option value="Quebec">Quebec</option>
                                                  <option value="Saskatchewan">Saskatchewan</option>
                                                  <option value="Yukon Territory">Yukon Territory</option>
                                              </optgroup>
                                
                                              <optgroup label="U.S. States/Territories">
                                                  <option value="Alaska">Alaska</option>
                                                  <option value="Alabama">Alabama</option>
                                                  <option value="American Samoa">American Samoa</option>
                                                  <option value="Arkansas">Arkansas</option>
                                                  <option value="Arizona">Arizona</option>
                                                  <option value="California">California</option>
                                                  <option value="Colorado">Colorado</option>
                                                  <option value="Connecticut">Connecticut</option>
                                                  <option value="District of Columbia">District of Columbia</option>
                                                  <option value="Delaware">Delaware</option>
                                                  <option value="Florida">Florida</option>
                                                  <option value="Georgia">Georgia</option>
                                                  <option value="Guam">Guam</option>
                                                  <option value="Hawaii">Hawaii</option>
                                                  <option value="Iowa">Iowa</option>
                                                  <option value="Idaho">Idaho</option>
                                                  <option value="Illinois">Illinois</option>
                                                  <option value="Indiana">Indiana</option>
                                                  <option value="Kansas">Kansas</option>
                                                  <option value="Kentucky">Kentucky</option>
                                                  <option value="Louisiana">Louisiana</option>
                                                  <option value="Massachusetts">Massachusetts</option>
                                                  <option value="Maryland">Maryland</option>
                                                  <option value="Maine">Maine</option>
                                                  <option value="Michigan">Michigan</option>
                                                  <option value="Minnesota">Minnesota</option>
                                                  <option value="Missouri">Missouri</option>
                                                  <option value="Mississippi">Mississippi</option>
                                                  <option value="Montana">Montana</option>
                                                  <option value="North Carolina">North Carolina</option>
                                                  <option value="North Dakota">North Dakota</option>
                                                  <option value="Nebraska">Nebraska</option>
                                                  <option value="New Hampshire">New Hampshire</option>
                                                  <option value="New Jersey">New Jersey</option>
                                                  <option value="New Mexico">New Mexico</option>
                                                  <option value="Nevada">Nevada</option>
                                                  <option value="New York">New York</option>
                                                  <option value="Ohio">Ohio</option>
                                                  <option value="Oklahoma">Oklahoma</option>
                                                  <option value="Oregon">Oregon</option>
                                                  <option value="Pennsylvania">Pennsylvania</option>
                                                  <option value="Puerto Rico">Puerto Rico</option>
                                                  <option value="Rhode Island">Rhode Island</option>
                                                  <option value="South Carolina">South Carolina</option>
                                                  <option value="South Dakota">South Dakota</option>
                                                  <option value="Tennessee">Tennessee</option>
                                                  <option value="Texas">Texas</option>
                                                  <option value="Utah">Utah</option>
                                                  <option value="Virginia">Virginia</option>
                                                  <option value="Vermont">Vermont</option>
                                                  <option value="Washington">Washington</option>
                                                  <option value="Wisconsin">Wisconsin</option>
                                                  <option value="West Virginia">West Virginia</option>
                                                  <option value="Wyoming">Wyoming</option>
                                              </optgroup>
                                          </select> 
                                    </div>
                                    <div class="col-md-3">
                                        <input type="text"  name="Zip/Postal" class="form-control" placeholder="Zip/Postal" id="inputZip" maxlength="6" required>
                                    </div>
                                </div>
                            </div>
                    </div>

                            <!-- personal information  -->

                            <div class="row mt-5">
                                <h4>Personal Information<sup><span>*</span></sup></h4> <br>
                                <div class="row flex-3 d-flex gap-1">
                                    <div class="col-md-4 col-12">
                                        <h6>Housing Status <sup><span>*</span></sup></h6>
                                        <select class="form-select"  name="HouseStatus" id="HouseStatus" required>
                                            <option value="">Select a house status</option>
                                            <option>Own with Mortgage</option>
                                            <option>Fully Own</option>
                                            <option>Rent</option>
                                            <option>Live with Parents or Other</option>
                                        </select>
                                    </div>
                                    
                                        <div class="col-md-4 col-12">
                                               <h6>Mthly House Pymt<sup><span>*</span></sup></h6>
                                                <div class="form-control empty-padding">
                                                    <div class="label-dollar"><strong>$</strong></div>
                                                    <input type="text"  name="MthlyHousePymt" id="HousePymt" aria-label="HousePymt" class="form-transparent" maxlength="6" placeholder="Amount" required>
                                                </div>
                                                <div id="income-error" class="form-error"></div>
                                        </div>
                                    
            
                                    <!--<div class="col-md-4 col-12">
                                        <h6>Mthly House Pymt $<sup><span>*</span></sup></h6>
                                        <input type="text" class="form-control" id="HousePymt" maxlength="6" required>
                                    </div>-->
                                    <div class="col-md-4 col-12">
                                       <h6>Yrs at Address<sup><span>*</span></sup></h6>
                                        <select class="form-select"  name="Yrs@Address" id="AddressTerm" required>
                                        <option value="">Select years at Address</option>
                                        <option>Select One</option>
                                        <option>Less than 1 yr</option>
                                        <option>1-2 yrs</option>
                                        <option>2-3 yrs</option>
                                        <option>More than 3 yrs</option>
                                        </select>
                                    </div>
                                </div> <br> <br>

                                
                                <div class="col-md-5">
                                    <h6>Marital Status<sup><span>*</span></sup></h6>
                                </div>		

                                    
                                    <div class="gap-1 material-block">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="MaritalStatus" id="MeritalStatus" value="Single" required>
                                            <h6 class="form-check-label" for="inlineRadio1">Single</h6>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="MaritalStatus" id="inlineRadio2" value="Married">
                                            <h6 class="form-check-label" for="inlineRadio2">Married</h6>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="MaritalStatus" id="inlineRadio3" value="Seperated">
                                            <h6 class="form-check-label" for="inlineRadio3">Separated</h6>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="MaritalStatus" id="inlineRadio4" value="Widow">
                                            <h6 class="form-check-label" for="inlineRadio4">Widow</h6>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="MaritalStatus" id="inlineRadio5" value="Other">
                                            <h6 class="form-check-label" for="inlineRadio5">Other</h6>
                                        </div>
                                     
                                    </div>
                                        
                                    <div class="row g-3">
                                        <div class="col-md-4">
                                              <h6>Gender <sup><span>*</span></sup></h6>
                                                <select class="form-select" name="Gender" id="Gender" required>
                                                    <option value="" selected>Select One</option>
                                                    <option>Male</option>
                                                    <option>Female</option>
                                                    <option>Others</option>
                                                </select>
                                        </div>
                            
                                        <div class="col-md-4">
                                                <h6>Date of Birth<sup><span>*</span></sup></h6>
                                                <input type="date" name="DOB" id="DOB" class="formbold-form-input" min="1925-01-10" max="2005-01-10" aria-invalid="false" value="" type="date" required="">
                                          </div>
                                     </div>
                                    
                              

                                <!--  <div class="flex-3 d-flex gap-1">
                                    <div class="col-md-4">
                                        <h6 for="">Combined Checking & Savings Balance<sup><span>*</span></sup></h6>
                                        <input type="text" class="form-control" id="inputCity">
                                    </div>
                                    <div class="col-md-4">
                                        <h6 for="">Retirement Account Balance<sup><span>*</span></sup></h6> <br>
                                        <input type="text" class="form-control" id="inputCity">
                                    </div>
                                    <div class="col-md-4">
                                        <h6 for="">Total Networth<sup><span>*</span></sup></h6> <br>
                                        <input type="text" class="form-control" id="inputCity">
                                    </div>
                                </div>  -->
                            </div>
                                <br> <br>

                                <!-- Income/Military/Education Information  -->

                                <div class="row mt-5">
                                    <h5>Income Information</h5> <br>
                                    <div class="row flex-3 d-flex gap-3">
                                        <div class="col-md-5">
                                            <h6>Present Employer<sup><span>*</span></sup></h6>
                                            <input type="text" name="Employer" class="form-control" id="Employer" placeholder="Employer" required>
                                        </div>
                                        <div class="col-md-5">
                                            <h6>Occupation/Position<sup><span>*</span></sup></h6>
                                            <input type="text" name="Occupation" class="form-control" id="Occupation" placeholder="Job title" required>
                                        </div>
                                    </div>  <br>
                                    <div class="row flex-3 d-flex gap-3">
                                        <div class="col-md-5">
                                            <h6>Employment Term<sup><span>*</span></sup></h6>
                                            <select class="form-select" name="Work-Term" id="EmpTerm" required>
                                            <option value="" selected>Select One</option>
                                            <option>Less than 1 yr</option>
                                            <option>1-2 yrs</option>
                                            <option>2-3 yrs</option>
                                            <option>More than 3 yrs</option>
                                        </select>
                                        </div>
                                        <div class="col-md-5">
                                            <h6>Employer Phone<sup><span>*</span></sup></h6>
                                            <input type="text" name="Work-Phome" class="form-control" id="EmpPhone"  maxlength="12" oninput="formatPhoneNumber(this)" placeholder="Work Phone" required>
                                        </div>
                                    </div>  <br>
                                    
                                    <div class="row flex-3 d-flex gap-3">
                                        <div class="col-md-5">
                                               <h6>Annual Income<sup><span>*</span></sup></h6>
                                                <div class="form-control empty-padding">
                                                    <div class="label-dollar"><strong>$</strong></div>
                                                    <input type="text" name="Annual-Income" id="YrlyIncome" aria-label="YrlyIncome" class="form-transparent" maxlength="7" placeholder="Annual Income" required>
                                                </div>
                                                <div id="income-error" class="form-error"></div>
                                        </div>
                                                
                                        
                                        <div class="col-md-5">
                                            <h6>Last 4 Digits of SSN/SIN<sup><span>*</span></sup></h6>
                                            <input type="text" name="SSN/SIN" class="form-control" id="SSN/SIN" maxlength="4" placeholder="Last 4 Digits of SSN/SIN" required>
                                        </div>
                                    </div>
                                </div>  
                    <br>

                        <!-- Income Verification -->

                            <div class="row apply-row-2">
                                <div class="col">
                                    <label class="fw-bold pt-2">Income Verification<sup><span>*</span></sup></label>
                                    <div class="check-boxes income-checkboxes">
                                        <div class="col-md-6 clm-1">
                                            <div class="box-1">
                                                <input type="checkbox" name="Pay-Stub" id="Pay Stub" required>
                                                <span>Pay Stub</span>			                                    </div> 
                                            <div class="box-1">
                                                <input type="checkbox" name="IndependentContractor" id="Ind. Contractor" required>
                                                <span>​Independent Contractor</span>			                                    </div> 
                                            <div class="box-1">
                                                <input type="checkbox" name="SelfEmployed" id="Self Empl." required>
                                                <span>Self Employed</span>			                                    </div> 
                                            <div class="box-1">
                                                <input type="checkbox" name="RentalIncome" id="Rental Income" required>
                                                <span>Rental Property Income</span>			                                    </div> 
                                            <div class="box-1">
                                                <input type="checkbox" name="Retirment/Pension" id="Retirment/Pension" required>
                                                <span>Retirement/Pension Income</span>			                                    </div> 
                                        </div>
                                        <div class="col-md-6 clm-2">
                                            <div class="box-2">
                                                <input type="checkbox" name="Disability" id="Disability" required>
                                                <span>Disability Benefits</span>			                                    </div> 
                                            <div class="box-2">
                                                <input type="checkbox" name="Alimoney/Child Support" id="Alimoney/Child Support" required>
                                                <span>Alimony/Child Support</span>			                                    </div> 
                                            <div class="box-2">
                                                <input type="checkbox" name="Investment-Income" id="Investment Income" required>
                                                <span>Investment Income</span>			                                    </div> 
                                            <div class="box-2">
                                                <input type="checkbox" name="Bank-Statements" id="Bank Statements" required>
                                                <span>Bank Statements</span>			                                    </div> 
                                            <div class="box-2">
                                                <input type="checkbox" name="No-Proof" id="No Proof" required>
                                                <span>Stated (No Proof Available)</span>			                                    </div> 
                                        </div>
                                    </div> <br>
                                    <p>How will you verify your income? (Check All That Apply)</p>
                                </div>
                            </div>

                <!--<div class="flex-3 d-flex gap-5">
                    <div class="col-md-4">
                        <h6 for="">Highest Level of Education<sup><span>*</span></sup></h6>
                    <select id="inputState" class="form-select">
                        <option></option>
                        <option>High School Diploma</option>
                        <option>Associate Degree</option>
                        <option>Bachelor`s Degree</option>
                        <option>Master`s Degree</option>
                        <option>Other Graduate Degree</option>
                        <option>Specialty Certification</option>
                    </select>
                    </div>
                    <div class="col-md-5">
                        <h6 for="">Current Military Affiliation<sup><span>*</span></sup></h6>
                        <input type="text" class="form-control" id="inputCity">
                    </div>
                </div> -->
                
                            <br> <br>

                <!-- Business Section -->

               <!-- <h5>Business Section</h5> <br>
                <h6>Are seeking funding for your Existing Business?</h6>
                <div class="flex-3 d-flex gap-1">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                        <label class="form-check-label" for="inlineRadio1">Yes</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                        <label class="form-check-label" for="inlineRadio2">No</label>
                    </div>
                </div>-->
                            <div class="row apply-row-1">
                                <div class="col-12">
                                    <h6 for="">How did you hear about us?<sup><span>*</span></sup></h6>
                                    <select id="inputHowHear" name="Reference" class="form-select" id="HowHear" required>
                                    <option value="" selected>Select One</option>
                                    <option>Bing</option>
                                    <option>Google</option>
                                    <option>Yahoo</option>
                                    <option>Friend</option>
                                    <option>Email</option>
                                    <option>Text</option>
                                    <option>Other</option>
                                </select>
                                </div>
                            </div>
                        <br>
                        <br>
         <!--</main>-->		<div class="row pt-3">
                                <div class="col-md-12">
                                    <h6 for="">Enter Full Name for Digital Signature<sup><span>*</span></sup></h6>
                                    <div class="col-12">
                                        <input type="text" name="Digital-Sig" class="form-control mb-4" id="DigitalSig" placeholder="Signature" required>
                                        <p class="style3">By entering your Full Name, you are signing this Agreement electronically. You agree your electronic signature is the legal equivalent of your manual/handwritten signature on this Agreement. By selecting "I Accept" using any device, means or action, you consent to the legally binding terms and conditions of this Agreement. You further agree that your signature on this document (hereafter referred to as your "E-Signature") is as valid as if you signed the document in writing. You also agree that no certification authority or other third party verification is necessary to validate your E-Signature, and that the lack of such certification or third party verification will not in any way affect the enforceability of your E-Signature or any resulting agreement between you and Choicefinan.com. You are also confirming that you are the authorized signer to enter into this Agreement. You further agree that each use of your email equates to your E-Signature and constitutes your agreement to be bound by the terms and conditions of these Disclosures and Agreement as they exist on the date of your E-Signature on this form.</p>
                                    </div> 
                                </div>
                            </div>
            
   
    
             <!-- Agree to Terms check box -->
                <div class="tos-center">
                  <div class="formbold-label-content"><input type="checkbox" name="Agree" required> 
                        <span class="style4">I agree to the defined <a href="../terms/./" target="_blank" class="aux-item-content">Terms and conditions</a></span>			           
                        </div>
                </div>
                <!-- Agree to Terms END -->	<br>
                <button type="submit" id="applySubmit-btn">Submit</button>
            </div>
        </form>