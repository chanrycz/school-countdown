self.addEventListener('install',function(event) {
	event.waitUntil(
		caches.open('sw-cache').then(function(cache) {
			return cache.addAll(['communist.html','dark.html','default.html','french.html','light.html','rainbow.html','js/audio.js','js/utils.js','js/start.js','js/start_fr.js','css/fireworks.css','css/layout.css','img/loop_1.png','img/loop_all.png','img/next.png','img/pause.png','img/play.png','img/previous.png','img/shuffle-off.png','img/shuffle-on.png','img/volume-down.png','img/volume-up.png']);
		})
	);
});

self.addEventListener('fetch',function(event) {
    event.respondWith(
        caches.match(event.request).then(function(response) {
            return response || fetch(event.request);
        })
    );
});