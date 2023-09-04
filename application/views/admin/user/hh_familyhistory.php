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
      <button id="button3" class="btn btn-dark active" onclick="toggleDiv(3)">Family Health History</button>
    </div>
    <div class="col-md-2 bg-dark offset-md-1 d-flex flex-column align-items-center justify-content-center">
      <button id="button4" class="btn btn-dark" onclick="toggleDiv(4)" disabled>Additional Information</button>
    </div>
  </div>


  <?php

  $checkbox_values = [];

  foreach ($family_info as $info) {
    $checkboxs = $info->checkboxs;
    if (!empty($checkboxs)) {
      $checkbox_values = json_decode($checkboxs, true);
    }
    $d3text = $info->d3text;
    $d3name1 = $info->d3name1;
    $d3name2 = $info->d3name2;
    $d3relation1 = $info->d3relation1;
    $d3relation2 = $info->d3relation2;
    $d3age1 = $info->d3age1;
    $d3age2 = $info->d3age2;
    $d3s1 = $info->d3s1;
    $d3s2 = $info->d3s2;
  }
  ?>


  <section class="content container">
    <form id="myForm" action="<?php echo base_url('admin/h_history/addfamilyinfo') ?>" method="post">
      <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
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
              <textarea class="form-control input3" id="d3text" name="d3text"><?php echo $d3text; ?></textarea>
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
              <input type="text" class="form-control" value="<?php echo $d3name1 ?>" name="d3name1" id="d3name1">
            </div>
          </div>
          <div class="col-md-3">
            <div class="form-group">
              <label for="d3relation1">Relationship</label>
              <input type="text" class="form-control" value="<?php echo $d3relation1 ?>" name="d3relation1" id="d3relation1">
            </div>
          </div>
          <div class="col-md-3">
            <div class="form-group">
              <label for="d3age1">Age</label>
              <input type="number" class="form-control" value="<?php echo $d3age1 ?>" name="d3age1" id="d3age1">
            </div>
          </div>
          <div class="col-md-3">
            <div class="form-group">
              <label for="d3s1">Do they live with you?</label>
              <select class="form-control input2" id="d3s1" name="d3s1">
                <option disabled>Please select</option>
                <option value="Yes" <?php if ($d3s1 === 'Yes') echo 'selected'; ?>>Yes</option>
                <option value="No" <?php if ($d3s1 === 'No') echo 'selected'; ?>>No</option>
                <option value="Others" <?php if ($d3s1 === 'Others') echo 'selected'; ?>>Others</option>
              </select>
            </div>
          </div>

        </div>
        <div class="form-row">
          <div class="col-md-3">
            <div class="form-group">
              <label for="d3name2">Name</label>
              <input type="text" class="form-control" value="<?php echo $d3name2 ?>" name="d3name2" id="d3name2">
            </div>
          </div>
          <div class="col-md-3">
            <div class="form-group">
              <label for="d3relation2">Relationship</label>
              <input type="text" class="form-control" value="<?php echo $d3relation2 ?>" name="d3relation2" id="d3relation2">
            </div>
          </div>
          <div class="col-md-3">
            <div class="form-group">
              <label for="d3age2">Age</label>
              <input type="number" class="form-control" value="<?php echo $d3age2 ?>" name="d3age2" id="d3age2">
            </div>
          </div>
          <div class="col-md-3">
            <div class="form-group">
              <label for="d3s2">Do they live with you?</label>
              <select class="form-control input2" id="d3s2" name="d3s2">
                <option disabled>Please select</option>
                <option value="Yes" <?php if ($d3s2 === 'Yes') echo 'selected'; ?>>Yes</option>
                <option value="No" <?php if ($d3s2 === 'No') echo 'selected'; ?>>No</option>
                <option value="Others" <?php if ($d3s2 === 'Others') echo 'selected'; ?>>Others</option>
              </select>
            </div>
          </div>

        </div>
      </div>
      <button class="btn btn-success float-right" type="submit">Save & Next</button>
      <a href="javascript:history.back()" class="btn btn-secondary float-left text-light">Previous</a>
    </form>
  </section>
</div>