<?php
  require_once "header.php";
?>

      <!-- CONTATO - START -->
      <div
        class="w-full h-full flex flex-col items-center bg-gradient-to-bl from-primary to-[#132d3e]"
      >
        <section
          id="sobre"
          class="h-fit w-full max-w-[850px] flex flex-col items-center justify-center text-center gap-8 mt-20 mb-20"
        >
          <h3 class="text-4xl font-bold text-text">Entre em contato</h3>
          <p class="text-lg text-text">
            Entre em contato conosco para tirar todas as suas dúvidas sobre
            nossos produtos e serviços
          </p>
              <form action="#" class="flex flex-col gap-6 w-full text-start max-w-[700px]">
                <div>
                  <label
                    for="email"
                    class="block mb-2 text-sm font-medium"
                    >Seu email</label
                  >
                  <input
                    type="email"
                    id="email"
                    class="form-imput w-full"
                    placeholder="seuemail@gmail.com"
                    required
                  />
                </div>
                <div>
                  <label
                    for="subject"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
                    >Assunto</label
                  >
                  <input
                    type="text"
                    id="subject"
                    class="form-imput w-full"
                    placeholder="Com o que podemos ajudar?"
                    required
                  />
                </div>
                <div class="sm:col-span-2">
                  <label
                    for="message"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400"
                    >Mensagem</label
                  >
                  <textarea
                    id="message"
                    rows="6"
                    class="form-imput w-full"
                    placeholder="Fale conosco..."
                  ></textarea>
                </div>
                <div class="pt-6 w-full flex justify-center">
                  <button
                    type="submit"
                    id="botao-principal"
                    class="py-3 px-12 rounded"
                  >
                    Enviar
                  </button>
                </div>
              </form>
            </div>
        </section>
      </div>
      <!-- CONTATO - END -->

<?php
require_once "footer.php";
?>