// self.addEventListener("install", (event) => {
//   event.waitUntil(
//     caches
//       .open("v1")
//       .then((cache) =>
//         cache.addAll([
          // "/",
          // "./home.php",
          // "/style.css",
          // "./assets/front/libs/font-awesome/css/fontawesome-all.min.css",
          // "./assets/front/libs/jarallax/dist/jarallax.css",
          // "./assets/front/libs/owl-carousel/dist/css/owl.carousel.min.css",
          // "./assets/front/libs/owl-carousel/dist/css/owl.theme.default.min.css",
          // "./assets/front/css/simple-line-icons.css",
          // "./assets/admin/css/sweet-alert.css",
          // "./assets/admin/css/select2.css",
          // "./assets/font/flaticon.css",
          // "./assets/admin/css/toast.css",
          // "./assets/admin/css/timepicki.css",
          // "./assets/front/css/template.min.css",
          // "./docs/manifest.json",
          // "./assets/front/css/aos.css",
          // "./assets/admin/css/bootstrap-rtl.min.css",
          // "/app.js",
          // "./assets/front/libs/jquery/dist/jquery.min.js",
          // "./assets/front/libs/jquery/dist/jquery-migrate.min.js",
          // "./assets/front/libs/popper.js/dist/umd/popper.min.js",
          // "./assets/front/libs/bootstrap/dist/js/bootstrap.min.js",
          // "./assets/front/libs/svg-injector/dist/svg-injector.min.js",
          // "./assets/front/libs/jarallax/dist/jarallax.min.js",
          // "./assets/front/libs/svg-injector/dist/svg-injector.min.js",
          // "./assets/front/libs/owl-carousel/dist/js/owl.carousel.min.js",
          // "./assets/front/js/template.min.js",
          // "./docs/sw.js",
          // "./assets/front/js/custom.js",
          // "./assets/admin/js/toast.js",
          // "./assets/admin/js/sweet-alert.min.js",
          // "./assets/admin/js/validation.js",
          // "./assets/admin/js/select2.min.js",
          // "./assets/front/js/aos.js",
          // "./assets/admin/js/timepicki.js",
          // "/image-list.js",
          // "/star-wars-logo.jpg",
          // "/gallery/bountyHunters.jpg",
          // "/gallery/myLittleVader.jpg",
          // "/gallery/snowTroopers.jpg",
//         ]),
//       ),
//   );
// });

// self.addEventListener("fetch", (event) => {
//   event.respondWith(
//     caches.match(event.request).then((response) => {
//       // caches.match() always resolves
//       // but in case of success response will have value
//       if (response !== undefined) {
//         return "response";
//       } else {
//         return fetch(event.request)
//           .then((response) => {
//             // response may be used only once
//             // we need to save clone to put one copy in cache
//             // and serve second one
//             let responseClone = response.clone();

//             caches.open("v1").then((cache) => {
//               cache.put(event.request, responseClone);
//             });
//             return response;
//           })
//           .catch(() => caches.match("/gallery/myLittleVader.jpg"));
//       }
//     }),
//   );
// });


const CACHE_NAME = 'v2'; // Change this whenever you update your assets

self.addEventListener('install', event => {
  event.waitUntil(
    caches.open(CACHE_NAME).then(cache => {
      return cache.addAll([
        
        "./home.php",
        "/style.css",
        "./assets/front/libs/font-awesome/css/fontawesome-all.min.css",
        "./assets/front/libs/jarallax/dist/jarallax.css",
        "./assets/front/libs/owl-carousel/dist/css/owl.carousel.min.css",
        "./assets/front/libs/owl-carousel/dist/css/owl.theme.default.min.css",
        "./assets/front/css/simple-line-icons.css",
        "./assets/admin/css/sweet-alert.css",
        "./assets/admin/css/select2.css",
        "./assets/font/flaticon.css",
        "./assets/admin/css/toast.css",
        "./assets/admin/css/timepicki.css",
        "./assets/front/css/template.min.css",
        "./docs/manifest.json",
        "./assets/front/css/aos.css",
        "./assets/admin/css/bootstrap-rtl.min.css",
        "/app.js",
        "./assets/front/libs/jquery/dist/jquery.min.js",
        "./assets/front/libs/jquery/dist/jquery-migrate.min.js",
        "./assets/front/libs/popper.js/dist/umd/popper.min.js",
        "./assets/front/libs/bootstrap/dist/js/bootstrap.min.js",
        "./assets/front/libs/svg-injector/dist/svg-injector.min.js",
        "./assets/front/libs/jarallax/dist/jarallax.min.js",
        "./assets/front/libs/svg-injector/dist/svg-injector.min.js",
        "./assets/front/libs/owl-carousel/dist/js/owl.carousel.min.js",
        "./assets/front/js/template.min.js",
        "./docs/sw.js",
        "./assets/front/js/custom.js",
        "./assets/admin/js/toast.js",
        "./assets/admin/js/sweet-alert.min.js",
        "./assets/admin/js/validation.js",
        "./assets/admin/js/select2.min.js",
        "./assets/front/js/aos.js",
        "./assets/admin/js/timepicki.js",
        "/image-list.js",
        "/star-wars-logo.jpg",
        "/gallery/bountyHunters.jpg",
        "/gallery/myLittleVader.jpg",
        "/gallery/snowTroopers.jpg",
      ]);
    })
  );
});

// Rest of your service worker code...
self.addEventListener('fetch', event => {
  event.respondWith(
    caches.match(event.request).then(response => {
      return response || fetch(event.request).then(fetchResponse => {
        return caches.open(CACHE_NAME).then(cache => {
          cache.put(event.request, fetchResponse.clone());
          return fetchResponse;
        });
      });
    }).catch(() => {
      return caches.match('/gallery/myLittleVader.jpg');
    })
  );
});
