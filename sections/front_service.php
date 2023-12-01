<?php

$directory_uri = get_template_directory_uri();

?>

<section>
  <div class="bg-gray">
    <div class="px-4">
      <div class="mx-auto max-w-4xl">
        <div class="py-24">
          <div class="flex items-center justify-center pb-12">
            <h2 class="text-center text-white">Service</h2>
          </div>

          <div class="flex flex-col gap-12">
            <div class="flex w-full flex-col justify-center gap-8 md:flex-row">
              <div class="w-full md:w-3/5">
                <h3 class="text-white">コーディング</h3>
                <p class="mt-1 text-white md:break-keep">
                  HTML, CSS,
                  JavaScriptを使ってデザインのコーディングを<wbr />行っております。<br />
                  またお客様によってSassを使ったりTailwind CSS<wbr />などを使ったコーディングも行っております。
                </p>
              </div>
              <div class="aspect-video w-full overflow-hidden md:w-2/5">
                <img src="<?= $directory_uri ?>/static/images/service_coding2.png" alt="" width="1200" height="1200" class="h-full w-full object-cover" />
              </div>
            </div>
            <div class="flex w-full flex-col justify-center gap-8 md:flex-row-reverse">
              <div class="w-full md:w-3/5">
                <h3 class="text-white">WordPress構築, 運用</h3>
                <p class="mt-1 text-white md:break-keep">
                  静的コーディングされたサイトのWordPress化も行っております。<br />
                  また、プラグインを使ったカスタマイズやPHPとJavaSriptを使って<wbr />独自にWebサイトをカスタマイズすることも可能です。<br />
                </p>
              </div>
              <div class="aspect-video w-full overflow-hidden md:w-2/5">
                <img src="<?= $directory_uri ?>/static/images/service_wordpress.png" alt="" width="1200" height="1200" class="h-full w-full object-cover" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>