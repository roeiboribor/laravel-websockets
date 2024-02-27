import './bootstrap';

const channel = Echo.channel('public.playground.1');
const chatChannel = Echo.channel('public.chat.1');

const form = document.getElementById('form');
const inputMessage = document.getElementById('message');

form.addEventListener('submit', (e) => {
    e.preventDefault();
    const userInput = inputMessage.value;
    Axios.post('/chat-message', {
        message: userInput
    });
});


channel.subscribed(() => {
    console.log('subscribbed');
})
    // add . before custom event name or else it will use the default event name
    .listen('.custom-playground', (e) => {
        console.log(e);
    });

chatChannel.subscribed(() => {
    console.log('subscribbed');
})
    .listen('.chat-message', (e) => {
        console.log(e);
    });