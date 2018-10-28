<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
        <?php wp_head(); ?>
    </head>
    <body>
      <h3>This is coming from header-front.php</h3>
      <p>This will only be used on the front page</p>
      <?php wp_nav_menu( array
      ( 'theme_location' => 'header-menu',
        'menu_class' => 'menu'
      ) ); ?>
