<div class="content-wrapper">

    <!-- Main content -->
    <section class="content container">

    <h3 class="box-title"><?php echo trans('all-patients') ?> </h3>
<div class="box-body p-0">

                    <div class="col-md-12 col-sm-12 col-xs-12 scroll table-responsive">
                        <table class="table table-hover <?php if (count($patientses) > 10) {
                                                            echo "datatable";
                                                        } ?>">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th><?php echo trans('mr.-no') ?></th>
                                    <th><?php echo trans('name') ?></th>
                                    <th><?php echo trans('age') ?></th>
                                    <th><?php echo trans('phone') ?></th>
                                    <th><?php echo trans('address') ?> </th>
                                    <th><?php echo trans('chat') ?></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1;
                                foreach ($patientses as $patients) : ?>
                                    <tr id="row_<?php echo html_escape($patients->id); ?>">

                                        <td><?= $i; ?></td>
                                        <td><?php echo html_escape($patients->mr_number); ?></td>
                                        <td><?php echo html_escape($patients->name); ?></td>
                                        <td><?php echo html_escape($patients->age); ?></td>
                                        <td><?php echo html_escape($patients->mobile); ?></td>
                                        <td><?php echo character_limiter($patients->present_address); ?></td>

                                        <td>
                                            <a target="_blank" href="<?php echo base_url('admin/h_history/chatbox/' . html_escape($patients->id)); ?>" class="btn btn-light-primary btn-sm fs-12" data-placement="top" title="Chat"><i class="fa fa-comment"></i> <?php echo trans('chat') ?></a>
                                        </td>
                                    </tr>

                                <?php $i++;
                                endforeach; ?>
                            </tbody>
                        </table>
                    </div>

                </div>

    </section>
</div>