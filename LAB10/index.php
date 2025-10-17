<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Лабораторная работа №10</title>
    <style>
        .task { margin-bottom: 40px; padding: 20px; border: 1px solid #ccc; }
        form { margin: 10px 0; }
        textarea { display: block; margin: 10px 0; }
    </style>
</head>
<body>
    <h1>Лабораторно-практическая работа №10</h1>

    <!-- Задание 1 -->
    <div class="task">
        <h2>Задание 1: Информация о членах группы</h2>
        <form method="POST">
            <label>Выберите студента:
                <select name="student">
                    <option value="petrov">Петров А.И.</option>
                    <option value="sidorov">Сидоров М.В.</option>
                    <option value="ivanova">Иванова К.П.</option>
                </select>
            </label>
            <textarea name="info" rows="4" cols="50" placeholder="Здесь появится информация..." readonly>
<?php
if (isset($_POST['student'])) {
    $birthdays = [
        'petrov' => 'Родился 15.03.2002 в Сыктывкаре',
        'sidorova' => 'Родилась 22.07.2001 в Санкт-Петербурге',
        'ivanova' => 'Родилась 30.11.2002 в Печоре'
    ];
    echo $birthdays[$_POST['student']];
}
?></textarea>
            <br>
            <button type="submit">Получить информацию</button>
            <button type="reset">Сбросить</button>
        </form>
    </div>

    <!-- Задание 2 -->
    <div class="task">
        <h2>Задание 2: Повторение фразы</h2>
        <form method="POST">
            <label>Количество повторений:
                <input type="number" name="count" min="1" max="10" required>
            </label>
            <button type="submit">Вывести</button>
        </form>

        <?php
        if (isset($_POST['count'])) {
            $count = (int)$_POST['count'];
            for ($i = 0; $i < $count; $i++) {
                echo "<p>Привет</p>";
            }
        }
        ?>
    </div>
</body>
</html>