<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
      tailwind.config = {
        theme: {
          extend: {
            colors: {
              primary: "var(--primary-color)",
              secondary: "var(--secondary-color)",
              accent: "var(--accent-color)",
              text: "var(--text-color)",
            },
          },
        },
      };
    </script>
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Projeto Integrador</title>
    <link rel="stylesheet" href="../css/style.css" />
    <link rel="icon" href="./favicon.ico" type="image/x-icon" />
    <!-- GOOGLE FONTS - IMPORTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <!-- FONT: Jost -->
    <link
      href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&display=swap"
      rel="stylesheet"
    />
  </head>

  <body>
    <main>
      <!-- NAV - START -->
      <nav
        id="nav"
        class="flex justify-between items-center h-16 w-full sm:p-6 p-2 sticky z-50 top-0 left-0 bg-secondary text-text"
      >
        <!-- logo -->
        <div id="logo">
          <a name="logo" href="/index.html">
            <svg
              width="60"
              height="57"
              viewBox="0 0 71 57"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M63.0919 21.9166H50.8778C52.1832 24.9604 51.6102 28.6234 49.1291 31.1045L35.1128 45.1208V49.8958C35.1128 52.6227 37.3233 54.8333 40.0503 54.8333H63.0919C65.8189 54.8333 68.0294 52.6227 68.0294 49.8958V26.8541C68.0294 24.1272 65.8189 21.9166 63.0919 21.9166ZM51.5711 40.8437C50.2081 40.8437 49.1024 39.7379 49.1024 38.375C49.1024 37.011 50.2081 35.9062 51.5711 35.9062C52.9341 35.9062 54.0399 37.011 54.0399 38.375C54.0399 39.7379 52.9341 40.8437 51.5711 40.8437ZM46.8013 21.6389L28.8072 3.64479C26.8363 1.6739 23.6403 1.6739 21.6694 3.64479L3.67427 21.6389C1.70338 23.6098 1.70338 26.8058 3.67427 28.7767L21.6684 46.7718C23.6393 48.7427 26.8353 48.7427 28.8061 46.7718L46.8013 28.7777C48.7722 26.8058 48.7722 23.6098 46.8013 21.6389ZM12.0711 27.677C10.7081 27.677 9.60236 26.5712 9.60236 25.2083C9.60236 23.8443 10.7081 22.7395 12.0711 22.7395C13.4341 22.7395 14.5399 23.8443 14.5399 25.2083C14.5399 26.5712 13.4341 27.677 12.0711 27.677ZM25.2378 40.8437C23.8748 40.8437 22.769 39.7379 22.769 38.375C22.769 37.011 23.8748 35.9062 25.2378 35.9062C26.6007 35.9062 27.7065 37.011 27.7065 38.375C27.7065 39.7379 26.6007 40.8437 25.2378 40.8437ZM25.2378 27.677C23.8748 27.677 22.769 26.5712 22.769 25.2083C22.769 23.8443 23.8748 22.7395 25.2378 22.7395C26.6007 22.7395 27.7065 23.8443 27.7065 25.2083C27.7065 26.5712 26.6007 27.677 25.2378 27.677ZM25.2378 14.5104C23.8748 14.5104 22.769 13.4046 22.769 12.0416C22.769 10.6776 23.8748 9.57288 25.2378 9.57288C26.6007 9.57288 27.7065 10.6776 27.7065 12.0416C27.7065 13.4046 26.6007 14.5104 25.2378 14.5104ZM38.4044 27.677C37.0415 27.677 35.9357 26.5712 35.9357 25.2083C35.9357 23.8443 37.0415 22.7395 38.4044 22.7395C39.7674 22.7395 40.8732 23.8443 40.8732 25.2083C40.8732 26.5712 39.7674 27.677 38.4044 27.677Z"
                fill="none"
                stroke="currentColor"
                opacity="0.9"
                stroke-width="4.26667"
                stroke-linecap="round"
                stroke-linejoin="round"
              />
            </svg>
          </a>
        </div>
        <!-- links -->
        <div id="links" class="flex md:gap-16 gap-6">
          <a name="inicio" href="/index.html" class="md:block hidden">Inicio</a>
          <a name="precos" href="/Precos/index.html">Preços</a>
          <a name="devs" href="/Devs/index.html">Devs</a>
          <a name="sobre" href="/Sobre/index.html">Sobre</a>
        </div>
        <!-- login -->
        <div id="user">
          <a name="login" href="/Login/index.html">
            <svg
              width="44"
              height="41"
              viewBox="0 0 44 41"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M32.1308 33.1275L23.6705 28.7675C26.8149 26.4663 27.6695 21.9438 27.6695 19.4075V14.1288C27.6695 10.6338 22.6775 6.74126 17.6626 6.74126C12.6505 6.74126 7.52539 10.6338 7.52539 14.1288V19.4075C7.52539 21.7138 8.57352 26.3775 11.7501 28.7475L3.07221 33.1263C3.07221 33.1263 0.803955 34.0663 0.803955 35.2375V38.405C0.803955 39.5713 1.82117 40.5163 3.07221 40.5163H32.1308C33.3818 40.5163 34.399 39.57 34.399 38.405V35.2375C34.399 33.995 32.1295 33.1263 32.1295 33.1263L32.1308 33.1275ZM31.7115 38.0188H3.49146V35.7838C3.68361 35.6525 3.95371 35.5013 4.16602 35.4113C4.22917 35.385 4.29233 35.3563 4.3528 35.3238L13.0321 30.945C13.8235 30.545 14.3476 29.805 14.4282 28.9713C14.5089 28.1375 14.134 27.3213 13.4325 26.7975C11.179 25.1163 10.2129 21.395 10.2129 19.4088V14.13C10.2129 12.3338 13.8518 9.24251 17.6626 9.24251C21.5447 9.24251 24.982 12.2925 24.982 14.13V19.4088C24.982 21.3663 24.329 25.105 22.0097 26.8025C21.3002 27.3225 20.9172 28.14 20.9925 28.9763C21.0677 29.8125 21.5918 30.56 22.3832 30.9625L30.8435 35.3225C30.9174 35.36 31.0128 35.4013 31.0907 35.4338C31.2896 35.5125 31.5328 35.6425 31.7115 35.7575V38.0188ZM41.5357 26.9038L32.9491 22.5438C36.0935 20.2425 37.0745 15.72 37.0745 13.1838V7.90501C37.0745 4.41001 31.9575 0.47876 26.9426 0.47876C23.684 0.47876 20.3528 2.12751 18.4138 4.23751C19.5197 4.30126 20.7385 4.30251 21.792 4.61501C23.2083 3.58876 24.9982 2.98001 26.9426 2.98001C30.8247 2.98001 34.387 6.06751 34.387 7.90626V13.185C34.387 15.1425 33.6076 18.8813 31.2896 20.5788C30.5788 21.0988 30.1971 21.9163 30.2724 22.7525C30.3476 23.59 30.8704 24.3363 31.6632 24.7388L40.2497 29.0988C40.3236 29.1363 40.419 29.1775 40.497 29.21C40.6959 29.2888 40.9391 29.4188 41.1178 29.5338V31.7575H35.6931C36.5128 32.3325 36.76 33.155 37.0785 34.2575H41.5384C42.7894 34.2575 43.8066 33.3113 43.8066 32.1463V29.0175C43.8053 27.7738 41.5357 26.9038 41.5357 26.9038Z"
                fill="#A6ADBB"
              />
            </svg>
          </a>
        </div>
      </nav>
      <!-- NAV - END -->

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
          href="./Sobre/index.html#about-lead"
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

      <!-- FOOTER - START -->
      <footer
        id="footer"
        class="flex flex-col justify-center items-center h-fit w-full p-6 gap-8 bg-secondary text-text border-t-2 border-primary"
      >
        <!-- links -->
        <div id="links" class="flex gap-8 pt-5">
          <a name="precos" href="/Precos/index.html">Produtos</a>
          <a name="suporte" href="/Suporte/index.html">Suporte</a>
          <a name="sobre" href="/Sobre/index.html">Sobre</a>
          <a name="devs" href="/Devs/index.html">Devs</a>
          <a name="login" href="/Login/index.html">Login</a>
        </div>
        <!-- icons -->
        <div id="icons" class="flex gap-8">
          <a name="email" id="footer-icons" href="#"
            ><svg
              width="20"
              height="16"
              viewBox="0 0 20 16"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                fill-rule="evenodd"
                clip-rule="evenodd"
                d="M0 0V16H20V0H0ZM18 2V2.465L10 7.798L2 2.465V2H18ZM2 14V4.869L10 10.203L18 4.869V14H2Z"
                fill="currentColor"
              />
            </svg>
          </a>
          <a name="calendario" id="footer-icons" href="#"
            ><svg
              width="18"
              height="19"
              viewBox="0 0 18 19"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                fill-rule="evenodd"
                clip-rule="evenodd"
                d="M14 2V0H12V2H6V0H4V2H0V19H18V2H14ZM4 4V6H6V4H12V6H14V4H16V8H2V4H4ZM2 17V10H16V17H2Z"
                fill="currentColor"
              />
            </svg>
          </a>
          <a name="mensagem" id="footer-icons" href="#">
            <svg
              width="18"
              height="20"
              viewBox="0 0 18 20"
              fill="none"
              class="mt-1"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                fill-rule="evenodd"
                clip-rule="evenodd"
                d="M0 19.414V0H18V14H5.414L0 19.414ZM4.586 12H16V2H2V14.586L4.586 12ZM5 4H13V6H5V4ZM11 8H5V10H11V8Z"
                fill="currentColor"
              />
            </svg>
          </a>
          <a name="protecao" id="footer-icons" href="#"
            ><svg
              width="16"
              height="20"
              viewBox="0 0 16 20"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                fill-rule="evenodd"
                clip-rule="evenodd"
                d="M8 0.960022L0 3.24602V10.912C0 13.168 1.096 15.297 2.932 16.608L6.838 19.399C7.186 19.646 7.593 19.77 8 19.77C8.407 19.77 8.814 19.646 9.162 19.398L13.068 16.608C14.904 15.297 16 13.168 16 10.912V3.24602L8 0.960022ZM14 10.912C14 12.523 13.217 14.044 11.906 14.981L8 17.771L4.094 14.981C2.783 14.044 2 12.523 2 10.912V4.75402L8 3.04002L14 4.75402V10.912Z"
                fill="currentColor"
              />
            </svg>
          </a>
          <a name="relogio" id="footer-icons" href="#"
            ><svg
              width="20"
              height="20"
              viewBox="0 0 20 20"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                fill-rule="evenodd"
                clip-rule="evenodd"
                d="M10 0C4.486 0 0 4.486 0 10C0 15.514 4.486 20 10 20C15.514 20 20 15.514 20 10C20 4.486 15.514 0 10 0ZM10 18C5.589 18 2 14.411 2 10C2 5.589 5.589 2 10 2C14.411 2 18 5.589 18 10C18 14.411 14.411 18 10 18ZM9 10.414V4H11V9.586L14.707 13.293L13.293 14.707L9 10.414Z"
                fill="currentColor"
              />
            </svg>
          </a>
        </div>
        <!-- copyright -->
        <p id="copyright" class="text-sm opacity-50">
          PI 2024 | Todos os direitos reservados | Feito com: Tailwind
        </p>
      </footer>
      <!-- FOOTER - END -->
    </main>
    <script src="index.js"></script>
  </body>
  <script type="text/javascript" src="../js/script.js" defer></script>
</html>
