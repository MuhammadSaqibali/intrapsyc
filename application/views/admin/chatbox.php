<div class="content-wrapper">

    <!-- Main content -->
    <section class="content container">

        <style>
            /* Custom styles for the chat */
            .message {
                display: flex;
                margin-bottom: 10px;
            }

            .user-icon,
            .other-icon {
                background-color: #007bff;
                color: white;
                width: 30px;
                height: 30px;
                border-radius: 50%;
                display: flex;
                align-items: center;
                justify-content: center;
                margin-left: 10px;
                /* Adjust margin-left and margin-right as needed */
            }

            .user-message {
                justify-content: flex-end;
            }

            .other-message {
                justify-content: flex-start;
            }
        </style>

        <div class="container mt-5">
            <!-- Chat messages container -->
            <div id="contentContainer" class="message-container overflow-auto" style="max-height: 450px;">
                <div id="chat-messages"></div>
                <!-- More messages can be added here -->
            </div>

            <!-- Chat input -->
            <div class="chat-input mt-3">
                <div class="input-group">
                    <input type="text" class="form-control" id="input" placeholder="Type your message">
                    <input type="hidden" value="<?php echo $sender_id; ?>" class="form-control" id="sender_id">
                    <input type="hidden" value="<?php echo $s_name; ?>" class="form-control" id="s_name">
                    <input type="hidden" value="<?php echo $receiver_id; ?>" class="form-control" id="receiver_id">
                    <input type="hidden" value="<?php echo $r_name; ?>" class="form-control" id="r_name">
                    <input type="hidden" value="<?php echo $chat_id; ?>" class="form-control" id="id">
                    <div class="input-group-append">
                        <button class="btn btn-primary" id="butsave" type="submit">Send</button>
                    </div>
                </div>
            </div>
        </div>

        <script>
        </script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script>
            $(document).ready(function() {
                loaddata();

                $('#butsave').on('click', function() {
                    var input = $('#input').val();
                    var receiver_id = $('#receiver_id').val();
                    var s_name = $('#s_name').val();
                      var r_name = $('#r_name').val();
                      var chat_id = $('#id').val();

                    // Append the user's message to the chat container on the right side
                    $.ajax({
                        url: '<?php echo base_url("admin/h_history/addchat"); ?>',
                        type: 'POST',
                        data: {
                            text: input,
                            patient: receiver_id,
                            s_name:s_name,
                            r_name:r_name,
                            id: chat_id,
                            '<?php echo $this->security->get_csrf_token_name(); ?>': '<?php echo $this->security->get_csrf_hash(); ?>'
                        },
                        success: function(botReply) {

                            // Clear the input field
                            $('#input').val("");
                            var bodyData1 = '';
                            // Append the bot's reply to the chat container on the left side
                            bodyData1 += "<div class='message user-message'><div class='message-content'>" + input + " </div><div class='user-icon'><div class='fa fa-user-o'></div></div></div>";
                            $("#chat-messages").append(bodyData1);
                        }
                    });
                });
                setInterval(function() {
                    loaddata();
                    scrollToBottom(); // Scroll to the bottom after loading new messages
                }, 3000);
            });

            function scrollToBottom() {
                var contentContainer = document.getElementById('contentContainer');
                contentContainer.scrollTop = contentContainer.scrollHeight;
            }

            function loaddata() {
                $("#chat-messages").empty();
                var sender_id = $('#sender_id').val();
                var id = $('#receiver_id').val();
                var s_name = $('#s_name').val();
                var r_name = $('#r_name').val();
                // alert(id);
                $.ajax({
                    url: '<?php echo base_url("admin/h_history/fetch_chat"); ?>',
                    type: 'POST',
                    data: {
                        patient: id,
                        s_name:s_name,
                        r_name:r_name,
                        '<?php echo $this->security->get_csrf_token_name(); ?>': '<?php echo $this->security->get_csrf_hash(); ?>'
                    },
                    cache: false,
                    dataType: 'json',
                    success: function(botReply) {
                        var bodyData = '';
                        // alert(botReply);

                        $.each(botReply, function(index, row) {
                            // alert(row.id);
                            if (sender_id == row.sender_id & s_name==row.s_name) {
                                bodyData += "<div class='message user-message'><div class='message-content'>" + row.message + " </div><div class='user-icon'><div class='fa fa-user-o'></div></div></div>";
                            } else {
                                bodyData += "<div class='message other-message'><div class='other-icon'><div class='fa fa-user-o'></div></div><div class='message-content'>" + row.message + " </div></div>";
                            };
                            scrollToBottom();
                        })
                        $("#chat-messages").append(bodyData);
                        setTimeout(scrollToBottom, 0);
                    }
                });
            }
        </script>
        <script type="text/javascript">
            // setInterval(loaddata, 3000);
        </script>
    </section>
</div>