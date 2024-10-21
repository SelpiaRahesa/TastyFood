// var page = 1;

// // Infinite Scroll
// $(window).scroll(function() {
//     if ($(window).scrollTop() + $(window).height() >= $(document).height() - 100) {
//         page++;
//         loadMoreNews(page);
//     }
// });

// function loadMoreNews(page) {
//     $.ajax({
//         url: '/fetch-berita?page=' + page,
//         type: 'get',
//         beforeSend: function() {
//             $('.loading').show();  // Tampilkan loader
//         }
//     })
//     .done(function(data) {
//         if (data == "") {
//             $('.loading').html("Tidak ada berita lagi."); // Tidak ada data lagi
//             return;
//         }
//         $('.loading').hide();  // Sembunyikan loader
//         $('#news-container').append(data); // Append berita ke container
//     })
//     .fail(function() {
//         alert('Gagal memuat berita.');
//     });
// }
