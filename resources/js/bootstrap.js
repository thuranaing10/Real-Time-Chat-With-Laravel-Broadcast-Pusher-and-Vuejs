window._ = require('lodash');

/**
 * We'll load jQuery and the Bootstrap jQuery plugin which provides support
 * for JavaScript based Bootstrap features such as modals and tabs. This
 * code may be modified to fit the specific needs of your application.
 */

try {
    window.Popper = require('popper.js').default;
    window.$ = window.jQuery = require('jquery');

    require('bootstrap');
} catch (e) {}

/**
 * We'll load the axios HTTP library which allows us to easily issue requests
 * to our Laravel back-end. This library automatically handles sending the
 * CSRF token as a header based on the value of the "XSRF" token cookie.
 */

//window.axios = require('axios');
window.axios = require('axios').default;

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

/**
 * Echo exposes an expressive API for subscribing to channels and listening
 * for events that are broadcast by Laravel. Echo and event broadcasting
 * allows your team to easily build robust real-time web applications.
 */

import Echo from 'laravel-echo';

window.Pusher = require('pusher-js');

window.Echo = new Echo({
    broadcaster: 'pusher',
    key: '004da04cfb373dc7fd90',
    cluster: 'ap1',
    forceTLS: true,
    //encrypted: true

});


// var Pusher = require("pusher");

// var pusher = new Pusher({
//   appId: "1364761",
//   key: "1f0a91d0e65d0a756335",
//   secret: "0d1a3f314b0aae23cfd9",
//   cluster: "ap1",
// });

// pusher.trigger("chat", "ChatEvent", { message: "hello world" });


