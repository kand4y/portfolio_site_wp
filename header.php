<?php

$directory_uri = get_template_directory_uri();

?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script>
    !(function() {
      const viewport = document.querySelector('meta[name="viewport"]');

      function switchViewport() {
        const value =
          window.outerWidth > 360 ?
          "width=device-width,initial-scale=1" :
          "width=360";
        if (viewport.getAttribute("content") !== value) {
          viewport.setAttribute("content", value);
        }
      }
      addEventListener("resize", switchViewport, false);
      switchViewport();
    })();
  </script>
  <?php wp_head() ?>

  <script type="module" crossorigin src="<?= $directory_uri ?>/assets/index-8YyaKEi5.js"></script>
</head>

<body class="bg-white">
  <div class="wrapper">
    <?php get_template_part('includes/header-part') ?>
    <main>