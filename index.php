<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário Torcida Organizada</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="box">
        <h1>Cadastro de Torcida Organizada</h1>
        <p>Dados do Torcedor</p>

        <form id = "cadastro"action="./pages/formulariotorcedor.php" method="post">


        <label for="Nome">Nome</label> <br>
        <input type="text" id="nome" name="nome" placeholder="Digite seu nome" required> <br><br>

        
        <label for="CPF"> CPF </label> <br>
        <input type="text" id="cpf"  name="cpf" placeholder="000.000.00-00" required> <br><br>

        <label for="time">Time</label><br>
        <select id="time" name="time" required><br>

            <option value="">Selecione ....</option> <br>

            <option value="Palmeiras">Palmeiras</option>
            <option value="Flamengo">Flamengo</option>
            <option value="Cruzeiro">Cruzeiro</option>
            <option value="Mirasol">Mirasol</option>
            <option value="Bahia">Bahia</option>
            <option value="6">Botafogo</option>
            <option value="Botafogo">Fluminense</option>
            <option value="Vasco">Vasco</option>
            <option value="São Paulo">São Paulo</option>
            <option value="Red Bull Bragantino">Red Bull Bragantino</option>
            <option value="Corinthinas">Corinthinas</option>
            <option value="Grêmio">Grêmio</option>
            <option value="Ceará">Ceará</option>
            <option value="Internacional">Internacional</option>
            <option value="Atlético-MG">Atlético-MG</option>
            <option value="Santos">Santos</option>
            <option value="Vitória">Vitória</option>
            <option value="Juventudes">Juventudes</option>
            <option value="Fortaleza">Fortaleza</option>
            <option value="2">Sport</option>
            
        </select> <br><br>

        <label for="camisa">Possui a Camisa Oficial ?</label> <br>
        
        <div class="camisa">
            <label><input type="radio" required name="camisa" value="sim"> Sim </label>
            <label><input type="radio" required name="camisa" value="nao"> Não </label>


        </div> <br>

        <label for="frequencia">Quantas vezes você vai ao estádio ao ano ?</label><br><br>
        <div class="frequencia"io id="frequencia" name="frequencia" required>
            <label><input type="radio" required name="frequencia" value="raramente" > Raramente</label> 
            <label><input type="radio"  required name="frequencia" value="pouco" >Pouco</label> 
            <label><input type="radio"  required name="frequencia" value="muito" > Muito</label> 
             <label><input type="radio" required name="frequencia" value="se,pre" >Sempre</label>           
 

         <br><br>


        </label><br>
        <label>

    <input type="checkbox"  name="torcidaog" value="sim"> Sou de Torcida Oraganizada </label> <br><br>

    <input type="checkbox"   name="socio" value="sim"> Sou Sócio Torcedor </label> <br><br>

  

        <button type="submit">Enviar Cadastro</button> <button type="submit">Limpar</button>












        



    </form>

    </div>
    
</body>
<footer>
    &copy; 2025 - Luiz e Victor
</footer>
</html>