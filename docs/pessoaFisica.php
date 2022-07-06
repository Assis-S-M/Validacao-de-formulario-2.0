<!DOCTYPE html>
<html>
    <head>
        <script defer src="js/jQuery-Mask-Plugin-master/dist/jquery.mask.js"></script>
        <script src="js/jquery-validate/lib/jquery-3.1.1.js"></script>
        <script src="js/jquery-validate/dist/jquery.validate.js"></script>
        <script src="js/jquery-validate/src/additional/cpfBR.js"></script>
        <script src="js/jquery-validate/src/additional/postalcodeBR.js"></script>
        <script src="js/jquery-validate/dist/localization/messages_pt_BR.js"></script>
        <script defer src="js/validate.js"></script>

        <link rel="stylesheet" type="text/css" media="screen" href="css/estilo.css" />
    </head>
    <body>
        <form method="post" action="dataBase.php" class="formPessoaFisica" id="formPessoaFisica">
            <fieldset>
                <legend>Dados pessoais</legend>
    
                <div id="divGlobal">

                <div>
                    <label for="cpf">CPF: </label>
                    <input type="text" name="cpf" id="cpf" placeholder="Digite seu CPF" onkeypress="$(this).mask('000-000-000-00')">
                </div>

                <div>
                    <label for="nome">Nome completo: </label>
                    <input type="text" name="nome" id="nome" placeholder="Digite seu nome">
                </div>

                <div>
                    <label for="dataNascimento">Data de nascimento: </label>
                    <input type="text" name="dataNascimento" id="dataNascimento" onkeypress="$(this).mask('00/00/0000')" size="5">
                </div>

                <div>
                    <label for="idade">Idade: </label>
                    <span name="idade" id="idade"></span>
                </div>

                </div>
            </fieldset>

            <fieldset>
                <legend>Endereço</legend>

                <div id="divGlobal">

                <div>
                    <label for="cep">CEP: </label>
                    <input type="text" name="cep" id="cep" placeholder="Digite seu CEP" onkeypress="$(this).mask('00000-000')">
                </div>

                <div>
                    <label for="rua">Rua / Avenida</label>
                    <input type="text" name="rua" id="rua" placeholder="Rua / Avenida">

                    <label for="numRes">Número: </label>
                    <input type="number" name="numRes" id="numRes" min="1" max="999">
                </div>

                <div>
                    <label for="bairro">Bairro: </label>
                    <input type="text" name="bairro" id="bairro" placeholder="Digite o bairro">
                </div>

                <div>
                    <label for="comp">Complemento: </label>
                    <input type="text" name="comp" id="comp" placeholder="Digite o complemento">
                </div>

                <div>
                    <label for="municipio">Municipio: </label>
                    <input type="text" name="municipio" id="municipio" placeholder="Digite o municipio">

                    <label for="uf">UF: </label>
                    <select id="uf" name="uf">
                        <option value="Acre">Acre</option>
                        <option value="Alagoas">Alagoas</option>
                        <option value="Amapá">Amapá</option>
                        <option value="Amazonas">Amazonas</option>
                        <option value="Bahia">Bahia</option>
                        <option value="Ceará" selected>Ceará</option>
                        <option value="Espirito">Espirito Santo</option>
                        <option value="Goiás">Goiás</option>
                        <option value="Maranhão">Maranhão</option>
                        <option value="Mato Grosso">Mato Grosso</option>
                        <option value="Mato Grosso do Sul">Mato Grosso do Sul</option>
                        <option value="Minas Gerais">Minas Gerais</option>
                        <option value="Pará">Pará</option>
                        <option value="Paraíba">Paraíba</option>
                        <option value="Paraná">Paraná</option>
                        <option value="Pernambuco">Pernambuco</option>
                        <option value="Piauí">Piauí</option>
                        <option value="Rio de Janeiro">Rio de Janeiro</option>
                        <option value="Rio Grande do Norte">Rio grande do Norte</option>
                        <option value="Rio Grande do Sul">Rio Grande do Sul</option>
                        <option value="Rondônia">Rondônia</option>
                        <option value="Roraima">Roraima</option>
                        <option value="Santa Catarina">Santa Catarina</option>
                        <option value="Sâo Paulo">São Paulo</option>
                        <option value="Sergipe">Sergipe</option>
                        <option value="Tocantins">Tocantins</option>
                    </select>
                </div>

                </div>
            </fieldset>

            <fieldset>
                <legend>Contato</legend>

                <div id="divGlobal">
                <div>
                    <label for="telFix">Telefone fixo: </label>
                    <input type="text" name="telFix" id="telFix" placeholder="Digite o telefone fixo" onkeypress="$(this).mask('0000-0000')">

                    <label for="telCel">Celular: </label>
                    <input type="text" name="telCel" id="telCel" placeholder="Digite o telefone celular" onkeypress="$(this).mask('00000-0000')">
                </div>

                </div>
            </fieldset>

            <fieldset>
                <legend>Autenticação</legend>

                <div id="divGlobal">
                <div>
                    <label for="email">Email: </label>
                    <input type="text" name="email" id="email" placeholder="Digite o Email">
                </div>

                <div>
                    <label for="senha">Senha: </label>
                    <input type="password" name="senha" id="senha" placeholder="Digite a senha">
                </div>

                <div>
                    <label for="confEmail">Confirmação de email: </label>
                    <input type="text" name="confEmail" id="confEmail" placeholder="Confirme o email">
                </div>

                <div>
                    <label for="confSenha">Confirmação de senha: </label>
                    <input type="password" name="confSenha" id="confSenha" placeholder="Confirme a senha">
                </div>

                </div>
            </fieldset>

            <fieldset>
                <legend>Interesses</legend>

                <div>
                <div class="radioFieldset"> 
                    <fieldset class="radioOptions">
                        Esportes:
                        <label for="natacao"><input type="checkbox" id="natacao" name="natacao">Natação</label>
                        <label for="ginastica"><input type="checkbox" id="ginastica" name="ginastica">Ginastica</label>
                        <label for="futebol"><input type="checkbox" id="futebol" name="futebol">Futebol</label>
                        <label for="corrida"><input type="checkbox" id="corrida" name="corrida">Corrida</label>
                        <label for="basquete"><input type="checkbox" id="basquete" name="basquete">Basquete</label>
                        <label for="judo"><input type="checkbox" id="judo" name="judo">Judô</label>
                        <label for="boxe"><input type="checkbox" id="boxe" name="boxe">Boxe</label>
                        <label for="tennis"><input type="checkbox" id="tennis" name="tennis">Tennis</label>
                        <label for="atletismo"><input type="checkbox" id="atletismo" name="atletismo">Atletismo</label>
                    </fieldset>

                    <fieldset class="radioOptions">
                        O que você deseja aprender? 
                        <label for="html"><input type="checkbox" id="html" name="html">HTML</label>
                        <label for="css"><input type="checkbox" id="css" name="css">CSS</label>
                        <label for="javascript"><input type="checkbox" id="javascript" name="javascript">JavaScript</label>
                        <label for="php"><input type="checkbox" id="php" name="php">PHP</label>
                        <label for="sql"><input type="checkbox" id="sql" name="sql">SQL</label>
                        <label for="python"><input type="checkbox" id="python" name="python">Python</label>
                        <label for="java"><input type="checkbox" id="java" name="java">Java</label>
                        <label for="delphi"><input type="checkbox" id="delphi" name="delphi">Delphi</label>
                        <label for="uml"><input type="checkbox" id="uml" name="uml">UML</label>
                    </fieldset>

                    <fieldset class="radioOptions">
                        Como tomou ciência do curso de informática?  
                        <label for="checkbox"><input type="checkbox" id="checkbox" name="checkbox">Radio</label>
                        <label for="jornal"><input type="checkbox" id="jornal" name="jornal">Jornal</label>
                        <label for="tv"><input type="checkbox" id="tv" name="tv">TV</label>
                        <label for="E-mail"><input type="checkbox" id="E-mail" name="E-mail">E-mail</label>
                        <label for="indicAluno"><input type="checkbox" id="indicAluno" name="indicAluno">Indicação de aluno</label>
                        <label for="indicProf"><input type="checkbox" id="indicProf" name="indicProf">Indicação do professor</label>
                        <label for="google"><input type="checkbox" id="google" name="google">Google</label>
                        <label for="facebook"><input type="checkbox" id="facebook" name="facebook">Facebook</label>
                        <label for="OutrosRedes"><input type="checkbox" id="OutrosRedes" name="OutrosRedes">Outras redes sociais</label>
                        <label for="outdoor"><input type="checkbox" id="outdoor" name="outdoor">Outdoor</label>
                        <label for="outros">Outros<input type="text" id="outros" name="outros"></label>
                    </fieldset>
                </div>
                </div>
            </fieldset>

            <div>
                <input type="submit" id="enviar" name="submit" value="Enviar dados do formulario"> 
                <input type="reset" id="resetar" value="Limpar dados do formulario">
                <button><a href="view.php">Visualizar registros</a></button>
            </div>
        </form>
    </body>
</html>