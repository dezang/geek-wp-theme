<?php get_header(); ?>
<div class="container">
  <div class="row geek-multi-post">
    <main id="main">
      <section id="content">
        <?php if(have_posts()): ?>
         <script>
  (function() {
    var cx = 'partner-pub-6873538204401419:4278993081';
    var gcse = document.createElement('script');
    gcse.type = 'text/javascript';
    gcse.async = true;
    gcse.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') +
        '//www.google.com/cse/cse.js?cx=' + cx;
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(gcse, s);
  })();
</script>
<gcse:searchresults-only></gcse:searchresults-only>
        <?php else: ?>
        <h2>미안해요, 글이 없네요</h2>
      <?php endif; ?>
      <!-- paging -->
      <nav id="paging">
        <?php
        global $wp_query;
        $big = 999999999;
        echo paginate_links( array(
          'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
          'format' => '?paged=%#%',
          'current' => max( 1, get_query_var('paged') ),
          'total' => $wp_query->max_num_pages,
          ) );
          ?>
        </nav>
      </section>
    </main>
  </div>
</div>
<?php get_footer(); ?>