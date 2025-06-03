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
      </div>
      <!-- FICHA - END -->

      <!-- FOOTER - START -->
      <footer
        id="footer"
        class="flex flex-col justify-center items-center h-fit w-full p-6 gap-8 bg-secondary text-text"
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
  </body>
  <script type="text/javascript" src="script.js"></script>
</html>
