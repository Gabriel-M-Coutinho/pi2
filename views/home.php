<?php
  require_once "header.php";
?>

      <!-- HERO - START -->
      <section
        id="hero"
        class="flex flex-col justify-center items-center min-h-[750px] w-full -mt-20 gap-8"
      >
        <!-- logo-->
        <div class="flex flex-row justify-center items-center gap-2">
          <div class="w-16 md:w-24">
            <svg
              width="auto"
              height="auto"
              viewBox="0 0 110 90"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M101.75 33.8H81.3416C83.5227 38.9782 82.5653 45.21 78.4197 49.431L55 73.2765V81.4C55 86.0392 58.6936 89.8 63.25 89.8H101.75C106.306 89.8 110 86.0392 110 81.4V42.2C110 37.5607 106.306 33.8 101.75 33.8ZM82.5 66C80.2227 66 78.375 64.1187 78.375 61.8C78.375 59.4795 80.2227 57.6 82.5 57.6C84.7773 57.6 86.625 59.4795 86.625 61.8C86.625 64.1187 84.7773 66 82.5 66ZM74.5302 33.3275L44.4641 2.7147C41.1709 -0.638299 35.8308 -0.638299 32.5377 2.7147L2.46984 33.3275C-0.823281 36.6805 -0.823281 42.1177 2.46984 45.4707L32.5359 76.0852C35.8291 79.4382 41.1692 79.4382 44.4623 76.0852L74.5302 45.4725C77.8233 42.1177 77.8233 36.6805 74.5302 33.3275ZM16.5 43.6C14.2227 43.6 12.375 41.7187 12.375 39.4C12.375 37.0795 14.2227 35.2 16.5 35.2C18.7773 35.2 20.625 37.0795 20.625 39.4C20.625 41.7187 18.7773 43.6 16.5 43.6ZM38.5 66C36.2227 66 34.375 64.1187 34.375 61.8C34.375 59.4795 36.2227 57.6 38.5 57.6C40.7773 57.6 42.625 59.4795 42.625 61.8C42.625 64.1187 40.7773 66 38.5 66ZM38.5 43.6C36.2227 43.6 34.375 41.7187 34.375 39.4C34.375 37.0795 36.2227 35.2 38.5 35.2C40.7773 35.2 42.625 37.0795 42.625 39.4C42.625 41.7187 40.7773 43.6 38.5 43.6ZM38.5 21.2C36.2227 21.2 34.375 19.3187 34.375 17C34.375 14.6795 36.2227 12.8 38.5 12.8C40.7773 12.8 42.625 14.6795 42.625 17C42.625 19.3187 40.7773 21.2 38.5 21.2ZM60.5 43.6C58.2227 43.6 56.375 41.7187 56.375 39.4C56.375 37.0795 58.2227 35.2 60.5 35.2C62.7773 35.2 64.625 37.0795 64.625 39.4C64.625 41.7187 62.7773 43.6 60.5 43.6Z"
                fill="currentColor"
              />
            </svg>
          </div>
          <h3 id="logo-texto" class="mt-6">LeadSearch</h3>
        </div>

        <h1 class="text-center -mt-10 mb-3">
          Potencialize suas vendas com leads qualificados
        </h1>

        <form id="form-pesquisa" class="max-w-[70%] w-full">
          <label
            for="default-search"
            name="sr-only-pesquisa"
            id="pesquisa"
            class="mb-2 text-sm font-medium sr-only"
            >Search</label
          >
          <div class="relative">
            <div
              class="absolute inset-y-0 start-0 flex items-center ps-4 pointer-events-none"
            >
              <svg
                class="w-4 h-4 -mt-2"
                aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 20 20"
              >
                <path
                  stroke="currentColor"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"
                />
              </svg>
            </div>
            <input
              type="search"
              id="area-pesquisa"
              class="block w-full p-4 ps-12 text-sm rounded-lg h-12"
              placeholder="Procurar pelo CNPJ..."
              requireds
            />
            <button
              type="submit"
              id="botao-principal"
              class="absolute end-2 bottom-2.5 rounded-lg text-sm px-4 py-1.5 font-semibold"
            >
              Buscar
            </button>
          </div>
        </form>
        <a
          href="/about"
          class="hover:underline opacity-50 hover:opacity-100 -mt-3"
          >O que é um lead?
        </a>
      </section>
      <!-- HERO - END -->

      <!-- CARDS - START -->
      <section
        id="sobre"
        class="flex flex-col items-center  h-fit w-full py-20 px-6 gap-8 bg-secondary"
      >
        <h2 id="sobre-titulo">Porque escolher o LeadSearch?</h2>

        <div
          class="flex flex-row flex-wrap w-full justify-center items-center gap-16"
        >
          <!-- card 01 -->
          <div
            class="flex flex-col justify-center items-center text-center max-w-[350px] w-full"
          >
            <!-- titulo -->
            <div class="flex flex-row items-center gap-2">
              <svg
                fill="currentColor"
                width="40px"
                height="40px"
                viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg"
              >
                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                <g
                  id="SVGRepo_tracerCarrier"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                ></g>
                <g id="SVGRepo_iconCarrier">
                  <path
                    d="M21,14.571C21,16.465,18.538,18,15.5,18S10,16.465,10,14.571s2.462-3.428,5.5-3.428S21,12.678,21,14.571Zm-5.5,5.286c-3.038,0-5.5-1.535-5.5-3.428v2.142C10,20.465,12.462,22,15.5,22S21,20.465,21,18.571V16.429C21,18.322,18.538,19.857,15.5,19.857Zm-7-11c3.038,0,5.5-1.535,5.5-3.428S11.538,2,8.5,2,3,3.535,3,5.429,5.462,8.857,8.5,8.857Zm-.125,4a5.58,5.58,0,0,1,2.181-2.389,8.44,8.44,0,0,1-2.056.25C5.462,10.714,3,9.179,3,7.286V9.428C3,11.3,5.4,12.811,8.375,12.853ZM8.5,22a8.83,8.83,0,0,0,1.079-.067,4.917,4.917,0,0,1-1.37-2.085C5.307,19.753,3,18.261,3,16.429v2.142C3,20.465,5.462,22,8.5,22ZM8,17.556V15.4c-2.8-.16-5-1.613-5-3.4v2.143C3,15.931,5.2,17.4,8,17.556Z"
                  ></path>
                </g>
              </svg>
              <h1 class="mt-2">Dados Precisos</h1>
            </div>
            <!-- texto -->
            <p class="mt-3">
              Leads atualizados e verificados para máxima assertividade
            </p>
          </div>

          <!-- card 02 -->
          <div
            class="flex flex-col justify-center items-center text-center max-w-[350px] w-full"
          >
            <!-- titulo -->
            <div class="flex flex-row items-center gap-2">
              <svg
                fill="currentColor"
                width="40px"
                height="40px"
                viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg"
              >
                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                <g
                  id="SVGRepo_tracerCarrier"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                ></g>
                <g id="SVGRepo_iconCarrier">
                  <path
                    d="M19,3H15.414a1,1,0,0,0-.707.293L12,6,9.293,3.293A1,1,0,0,0,8.586,3H5A2,2,0,0,0,3,5V19a2,2,0,0,0,2,2H19a2,2,0,0,0,2-2V5A2,2,0,0,0,19,3Zm-2.293,7.707-5,5a1,1,0,0,1-1.414,0l-2-2a1,1,0,0,1,1.414-1.414L11,13.586l4.293-4.293a1,1,0,0,1,1.414,1.414Z"
                  ></path>
                </g>
              </svg>
              <h1 class="mt-2">Alta Segmentação</h1>
            </div>
            <!-- texto -->
            <p class="mt-3">Filtre leads por diversos critérios específicos</p>
          </div>

          <!-- card 03 -->
          <div
            class="flex flex-col justify-center items-center text-center max-w-[350px] w-full"
          >
            <!-- titulo -->
            <div class="flex flex-row items-center gap-2">
              <svg
                fill="currentColor"
                width="40px"
                height="40px"
                viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg"
              >
                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                <g
                  id="SVGRepo_tracerCarrier"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                ></g>
                <g id="SVGRepo_iconCarrier">
                  <path
                    d="M12,4.625A7.993,7.993,0,0,0,5.729,17.583a.78.78,0,0,0-.092.062L3.043,20.271a1.021,1.021,0,0,0,0,1.432.99.99,0,0,0,1.414,0l2.594-2.626a.975.975,0,0,0,.076-.117,7.962,7.962,0,0,0,9.745,0,1.027,1.027,0,0,0,.077.117L19.543,21.7a.99.99,0,0,0,1.414,0,1.021,1.021,0,0,0,0-1.432l-2.594-2.626c-.027-.027-.063-.038-.092-.062A7.993,7.993,0,0,0,12,4.625Zm4,9H12a1,1,0,0,1-1-1v-4.8a1,1,0,1,1,2,0v3.8h3a1,1,0,0,1,0,2ZM2.293,6.767a1.021,1.021,0,0,1,0-1.432l3-3.038a.99.99,0,0,1,1.414,0,1.021,1.021,0,0,1,0,1.432l-3,3.038a.992.992,0,0,1-1.414,0ZM21.707,5.335a1.021,1.021,0,0,1,0,1.432.992.992,0,0,1-1.414,0l-3-3.038a1.021,1.021,0,0,1,0-1.432.99.99,0,0,1,1.414,0Z"
                  ></path>
                </g>
              </svg>
              <h1 class="mt-2">Sempre Atualizado</h1>
            </div>
            <!-- texto -->
            <p class="mt-3">Banco de dados renovado periodicamente</p>
          </div>
        </div>
      </section>
      <!-- CARDS - END -->
  <script src="../js/script.js" defer></script>
<?php
require_once "footer.php";
?>