const CACHE_NAME = 'stage-finder-v1';
const CACHE_URLS = [
    '/'
    // '/index.php',
    // '/index.css',
    // '/main.js',
    // '/manifest.json',
    // '/icon-512.png',
];

self.addEventListener('install', (event) => {
    event.waitUntil(
        caches.open(CACHE_NAME).then((cache) => {
            return cache.addAll(CACHE_URLS);
        })
    );
});

self.addEventListener('fetch', (event) => {
    event.respondWith(
        caches.match(event.request).then((cachedResponse) => {
            return cachedResponse || fetch(event.request);
        })
    );
});

self.addEventListener('activate', (event) => {
    event.waitUntil(
        caches.keys()
            .then((cacheNames) => {
                return Promise.all(
                    cacheNames.filter((cacheName) => {
                        return cacheName !== CACHE_NAME;
                    }).map((cacheName) => {
                        console.log('Suppression du cache:', cacheName);
                        return caches.delete(cacheName);
                    })
                );
            })
    );
});