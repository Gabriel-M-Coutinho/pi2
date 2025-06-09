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
    <title>LeadSearch | Recuperar senha</title>
    <link rel="stylesheet" href="/css/style.css" />
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
      <!-- LOGIN - START -->
      <section
        class="flex flex-row justify-center items-center h-screen w-full"
      >
        <!-- FORM - START -->
        <div
          class="flex flex-col justify-center items-center h-full w-full md:w-2/3 max-w-[1000px] gap-8"
        >
          <h2 class="font-bold">Recuperar senha</h2>
          <p class="text-center -mt-6">
            Digite seu email para recuperar a senha, uma confirmação será
            enviada para o endereço informado
          </p>
          <form
            id="form-login"
            class="flex flex-col justify-center items-center w-full gap-8"
          >
            <div class="w-full flex flex-col">
              <label for="email" class="">Email</label>
              <input type="email" name="email" id="email" class="form-imput" />
            </div>
            <button
              type="submit"
              id="botao-principal"
              class="py-3 px-12 rounded"
            >
              Enviar
            </button>
            <p class="text-center">
              Não precisa recuperar a senha?
              <a href="/login" class="font-bold hover:underline"
                >Entrar</a
              >
            </p>
          </form>
        </div>
        <!-- FORM - END -->
      </section>
      <!-- LOGIN - END -->

<?php
require_once "footer.php";
?>