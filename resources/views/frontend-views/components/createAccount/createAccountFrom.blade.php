<!-- Create Account Form Start ===== -->
<section class="choose_account containers_sections">
  <h3>What kind of account would you like to create?</h3>
  <!-- Another sub----- section ================ -->
  <section class="account_category">
    <div class="account_category_div">
      <h2>I'm a Trade Professional</h2>
      <p> Verification and company name required for discount. Own/Work for a Trade or Construction Business. </p>
      <!-- account categories  -->
      <div class="account_category_radio_div">
        <div class="labels">
          <input checked type="radio" id="contactChoice1" name="contact" value="email" />
          <label class="spans" for="contactChoice1">Architect</label>
        </div>
        <div class="labels">
          <input type="radio" id="contactChoice2" name="contact" value="telephone" />
          <label class="spans" for="contactChoice2">Interior Designer</label>
        </div>
        <div class="labels">
          <input type="radio" id="contactChoice3" name="contact" value="contactChoice3" />
          <label class="spans" for="contactChoice3">Builder & Remodeler</label>
        </div>
        <div class="labels">
          <input type="radio" id="contactChoice4" name="contact" value="contactChoice4" />
          <label class="spans" for="contactChoice4">Commercial Pro</label>
        </div>
        <div class="labels">
          <input type="radio" id="contactChoice5" name="contact" value="contactChoice5" />
          <label class="spans" for="contactChoice5">General Contractor</label>
        </div>
        <div class="labels">
          <input type="radio" id="contactChoice6" name="contact" value="contactChoice6" />
          <label class="spans" for="contactChoice6">Other (Please Specify)</label>
        </div>
        <div class="account_category_input_div">
          <input type="text" />
        </div>
      </div>
    </div>
    <!-- Another -->
    <div class="account_category_div ">
      <h2>I'm a Homeowner</h2>
      <p>I own a residential home condo or apartment.</p>
      <div class="account_category_radio_div">
        <div class="labels">
          <input type="radio" id="homeowner1" name="homeowner" value="homeowner1" />
          <label class="spans" for="homeowner1">I am interested in do-it-yourself projects.</label>
        </div>
        <div class="labels">
          <input type="radio" id="homeowner2" name="homeowner" value="homeowner2" />
          <label class="spans" for="homeowner2">Other (Please Specify)</label>
        </div>
        <div class="account_category_input_div">
          <input type="text" />
        </div>
      </div>
    </div>
  </section>
</section>
<section class="account_information_parent">
  <section class="create_new_account_info containers_sections">
    <div class="new_account_email">
      <label>Email</label>
      <input type="text" />
    </div>
    <!-- another  -->
    <div class="new_account_names">
      <div class="new_account_first_name">
        <label>First Name</label>
        <input type="text" />
      </div>
      <div class="new_account_last_name">
        <label>Last Name</label>
        <input type="text" />
      </div>
    </div>
    <!-- another  -->
    <div class="new_account_names">
      <div class="new_account_first_name">
        <label>Create Your Password*</label>
        <br />
        <small>Password should be 6 or more characters.*</small>
        <input type="text" />
      </div>
      <div class="new_account_last_name">
        <label">Zip/Postal Code*</label>
          <input type="text" />
      </div>
    </div>
  </section>
  <!-- Another section ================ -->
  <section class="create_new_account_info containers_sections company_info_section">
    <h2>COMPANY INFORMATION</h2>
    <div class="new_account_email">
      <label>Company Name*</label>
      <input type="text" />
    </div>
    <!-- another  -->
    <div class="new_account_names">
      <div class="new_account_first_name">
        <label>Primary Business Type*</label>
        <input type="text" />
      </div>
      <div class="new_account_last_name">
        <label>Phone Number*</label>
        <input type="text" />
      </div>
    </div>
    <!-- another  -->
    <div class="new_account_names">
      <div class="new_account_first_name">
        <label>HST</label>
        <br />
        <input type="text" />
      </div>
      <div class="new_account_last_name">
        <label">Zip/Postal Code*</label>
          <input type="text" />
      </div>
    </div>
    <!--     
        <div class="terms_condition_checkbox"><input id="conditions" type="checkbox" ><label for="conditions">By creating an account you agree to Rey Woodworking's <span>Terms</span> and <span>Conditions</span>.</label></div> -->
    <div class="policy_checkbox_parent">
      <label class="policy_checkbox_container">By creating an account you agree to Rey Woodworking's <span class="mx-[3px]"> Terms </span> and <span class="mx-[3px]"> Conditions </span>. <input type="checkbox">
        <span class="policy_checkmark"></span>
      </label>
    </div>
  </section>
  <!-- Another section ================ -->
  <section class="containers_sections">
    <h4 class="text-[14px] md:text-[28px]">ALREADY HAVE AN ACCOUNT?</h4>
    <div class="mt-[80px] md:mt-[160px] mb-[82px] md:mb-[180px] flex justify-center items-center">
      <a href="#">
        <img class="w-[123px] md:w-[270px]" src="{{ asset('front-end/assets/images/page3/Rey-Xpress-Button-Submit-Application-Black.svg') }}" alt="submit button">
      </a>
    </div>
  </section>
</section>
<!-- Create Account Form End ===== -->