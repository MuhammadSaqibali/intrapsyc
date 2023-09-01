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
                margin-right: 10px;
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
                <div class="message user-message">
                    <div class="user-icon">User</div>
                    <div class="message-content">
                        Hello there!
                    </div>
                </div>

                <!-- Other side message -->
                <div class="message other-message">
                    <div class="other-icon">Other</div>
                    <div class="message-content">
                        Hi! How can I assist you today?
                    </div>
                </div>
                <div class="chat-messages"></div>
                <!-- More messages can be added here -->
            </div>
            <div class="chat-input mt-3">
                <div class="input-group">
                    <input type="text" class="form-control" id="input" placeholder="Type your message">
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
                    $('#butsave').on('click', function() {
                        var input = $('#input').val();

                        // Append the user's message to the chat container on the right side
                        appendMessage("my", input);

                        $.ajax({
                            url: '<?php echo base_url("admin/h_history/chatbox"); ?>',
                            type: 'POST',
                            data: {
                                text: input,
                                '<?php echo $this->security->get_csrf_token_name(); ?>': '<?php echo $this->security->get_csrf_hash(); ?>'
                            },
                            success: function(botReply) {
                                // Append the bot's reply to the chat container on the left side
                                appendMessage("bot", botReply);

                                // Clear the input field
                                $('#input').val("");

                                // Scroll to the bottom of the chat container
                                $('.chat-messages').scrollTop($('.chat-messages')[0].scrollHeight);
                            }
                        });
                    });
                });

                function appendMessage(sender, text) {
                    var chatMessages = $('.chat-messages');
                    var messageDiv = $('<div class="message"></div>');

                    if (sender === "my") {
                        messageDiv.addClass("user-message");
                        messageDiv.html(`
            <div class="user-icon">User</div>
            <div class="message-content">${text}</div>
        `);
                    } else if (sender === "bot") {
                        messageDiv.addClass("other-message");
                        messageDiv.html(`
            <div class="other-icon">Bot</div>
            <div class="message-content">${text}</div>
        `);
                    }

                    chatMessages.append(messageDiv);
                }
            </script>
    </section>
</div>