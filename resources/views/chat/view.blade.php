<!DOCTYPE html>
<html lang="en">
@include('doctor.head')
@include('layout.app')

<style>
    .chat-container {
        max-width: 600px;
        margin: 0 auto;
        padding: 20px;
        border: 1px solid #ddd;
        border-radius: 5px;
        background-color: #f9f9f9;
        height: 80vh;
        overflow-y: scroll;
    }
    .chat-message {
        margin-bottom: 15px;
        padding: 10px;
        border-radius: 10px;
        max-width: 70%;
        position: relative;
    }
    .message-sent {
        background-color: #e0f7fa;
        margin-left: auto;
    }
    .message-received {
        background-color: #ffffff;
        margin-right: auto;
    }
    .chat-message .message-author {
        font-weight: bold;
    }
    .chat-message .message-timestamp {
        font-size: 0.8em;
        color: #888;
        position: absolute;
        bottom: 5px;
        right: 10px;
    }
    .message-input {
        margin-top: 20px;
    }
</style>
<div class="container chat-container">
    <h1>Chat with {{ auth()->user()->first_name }} {{ auth()->user()->last_name }}</h1>
    <!-- Chat UI -->
    <div id="chat-messages">
        <!-- Loop through messages -->
        @foreach($messages as $message)
            <div class="chat-message {{ $message->user_id == auth()->id() ? 'message-sent' : 'message-received' }}">
                <p class="message-author">{{ $message->user->first_name }} {{ $message->user->last_name }}</p>
                <p>{{ $message->content }}</p>
                <p class="message-timestamp">{{ $message->created_at->format('H:i') }}</p>
            </div>
        @endforeach
    </div>

    <!-- Message Input -->
    <form id="message-form" method="POST" class="message-input">
        @csrf
        <input type="hidden" name="chat_session_id" value="{{ $chatSession->id }}">
        <textarea name="message" rows="3" class="form-control" placeholder="Type your message..."></textarea>
        <button type="submit" class="btn btn-primary mt-2">Send</button>
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        // Scroll to bottom of chat messages
        function scrollToBottom() {
            var chatMessages = $('#chat-messages');
            chatMessages.scrollTop(chatMessages[0].scrollHeight);
        }

        scrollToBottom();

        // Handle form submission with AJAX
        $('#message-form').on('submit', function(event) {
            event.preventDefault();

            $.ajax({
                url: "{{ route('send.message') }}",
                method: 'POST',
                data: $(this).serialize(),
                success: function(response) {
                    // Append the new message to chat
                    $('#chat-messages').append(`
                        <div class="chat-message message-sent">
                            <p class="message-author">${response.user_name}</p>
                            <p>${response.message_content}</p>
                            <p class="message-timestamp">${response.message_timestamp}</p>
                        </div>
                    `);

                    // Clear the textarea
                    $('textarea[name="message"]').val('');

                    // Scroll to the bottom
                    scrollToBottom();
                },
                error: function(xhr) {
                    console.log('Error:', xhr.responseText);
                }
            });
        });
    });
</script>

