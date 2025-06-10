<?php
  require_once "header.php";
?>

      <!-- FICHA - START -->
      <div
        class="w-full h-full flex flex-col items-center bg-gradient-to-bl from-primary to-[#261c31]"
      >
        <section
          id="sobre"
          class="h-fit w-full max-w-[1200px] flex flex-col items-center justify-center text-center gap-4 mt-20 mb-20 px-4"
        >
          <h2 class="text-center -mt-10 mb-3">Confira os dados:</h2>

          <!-- cards -->
          <div class="flex md:flex-row flex-col gap-4 w-full">
            <div
              class="flex flex-col items-center justify-center gap-2 rounded-xl p-6 bg-secondary text-text w-full"
            >
              <!-- CNPJ -->
              <span class="text-sm uppercase text-accent font-bold">cnpj</span>
              <h1 class="mt-3 cnpj"></h1>
            </div>

            <div
              class="flex flex-col items-center justify-center gap-2 rounded-xl p-6 bg-secondary text-text w-full"
            >
              <!-- RAZAO -->
              <span class="text-sm uppercase text-accent font-bold"
                >razão social</span
              >
              <h1 class="mt-3 razao"></h1>
            </div>
          </div>

          <!-- CARD INFORMACOES -->
          <div class="flex flex-row gap-4 w-full">
            <div
              class="flex flex-col gap-2 rounded-xl p-6 bg-secondary text-text w-full"
            >
              <span class="text-sm uppercase text-accent font-bold"
                >informações</span
              >
              <ul class="flex flex-col gap-4">
                <!-- situacao cadastral -->
                <li
                  class="flex flex-row border-b-[1px] border-primary p-5 gap-2"
                >
                  <p class="font-bold">Situação Cadastral:</p>
                  <p class="situacao_cadastral"></p>
                </li>
                <!-- porte -->
                <li
                  class="flex flex-row border-b-[1px] border-primary p-5 gap-2"
                >
                  <p class="font-bold">Porte:</p>
                  <p class="porte"></p>
                </li>
                <!-- natureza juridica -->
                <li
                  class="flex flex-row border-b-[1px] border-primary p-5 gap-2"
                >
                  <p class="font-bold">Natureza Jurídica:</p>
                  <p class="natureza_juridica"></p>
                </li>
                <!-- tipo -->
                <li
                  class="flex flex-row border-b-[1px] border-primary p-5 gap-2"
                >
                  <p class="font-bold">Tipo:</p>
                  <p class="tipo"></p>
                </li>
              </ul>
            </div>
          </div>
        </section>
          <script type="text/javascript" src="../js/cnpj.js" defer></script>
      </div>
      <!-- FICHA - END -->

<?php
require_once "footer.php";
?>