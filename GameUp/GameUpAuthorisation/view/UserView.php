<?php

class UserView
{
    private UserList $userList;

    public function __construct(UserList $userList)
    {
        $this->userList = $userList;
    }

    public function render(): void
    {
        // Форма для добавления пользователей
        ?>
        <!DOCTYPE HTML>
        <html lang="en">
        <head>
            <meta charset="utf-8">
            <title>Авторизация</title>
            <style>
                #reg {
                    background: darkred;
                    color: #fff;
                    text-align: center;
                    font-size: 50px;
                    width: 1000px;
                    height: 670px;
                    margin: auto;
                    margin-top: 120px;
                    font-family: "Arial Black";
                    border: 3px solid #fff;
                    border-radius: 10px;
                }

                body {
                    background: darkgrey;
                    color: black;
                }

                .button1 {
                    background-color: #800000;
                    color: white;
                    border-width: 2px;
                    border-color: white;
                    width: 300px;
                    height: 50px;
                    margin-top: 50px;
                    font-family: "Arial Black";
                    font-size: 20px;
                }
            </style>
        </head>
        <body>
        <div id="reg">
            <center>
                <form method="POST">
                    Авторизация<br><br>
                    Email:<br><input type="email" name="email"><br>
                    Пароль:<br><input type="password" name="password"><br>
                    <input type="submit" value="Войти" class="button1">
                </form>
            </center>
        </div>
        </body>
        </html>
        <?php
    }

    public function error(): void
    {
        // Форма для добавления пользователей
        ?>
        <!DOCTYPE HTML>
        <html lang="en">
        <head>
            <meta charset="utf-8">
            <title>Авторизация: ошибка</title>
            <style>
                #reg {
                    background: darkred;
                    color: #fff;
                    text-align: center;
                    font-size: 50px;
                    width: 1000px;
                    height: 670px;
                    margin: auto;
                    margin-top: 120px;
                    font-family: "Arial Black";
                    border: 3px solid #fff;
                    border-radius: 10px;
                }

                body {
                    background: darkgrey;
                    color: black;
                }

                .button1 {
                    background-color: #800000;
                    color: white;
                    border-width: 2px;
                    border-color: white;
                    width: 300px;
                    height: 50px;
                    margin-top: 50px;
                    font-family: "Arial Black";
                    font-size: 20px;
                }
            </style>
        </head>
        <body>
        <div id="reg">
            <center>
                <form method="POST">
                    Неверный email или пароль<br><br>
                    Авторизация<br><br>
                    Email:<br><input type="email" name="email"><br>
                    Пароль:<br><input type="password" name="password"><br>
                    <input type="submit" value="Войти" class="button1">
                </form>
            </center>
        </div>
        </body>
        </html>
        <?php
    }
}
