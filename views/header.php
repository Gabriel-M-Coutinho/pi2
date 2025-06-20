<?php
  if(!isset($_SESSION))
  {
    session_start();
  }
?>

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
    <title>LeadSearch</title>
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
      <!-- NAV - START -->
      <nav
        id="nav"
        class="flex justify-between items-center h-16 w-full sm:p-6 p-2 sticky z-50 top-0 left-0 bg-secondary text-text"
      >
        <!-- logo -->
        <div id="logo" class="md:gap-4">
          <a name="logo" href="/">
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
          <a name="inicio" href="/" class="md:block hidden">Início</a>
          <a name="sobre" href="/about">Sobre</a>
          <a name="devs" href="/devs">Devs</a>
        </div>
        <!-- login -->
         <?php
         if(isset($_SESSION['user']))
         {
          echo '
          <div id="user" class="flex md:gap-4 icon_user">
            <a name="user">
              <svg
              width="24"
              height="24"
              viewBox="0 0 24 24"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
              >
              <path
              d="M12 12C14.7614 12 17 9.76142 17 7C17 4.23858 14.7614 2 12 2C9.23858 2 7 4.23858 7 7C7 9.76142 9.23858 12 12 12Z"
              stroke="currentColor"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="round"
              />
              <path
              d="M4 22C4 17.5817 7.58172 14 12 14C16.4183 14 20 17.5817 20 22"
              stroke="currentColor"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="round"
              />
              </svg>
            </a>
            <div class="submenu">
              <a name="login" href="/user">Conta</a>
              <a name="login" href="/logout" class="">Sair</a>
            </div>
          </div>         
          ';
         }
         else
         {
          echo '
          <div id="user">
            <a name="login" href="/login">Entrar</a>
          </div>
          ';
         }
         ?>

          <?php
          ?>
      </nav>
      <!-- NAV - END -->