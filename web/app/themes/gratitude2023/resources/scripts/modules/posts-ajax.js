
let currentPage = 1;

$('#loadMore').on('click', function() {
  currentPage++; // Do currentPage + 1, because we want to load the next page

  $.ajax({
    type: 'POST',
    url: ajax_object.ajax_url,
    data: {
      action: 'posts_load_more',
      paged: currentPage,
      nonce: ajax_object.ajax_nonce,
    },
    success: function (res) {
      $('#allPosts .row').append(res.data);
    },
    error: (e) => {
      console.log(e.responseText);
    }
  });
});