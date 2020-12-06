    <?php
    session_start();
    ?>
    <!DOCTYPE html>
    <html lang="pt-br">
        <head>
            <meta charset="utf-8">
            <title> Login</title>
        </head>
        <body>
            <h2>Área restrita</h2>
            <?php
                if(isset($_SESSION['msg'])){
                    echo $_SESSION['msg'];
                    unset($_SESSION['msg']);
                }
                if(isset($_SESSION['msgcad'])){
                    echo $_SESSION['msgcad'];
                    unset($_SESSION['msgcad']);
                }
            ?>
            <form method="POST" action="valida.php">
            <label for="email_login">Seu e-mail</label>
                                <input id="email_login" name="email_login" required="required" type="password" placeholder="ex.@hotmail" class="form-control">
                        </p>
                        <p>
                            <label for="senha_cad">Sua senha</label>
                            <input id="senha_cad" name="senha_cad" required="required" type="password" placeholder="ex. 1234" class="form-control">
                        </p>
                        <p>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                <label class="custom-control-label" for="customCheck1">Manter-me Logado</label>
                            </div>
                        </p>
                        <p>
                            <div class="container">
                                <a href="Cadastro de Produtos.html" button type="button" class="btn btn-outline-secondary">Logar </a>
                            </div>
                            <p>
                            </p>
                        </p>
                        <p class="link">
                            Ainda não tem conta?
                            <a href="cadastro.html">Cadastrar</a>
                        </p>
                        </form>
            <br><br><br>
            Usuário cadastrado no Banco de Dados<br>
            Usuário: cesar@celke.com.br <br>
            Senha: 123 <br>
        </body>
    </html>