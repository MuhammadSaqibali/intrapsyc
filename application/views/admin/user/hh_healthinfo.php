<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<div class="content-wrapper">
  <h3>Intake Form</h3>
  <p>Fields marked with an <sup class="text-danger" style="font-weight: bold; font-size:14px">*</sup> are Required</p>
  <div class="row text-center justify-content-center">
    <div class="col-md-2 bg-dark d-flex flex-column align-items-center justify-content-center">
      <button id="button1" class="btn btn-dark" onclick="toggleDiv(1)" disabled>Contact Information</button>
    </div>
    <div class="col-md-2 bg-dark offset-md-1 d-flex flex-column align-items-center justify-content-center">
      <button id="button2" class="btn btn-dark active" onclick="toggleDiv(2)">Health Information</button>
    </div>
    <div class="col-md-2 bg-dark offset-md-1 d-flex flex-column align-items-center justify-content-center">
      <button id="button3" class="btn btn-dark" onclick="toggleDiv(3)" disabled>Family Health History</button>
    </div>
    <div class="col-md-2 bg-dark offset-md-1 d-flex flex-column align-items-center justify-content-center">
      <button id="button4" class="btn btn-dark" onclick="toggleDiv(4)" disabled>Additional Information</button>
    </div>
  </div>

  <?php
  foreach ($health_info as $info) {
    $gender = $info->gender;
    $age = $info->age;
    $dob = $info->dob;
    $guardian = $info->guardian;
    $d2r1 = $info->d2r1;
    $d2r2 = $info->d2r2;
    $d2r3 = $info->d2r3;
    $d2s1 = $info->d2s1;
    $d2p1 = $info->d2p1;
    $d2s2 = $info->d2s2;
    $d2p2 = $info->d2p2;
    $d2s3 = $info->d2s3;
    $d2p3 = $info->d2p3;
    $d2s4 = $info->d2s4;
    $d2s5 = $info->d2s5;
    $d2p4 = $info->d2p4;
    $d2r4 = $info->d2r4;
    $d2r5 = $info->d2r5;
    $d2r6 = $info->d2r6;
    $d2r7 = $info->d2r7;
    $d2text = $info->d2text;
  }
  ?>

  <section class="content container">
    <form id="myForm" action="<?php echo base_url('admin/h_history/addhealthinfo') ?>" method="post">
      <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
      <div id="div2" class="mt-3 container">
        <div class="form-row">
          <div class="col-md-4">
            <div class="form-group">
              <label for="gender">Gender ID<sup class="text-danger" style="font-weight: bold; font-size:14px">*</sup> </label>
              <input type="text" class="form-control input2" id="gender" value="<?php echo $gender; ?>" name="gender" placeholder="Enter Gender" Required>
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label for="age">Age<sup class="text-danger" style="font-weight: bold; font-size:14px">*</sup> </label>
              <input type="number" class="form-control input2" id="age" name="age" value="<?php echo $age; ?>" placeholder="Enter Age" Required>
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label for="dob">Date of Birth<sup class="text-danger" style="font-weight: bold; font-size:14px">*</sup> </label>
              <input type="date" class="form-control input2" id="dob" name="dob" value="<?php echo $dob; ?>" placeholder="Enter date" Required>
            </div>
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-md-12">
            <p class="mb-1 " style="font-size: 16px;">Have you previously received mental health service?<sup class="text-danger" style="font-weight: bold; font-size:14px">*</sup></p>
            <div class="form-check">
              <input class="form-check-input input2" type="radio" name="d2r1" value="yes" id="d2r1yes" <?php if ($d2r1 == "yes") echo "checked"; ?> required>
              <label class="form-check-label" for="d2r1yes">Yes</label>
            </div>
            <div class="form-check">
              <input class="form-check-input input2" type="radio" name="d2r1" value="no" id="d2r1no" <?php if ($d2r1 == "no") echo "checked"; ?>>
              <label class="form-check-label" for="d2r1no">No</label>
            </div>
          </div>
        </div>

        <div class="row mb-3">
          <div class="col-md-12">
            <p class="mb-1 " style="font-size: 16px;">Are you taking any prescription medication?<sup class="text-danger" style="font-weight: bold; font-size:14px">*</sup></p>
            <div class="form-check">
              <input class="form-check-input input2" type="radio" name="d2r2" id="d2r2yes" value="yes" <?php if ($d2r2 == "yes") echo "checked"; ?> required>
              <label class="form-check-label" for="d2r2yes">Yes</label>
            </div>
            <div class="form-check">
              <input class="form-check-input input2" type="radio" name="d2r2" id="d2r2no" value="no" <?php if ($d2r2 == "no") echo "checked"; ?>>
              <label class="form-check-label" for="d2r2no">No</label>
            </div>
          </div>
        </div>

        <div class="row mb-3">
          <div class="col-md-12">
            <p class="mb-1 " style="font-size: 16px;">Have you been prescribed psychiatric medication?<sup class="text-danger" style="font-weight: bold; font-size:14px">*</sup></p>
            <div class="form-check">
              <input class="form-check-input input2" type="radio" name="d2r3" id="d2r3yes" value="yes" <?php if ($d2r3 == "yes") echo "checked"; ?> required>
              <label class="form-check-label" for="d2r3yes">Yes</label>
            </div>
            <div class="form-check">
              <input class="form-check-input input2" type="radio" name="d2r3" id="d2r3no" value="no" <?php if ($d2r3 == "no") echo "checked"; ?>>
              <label class="form-check-label" for="d2r3no">No</label>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-5">
            <div class="form-group">
              <label for="d2s1">How would you rate your current physical health?<sup class="text-danger" style="font-weight: bold; font-size:14px">*</sup></label>
              <select class="form-control input2" id="d2s1" name="d2s1" required>
                <option disabled selected>Please select</option>
                <option value="poor" <?php if ($d2s1 == "poor") echo "selected"; ?>>Poor</option>
                <option value="unsatisfactory" <?php if ($d2s1 == "unsatisfactory") echo "selected"; ?>>Unsatisfactory</option>
                <option value="satisfactory" <?php if ($d2s1 == "satisfactory") echo "selected"; ?>>Satisfactory</option>
                <option value="good" <?php if ($d2s1 == "good") echo "selected"; ?>>Good</option>
                <option value="veryGood" <?php if ($d2s1 == "veryGood") echo "selected"; ?>>Very Good</option>
              </select>
            </div>
          </div>
          <div class="col-md-7">
            <div class="form-group">
              <label for="d2p1">List any specific health problem you are currently experiencing:</label>
              <input type="text" class="form-control input2" id="d2p1" value="<?php echo $d2p1; ?>" name="d2p1">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-5">
            <div class="form-group">
              <label for="d2s2">How would you rate your current sleeping habits?<sup class="text-danger" style="font-weight: bold; font-size:14px">*</sup></label>
              <select class="form-control input2" id="d2s2" name="d2s2" required>
                <option disabled value="" selected>Please select</option>
                <option value="poor" <?php if ($d2s2 == "poor") echo "selected"; ?>>Poor</option>
                <option value="unsatisfactory" <?php if ($d2s2 == "unsatisfactory") echo "selected"; ?>>Unsatisfactory</option>
                <option value="satisfactory" <?php if ($d2s2 == "satisfactory") echo "selected"; ?>>Satisfactory</option>
                <option value="good" <?php if ($d2s2 == "good") echo "selected"; ?>>Good</option>
                <option value="veryGood" <?php if ($d2s2 == "veryGood") echo "selected"; ?>>Very Good</option>
              </select>
            </div>
          </div>

          <div class="col-md-7">
            <div class="form-group">
              <label for="d2p2">List any specific sleeping problem you are currently experiencing:</label>
              <input type="text" class="form-control input2" id="d2p2" value="<?php echo $d2p2; ?>" name="d2p2">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-5">
            <div class="form-group">
              <label for="d2s3">How many times per week do you generally exercise?<sup class="text-danger" style="font-weight: bold; font-size:14px">*</sup></label>
              <select class="form-control input2" id="d2s3" name="d2s3" required>
                <option disabled value="" selected>Please select</option>
                <option value="none" <?php if ($d2s3 == "none") echo "selected"; ?>>None</option>
                <option value="1-2days" <?php if ($d2s3 == "1-2days") echo "selected"; ?>>1-2 Days</option>
                <option value="3-4days" <?php if ($d2s3 == "3-4days") echo "selected"; ?>>3-4 Days</option>
                <option value="4-5days" <?php if ($d2s3 == "4-5days") echo "selected"; ?>>4-5 Days</option>
                <option value="6-7days" <?php if ($d2s3 == "6-7days") echo "selected"; ?>>6-7 Days</option>
              </select>
            </div>
          </div>

          <div class="col-md-7">
            <div class="form-group">
              <label for="d2p3">What type of exercise do you participate in?</label>
              <input type="text" class="form-control input2" value="<?php echo $d2p3; ?>" id="d2p3" name="d2p3">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-5">
            <div class="form-group">
              <label for="d2s4">How often do you drink alcohol?<sup class="text-danger" style="font-weight: bold; font-size:14px">*</sup></label>
              <select class="form-control input2" id="d2s4" name="d2s4" required>
                <option disabled value="" selected>Please select</option>
                <option value="Daily" <?php if ($d2s4 == "Daily") echo "selected"; ?>>Daily</option>
                <option value="Weekly" <?php if ($d2s4 == "Weekly") echo "selected"; ?>>Weekly</option>
                <option value="Monthly" <?php if ($d2s4 == "Monthly") echo "selected"; ?>>Monthly</option>
                <option value="Infrequently" <?php if ($d2s4 == "Infrequently") echo "selected"; ?>>Infrequently</option>
                <option value="Never" <?php if ($d2s4 == "Never") echo "selected"; ?>>Never</option>
              </select>
            </div>
          </div>

          <div class="col-md-4">
            <div class="form-group">
              <label for="d2s5">Do you agree to engage in recreational drug use?<sup class="text-danger" style="font-weight: bold; font-size:14px">*</sup></label>
              <select class="form-control input2" id="d2s5" name="d2s5" required>
                <option disabled value="" selected>Please select</option>
                <option value="Daily" <?php if ($d2s5 == "Daily") echo "selected"; ?>>Daily</option>
                <option value="Weekly" <?php if ($d2s5 == "Weekly") echo "selected"; ?>>Weekly</option>
                <option value="Monthly" <?php if ($d2s5 == "Monthly") echo "selected"; ?>>Monthly</option>
                <option value="Infrequently" <?php if ($d2s5 == "Infrequently") echo "selected"; ?>>Infrequently</option>
                <option value="Never" <?php if ($d2s5 == "Never") echo "selected"; ?>>Never</option>
              </select>
            </div>
          </div>

          <div class="col-md-3">
            <div class="form-group">
              <label for="d2p4">What kind of drugs?</label>
              <input type="text" class="form-control input2" value="<?php echo $d2p4; ?>" id="d2p4" name="d2p4">
            </div>
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-md-12">
            <p class="mb-1 " style="font-size: 16px;">Are you currently experiencing difficulties with your appetite or eating problems?<sup class="text-danger" style="font-weight: bold; font-size:14px">*</sup></p>
            <div class="form-check">
              <input class="form-check-input input2" type="radio" name="d2r4" id="d2r4yes" value="yes" <?php if ($d2r4 == "yes") echo "checked"; ?> required>
              <label class="form-check-label" for="d2r4yes">Yes</label>
            </div>
            <div class="form-check">
              <input class="form-check-input input2" type="radio" name="d2r4" id="d2r4no" value="no" <?php if ($d2r4 == "no") echo "checked"; ?>>
              <label class="form-check-label" for="d2r4no">No</label>
            </div>
          </div>
        </div>

        <div class="row mb-3">
          <div class="col-md-12">
            <p class="mb-1 " style="font-size: 16px;">Are you currently experiencing overwhelming sadness, grief or depression?<sup class="text-danger" style="font-weight: bold; font-size:14px">*</sup></p>
            <div class="form-check">
              <input class="form-check-input input2" type="radio" name="d2r5" id="d2r5yes" value="yes" <?php if ($d2r5 == "yes") echo "checked"; ?> required>
              <label class="form-check-label" for="d2r5yes">Yes</label>
            </div>
            <div class="form-check">
              <input class="form-check-input input2" type="radio" name="d2r5" id="d2r5no" value="no" <?php if ($d2r5 == "no") echo "checked"; ?>>
              <label class="form-check-label" for="d2r5no">No</label>
            </div>
          </div>
        </div>

        <div class="row mb-3">
          <div class="col-md-12">
            <p class="mb-1 " style="font-size: 16px;">Are you currently experiencing anxiety, panic attacks or have any phobias?<sup class="text-danger" style="font-weight: bold; font-size:14px">*</sup></p>
            <div class="form-check">
              <input class="form-check-input input2" type="radio" name="d2r6" id="d2r6yes" value="yes" <?php if ($d2r6 == "yes") echo "checked"; ?> required>
              <label class="form-check-label" for="d2r6yes">Yes</label>
            </div>
            <div class="form-check">
              <input class="form-check-input input2" type="radio" name="d2r6" id="d2r6no" value="no" <?php if ($d2r6 == "no") echo "checked"; ?>>
              <label class="form-check-label" for="d2r6no">No</label>
            </div>
          </div>
        </div>

        <div class="row mb-3">
          <div class="col-md-12">
            <p class="mb-1 " style="font-size: 16px;">Are you currently experiencing chronic pain or illness?<sup class="text-danger" style="font-weight: bold; font-size:14px">*</sup></p>
            <div class="form-check">
              <input class="form-check-input input2" type="radio" name="d2r7" id="d2r7yes" value="yes" <?php if ($d2r7 == "yes") echo "checked"; ?> oninput="updateButtons()" required>
              <label class="form-check-label" for="d2r7yes">Yes</label>
            </div>
            <div class="form-check">
              <input class="form-check-input input2" type="radio" name="d2r7" id="d2r7no" value="no" <?php if ($d2r7 == "no") echo "checked"; ?>>
              <label class="form-check-label" for="d2r7no">No</label>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-12">
            <div class="form-group">
              <label for="d2text">What significant life changes or stressful events have you experienced recently?</label>
              <textarea type="text" class="form-control input2" id="d2text" value="<?php echo $d2text; ?>" name="d2text"></textarea>
            </div>
          </div>
        </div>
      </div>
      <button class="btn btn-success float-right" type="submit">Save & Next</button>
      <a href="javascript:history.back()" class="btn btn-secondary float-left text-light">Previous</a>
    </form>
  </section>
</div>