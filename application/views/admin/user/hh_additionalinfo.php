<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<div class="content-wrapper">
  <h3>Intake Form</h3>
  <p>Fields marked with an <sup class="text-danger" style="font-weight: bold; font-size:14px">*</sup> are Required</p>
  <div class="row text-center justify-content-center">
    <div class="col-md-2 bg-dark d-flex flex-column align-items-center justify-content-center">
      <button id="button1" class="btn btn-dark" onclick="toggleDiv(1)" disabled>Contact Information</button>
    </div>
    <div class="col-md-2 bg-dark offset-md-1 d-flex flex-column align-items-center justify-content-center">
      <button id="button2" class="btn btn-dark" onclick="toggleDiv(2)" disabled>Health Information</button>
    </div>
    <div class="col-md-2 bg-dark offset-md-1 d-flex flex-column align-items-center justify-content-center">
      <button id="button3" class="btn btn-dark" onclick="toggleDiv(3)" disabled>Family Health History</button>
    </div>
    <div class="col-md-2 bg-dark offset-md-1 d-flex flex-column align-items-center justify-content-center">
      <button id="button4" class="btn btn-dark active" onclick="toggleDiv(4)">Additional Information</button>
    </div>
  </div>

  <?php
  foreach ($additional_info as $info) {
    $education = $info->education;
    $occupaition = $info->occupaition;
    $d4s1 = $info->d4s1;
    $d4r1 = $info->d4r1;
    $d4r2 = $info->d4r2;
    $d4r3 = $info->d4r3;
    $d4text1 = $info->d4text1;
    $d4text2 = $info->d4text2;
    $d4text3 = $info->d4text3;
    $d4therapy1 = $info->d4therapy1;
    $d4therapy2 = $info->d4therapy2;
  }
  ?>


  <section class="content container">
    <form id="myForm" action="<?php echo base_url('admin/h_history/addadditionalinfo') ?>" method="post">
      <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
      <div id="div4" class="mt-3 container">
        <div class="form-row mb-3">
          <div class="col-md-4">
            <div class="form-group">
              <label for="education">Education<sup class="text-danger" style="font-weight: bold; font-size:14px">*</sup> </label>
              <input type="text" class="form-control input4" id="education" value="<?php echo $education; ?>" name="education" placeholder="Enter Education" Required>
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label for="Occupaition">Occupaition<sup class="text-danger" style="font-weight: bold; font-size:14px">*</sup> </label>
              <input type="text" class="form-control input4" id="Occupaition" value="<?php echo $occupaition; ?>" name="occupaition" placeholder="Enter Occupaition" Required>
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label for="d4s1">Marital Status</label>
              <select class="form-control input4" id="d4s1" name="d4s1">
                <option disabled selected>Please select</option>
                <option value="Married" <?php if ($d4s1 === 'Married') echo 'selected'; ?>>Married</option>
                <option value="Domestic Patnership" <?php if ($d4s1 === 'Domestic Patnership') echo 'selected'; ?>>Domestic Partnership</option>
                <option value="Divorced" <?php if ($d4s1 === 'Divorced') echo 'selected'; ?>>Divorced</option>
                <option value="Separated" <?php if ($d4s1 === 'Separated') echo 'selected'; ?>>Separated</option>
                <option value="Widowed" <?php if ($d4s1 === 'Widowed') echo 'selected'; ?>>Widowed</option>
                <option value="Never Married" <?php if ($d4s1 === 'Never Married') echo 'selected'; ?>>Never Married</option>
              </select>
            </div>
          </div>

        </div>
        <div class="row mb-3">
          <div class="col-md-12">
            <p class="mb-1 " style="font-size: 16px;">Are you currently employed?<sup class="text-danger" style="font-weight: bold; font-size:14px">*</sup> </p>
            <div class="form-checak">
              <input class="form-check-input input4" type="radio" name="d4r1" id="d4r1yees" value="yes" <?php if ($d4r1 == "yes") echo "checked"; ?> required>
              <label class="form-check-label" for="d4r1yees">Yes</label>
            </div>
            <div class="form-checak">
              <input class="form-check-input input4" type="radio" name="d4r1" <?php if ($d4r1 == "no") echo "checked"; ?> id="d4r1no" value="no">
              <label class="form-check-label" for="d4r1no">No</label>
            </div>
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-md-12">
            <p class="mb-1 " style="font-size: 16px;">Are you currently in a romantic relationship?<sup class="text-danger" style="font-weight: bold; font-size:14px">*</sup> </p>
            <div class="form-checak">
              <input class="form-check-input input4" type="radio" name="d4r2" id="d4r2yes" <?php if ($d4r2 == "yes") echo "checked"; ?> value="yes" required>
              <label class="form-check-label" for="d4r2yes">Yes</label>
            </div>
            <div class="form-checak">
              <input class="form-check-input input4" type="radio" name="d4r2" <?php if ($d4r2 == "no") echo "checked"; ?> id="d4r2no" value="no">
              <label class="form-check-label" for="d4r2no">No</label>
            </div>
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-md-12">
            <p class="mb-1 " style="font-size: 16px;">Are you speritual or religious?</p>
            <div class="form-checak">
              <input class="form-check-input input4" type="radio" name="d4r3" id="d4r3yes" value="yes" <?php if ($d4r3 == "yes") echo "checked"; ?>>
              <label class="form-check-label" for="d4r3yes">Yes</label>
            </div>
            <div class="form-checak">
              <input class="form-check-input input4" type="radio" name="d4r3" id="d4r3no" value="no" <?php if ($d4r3 == "no") echo "checked"; ?>>
              <label class="form-check-label" for="d4r3no">No</label>
            </div>
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-md-12">
            <div class="form-group">
              <label for="d4text1">Briefly describe your current living arrangements?</label>
              <input type="text" class="form-control input4" id="d4text1" value="<?php echo $d4text1; ?>" name="d4text1"></input>
            </div>
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-md-12">
            <div class="form-group">
              <label for="d4text2">How can I help? In your own words what brings you here today?<sup class="text-danger" style="font-weight: bold; font-size:14px">*</sup> </label>
              <textarea type="text" class="form-control input4" id="d4text2" name="d4text2" required><?php echo $d4text2; ?></textarea>
            </div>
          </div>
        </div>
        <div class="form-row mb-3">
          <div class="col-md-6">
            <div class="form-group">
              <label for="d4therapy1">Therapy Goal#1<sup class="text-danger" style="font-weight: bold; font-size:14px">*</sup> </label>
              <input type="text" class="form-control input4" id="d4therapy1" value="<?php echo $d4therapy1; ?>" name="d4therapy1" Required>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="d4therapy2">Therapy Goal#2<sup class="text-danger" style="font-weight: bold; font-size:14px">*</sup> </label>
              <input type="text" class="form-control input4" id="d4therapy2" value="<?php echo $d4therapy2; ?>" name="d4therapy2" oninput="updateButtons()" required>
            </div>
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-md-12">
            <div class="form-group">
              <label for="d4text3">Is there anything that you would want me to know?</label>
              <textarea type="text" class="form-control input4" id="d4text3" name="d4text3"><?php echo $d4text3; ?></textarea>
            </div>
          </div>
        </div>
      </div>
      <button class="btn btn-success float-right" type="submit">Submit</button>
      <a href="javascript:history.back()" class="btn btn-secondary float-left text-light">Previous</a>
    </form>
  </section>
</div>