<ul class="socials">
  <?php
    $bookmarks = get_bookmarks( array(
      'orderby'        => 'name',
      'order'          => 'ASC',
    ));

    // Loop through each bookmark and print formatted output
    foreach ( $bookmarks as $bookmark ) {
        printf( '<li><a class="icon-social" href="%s" target="_blank"></a></li>', $bookmark->link_url );
    }
  ?>
</ul>
