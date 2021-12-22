<?php include_once("assets/templates/header.php"); ?>
    <main>
        <div class="apresentation">
            <h2> Crie um pensamento que você gostaria de lembrar </h2> 
            <p>Ás vezes, pensamos e por um segundo esquecemos... Grave aqui para não correr esse risco!</p>
        </div>
        <form action="assets/config/backend.php" method="post" class="creating">
            <textarea name="text" cols="30" rows="10" placeholder="Digite o seu pensamento aqui..." required></textarea>
            <button type="submit" id="save-btn">Salvar pensamento</button>
        </form>
    </main>
<?php include_once("assets/templates/footer.php"); ?>