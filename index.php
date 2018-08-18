<?php include_once("home.html"); ?>
<?php

// In app/app.php, in place of the block starting with "$app->get('/',", put the following:
$app->get('/', function ($request, $response, $args) use ($app, $prismic) {
  // Query the API
  $api = $prismic->get_api();
  $document = $api->getByUID('page', 'quickstart');

  // Render the page
  render($app, 'home', array('document' => $document));
});
    ?>
