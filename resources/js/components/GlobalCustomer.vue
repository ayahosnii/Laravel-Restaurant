<template>
    <div>
        <button class="chat-button" @click="isChatOpen = !isChatOpen">Customer Service</button>
        <div v-show="isChatOpen" id="chat-box" class="chat-box" :class="{'open':isChatOpen}" :style="{display: isChatOpen ? 'block' : 'none'}">
            <div class="chat-header">
                Chat with Admin
                <button class="chat-close-button" @click="isChatOpen = false">x</button>
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
    </div>
</template>


<script>
    export default {
        data() {
            return {
                isChatOpen: false,
            }
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
<style>
*{
    font-family: 'Roboto', sans-serif;
}
.chat-button {
    position: fixed;
    bottom: 70px;
    right: 70px;
    font-size: 20px;
    padding: 10px 20px;
    border-radius: 20px;
    background-color: #f5ab1e;
    color: white;
    z-index:1;
    border: 0;
    box-shadow: 0 0 5px 0 #b8b8b8;
}

.chat-box {
    position: fixed;
    bottom: 70px;
    right: 20px;
    width: 400px;
    height: 400px;
    border: 0;
    border-radius: 10px;
    background-color: white;
    display: none; /* hide the chat box by default */
    z-index:1;
    overflow: auto;
    max-height: 500px; /* set a maximum height for the container */
    animation-fill-mode: none; /* remove the animation-fill-mode */
    box-shadow: 0 0 5px 0 #b8b8b8;
}

.chat-box.chatClose {
    animation: chatClose 0.5s ease-in-out; /* add animation */
}

@keyframes chatClose {
    from {
        transform: scale(1); /* start from normal size */
        opacity: 1; /* start from full opacity */
    }
    to {
        transform: scale(0); /* end with 0 size */
        opacity: 0; /* end with 0 opacity */
    }
}

.chat-hidden {
    display: none;
}

.chat-header {
    background-color: #f5ab1e;
    color: white;
    font-size: 20px;
    padding: 18px;
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
    box-shadow: 0 0 5px 0 #b8b8b8;
}

.chat-close-button {
    position: absolute;
    top: 9px;
    right: 10px;
    padding: 5px;
    background-color: transparent;
    color: white;
    border: none;
    font-size: 20px;
    align-items: center;
}

.chat-close-button:hover{
    background: #ea9900;
    border-radius: 5px;
}


.chat-messages {
    height: 300px;
    overflow-y: scroll; /* add scrollbar to messages */
    padding: 10px;
}
.msg-div.user1{
    position: relative;
    text-align: left;
    float: right;
    padding-left: 48px;
    width: calc(100% - 48px);
    margin: 10px 0 10px 0;
}

.message-time {
    font-size: 10px;
    color: #b3b3b3;
    margin-left: 10px;
}

.msg-div.user2{
    position: relative;
    text-align: left;
    float: left;
    padding-right: 48px;
    width: calc(100% - 48px);
    margin: 10px 0 10px 0;
}
.message-container.user1:first-child {
    background-color: #f5ab1e;
    color: white;
    display: flex;
    align-items: center;
    justify-content: flex-end;
    padding: 17px 20px;
    margin-top: 10px;
    border-radius: 10px;
    width: auto;
    max-width: 75%;
    float: right;
}
.message-container.user2:first-child {
    background-color: rgb(245, 245, 245);
    text-align: left;
    color: black;
    display: flex;
    align-items: center;
    padding: 17px 20px;
    border-radius: 10px;
    justify-content: left;
    width: auto;
    max-width: 75%;
    float: left;
    margin-left: 0; /* remove the left margin */
}


.chat-input-container {
    position: absolute;
    bottom: 0;
    left: 0;
    width: 90%;
    border-top: 1px solid #e3e3e3;
    padding: 10px;
    display: flex; /* align input and button horizontally */
    background-color: #ffffff;
}

.chat-input {
    flex-grow: 1; /* input should fill the remaining space */
    padding: 10px;
    border: none;
    border-radius: 5px;
    width: 80%;
    margin: 7px;
}

.chat-input:hover {
    background-color: initial; /* remove the hover effect on the background color */
    border-color: initial; /* remove the hover effect on the border color */
    border: none; /* remove the hover effect on the border color */
}

.chat-submit-button {
    padding: 10px 20px;
    color: #f5ab1e;
    border: none;
    border-radius: 5px;
    background-color: transparent; /* this line will remove the background color of the button */

    position: absolute; /* add position absolute */
    top: 17px;
    right: 5px;
}



.user-img {
    width: 50px; /* width of the image */
    height: 50px; /* height of the image */
    border-radius: 50%; /* round the edges of the image */
    margin-right: 10px; /* add a margin to the right of the image */
}

#chat-box.open{
    display: block;
}

</style>
