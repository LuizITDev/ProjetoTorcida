<?php
echo"<h1> Dados Enviados </h1>";

echo "<p> Torcedor: " . $_POST['nome'] . "</p>";
echo "<p> CPF: ". $_POST['cpf'] . "</p>";
echo "<p> Time: " . $_POST['time'] . "</p>";
echo "<p> Possui a Camisa ? : ". $_POST["camisa"] . "</p>";
echo "<p> Frequencia : ". $_POST["frequencia"] . "</p>";
echo "<p> Membro de Organizada " .(isset($_POST["torcidaog"]) ? $_POST["torcidaog"] : "Não") . "</p>";
echo "<p> Socio Torcedor? " . (isset($_POST['socio']) ? $_POST['socio'] : "Não") . "</p>";



?>
