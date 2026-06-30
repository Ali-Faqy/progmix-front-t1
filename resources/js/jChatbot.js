import $ from "jquery";
window.$ = window.jQuery = $;

document.addEventListener("DOMContentLoaded", () => {
    const defaultMessage = {
        sender: "bot",
        text: "Hey there 🙌<br>How can I help you today?",
    };

    if (!localStorage.getItem("messages")) {
        localStorage.setItem("messages", JSON.stringify([defaultMessage]));
    }

    let messages = JSON.parse(localStorage.getItem("messages")) || [];

    function saveMessages() {
        localStorage.setItem("messages", JSON.stringify(messages));
    }

    function renderMessages() {
        $(".chat-body").html("");

        messages.forEach((message) => {
            if (message.sender === "bot") {
                $(".chat-body").append(`
                    <div class="message bot-message">
                        <a href="#" class="chat-body-logo">
                            <i class="fa-solid fa-robot" style="color:white;"></i>
                        </a>
                        <div class="chat-message-text">
                            ${message.text}
                        </div>
                    </div>
                `);
            } else {
                $(".chat-body").append(`
                    <div class="message user-message">
                        <div class="chat-message-text">
                            ${message.text}
                        </div>
                    </div>
                `);
            }
        });

        $(".chat-body").scrollTop($(".chat-body")[0].scrollHeight);
    }

    function addMessage(sender, text) {
        messages.push({ sender, text });
        saveMessages();
        renderMessages();
    }

    function toggleButtons() {
        const inputVal = $(".message-input").text() || "";
        const disabled = inputVal.trim() === "";
        $(".bot-btn").prop("disabled", disabled);
        $(".user-btn").prop("disabled", disabled);
    }

    renderMessages();
    // toggleButtons();

    // $(".message-input").on("input", toggleButtons);

    $(".bot-btn").on("click", function (e) {
        e.preventDefault();

        const message = $(".message-input").val();
        if (!message) return;

        addMessage("bot", message);

        $(".message-input").val("");
        // toggleButtons();
    });

    $(".user-btn").on("click", function (e) {
        e.preventDefault();
        console.log('hello user');
        const message = $(".message-input").val();
        if (!message) return;

        addMessage("user", message);

        $(".message-input").val("");
        // toggleButtons();
    });

    $(".chat-closeBtn").on("click", function () {
        $(".chat-body").toggleClass("hidden");
        $(".chat-footer").toggleClass("hidden");
        $(".chat-closeBtn i").toggleClass("fa-angle-up fa-angle-down");
    });
});
