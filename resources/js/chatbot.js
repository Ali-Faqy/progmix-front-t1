document.addEventListener("DOMContentLoaded", () => {
    const closeBtn = document.querySelector(".chat-closeBtn");
    const icon = closeBtn.querySelector("i");
    const chatBody = document.querySelector(".chat-body");
    const chatFooter = document.querySelector(".chat-footer");
    const inputMessage = document.querySelector(".message-input");
    const botBtn = document.querySelector(".bot-btn");
    const userBtn = document.querySelector(".user-btn");

    const defaultMessage = {
        sender: "bot",
        text: "Hey there 🙌<br>How can I help you today?",
    };

    if (!localStorage.getItem("messages")) {
        localStorage.setItem("messages", JSON.stringify([defaultMessage]));
    }
    const messages = JSON.parse(localStorage.getItem("messages"));

    function saveMessages() {
        localStorage.setItem("messages", JSON.stringify(messages));
    }

    function renderMessages() {
        chatBody.innerHTML = "";

        messages.forEach((message) => {
            if (message.sender === "bot") {
                chatBody.insertAdjacentHTML(
                    "beforeend",
                    `
                    <div class="message bot-message">
                        <a href="#" class="chat-body-logo">
                            <i class="fa-solid fa-robot" style="color:white;"></i>
                        </a>
                        <div class="chat-message-text">
                            ${message.text}
                        </div>
                    </div>
                    `,
                );
            } else {
                chatBody.insertAdjacentHTML(
                    "beforeend",
                    `
                    <div class="message user-message">
                        <div class="chat-message-text">
                            ${message.text}
                        </div>
                    </div>
                    `,
                );
            }
        });
        chatBody.scrollTop = chatBody.scrollHeight;
    }

    function addMessage(sender, text) {
        messages.push({
            sender,
            text,
        });

        saveMessages();
        renderMessages();
    }

    function toggleButtons() {
        const disabled = inputMessage.value.trim() === "";
        botBtn.disabled = disabled;
        userBtn.disabled = disabled;
    }

    saveMessages();
    renderMessages();
    toggleButtons();

    inputMessage.addEventListener("input", toggleButtons);

    botBtn.addEventListener("click", function (e) {
        e.preventDefault();

        const message = inputMessage.value.trim();

        if (!message) return;

        addMessage("bot", message);

        inputMessage.value = "";
        toggleButtons();
    });

    userBtn.addEventListener("click", function (e) {
        e.preventDefault();

        const message = inputMessage.value.trim();

        if (!message) return;

        addMessage("user", message);

        inputMessage.value = "";
        toggleButtons();
    });

    closeBtn.addEventListener("click", function () {
        chatBody.classList.toggle("hidden");
        chatFooter.classList.toggle("hidden");
        icon.classList.toggle("fa-angle-up");
    });
});
