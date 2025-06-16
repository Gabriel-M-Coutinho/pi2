<?php
require_once 'header.php';
?>

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