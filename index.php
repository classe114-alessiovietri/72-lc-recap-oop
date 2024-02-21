<?php
    require_once __DIR__.'/classes/Address.php';
    require_once __DIR__.'/classes/User.php';
    require_once __DIR__.'/classes/Admin.php';

    $firstAddress = new Address('Via Roma, 1', '80100', 'Napoli', 'Italia');
    
    // Istanzio un oggetto di classe User
    $firstUser = new User(1, 'Alessio', 'Vietri', 'ale@vie.it', $firstAddress);
    // $firstUser->email = 'alessio@boolean.careers';
    try {
        $firstUser->setEmail('alessio@boolean.careers');
        $firstUser->setEmail(true);
    }
    catch (Exception $e) {
        var_dump($e);
        echo '<h2 style="color: red;">'.$e->getMessage().'</h2>';
    }
    var_dump($firstUser);
    // var_dump($firstUser->email);
    var_dump($firstUser->getEmail());

    // $firstUser->lastNames *= 3;
    // var_dump($firstUser->lastName);

    $firstAdmin = new Admin(2, 'Mario', 'Rossi', 'mario@rossi.it', true);
    var_dump($firstAdmin);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Recap PHP OOP</title>
    </head>
    <body>

        <header>
            HEADER
        </header>

        <main>
            MAIN
        </main>

        <footer>
            FOOTER
        </footer>
        
    </body>
</html>