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
                    <input type="hidden" value="<?php echo $patientid; ?>" class="form-control" id="patientid">
                    <input type="hidden" value="<?php echo $sender_id; ?>" class="form-control" id="session">
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
                    var patientid = $('#patientid').val();

                    // Append the user's message to the chat container on the right side
                    $.ajax({
                        url: '<?php echo base_url("admin/h_history/addchat"); ?>',
                        type: 'POST',
                        data: {
                            text: input,
                            patient: patientid,
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
                var session = $('#session').val();
                var id = $('#patientid').val();
                // alert(id);
                $.ajax({
                    url: '<?php echo base_url("admin/h_history/fetch_chat"); ?>',
                    type: 'POST',
                    data: {
                        patient: id,
                        '<?php echo $this->security->get_csrf_token_name(); ?>': '<?php echo $this->security->get_csrf_hash(); ?>'
                    },
                    cache: false,
                    dataType: 'json',
                    success: function(botReply) {
                        var bodyData = '';
                        // alert(botReply);

                        $.each(botReply, function(index, row) {
                            // alert(row.id);
                            if (session == row.sender_id) {
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