if ('serviceWorker' in navigator) {
    navigator.serviceWorker.getRegistrations().then(
        function(registrations) {
            for(let registration of registrations) {
                registration.unregister();
            }
        });
}

/*
if ('serviceWorker' in navigator) {
    window.addEventListener('load', function() {
        navigator.serviceWorker.register('/sw.js').then(function(registration) {
            // Success
            console.log('ServiceWorker registration successful with scope: ', registration.scope);
        }, function(err) {
            // Fail
            console.log('ServiceWorker registration failed: ', err);
        });
    });
}
*/