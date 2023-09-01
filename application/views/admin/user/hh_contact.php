<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<div class="content-wrapper">
    <h3>Intake Form</h3>
    <p>Fields marked with an <sup class="text-danger" style="font-weight: bold; font-size:14px">*</sup> are Required</p>
    <div class="row text-center justify-content-center">
        <div class="col-md-2 bg-dark d-flex flex-column align-items-center justify-content-center">
            <button id="button1" class="btn btn-dark active" onclick="toggleDiv(1)">Contact Information</button>
        </div>
        <div class="col-md-2 bg-dark offset-md-1 d-flex flex-column align-items-center justify-content-center">
            <button id="button2" class="btn btn-dark" onclick="toggleDiv(2)" disabled>Health Information</button>
        </div>
        <div class="col-md-2 bg-dark offset-md-1 d-flex flex-column align-items-center justify-content-center">
            <button id="button3" class="btn btn-dark" onclick="toggleDiv(3)" disabled>Family Health History</button>
        </div>
        <div class="col-md-2 bg-dark offset-md-1 d-flex flex-column align-items-center justify-content-center">
            <button id="button4" class="btn btn-dark" onclick="toggleDiv(4)" disabled>Additional Information</button>
        </div>
    </div>
    <?php
    foreach ($contact_info as $info) {
    $fname = $info->fname;
    $lname = $info->lname;
    $date = $info->date;
    $guardian = $info->guardian;
    $email = $info->email;
    $phone = $info->phone;
    $address = $info->address;
    $econtact1 = $info->econtact1;
    $econtact2 = $info->econtact2;
    $erelation1 = $info->erelation1;
    $erelation2 = $info->erelation2;
    $ephone1 = $info->ephone1;
    $ephone2 = $info->ephone2;
    $phy_name = $info->phy_name;
    $phy_address = $info->phy_address;
    $phy_phone = $info->phy_phone;
    $refer = $info->refer;
    }
?>

    <section class="content container">
        <form id="myForm" action="<?php echo base_url('admin/h_history/addcontactinfo') ?>" method="post">
            <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
            <div class="container" id="div1">
                <div class="form-row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="firstName">First Name<sup class="text-danger" style="font-weight: bold; font-size:14px">*</sup> </label>
                            <input type="text" name="fname" class="form-control input1" value="<?php echo $fname; ?>" id="firstName" placeholder="Enter first name" Required>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="lastName">Last Name<sup class="text-danger" style="font-weight: bold; font-size:14px">*</sup> </label>
                            <input type="text" name="lname" class="form-control input1" id="lastName" value="<?php echo $lname; ?>"  placeholder="Enter last name" Required>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="date">Date<sup class="text-danger" style="font-weight: bold; font-size:14px">*</sup> </label>
                            <input type="date" name="date" class="form-control input1" id="date"  value="<?php echo $date; ?>" placeholder="Enter date" Required>
                        </div>
                    </div>
                </div>
                <div class="form-row form-group">
                    <label for="Guardian">Parent/Legal Guardian(If under 18)</label>
                    <input type="text" name="guardian" value="<?php echo $guardian; ?>"  class="form-control" id="Guardian" placeholder="Enter Guardian">
                </div>
                <div class="form-row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="email">E-mail<sup class="text-danger" style="font-weight: bold; font-size:14px">*</sup> </label>
                            <input type="email" name="email"  value="<?php echo $email; ?>" class="form-control input1" id="email" placeholder="Enter E-mail" Required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="phone">Phone<sup class="text-danger" style="font-weight: bold; font-size:14px">*</sup> </label>
                            <input type="tel" name="phone" value="<?php echo $phone; ?>"  class="form-control input1" id="phone" placeholder="Enter phone number" required>
                        </div>
                    </div>
                </div>
                <div class="form-row form-group">
                    <label for="address">Address</label>
                    <input type="text" name="address"  value="<?php echo $address; ?>" class="form-control" id="address" placeholder="Enter address">
                </div>
                <div class="form-row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="e1_contact">Emergency Contact<sup class="text-danger" style="font-weight: bold; font-size:14px">*</sup> </label>
                            <input type="text" name="econtact1" value="<?php echo $econtact1; ?>"  class="form-control input1" id="e1_contact" placeholder="First & Last Name" required>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="e1_relation">Relationship<sup class="text-danger" style="font-weight: bold; font-size:14px">*</sup> </label>
                            <input type="text" name="erelation1" value="<?php echo $erelation1; ?>"  class="form-control input1" id="e1_relation" required>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="e1_phone">Phone<sup class="text-danger" style="font-weight: bold; font-size:14px">*</sup> </label>
                            <input type="tel" name="ephone1" value="<?php echo $ephone1; ?>"  class="form-control input1" id="e1_phone" required>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="e2_contact">Emergency Contact</label>
                            <input type="text" name="econtact2" value="<?php echo $econtact2; ?>"  class="form-control" id="e2_contact" placeholder="First & Last Name">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="e2_relation">Relationship</label>
                            <input type="text" name="erelation2" value="<?php echo $erelation2; ?>"  class="form-control" id="e2_relation">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="e2_phone">Phone</label>
                            <input type="tel" name="ephone2" value="<?php echo $ephone2; ?>"  class="form-control" id="e2_phone">
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="phy_nmae">Primary Care Physician<sup class="text-danger" style="font-weight: bold; font-size:14px">*</sup> </label>
                            <input type="text" name="phy_name" value="<?php echo $phy_name; ?>"  class="form-control input1" id="phy_nmae" placeholder="Physician Name" required>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="phy_address">Address</label>
                            <input type="text" name="phy_address" value="<?php echo $phy_address; ?>"  class="form-control input1" id="phy_address">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="input1">Phone<sup class="text-danger" style="font-weight: bold; font-size:14px">*</sup> </label>
                            <input type="tel" name="phy_phone" value="<?php echo $phy_phone; ?>"  class="form-control input1" id="input1" required oninput="updateButtons()">
                        </div>
                    </div>
                </div>
                <div class="form-row form-group">
                    <label for="refer">Referred by (if any)</label>
                    <input type="text" name="refer" value="<?php echo $refer; ?>"  class="form-control" id="refer">
                </div>
            </div>
            <button class="btn btn-success float-right" type="submit">Save & Next</button>
        </form>
    </section>
</div>