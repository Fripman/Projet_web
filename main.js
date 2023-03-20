if ('serviceWorker' in navigator) {
    navigator.serviceWorker
      .register('/service-worker.js')
      .then(() => console.log('Service Worker enregistré avec succès.'))
      .catch((error) => console.log('Erreur lors de l\'enregistrement du Service Worker:', error));
  }
  