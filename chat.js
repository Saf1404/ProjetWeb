// chat.js

$(document).ready(function() {
    var eventId = $('#event-id').val();

    function loadMessages() {
        $.ajax({
            url: 'chat.php',
            type: 'POST',
            data: { event_id: eventId },
            dataType: 'json',
            success: function(response) {
                var chatMessages = $('#chat-messages');
                chatMessages.html('');

                if (response.error) {
                    $('#chat-container').hide();
                } else {
                    $('#chat-container').show();

                    if (response.length > 0) {
                        response.sort(function(a, b) {
                            return new Date(a.timestamp) - new Date(b.timestamp);
                        });

                        $.each(response, function(index, message) {
                            var timestamp = new Date(message.timestamp);
                            var formattedTimestamp = timestamp.toLocaleString();
                            chatMessages.append('<div class="message"><strong>' + message.pseudo + '</strong>: ' + message.message + ' <small>' + formattedTimestamp + '</small></div>');
                        });

                        chatMessages.scrollTop(chatMessages.prop('scrollHeight'));
                    }
                }
            },
            error: function() {
                $('#chat-container').hide();
            }
        });
    }

    loadMessages();

    setInterval(loadMessages, 2000);

    $('#chat-form').submit(function(e) {
        e.preventDefault();
        var message = $('#message-input').val().trim();

        if (message !== '') {
            $.ajax({
                url: 'chat.php',
                type: 'POST',
                data: { event_id: eventId, message: message },
                success: function() {
                    $('#message-input').val('');
                    loadMessages();
                }
            });
        }
    });
    
});
