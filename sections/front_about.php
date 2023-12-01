<?php

$directory_uri = get_template_directory_uri();

?>

<section>
  <div class="bg-white">
    <div class="px-4">
      <div class="mx-auto max-w-2xl">
        <div class="py-24">
          <div class="flex items-center justify-center pb-12">
            <h2 class="text-center">About</h2>
          </div>
          <div class="flex items-center justify-center">
            <p class="break-keep text-center">
              Webサイトを制作している<wbr />神田 勇輝と申します。<br />
              細かい作業が得意なので、<wbr />それを活かして仕事を行っています。<br />
            </p>
          </div>
          <div class="mt-12 flex flex-col items-center justify-center gap-8 md:flex-row">
            <div class="flex w-full items-center justify-center md:w-1/2">
              <div class="w-60">
                <img src="<?= $directory_uri ?>/static/images/logo_kand4y.png" alt="" width="1080" height="1080" />
              </div>
            </div>
            <div class="flex w-full flex-col items-center md:w-1/2 md:items-start">
              <h3>神田 勇輝</h3>
              <p>Web制作歴2年以上</p>
              <br />
              <p class="font-bold">スキル一覧</p>
              <p class="text-center md:text-left">
                HTML / CSS / Sass / Tailwind CSS / JavaScript /<br class="md:hidden" />
                PHP / WordPress / TypeScript
              </p>
              <br />
              <p class="font-bold">SNS</p>
              <ul class="list-disc pl-4">
                <li class="py-1">
                  <a href="https://twitter.com/kand4y" target="_blank" rel="noopener noreferrer" class="border-b-2 border-b-red-500">
                    Twitter
                  </a>
                </li>
                <li class="py-1">
                  <a href="https://www.instagram.com/kand4y/" target="_blank" rel="noopener noreferrer" class="border-b-2 border-b-red-500">
                    Instagram
                  </a>
                </li>
                <li class="py-1">
                  <a href="https://github.com/kand4y" target="_blank" rel="noopener noreferrer" class="border-b-2 border-b-red-500">
                    GitHub
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>