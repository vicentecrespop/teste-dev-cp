<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="./src/style/styles.css">
    <title>Teste DEV</title>
</head>
<body>
    <header class="white-text">
      <div class="row">
        <div class="col s12 l6 center-align">
          <img src="./public/Camada 1.jpg" alt="Concept Prime Logo" id="logo">
        </div>
        <div class="col s6 social_media hide-on-med-and-down">
          <div class="col s10">
            <div class="valign-wrapper">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
              </svg>
              <span>contato@conceptprime.net.br</span>
            </div>
            <div class="valign-wrapper">
              <a href="https://grupoconceptprime.com.br/" target="_blank" class="valign-wrapper">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-globe" viewBox="0 0 16 16">
                  <path d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm7.5-6.923c-.67.204-1.335.82-1.887 1.855A7.97 7.97 0 0 0 5.145 4H7.5V1.077zM4.09 4a9.267 9.267 0 0 1 .64-1.539 6.7 6.7 0 0 1 .597-.933A7.025 7.025 0 0 0 2.255 4H4.09zm-.582 3.5c.03-.877.138-1.718.312-2.5H1.674a6.958 6.958 0 0 0-.656 2.5h2.49zM4.847 5a12.5 12.5 0 0 0-.338 2.5H7.5V5H4.847zM8.5 5v2.5h2.99a12.495 12.495 0 0 0-.337-2.5H8.5zM4.51 8.5a12.5 12.5 0 0 0 .337 2.5H7.5V8.5H4.51zm3.99 0V11h2.653c.187-.765.306-1.608.338-2.5H8.5zM5.145 12c.138.386.295.744.468 1.068.552 1.035 1.218 1.65 1.887 1.855V12H5.145zm.182 2.472a6.696 6.696 0 0 1-.597-.933A9.268 9.268 0 0 1 4.09 12H2.255a7.024 7.024 0 0 0 3.072 2.472zM3.82 11a13.652 13.652 0 0 1-.312-2.5h-2.49c.062.89.291 1.733.656 2.5H3.82zm6.853 3.472A7.024 7.024 0 0 0 13.745 12H11.91a9.27 9.27 0 0 1-.64 1.539 6.688 6.688 0 0 1-.597.933zM8.5 12v2.923c.67-.204 1.335-.82 1.887-1.855.173-.324.33-.682.468-1.068H8.5zm3.68-1h2.146c.365-.767.594-1.61.656-2.5h-2.49a13.65 13.65 0 0 1-.312 2.5zm2.802-3.5a6.959 6.959 0 0 0-.656-2.5H12.18c.174.782.282 1.623.312 2.5h2.49zM11.27 2.461c.247.464.462.98.64 1.539h1.835a7.024 7.024 0 0 0-3.072-2.472c.218.284.418.598.597.933zM10.855 4a7.966 7.966 0 0 0-.468-1.068C9.835 1.897 9.17 1.282 8.5 1.077V4h2.355z"/>
                </svg>
              </a>
              <span>www.conceptprime.com.br</span>
            </div>
            <div class="valign-wrapper"> 
                <a href="https://www.facebook.com/conceptprime/" target="_blank" class="valign-wrapper">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                    <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                  </svg>
                </a>
                <span>/conceptprime</span>
            </div>
            <div class="valign-wrapper">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                  <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
                </svg>
              <span>/conceptprime</span>
            </div>
            <div class="valign-wrapper">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-fill" viewBox="0 0 16 16">
                <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L8 2.207l6.646 6.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5Z"/>
                <path d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6Z"/>
              </svg>
              <span>Rua Sanata Luzia, 126 - Florianópolis - SC - CEP: 88.036-540</span>
            </div>
          </div>
        </div>
      </div>
    </header>
    <main>
        <div class="row selection_buttons">
            <div class="col s6 right-align" onclick="mostrarFormulario()">
              <button class="btn waves-effect red darken-4">Formulário</button>
            </div>
            <div class="col s6" onclick="mostrarCadastrados()">
              <button class="btn waves-effect red darken-4">Cadastrados</button>
            </div>
        </div>
        <div id="formulario" class="container">
            <div class="row">
                <form class="col s12">
                  <input type="hidden" id="id" value="">
                  <div class="row">
                    <div class="input-field col s6">
                        <input name="nome" placeholder="Nome" id="nome" type="text" class="validate">
                        <label for="nome">Nome</label>
                    </div>
                    <div class="input-field col s6">
                      <input name="sobrenome" placeholder="Sobrenome" id="sobrenome" type="text" class="validate">
                      <label for="sobrenome">Sobrenome</label>
                    </div>
                  </div>
                  <div class="row">
                    <div class="input-field col s6">
                        <input name="cep" placeholder="*Apenas números" id="cep" type="number" class="validate" value="">
                        <label for="cep">CEP</label>
                    </div>
                  </div>
                  <div class="row">
                    <div class="input-field col s6">
                      <input name="cidade" readonly  placeholder="Cidade" id="cidade" type="text" class="validate">
                      <label for="disabled">Cidade</label>
                    </div>
                    <div class="input-field col s6">
                        <input name="estado" readonly placeholder="Estado" id="estado" type="text" class="validate">
                        <label for="disabled">Estado</label>
                      </div>
                  </div>
                  <div class="row">
                    <div class="input-field col s6 m5">
                        <input name="rua" placeholder="Endereço" id="logradouro" type="text" class="validate">
                        <label for="logradouro">Logradouro</label>
                    </div>
                    <div class="input-field col s6 m2">
                        <input name="numero" placeholder="nº" id="numero" type="number" class="validate">
                        <label for="numero">Número</label>
                    </div>
                    <div class="input-field col s6 m2">
                        <input name="bairro" placeholder="bairro" id="bairro" type="text" class="validate">
                        <label for="bairro">Bairro</label>
                    </div>
                    <div class="input-field col s6 m3">
                        <input name="complemento" placeholder="ex: Apto 302" id="complemento" type="text" class="validate">
                        <label for="complemento">Complemento</label>
                    </div>
                  </div>
                  <button class="btn waves-effect blue darken-1 center" onclick="adicionarCadastrado(event)">Enviar</button>
                </form>
              </div>
        </div>

        <div id="cadastrados" class="hide center-align">
            <span class="hide" id="msg_cadastrados">Não foram cadastrados usuarios.</span>
            <table id="tabela_cadastrados" class="bordered striped centered">
              <thead>
                <tr id="head_cadastrados">

                </tr>                
              </thead>
              <tbody id="dados_cadastrados">

              </tbody>
            </table>
        </div>

    </main>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="./src/index.js"></script>
</body>
</html>