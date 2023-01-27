<button id="chat-button" class="chat-button" x-data="{ open: false }" @click="open = !open">Customer support</button>
<div id="chat-box" class="chat-box" x-show="open">
    <div class="chat-header">
        Chat
        <button class="chat-close-button">x</button>
    </div>
    <div class="chat-messages">
        <div class="msg-div">
            <div class="message-container user1">
                <div class="message-text">Hello!</div>
                <span class="message-time"> 3 min </span>
            </div>
        </div>
        <div class="msg-div user2">
            <div class="message-container user2">
                <img class="user-img" src="https://www.gravatar.com/avatar/205e460b479e2e5b48aec07710c08d50?s=200">
                <div class="message-text">Hi! How are you?</div>
                <span class="message-time"> 3 min </span>
            </div>
        </div>
        <div class="msg-div user1">
            <div class="message-container user1">
                <div class="message-text">I'm good, thanks!</div>
                <span class="message-time"> 3 min </span>
            </div>
        </div>
        <div class="msg-div user2">
            <div class="message-container user2">
                <img class="user-img" src="https://www.gravatar.com/avatar/205e460b479e2e5b48aec07710c08d50?s=200">
                <div class="message-text">Good!!</div>
                <span class="message-time"> 3 min </span>
            </div>
        </div>
        <div class="msg-div user1">
            <div class="message-container user1">
                <div class="message-text">I'm good, thanks!</div>
                <span class="message-time"> 3 min </span>
            </div>
        </div>
    </div>
    <div class="chat-input-container">
        <input type="text" class="chat-input" placeholder="Type your message here...">
        <button class="chat-submit-button">
            <i class="fas fa-paper-plane"></i>
        </button>
    </div>
</div>
@section('scripts')
    <script>
        console.log('global')
        // Get the button and the chat box
        var button = document.getElementById("chat-button");
        var closeButton = document.querySelector('.chat-close-button');
        var chatBox = document.getElementById('chat-box');


        // When the button is clicked, toggle the visibility of the chat box
        button.addEventListener("click", function() {
            if (chatBox.style.display === "none") {
                chatBox.style.display = "block";
            } else {
                chatBox.style.display = "none";
            }
        });


        // When the button is clicked, toggle the visibility of the chat box
        button.addEventListener("click", function() {
            chatBox.classList.toggle('chat-hidden');
            if (chatBox.classList.contains("slideOutDown")) {

                chatBox.classList.remove("slideOutDown");
                chatBox.classList.add("slideInUp");
                chatBox.classList.remove('chat-hidden');
                chatBox.classList.remove('chatClose');

                chatBox.style.display = "block";

            } else if (chatBox.classList.contains("slideOutDown")) {
                chatBox.classList.remove("slideInUp");
                chatBox.classList.add("slideOutDown");
                chatBox.classList.add('chat-hidden');
                chatBox.classList.add('chatClose');
            }else {
                chatBox.classList.add("slideInUp");
                chatBox.classList.remove('chat-hidden');
                chatBox.style.display = "block";
            }
        });

        closeButton.addEventListener('click', function(){
            chatBox.classList.add('chatClose');
            chatBox.classList.remove("slideInUp");
            chatBox.classList.add("slideOutDown");
        });

        chatBox.addEventListener("animationend", function(){
            chatBox.style.display = "none";
        });


        chatBox.scrollTop = chatBox.scrollHeight;

    </script>
@endsection
