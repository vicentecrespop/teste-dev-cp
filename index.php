<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="./styles.css">
    <title>Teste DEV</title>
</head>
<body>
    <!-- <header>
        <div class="row">
            <div class="col s6" onclick="mostrarFormulario()">Formulário</div>
            <div class="col s6" onclick="mostrarCadastrados()">Cadastrados</div>
        </div>
    </header> -->
    <header class="white-text">
      <div class="row">
        <div class="col s6 center-align">
          <img src="./public/Camada 1.jpg" alt="Concept Prime Logo">
        </div>
        <div class="col s6 center-align">
          Redes Sociais
        </div>
      </div>
    </header>
    <main>
        <div class="row">
            <div class="col s6 right-align" onclick="mostrarFormulario()">Formulário</div>
            <div class="col s6" onclick="mostrarCadastrados()">Cadastrados</div>
        </div>
        <div id="formulario" class="container">
            <div class="row">
                <form class="col s12">
                  <input type="hidden" id="id" value="">
                  <div class="row">
                    <div class="input-field col s6">
                        <input name="nome" placeholder="Placeholder" id="nome" type="text" class="validate">
                        <label for="nome">Nome</label>
                    </div>
                    <div class="input-field col s6">
                      <input name="sobrenome" id="sobrenome" type="text" class="validate">
                      <label for="sobrenome">Sobrenome</label>
                    </div>
                  </div>
                  <div class="row">
                    <div class="input-field col s6">
                        <input name="cep" placeholder="Placeholder" id="cep" type="number" class="validate" value="">
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
                    <div class="input-field col s5">
                        <input name="rua" placeholder="Placeholder" id="logradouro" type="text" class="validate">
                        <label for="logradouro">Logradouro</label>
                    </div>
                    <div class="input-field col s2">
                        <input name="numero" placeholder="Placeholder" id="numero" type="number" class="validate">
                        <label for="numero">Número</label>
                    </div>
                    <div class="input-field col s2">
                        <input name="bairro" placeholder="Placeholder" id="bairro" type="text" class="validate">
                        <label for="bairro">Bairro</label>
                    </div>
                    <div class="input-field col s3">
                        <input name="complemento" placeholder="Placeholder" id="complemento" type="text" class="validate">
                        <label for="complemento">Complemento</label>
                    </div>
                  </div>
                  <button onclick="adicionarCadastrado(event)" class="center">Enviar</button>
                </form>
              </div>
        </div>

        <div id="cadastrados" class="hide">
            <table id="tabela_cadastrados">
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