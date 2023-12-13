const body = document.querySelector("body"),
    modeToggle = body.querySelector(".mode-toggle");
    sidebar = body.querySelector("nav");
    sidebarToggle = body.querySelector(".sidebar-toggle");

// MESSAGES
const messagesNotification = document.querySelector('#messages-notification');
const messages = document.querySelector('.messages');
const message = messages.querySelectorAll('.message');
const messageSearch = document.querySelector('#message-search');


// =================== MESSAGES =====================
// search chats
const searchMessage = () => {
    const val = messageSearch.value.toLowerCase();
    message.forEach(chat => {
        let name = chat.querySelector('e').textContent.toLowerCase();
        if(name.indexOf(val) != -1){
            chat.style.display = 'contents';
        } else {
            chat.style.display = 'none';
        }
    })
}


// search chat
messageSearch.addEventListener('keyup', searchMessage);

// hightlight messages card when messages menu item is clicked
messagesNotification.addEventListener('click', () => {
    
    messagesNotification.querySelector('.notification-count').style.display = 'none';
    
})







let getMode = localStorage.getItem("mode");
if(getMode && getMode ==="dark"){
    body.classList.toggle("dark");
}

let getStatus = localStorage.getItem("status");
if(getStatus && getStatus ==="close"){
    sidebar.classList.toggle("close");
}

modeToggle.addEventListener("click" , () => {
    body.classList.toggle("dark");
    if(body.classList.contains("dark")){
        localStorage.setItem("mode" , "dark");
    }else {
        localStorage.setItem("mode" , "light");
    }
});

sidebarToggle.addEventListener("click" , () => {
    sidebar.classList.toggle("close");
    if(body.classList.contains("close")){
        localStorage.setItem("status" , "close");
    }else {
        localStorage.setItem("status" , "open");
    }
}); 



