<div class="content-wrapper">
    <!-- Main content -->
    <section class="content container">

        <div class="row p-0 mt-20">
            <div class="col-md-12">
                <div class="box add_area" data-aos="fade-down" data-aos-duration="400">
                    <div class="box-header with-border">
                        <h3 class="box-title"><?php echo trans('doc-list') ?> </h3>
                    </div>

                    <div class="box-bodys p-10 table-responsive">

                        <?php if (empty($appointments)) : ?>
                            <div class="mt-4 mb-4 text-center">
                                <h4><img src="<?php echo base_url('assets/images/not-found.png') ?>"></h4>
                                <h5><?php echo trans('data-not-found') ?></h5>
                            </div>
                        <?php else : ?>

                            <table class="table table-hover <?php if (isset($appointments) && count($appointments) >= 10) {
                                                                echo "datatable";
                                                            } ?>">
                                <thead>
                                    <tr>
                                        <th><?php echo trans('serial-no') ?></th>
                                        <th><?php echo trans('mr.-no') ?></th>
                                        <th><?php echo trans('doctor-info') ?></th>
                                        <th><?php echo trans('schedule-info') ?></th>
                                        <th><?php echo trans('consultation-type') ?></th>
                                        <th><?php echo trans('price') ?></th>
                                        <th>Action</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1;
                                    foreach ($appointments as $amp) : ?>
                                        <tr id="row_<?php echo html_escape($amp->id); ?>" style="background: #<?php if ($amp->status == 1) {
                                                                                                                    echo "eefaf6";
                                                                                                                } else {
                                                                                                                    echo "fff";
                                                                                                                } ?>">


                                            <td><?php echo html_escape($amp->serial_id); ?></td>

                                            <td>#<?php echo html_escape($amp->mr_number); ?></td>

                                            <td>
                                                <p class="mb-0"><?php echo html_escape($amp->dr_name); ?></p>
                                            </td>

                                            <td>
                                                <label class="badge badge-primary-soft brd-20"><i class="fa fa-calendar"></i> <?php echo my_date_show($amp->date); ?></label><br>
                                                <label class="badge badge-primary-soft brd-20"><i class="fa fa-clock-o"></i> <?php echo $amp->time; ?></label>
                                            </td>

                                            <td>
                                                <?php if ($amp->type == 'online') : ?>
                                                    <label class="badge badge-danger-soft brd-20"><i class="fa fa-circle"></i> <?php echo trans('online') ?> </label>
                                                <?php else : ?>
                                                    <label class="badge badge-secondary-soft brd-20"><i class="fa fa-circle"></i> <?php echo trans('offline') ?> </label>
                                                <?php endif ?>
                                            </td>

                                            <td>
                                                <p class="mb-0"><?php echo currency_symbol($amp->currency); ?><?php echo html_escape($amp->price); ?></p>
                                            </td>



                                            <td>
                                                <a target="_blank" href="<?php echo base_url('admin/h_history/chatbox/' . html_escape($amp->user_id)); ?>" class="btn btn-light-primary btn-sm fs-12" data-placement="top" title="Chat"><i class="fa fa-comment"></i> <?php echo trans('chat') ?></a>
                                            </td>

                                            <td>
                                                <?php if ($amp->is_start == 1) : ?>
                                                    <div class="pulse" data-toggle="tooltip" data-title="Doctor started the meeting click the join button"></div>
                                                <?php endif; ?>
                                            </td>
                                        </tr>

                                    <?php $i++;
                                    endforeach; ?>
                                </tbody>
                            </table>

                        <?php endif; ?>

                    </div>

                </div>
            </div>
        </div>

    </section>
</div>