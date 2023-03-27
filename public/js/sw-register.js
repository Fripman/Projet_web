if ('serviceWorker' in navigator) {
    navigator.serviceWorker
        .register('/public/js/sw.js')
        .then(() => console.log('Service Worker enregistré avec succès.'))
        .catch((error) => console.log('Erreur lors de l\'enregistrement du Service Worker:', error));
};