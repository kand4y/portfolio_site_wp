<?php

$directory_uri = get_template_directory_uri();

?>

<section>
  <div class="flex h-[80vh] items-center justify-center bg-cover bg-center bg-no-repeat" style="background-image: url(<?= $directory_uri ?>/static/images/kv_bg_1280.png)">
    <div class="relative isolate px-6 pt-14 lg:px-8">
      <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80" aria-hidden="true">
        <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#9F0000] to-[#ffffff] opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]" style="
                    clip-path: polygon(
                      74.1% 44.1%,
                      100% 61.6%,
                      97.5% 26.9%,
                      85.5% 0.1%,
                      80.7% 2%,
                      72.5% 32.5%,
                      60.2% 62.4%,
                      52.4% 68.1%,
                      47.5% 58.3%,
                      45.2% 34.5%,
                      27.5% 76.7%,
                      0.1% 64.9%,
                      17.9% 100%,
                      27.6% 76.8%,
                      76.1% 97.7%,
                      74.1% 44.1%
                    );
                  "></div>
      </div>
      <div class="mx-auto max-w-2xl py-24 sm:py-48 lg:py-56">
        <div class="text-center">
          <h1 class="text-5xl font-bold tracking-tight text-white sm:text-6xl">
            Kanda Yuki<br />
            Portfolio
          </h1>
          <p class="mt-8 break-keep text-lg leading-8 text-white">
            Web制作者 神田勇輝の<wbr />ポートフォリオサイトです。
          </p>
          <div class="mt-10 flex items-center justify-center gap-x-6">
            <a href="#contact" class="border-b-2 border-b-red-500 text-sm font-bold leading-6 text-white">お問い合わせはこちら <span aria-hidden="true">→</span></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>