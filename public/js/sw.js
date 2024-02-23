// Use a cacheName for cache versioning
var cacheName = 'SSA:static';

// During the installation phase, you'll usually want to cache static assets.
self.addEventListener('install', function(e) {
    // Once the service worker is installed, go ahead and fetch the resources to make this work offline.
    e.waitUntil(
        caches.open(cacheName).then(function(cache) {
            return cache.addAll([
                '../',
                '../css/jquery-ui/jquery-ui.min.css',
                '../css/default.min.css',
                '../css-client/default.min.css',
                '../js/jquery/jquery.min.js',
                '../js/jquery-ui/jquery-ui.min.js',
                '../js/default.min.js',
                '../js/controller/frontend/index.min.js',
                '../js/controller/frontend/hammer.min.js',
                '../js/jquery-ui/i18n/en-GB.js',
                '../imgs/icons/wait.gif',
                '../imgs/icons/topbar-phone.png',
                '../imgs/icons/plus-link.png',
                '../imgs/icons/calendar.png',
                '../imgs/icons/user.png',
                '../imgs/icons/off.png',
                '../imgs/icons/plus.png',
                '../imgs/icons/warning.png',
                '../imgs/icons/tag.png',
                '../imgs/icons/attachment.png',
                '../imgs-client/icons/fav.ico',
                '../imgs-client/layout/logo.png'
            ]).then(function() {
                self.skipWaiting();
            });
        })
    );
});

// when the browser fetches a URL…
self.addEventListener('fetch', function(event) {
    // … either respond with the cached object or go ahead and fetch the actual URL
    event.respondWith(
        caches.match(event.request).then(function(response) {
            if (response) {
                // retrieve from cache
                return response;
            }
            // fetch as normal
            return fetch(event.request);
        })
    );
});