<div class="content-wrapper">

    <!-- Main content -->
    <section class="content container">

        <style>
            /* Custom styles for the chat */
            .message {
                display: flex;
                margin-bottom: 10px;
            }

            .user-icon {
                background-color: #007bff;
                color: white;
                width: 30px;
                height: 30px;
                border-radius: 50%;
                display: flex;
                align-items: center;
                justify-content: center;
                margin-left: 10px;
            }

            .other-icon {
                background-color: #007bff;
                color: white;
                width: 30px;
                height: 30px;
                border-radius: 50%;
                display: flex;
                align-items: center;
                justify-content: center;
                margin-RIGHT: 10px;
            }

            .user-message {
                justify-content: flex-end;
            }

            .other-message {
                justify-content: flex-start;
            }
        </style>

        <body>
            <div class="container mt-5">

                <!-- User message -->
                <!-- <div class="message user-message">
                    <div class="user-icon">User</div>
                    <div class="message-content">
                        Hello there!
                    </div>
                </div> -->

                <!-- Other side message -->
                <!-- <div class="message other-message">
                    <div class="other-icon">Other</div>
                    <div class="message-content">
                        Hi! How can I assist you today?
                    </div>
                </div> -->
                <div id="chat-messages"></div>
                <!-- More messages can be added here -->
            </div>
            <div class="chat-input mt-3">
                <div class="input-group">
                    <input type="text" class="form-control" id="input" placeholder="Type your message">
                    <input type="hidden" value="<?php echo $patientid; ?>" class="form-control" id="patientid" placeholder="Type your message">
                    <input type="hidden" value="<?php echo $sender_id; ?>" class="form-control" id="session" placeholder="Type your message">
                    <div class="input-group-append">
                        <button class="btn btn-primary" id="butsave" type="submit">Send</button>
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
                });

                function loaddata() {
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
                                }
                                ;
                            })
                            $("#chat-messages").append(bodyData);
                        }
                    });
                }


                //         function appendMessage(sender, text) {
                //             var chatMessages = $('.chat-messages');
                //             var messageDiv = $('<div class="message"></div>');

                //             if (sender === "my") {
                //                 messageDiv.addClass("user-message");
                //                 messageDiv.html(`
                //     <div class="user-icon">User</div>
                //     <div class="message-content">${text}</div>
                // `);
                //             } else if (sender === "bot") {
                //                 messageDiv.addClass("other-message");
                //                 messageDiv.html(`
                //     <div class="other-icon">Bot</div>
                //     <div class="message-content">${text}</div>
                // `);
                //             }

                //             chatMessages.append(messageDiv);
                //         }
            </script>
    </section>
</div>