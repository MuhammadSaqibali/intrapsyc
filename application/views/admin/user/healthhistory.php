<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<div class="content-wrapper">
  <?php
  $checkbox_values = [];
  $checkboxs = $patientData->checkboxs;
  if (!empty($checkboxs)) {
    $checkbox_values = json_decode($checkboxs, true);
  }
  ?>

  <h1>Patient Health History</h1>
  <section class="content container">
    <form id="myForm" action="<?php echo base_url('main/login') ?>">
      <h3>Contact Information</h3>
      <div class="container" id="div1">
        <div class="form-row">
          <div class="col-md-4">
            <div class="form-group">
              <label for="firstName">First Name<sup class="text-danger" style="font-weight: bold; font-size:14px">*</sup> </label>
              <input type="text" name="fname" class="form-control input1" value="<?php echo $patientData->fname; ?>" id="firstName" placeholder="Enter first name" readonly Required>
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label for="lastName">Last Name<sup class="text-danger" style="font-weight: bold; font-size:14px">*</sup> </label>
              <input type="text" name="lname" class="form-control input1" id="lastName" value="<?php echo $patientData->lname; ?>" placeholder="Enter last name" readonly Required>
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label for="date">Date<sup class="text-danger" style="font-weight: bold; font-size:14px">*</sup> </label>
              <input type="date" name="date" class="form-control input1" id="date" value="<?php echo $patientData->date; ?>" placeholder="Enter date" readonly Required>
            </div>
          </div>
        </div>
        <div class="form-row form-group">
          <label for="Guardian">Parent/Legal Guardian(If under 18)</label>
          <input type="text" name="guardian" value="<?php echo $patientData->guardian; ?>" class="form-control" id="Guardian" placeholder="Enter Guardian" readonly>
        </div>
        <div class="form-row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="email">E-mail<sup class="text-danger" style="font-weight: bold; font-size:14px">*</sup> </label>
              <input type="email" name="email" value="<?php echo $patientData->email; ?>" class="form-control input1" id="email" placeholder="Enter E-mail" readonly Required>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="phone">Phone<sup class="text-danger" style="font-weight: bold; font-size:14px">*</sup> </label>
              <input type="tel" name="phone" value="<?php echo $patientData->phone; ?>" class="form-control input1" id="phone" placeholder="Enter phone number" readonly required>
            </div>
          </div>
        </div>
        <div class="form-row form-group">
          <label for="address">Address</label>
          <input type="text" name="address" value="<?php echo $patientData->address; ?>" class="form-control" id="address" placeholder="Enter address" readonly>
        </div>
        <div class="form-row">
          <div class="col-md-4">
            <div class="form-group">
              <label for="e1_contact">Emergency Contact<sup class="text-danger" style="font-weight: bold; font-size:14px">*</sup> </label>
              <input type="text" name="econtact1" value="<?php echo $patientData->econtact1; ?>" class="form-control input1" id="e1_contact" placeholder="First & Last Name" readonly required>
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label for="e1_relation">Relationship<sup class="text-danger" style="font-weight: bold; font-size:14px">*</sup> </label>
              <input type="text" name="erelation1" value="<?php echo $patientData->erelation1; ?>" class="form-control input1" id="e1_relation" readonly required>
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label for="e1_phone">Phone<sup class="text-danger" style="font-weight: bold; font-size:14px">*</sup> </label>
              <input type="tel" name="ephone1" value="<?php echo $patientData->ephone1; ?>" class="form-control input1" id="e1_phone" readonly required>
            </div>
          </div>
        </div>
        <div class="form-row">
          <div class="col-md-4">
            <div class="form-group">
              <label for="e2_contact">Emergency Contact</label>
              <input type="text" name="econtact2" value="<?php echo $patientData->econtact2; ?>" class="form-control" id="e2_contact" readonly placeholder="First & Last Name">
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label for="e2_relation">Relationship</label>
              <input type="text" name="erelation2" value="<?php echo $patientData->erelation2; ?>" class="form-control" id="e2_relation" readonly>
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label for="e2_phone">Phone</label>
              <input type="tel" name="ephone2" value="<?php echo $patientData->ephone2; ?>" class="form-control" id="e2_phone" readonly>
            </div>
          </div>
        </div>
        <div class="form-row">
          <div class="col-md-4">
            <div class="form-group">
              <label for="phy_nmae">Primary Care Physician<sup class="text-danger" style="font-weight: bold; font-size:14px">*</sup> </label>
              <input type="text" name="phy_name" value="<?php echo $patientData->phy_name; ?>" class="form-control input1" id="phy_nmae" placeholder="Physician Name" readonly required>
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label for="phy_address">Address</label>
              <input type="text" name="phy_address" value="<?php echo $patientData->phy_address; ?>" class="form-control input1" id="phy_address" readonly>
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label for="input1">Phone<sup class="text-danger" style="font-weight: bold; font-size:14px">*</sup> </label>
              <input type="tel" name="phy_phone" value="<?php echo $patientData->phy_phone; ?>" class="form-control input1" id="input1" readonly required oninput="updateButtons()">
            </div>
          </div>
        </div>
        <div class="form-row form-group">
          <label for="refer">Referred by (if any)</label>
          <input type="text" name="refer" value="<?php echo $patientData->refer; ?>" class="form-control" id="refer" readonly>
        </div>
      </div>
      <h3>Health Information</h3>
      <div id="div2" class="mt-3 container">
        <div class="form-row">
          <div class="col-md-4">
            <div class="form-group">
              <label for="gender"><?php echo trans('gender-id') ?><sup class="text-danger" style="font-weight: bold; font-size:14px">*</sup> </label>
              <input type="text" class="form-control input2" id="gender" value="<?php echo $patientData->gender; ?>" name="gender" placeholder="Enter Gender" readonly Required>
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label for="age">Age<sup class="text-danger" style="font-weight: bold; font-size:14px">*</sup> </label>
              <input type="number" class="form-control input2" id="age" name="age" value="<?php echo $patientData->age; ?>" placeholder="Enter Age" readonly Required>
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label for="dob">Date of Birth<sup class="text-danger" style="font-weight: bold; font-size:14px">*</sup> </label>
              <input type="date" class="form-control input2" id="dob" name="dob" value="<?php echo $patientData->dob; ?>" placeholder="Enter date" readonly Required>
            </div>
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-md-12">
            <p class="mb-1 " style="font-size: 16px;">Have you previously received mental health service?<sup class="text-danger" style="font-weight: bold; font-size:14px">*</sup></p>
            <div class="form-check">
              <input class="form-check-input input2" type="radio" name="d2r1" value="yes" id="d2r1yes" <?php if ($patientData->d2r1 == "yes") echo "checked"; ?> disabled required>
              <label class="form-check-label" for="d2r1yes">Yes</label>
            </div>
            <div class="form-check">
              <input class="form-check-input input2" type="radio" name="d2r1" value="no" id="d2r1no" <?php if ($patientData->d2r1 == "no") echo "checked"; ?> disabled>
              <label class="form-check-label" for="d2r1no">No</label>
            </div>
          </div>
        </div>

        <div class="row mb-3">
          <div class="col-md-12">
            <p class="mb-1 " style="font-size: 16px;">Are you taking any prescription medication?<sup class="text-danger" style="font-weight: bold; font-size:14px">*</sup></p>
            <div class="form-check">
              <input class="form-check-input input2" type="radio" name="d2r2" id="d2r2yes" value="yes" <?php if ($patientData->d2r2 == "yes") echo "checked"; ?> disabled required>
              <label class="form-check-label" for="d2r2yes">Yes</label>
            </div>
            <div class="form-check">
              <input class="form-check-input input2" type="radio" name="d2r2" id="d2r2no" value="no" <?php if ($patientData->d2r2 == "no") echo "checked"; ?> disabled>
              <label class="form-check-label" for="d2r2no">No</label>
            </div>
          </div>
        </div>

        <div class="row mb-3">
          <div class="col-md-12">
            <p class="mb-1 " style="font-size: 16px;">Have you been prescribed psychiatric medication?<sup class="text-danger" style="font-weight: bold; font-size:14px">*</sup></p>
            <div class="form-check">
              <input class="form-check-input input2" type="radio" name="d2r3" id="d2r3yes" value="yes" <?php if ($patientData->d2r3 == "yes") echo "checked"; ?> disabled required>
              <label class="form-check-label" for="d2r3yes">Yes</label>
            </div>
            <div class="form-check">
              <input class="form-check-input input2" type="radio" name="d2r3" id="d2r3no" value="no" <?php if ($patientData->d2r3 == "no") echo "checked"; ?> disabled>
              <label class="form-check-label" for="d2r3no">No</label>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-5">
            <div class="form-group">
              <label for="d2s1">How would you rate your current physical health?<sup class="text-danger" style="font-weight: bold; font-size:14px">*</sup></label>
              <select class="form-control input2" id="d2s1" name="d2s1" required disabled>
                <option disabled selected>Please select</option>
                <option value="poor" <?php if ($patientData->d2s1 == "poor") echo "selected"; ?>>Poor</option>
                <option value="unsatisfactory" <?php if ($patientData->d2s1 == "unsatisfactory") echo "selected"; ?>>Unsatisfactory</option>
                <option value="satisfactory" <?php if ($patientData->d2s1 == "satisfactory") echo "selected"; ?>>Satisfactory</option>
                <option value="good" <?php if ($patientData->d2s1 == "good") echo "selected"; ?>>Good</option>
                <option value="veryGood" <?php if ($patientData->d2s1 == "veryGood") echo "selected"; ?>>Very Good</option>
              </select>
            </div>
          </div>
          <div class="col-md-7">
            <div class="form-group">
              <label for="d2p1">List any specific health problem you are currently experiencing:</label>
              <input type="text" class="form-control input2" id="d2p1" value="<?php echo $patientData->d2p1; ?>" name="d2p1" readonly>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-5">
            <div class="form-group">
              <label for="d2s2">How would you rate your current sleeping habits?<sup class="text-danger" style="font-weight: bold; font-size:14px">*</sup></label>
              <select class="form-control input2" id="d2s2" name="d2s2" required disabled>
                <option disabled value="" selected>Please select</option>
                <option value="poor" <?php if ($patientData->d2s2 == "poor") echo "selected"; ?>>Poor</option>
                <option value="unsatisfactory" <?php if ($patientData->d2s2 == "unsatisfactory") echo "selected"; ?>>Unsatisfactory</option>
                <option value="satisfactory" <?php if ($patientData->d2s2 == "satisfactory") echo "selected"; ?>>Satisfactory</option>
                <option value="good" <?php if ($patientData->d2s2 == "good") echo "selected"; ?>>Good</option>
                <option value="veryGood" <?php if ($patientData->d2s2 == "veryGood") echo "selected"; ?>>Very Good</option>
              </select>
            </div>
          </div>

          <div class="col-md-7">
            <div class="form-group">
              <label for="d2p2">List any specific sleeping problem you are currently experiencing:</label>
              <input type="text" class="form-control input2" id="d2p2" value="<?php echo $patientData->d2p2; ?>" name="d2p2" readonly>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-5">
            <div class="form-group">
              <label for="d2s3">How many times per week do you generally exercise?<sup class="text-danger" style="font-weight: bold; font-size:14px">*</sup></label>
              <select class="form-control input2" id="d2s3" name="d2s3" required disabled>
                <option disabled value="" selected>Please select</option>
                <option value="none" <?php if ($patientData->d2s3 == "none") echo "selected"; ?>>None</option>
                <option value="1-2days" <?php if ($patientData->d2s3 == "1-2days") echo "selected"; ?>>1-2 Days</option>
                <option value="3-4days" <?php if ($patientData->d2s3 == "3-4days") echo "selected"; ?>>3-4 Days</option>
                <option value="4-5days" <?php if ($patientData->d2s3 == "4-5days") echo "selected"; ?>>4-5 Days</option>
                <option value="6-7days" <?php if ($patientData->d2s3 == "6-7days") echo "selected"; ?>>6-7 Days</option>
              </select>
            </div>
          </div>

          <div class="col-md-7">
            <div class="form-group">
              <label for="d2p3">What type of exercise do you participate in?</label>
              <input type="text" class="form-control input2" value="<?php echo $patientData->d2p3; ?>" id="d2p3" name="d2p3" readonly>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-5">
            <div class="form-group">
              <label for="d2s4">How often do you drink alcohol?<sup class="text-danger" style="font-weight: bold; font-size:14px">*</sup></label>
              <select class="form-control input2" id="d2s4" name="d2s4" required disabled>
                <option disabled value="" selected>Please select</option>
                <option value="Daily" <?php if ($patientData->d2s4 == "Daily") echo "selected"; ?>>Daily</option>
                <option value="Weekly" <?php if ($patientData->d2s4 == "Weekly") echo "selected"; ?>>Weekly</option>
                <option value="Monthly" <?php if ($patientData->d2s4 == "Monthly") echo "selected"; ?>>Monthly</option>
                <option value="Infrequently" <?php if ($patientData->d2s4 == "Infrequently") echo "selected"; ?>>Infrequently</option>
                <option value="Never" <?php if ($patientData->d2s4 == "Never") echo "selected"; ?>>Never</option>
              </select>
            </div>
          </div>

          <div class="col-md-4">
            <div class="form-group">
              <label for="d2s5">Do you agree to engage in recreational drug use?<sup class="text-danger" style="font-weight: bold; font-size:14px">*</sup></label>
              <select class="form-control input2" id="d2s5" name="d2s5" required disabled>
                <option disabled value="" selected>Please select</option>
                <option value="Daily" <?php if ($patientData->d2s5 == "Daily") echo "selected"; ?>>Daily</option>
                <option value="Weekly" <?php if ($patientData->d2s5 == "Weekly") echo "selected"; ?>>Weekly</option>
                <option value="Monthly" <?php if ($patientData->d2s5 == "Monthly") echo "selected"; ?>>Monthly</option>
                <option value="Infrequently" <?php if ($patientData->d2s5 == "Infrequently") echo "selected"; ?>>Infrequently</option>
                <option value="Never" <?php if ($patientData->d2s5 == "Never") echo "selected"; ?>>Never</option>
              </select>
            </div>
          </div>

          <div class="col-md-3">
            <div class="form-group">
              <label for="d2p4">What kind of drugs?</label>
              <input type="text" class="form-control input2" value="<?php echo $patientData->d2p4; ?>" id="d2p4" name="d2p4" readonly>
            </div>
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-md-12">
            <p class="mb-1 " style="font-size: 16px;">Are you currently experiencing difficulties with your appetite or eating problems?<sup class="text-danger" style="font-weight: bold; font-size:14px">*</sup></p>
            <div class="form-check">
              <input class="form-check-input input2" type="radio" name="d2r4" id="d2r4yes" value="yes" <?php if ($patientData->d2r4 == "yes") echo "checked"; ?> required disabled>
              <label class="form-check-label" for="d2r4yes">Yes</label>
            </div>
            <div class="form-check">
              <input class="form-check-input input2" type="radio" name="d2r4" id="d2r4no" value="no" <?php if ($patientData->d2r4 == "no") echo "checked"; ?> disabled>
              <label class="form-check-label" for="d2r4no">No</label>
            </div>
          </div>
        </div>

        <div class="row mb-3">
          <div class="col-md-12">
            <p class="mb-1 " style="font-size: 16px;">Are you currently experiencing overwhelming sadness, grief or depression?<sup class="text-danger" style="font-weight: bold; font-size:14px">*</sup></p>
            <div class="form-check">
              <input class="form-check-input input2" type="radio" name="d2r5" id="d2r5yes" value="yes" <?php if ($patientData->d2r5 == "yes") echo "checked"; ?> required disabled>
              <label class="form-check-label" for="d2r5yes">Yes</label>
            </div>
            <div class="form-check">
              <input class="form-check-input input2" type="radio" name="d2r5" id="d2r5no" value="no" <?php if ($patientData->d2r5 == "no") echo "checked"; ?> disabled>
              <label class="form-check-label" for="d2r5no">No</label>
            </div>
          </div>
        </div>

        <div class="row mb-3">
          <div class="col-md-12">
            <p class="mb-1 " style="font-size: 16px;">Are you currently experiencing anxiety, panic attacks or have any phobias?<sup class="text-danger" style="font-weight: bold; font-size:14px">*</sup></p>
            <div class="form-check">
              <input class="form-check-input input2" type="radio" name="d2r6" id="d2r6yes" value="yes" <?php if ($patientData->d2r6 == "yes") echo "checked"; ?> required disabled>
              <label class="form-check-label" for="d2r6yes">Yes</label>
            </div>
            <div class="form-check">
              <input class="form-check-input input2" type="radio" name="d2r6" id="d2r6no" value="no" <?php if ($patientData->d2r6 == "no") echo "checked"; ?> disabled>
              <label class="form-check-label" for="d2r6no">No</label>
            </div>
          </div>
        </div>

        <div class="row mb-3">
          <div class="col-md-12">
            <p class="mb-1 " style="font-size: 16px;">Are you currently experiencing chronic pain or illness?<sup class="text-danger" style="font-weight: bold; font-size:14px">*</sup></p>
            <div class="form-check">
              <input class="form-check-input input2" type="radio" name="d2r7" id="d2r7yes" value="yes" <?php if ($patientData->d2r7 == "yes") echo "checked"; ?> oninput="updateButtons()" required disabled>
              <label class="form-check-label" for="d2r7yes">Yes</label>
            </div>
            <div class="form-check">
              <input class="form-check-input input2" type="radio" name="d2r7" id="d2r7no" value="no" <?php if ($patientData->d2r7 == "no") echo "checked"; ?> disabled>
              <label class="form-check-label" for="d2r7no">No</label>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-12">
            <div class="form-group">
              <label for="d2text">What significant life changes or stressful events have you experienced recently?</label>
              <textarea type="text" class="form-control input2" id="d2text" value="<?php echo $patientData->d2text; ?>" name="d2text" readonly></textarea>
            </div>
          </div>
        </div>
      </div>
      <h3>Family Health History</h3>
      <div id="div3" class="mt-3 container">
        <div class="form-group">
          <label>In the section below, identify if there is a family history of any of the following: <sup class="text-danger" style="font-weight: bold; font-size:14px">*</sup> </label>
          <div class="form-check">
            <input class="form-check-input input3" oninput="updateButtons()" type="checkbox" name="checkboxs[]" value="Alcohol/Substance Abuse" id="checkbox1" <?php
                                                                                                                                                                if (in_array('Alcohol/Substance Abuse', array_map('trim', $checkbox_values))) {
                                                                                                                                                                  echo 'checked';
                                                                                                                                                                }
                                                                                                                                                                ?> required>
            <label class="form-check-label" for="checkbox1">Alcohol/Substance Abuse</label>
          </div>

          <div class="form-check">
            <input class="form-check-input input3" oninput="updateButtons()" type="checkbox" name="checkboxs[]" value="Anxiety" id="checkbox2" <?php
                                                                                                                                                if (in_array('Anxiety', array_map('trim', $checkbox_values))) {
                                                                                                                                                  echo 'checked';
                                                                                                                                                }
                                                                                                                                                ?>>
            <label class="form-check-label" for="checkbox2">Anxiety</label>
          </div>

          <div class="form-check">
            <input class="form-check-input input3" oninput="updateButtons()" type="checkbox" name="checkboxs[]" value="Depression" id="checkbox3" <?php
                                                                                                                                                  if (in_array('Depression', array_map('trim', $checkbox_values))) {
                                                                                                                                                    echo 'checked';
                                                                                                                                                  }
                                                                                                                                                  ?>>
            <label class="form-check-label" for="checkbox3">Depression</label>
          </div>

          <div class="form-check">
            <input class="form-check-input input3" oninput="updateButtons()" type="checkbox" name="checkboxs[]" value="Domestic Voilence" id="checkbox4" <?php
                                                                                                                                                          if (in_array('Domestic Voilence', array_map('trim', $checkbox_values))) {
                                                                                                                                                            echo 'checked';
                                                                                                                                                          }
                                                                                                                                                          ?>>
            <label class="form-check-label" for="checkbox4">Domestic Voilence</label>
          </div>

          <div class="form-check">
            <input class="form-check-input input3" oninput="updateButtons()" type="checkbox" name="checkboxs[]" value="Eating Disorders" id="checkbox5" <?php
                                                                                                                                                        if (in_array('Eating Disorders', array_map('trim', $checkbox_values))) {
                                                                                                                                                          echo 'checked';
                                                                                                                                                        }
                                                                                                                                                        ?>>
            <label class="form-check-label" for="checkbox5">Eating Disorders</label>
          </div>

          <div class="form-check">
            <input class="form-check-input input3" oninput="updateButtons()" type="checkbox" name="checkboxs[]" value="Obesity" id="checkbox6" <?php
                                                                                                                                                if (in_array('Obesity', array_map('trim', $checkbox_values))) {
                                                                                                                                                  echo 'checked';
                                                                                                                                                }
                                                                                                                                                ?>>
            <label class="form-check-label" for="checkbox6">Obesity</label>
          </div>

          <div class="form-check">
            <input class="form-check-input input3" oninput="updateButtons()" type="checkbox" name="checkboxs[]" value="Obessive Compulsive Behavior" id="checkbox7" <?php
                                                                                                                                                                    if (in_array('Obessive Compulsive Behavior', array_map('trim', $checkbox_values))) {
                                                                                                                                                                      echo 'checked';
                                                                                                                                                                    }
                                                                                                                                                                    ?>>
            <label class="form-check-label" for="checkbox7">Obsessive Compulsive Behavior</label>
          </div>

          <div class="form-check">
            <input class="form-check-input input3" oninput="updateButtons()" type="checkbox" name="checkboxs[]" value="Schizophrenia" id="checkbox8" <?php
                                                                                                                                                      if (in_array('Schizophrenia', array_map('trim', $checkbox_values))) {
                                                                                                                                                        echo 'checked';
                                                                                                                                                      } ?>>


            <label class="form-check-label" for="checkbox8">Schizophrenia</label>
          </div>
          <div class="form-check">
            <input class="form-check-input input3" oninput="updateButtons()" type="checkbox" name="checkboxs[]" value="Suicide Attempts" id="checkbox9" <?php
                                                                                                                                                        if (in_array('Suicide Attempts', array_map('trim', $checkbox_values))) {
                                                                                                                                                          echo 'checked';
                                                                                                                                                        }
                                                                                                                                                        ?>>
            <label class="form-check-label" for="checkbox9">Suicide Attempts</label>
          </div>

          <div class="form-check">
            <input class="form-check-input input3" oninput="updateButtons()" type="checkbox" name="checkboxs[]" value="Others" id="checkbox10" <?php
                                                                                                                                                if (in_array('Others', array_map('trim', $checkbox_values))) {
                                                                                                                                                  echo 'checked';
                                                                                                                                                }
                                                                                                                                                ?>>
            <label class="form-check-label" for="checkbox10">Others</label>
          </div>

          <div class="form-check">
            <input class="form-check-input input3" oninput="updateButtons()" type="checkbox" name="checkboxs[]" value="None" id="checkbox11" <?php
                                                                                                                                              if (in_array('None', array_map('trim', $checkbox_values))) {
                                                                                                                                                echo 'checked';
                                                                                                                                              }
                                                                                                                                              ?>>
            <label class="form-check-label" for="checkbox11">None</label>
          </div>

        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="form-group">
              <label for="d3text">Briefly describe your family mental health history and the relationships to you.</label>
              <textarea class="form-control input3" id="d3text" name="d3text" readonly><?php echo $patientData->d3text; ?></textarea>
            </div>
          </div>

        </div>
        <div class="row mb-3">
          <div class="col-md-12">
            <div class="form-group">
              <label for="d3text">In the section below, please list your closest relationships.</label>
            </div>
          </div>
        </div>
        <div class="form-row">
          <div class="col-md-3">
            <div class="form-group">
              <label for="d3name1">Name</label>
              <input type="text" class="form-control" value="<?php echo $patientData->d3name1 ?>" name="d3name1" id="d3name1" readonly>
            </div>
          </div>
          <div class="col-md-3">
            <div class="form-group">
              <label for="d3relation1">Relationship</label>
              <input type="text" class="form-control" value="<?php echo $patientData->d3relation1 ?>" name="d3relation1" id="d3relation1" readonly>
            </div>
          </div>
          <div class="col-md-3">
            <div class="form-group">
              <label for="d3age1">Age</label>
              <input type="number" class="form-control" value="<?php echo $patientData->d3age1 ?>" name="d3age1" id="d3age1" readonly>
            </div>
          </div>
          <div class="col-md-3">
            <div class="form-group">
              <label for="d3s1">Do they live with you?</label>
              <select class="form-control input2" id="d3s1" name="d3s1 " disabled>
                <option disabled selected>Please select</option>
                <option value="Yes" <?php if ($patientData->d3s1 === 'Yes') echo 'selected'; ?>>Yes</option>
                <option value="No" <?php if ($patientData->d3s1 === 'No') echo 'selected'; ?>>No</option>
                <option value="Others" <?php if ($patientData->d3s1 === 'Others') echo 'selected'; ?>>Others</option>
              </select>
            </div>
          </div>

        </div>
        <div class="form-row">
          <div class="col-md-3">
            <div class="form-group">
              <label for="d3name2">Name</label>
              <input type="text" class="form-control" value="<?php echo $patientData->d3name2 ?>" name="d3name2" id="d3name2" readonly>
            </div>
          </div>
          <div class="col-md-3">
            <div class="form-group">
              <label for="d3relation2">Relationship</label>
              <input type="text" class="form-control" value="<?php echo $patientData->d3relation2 ?>" name="d3relation2" id="d3relation2" readonly>
            </div>
          </div>
          <div class="col-md-3">
            <div class="form-group">
              <label for="d3age2">Age</label>
              <input type="number" class="form-control" value="<?php echo $patientData->d3age2 ?>" name="d3age2" id="d3age2" readonly>
            </div>
          </div>
          <div class="col-md-3">
            <div class="form-group">
              <label for="d3s2">Do they live with you?</label>
              <select class="form-control input2" id="d3s2" name="d3s2" disabled>
                <option disabled selected>Please select</option>
                <option value="Yes" <?php if ($patientData->d3s2 === 'Yes') echo 'selected'; ?>>Yes</option>
                <option value="No" <?php if ($patientData->d3s2 === 'No') echo 'selected'; ?>>No</option>
                <option value="Others" <?php if ($patientData->d3s2 === 'Others') echo 'selected'; ?>>Others</option>
              </select>
            </div>
          </div>

        </div>
      </div>
      <h3>Additional Information</h3>
      <div id="div4" class="mt-3 container">
        <div class="form-row mb-3">
          <div class="col-md-4">
            <div class="form-group">
              <label for="education">Education<sup class="text-danger" style="font-weight: bold; font-size:14px">*</sup> </label>
              <input type="text" class="form-control input4" id="education" value="<?php echo $patientData->education; ?>" name="education" placeholder="Enter Education" Required readonly>
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label for="Occupaition">Occupaition<sup class="text-danger" style="font-weight: bold; font-size:14px">*</sup> </label>
              <input type="text" class="form-control input4" id="Occupaition" value="<?php echo $patientData->occupaition; ?>" name="occupaition" placeholder="Enter Occupaition" Required readonly>
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label for="d4s1">Marital Status</label>
              <select class="form-control input4" id="d4s1" name="d4s1" disabled>
                <option disabled selected>Please select</option>
                <option value="Married" <?php if ($patientData->d4s1 === 'Married') echo 'selected'; ?>>Married</option>
                <option value="Domestic Patnership" <?php if ($patientData->d4s1 === 'Domestic Patnership') echo 'selected'; ?>>Domestic Partnership</option>
                <option value="Divorced" <?php if ($patientData->d4s1 === 'Divorced') echo 'selected'; ?>>Divorced</option>
                <option value="Separated" <?php if ($patientData->d4s1 === 'Separated') echo 'selected'; ?>>Separated</option>
                <option value="Widowed" <?php if ($patientData->d4s1 === 'Widowed') echo 'selected'; ?>>Widowed</option>
                <option value="Never Married" <?php if ($patientData->d4s1 === 'Never Married') echo 'selected'; ?>>Never Married</option>
              </select>
            </div>
          </div>

        </div>
        <div class="row mb-3">
          <div class="col-md-12">
            <p class="mb-1 " style="font-size: 16px;">Are you currently employed?<sup class="text-danger" style="font-weight: bold; font-size:14px">*</sup> </p>
            <div class="form-checak">
              <input class="form-check-input input4" type="radio" name="d4r1" id="d4r1yees" value="yes" <?php if ($patientData->d4r1 == "yes") echo "checked"; ?> required disabled>
              <label class="form-check-label" for="d4r1yees">Yes</label>
            </div>
            <div class="form-checak">
              <input class="form-check-input input4" type="radio" name="d4r1" <?php if ($patientData->d4r1 == "no") echo "checked"; ?> id="d4r1no" value="no" disabled>
              <label class="form-check-label" for="d4r1no">No</label>
            </div>
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-md-12">
            <p class="mb-1 " style="font-size: 16px;">Are you currently in a romantic relationship?<sup class="text-danger" style="font-weight: bold; font-size:14px">*</sup> </p>
            <div class="form-checak">
              <input class="form-check-input input4" type="radio" name="d4r2" id="d4r2yes" <?php if ($patientData->d4r2 == "yes") echo "checked"; ?> value="yes" required disabled>
              <label class="form-check-label" for="d4r2yes">Yes</label>
            </div>
            <div class="form-checak">
              <input class="form-check-input input4" type="radio" name="d4r2" <?php if ($patientData->d4r2 == "no") echo "checked"; ?> id="d4r2no" value="no" disabled>
              <label class="form-check-label" for="d4r2no">No</label>
            </div>
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-md-12">
            <p class="mb-1 " style="font-size: 16px;">Are you speritual or religious?</p>
            <div class="form-checak">
              <input class="form-check-input input4" type="radio" name="d4r3" id="d4r3yes" value="yes" <?php if ($patientData->d4r3 == "yes") echo "checked"; ?> disabled>
              <label class="form-check-label" for="d4r3yes">Yes</label>
            </div>
            <div class="form-checak">
              <input class="form-check-input input4" type="radio" name="d4r3" id="d4r3no" value="no" <?php if ($patientData->d4r3 == "no") echo "checked"; ?> disabled>
              <label class="form-check-label" for="d4r3no">No</label>
            </div>
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-md-12">
            <div class="form-group">
              <label for="d4text1">Briefly describe your current living arrangements?</label>
              <input type="text" class="form-control input4" id="d4text1" value="<?php echo $patientData->d4text1; ?>" name="d4text1" readonly></input>
            </div>
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-md-12">
            <div class="form-group">
              <label for="d4text2">How can I help? In your own words what brings you here today?<sup class="text-danger" style="font-weight: bold; font-size:14px">*</sup> </label>
              <textarea type="text" class="form-control input4" id="d4text2" name="d4text2" required readonly><?php echo $patientData->d4text2; ?></textarea>
            </div>
          </div>
        </div>
        <div class="form-row mb-3">
          <div class="col-md-6">
            <div class="form-group">
              <label for="d4therapy1">Therapy Goal#1<sup class="text-danger" style="font-weight: bold; font-size:14px">*</sup> </label>
              <input type="text" class="form-control input4" id="d4therapy1" value="<?php echo $patientData->d4therapy1; ?>" name="d4therapy1" Required readonly>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="d4therapy2">Therapy Goal#2<sup class="text-danger" style="font-weight: bold; font-size:14px">*</sup> </label>
              <input type="text" class="form-control input4" id="d4therapy2" value="<?php echo $patientData->d4therapy2; ?>" name="d4therapy2" readonly required>
            </div>
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-md-12">
            <div class="form-group">
              <label for="d4text3">Is there anything that you would want me to know?</label>
              <textarea type="text" class="form-control input4" id="d4text3" name="d4text3" readonly><?php echo $patientData->d4text3; ?></textarea>
            </div>
          </div>
        </div>
      </div>
    </form>
  </section>
</div>