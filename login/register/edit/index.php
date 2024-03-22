<?php

require_once('../../../services/get_client_by_id.php');

$id = 29;

$client = get_client_by_id($id);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="Latin1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NoSleep - register</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body>

    <form action="../../../routes/update.php?id=<?=$client['id']?>" method="post">

        <!-- traz a data de crição do registro -->
        <input type="hidden" name="dt_created_at" value="<?=$client['dt_created_at']?>">
    
        <div class="titulo">
            <img src="../../../img_logo/Destaques_01.png" alt="">
        </div>

        <div class="subtitulo">
            <p>REGISTER</p>
        </div>

        <div class="register">

            <input type="text" name="name" placeholder="Name" value="<?=$client['name']?>">
            <input type="text" name="surname" placeholder="surname" value="<?=$client['surname']?>">

            <div class="register_up">
                <input type="text" name="email" placeholder="Email" value="<?=$client['email']?>">
                <br>
                <input type="text" name="telephone" placeholder="Telephone" value="<?=$client['telephone']?>">
            </div>
            
            <div class="register_contents">
                <div class="register_gender">
                    <label>Gender</label>
                    <select name="gender" id="gender">
                        <option value="<?=$client['gender']?>">
                            <?php   
                                if($client['gender'] == 0){
                                    echo 'Prefer not to say';
                                }elseif($client['gender'] == 1){
                                    echo 'Masculine';
                                }else{
                                    echo 'Feminine';
                                }
                            ?>
                        </option>
                        <option value="0">Prefer not to say</option>
                        <option value="1">Masculine</option>
                        <option value="2">Feminine</option>
                    </select>
                </div>
                
                <div class="register_birthday">
                    <label>birthday</label>
                    <input type="date" name="birthday" id="birthday" value="<?=$client['birthday']?>">
                </div>
            </div>

            <div class="register_down">
                <input type="text" name="password" placeholder="Password" value="<?=$client['password']?>">
            </div>

            <div class="register_button">
                <button type="submit">save</button>
            </div>
            <div class="delete_login">
                <a href='../../../routes/delete.php?id=<?=$client['id']?>'>delete account</a>
            </div>

        <footer class="footer">
            <div class="rede_social">
                <ul>
                    <li><a href="https://www.instagram.com/no.sleep.boyz?igsh=MWVsOHk4ZjIwY2hrOA=="><i class="fa-brands fa-instagram"></i></a></li>
                </ul>
            </div>
            <div class="info">
                <p>NoSleep, trust and quality.</p>
            </div>
            <div class="copy">
                <p>&copy;NoSleep</p>
            </div>
        </footer>
    </form>

    <script src="https://kit.fontawesome.com/5dc8345cee.js" crossorigin="anonymous"></script>

</body>
</html>