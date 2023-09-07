<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
        <!-- Chat List Container -->
        <div class="container">
            <!-- Chat List Header -->
            <div class="row mt-3">
                <div class="col">
                    <h2 class="text-center">Chat List</h2>
                </div>
            </div>
            <div class="container">
                <h2>Chat Control</h2>
                <table class="table table-bordered text-center">
                    <thead>
                        <tr>
                            <th>Chat ID</th>
                            <th>Doctor Name</th>
                            <th>Patient Name</th>
                            <th>Created At</th>
                            <th>Current Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($chat_data as $chat) : ?>
                            <tr>
                                <td><?php echo $chat->id; ?></td>
                                <?php if ($chat->type == 'doctor') : ?>
                                    <td><?php echo $chat->s_name; ?></td>
                                    <td><?php echo $chat->r_name; ?></td>
                                <?php else : ?>
                                    <td><?php echo $chat->r_name; ?></td>
                                    <td><?php echo $chat->s_name; ?></td>
                                <?php endif; ?>
                                <td><?php echo $chat->created_at; ?></td>
                                <td>
                                    <?php if ($chat->status == 'active') : ?>
                                        <span class="badge badge-success">Active</span>
                                    <?php else : ?>
                                        <span class="badge badge-danger">Blocked</span>
                                    <?php endif; ?>
                                </td>
                                <td>
                                    <a href="<?php echo base_url('admin/chat_control/toggle_chat_status/' . $chat->id); ?>" class="btn btn-<?php echo ($chat->status == 'active') ? 'danger' : 'success'; ?>">
                                        <?php echo ($chat->status == 'active') ? 'Block' : 'Activate'; ?>
                                    </a>
                                </td>


                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</div>