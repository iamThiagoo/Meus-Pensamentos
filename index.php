<?php include_once("assets/templates/header.php"); ?>
    <main>
        <div class="apresentation">
            <h2>Seja muito bem vindo(a)!</h2>
            <?php if(count($pensamentos) === 0): ?>
                <p>Crie um pensamento para não esquecê-lo. <a href="create.php">Clicando aqui</a></p>
            <?php else: ?>
                <p>Esses são os seus pensamentos anotados...</p>
        </div>
        <div class="card-container">
            <?php foreach($pensamentos as $pensamento): ?>
                <div class="card-box">
                    <div class="card-text">
                        <p><?= $pensamento["pensamentos"]; ?></p>
                    </div>
                    <a href="assets/config/backend.php?id=<?= $pensamento["id"] ?>" class="delete-btn"><i class="fas fa-trash-alt"></i></a>
                </div>
            <?php endforeach; ?>
        </div>
        <?php endif; ?>
        <div class="create-btn">
            <a href="create.php">+</a>
        </div>
    </main>
<?php include_once("assets/templates/footer.php"); ?>