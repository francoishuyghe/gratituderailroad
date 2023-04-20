<footer class="content-info">
  <div class="primary">
    <div class="row">
      @php(dynamic_sidebar('sidebar-footer'))
    </div>
  </div>
  <div class="secondary">
    <div class="copyright">
      {{ the_time('Y') }} {!! $siteName !!}. All rights reserved.
    </div>
    <div class="menu">
      @php(dynamic_sidebar('sidebar-secondary-footer'))
    </div>
  </div>

</footer>
