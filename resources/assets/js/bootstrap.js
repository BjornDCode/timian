
window._ = require('lodash');

try {
    window.$ = window.jQuery = require('jquery');

    require('bootstrap-sass');
} catch (e) {}

window.axios = require('axios');

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

window.Timian = {
    token: document.head.querySelector('meta[name="csrf-token"]').content,
    stripeKey: document.head.querySelector('meta[name="stripe-key"]').content
}

window.axios.defaults.headers.common['X-CSRF-TOKEN'] = Timian.token;

/**
 * Echo exposes an expressive API for subscribing to channels and listening
 * for events that are broadcast by Laravel. Echo and event broadcasting
 * allows your team to easily build robust real-time web applications.
 */

// import Echo from 'laravel-echo'

// window.Pusher = require('pusher-js');

// window.Echo = new Echo({
//     broadcaster: 'pusher',
//     key: 'your-pusher-key'
// });
