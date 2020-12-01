<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/modal_form.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Test</title>
</head>
<body>
    <button id="open_form">Внести данные</button><br><br><br><br>

    <div id="container">
    <!-- Всплывающая форма -->
        <div class="content">
            <span id="close_form_btn">&times;</span>
            <h2 id="text_over_form">Введите данные</h2>
            <form action="./server/add.php" method="post">
                <input type="text" id="name" name="name" placeholder="Имя"><br><br>
                <input type="text" id="surename" name="surename" placeholder="Фамилия"><br><br>
                <select name="status" id="status">
                    <option value="not_ill">Не болен</option>
                    <option value="ill">Болен</option>
                    <option value="had_a_covid">Переболел</option>
                    <option value="suspicion_of_covid">Подозрение на covid</option>
                </select><br><br>
                <input type="text" id="residence" name="residence" placeholder="Место проживания"><br><br>
                <input type="text" id="frequent_visit" name="frequent_visit" placeholder="Место частого посещения"><br><br>
                <input type="submit" id="submit" value="Отправить данные">
            </form>
        </div>
    </div>

    <script src="./script/script.js"></script>
</body>
</html>