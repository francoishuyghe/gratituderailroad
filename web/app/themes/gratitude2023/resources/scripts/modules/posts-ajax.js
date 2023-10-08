class PostLoader {
  constructor(container, postNum) {
    this.container = container
    this.postNum = postNum
    this.currentPage = 0;
    this.category = '';
    this.loading = true;

    this.LOAD_POSTS = this.LOAD_POSTS.bind(this);
  }

  LOADING_TOGGLE(){
    this.container.toggleClass('loading')
    this.loading = !this.loading;
  }

  REFRESH_POSTS(time){
    this.currentPage = 0;
    let row = $('.row', this.container);
    setTimeout(() => {
      row.html('');
    }, time)
  }

  LOAD_POSTS() {
    this.currentPage++; // Do currentPage + 1, because we want to load the next page

    if(!this.loading && this.currentPage == 1) this.LOADING_TOGGLE()
  
    $.ajax({
      type: 'POST',
      context: this,
      url: ajax_object.ajax_url,
      data: {
        action: 'posts_load_more',
        paged: this.currentPage,
        cats: this.category,
        postNum: this.postNum,
        nonce: ajax_object.ajax_nonce,
      },
      success: function (res) {
        if( this.currentPage == 1) this.LOADING_TOGGLE()
        if(res.data){
          //Check if there could be more posts
          if(res.data.length < this.postNum){ 
            this.container.addClass('no-more') } 
          else {
            this.container.removeClass('no-more')
          }

          //Append the new posts
          $('#postsContainer').append(res.data); 
        } else {
          this.container.addClass('no-more')
          $('#postsContainer').append('<div class="no-posts">No post satisfies these conditions.</div>');
        }
      },
      error: (e) => {
        this.container.addClass('no-more')
        console.log(e.responseText);
      }
    });
  }

  UPDATE_CATEGORY(newCategory) {
    this.LOADING_TOGGLE()

    if(this.category == newCategory){
      this.category = ''
    } else {
      this.category = newCategory;
    }

    this.REFRESH_POSTS(400);
    setTimeout(() => {this.LOAD_POSTS()}, 400)
  }

  
}

let blogPage = new PostLoader($('#allPosts'), 9);

// Initial Loading
blogPage.LOAD_POSTS()

//Load More Posts
$('#loadMore').on('click', blogPage.LOAD_POSTS);

// Update Categories
$('.filter-toggle').on('click', (e) => {
  if($(e.target).hasClass('active')){
    $(e.target).removeClass('active');
  } else {
    $('.filter-toggle.active').removeClass('active')
    $(e.target).addClass('active');
  }
  let cat = $(e.target).data('cat');
  blogPage.UPDATE_CATEGORY(cat);
});