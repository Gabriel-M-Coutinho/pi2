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
    <title>LeadSearch | Login</title>
    <link rel="stylesheet" href="../css/style.css" />
    <link rel="icon" href="./favicon.ico" type="image/x-icon" />
    <!-- GOOGLE FONTS - IMPORTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <!-- FONT: Jost -->
    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet" />
  </head>

  <body>
    <main>
      <!-- LOGIN - START -->
      <section
        class="flex flex-row justify-center items-center h-screen w-full"
      >
        <!-- FORM - START -->
        <div class="flex flex-col justify-center items-center h-full md:w-1/2 gap-8">
          <h2 class="font-bold">Login</h2>
          <form id="form-login" class="flex flex-col justify-center items-center w-full gap-8">
            <div class="max-w-[80%] w-full flex flex-col">
              <label for="email" class="">Email</label>
              <input type="email" name="email" id="email" class="form-imput" />
            </div>
            <div class="max-w-[80%] w-full flex flex-col">
              <label for="password" class="">Password</label>
              <input type="password" name="password" id="password" class="form-imput" />
            </div>
            <button type="submit" id="botao-principal" class="py-3 px-12 rounded">Entrar</button>
            <p class="text-center">
              Não possui uma conta?
              <a href="./register_form2.php" class="font-bold hover:underline">Cadastre-se</a>
            </p>
            <a href="./reset.php" class="font-bold hover:underline">Esqueci minha senha</a>
          </form>
        </div>
        <!-- FORM - END -->

        <!-- BACKGROUND - START -->
        <div
          class="md:flex flex-col justify-center items-center h-full w-1/2 hidden"
        >
          <img
            src="../assets/imgs/login.png"
            alt="Login"
            class="w-full h-full object-cover opacity-50"
          />
          <div id="logo-login" class="absolute mx-auto my-auto">
            <!-- logo-->
            <div class="flex flex-row justify-center items-center gap-2">
              <div class="md:w-20 lg:w-24">
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
              <span class="md:text-[50px] lg:text-[75px] font-bold mt-6">
                LeadSearch
              </span>
            </div>
          </div>
        </div>
        <!-- BACKGROUND - END -->
      </section>
      <!-- LOGIN - END -->

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
          PI 2025 | Todos os direitos reservados | Feito com: Tailwind
        </p>
      </footer>
      <!-- FOOTER - END -->
    </main>
    <script src="index.js"></script>
  </body>
</html>
