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
        ?>
        <!DOCTYPE HTML>
        <html lang="en">
        <head>
            <meta charset="utf-8">
            <title>Регистрация</title>
            <style>
                #reg {
                    background: darkred;
                    color: #fff;
                    text-align: center;
                    font-size: 50px;
                    width: 1000px;
                    height: 1150px;
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

                .button2 {
                    background-color: #800000;
                    color: white;
                    border-width: 2px;
                    border-color: white;
                    width: 300px;
                    height: 50px;
                    margin-bottom: 60px;
                    font-family: "Arial Black";
                    font-size: 20px;
                }
            </style>
        </head>
        <body>
        <div id="reg">
            <center>
                <form method="POST">
                    Регистрация<br><br>
                    Имя:<br><input type="text" name="name"><br><br>
                    Email:<br><input type="email" name="email"><br><br>
                    Пароль:<br><input type="password" name="password"><br><br>
                    <input type="submit" value="Зарегистрироваться" class="button1">
                </form>
                <form action="http://localhost/GameUp/GameUpAuthorisation/">
                    <p>Уже зарегистрированы?</p>
                    <input class="button2" type="submit" value="Авторизация"/>
                </form>
            </center>
        </div>
        </body>
        </html>
        <?php
    }

    public function errorName(): void
    {
        ?>
        <!DOCTYPE HTML>
        <html lang="en">
        <head>
            <meta charset="utf-8">
            <title>Регистрация</title>
            <style>
                #reg {
                    background: darkred;
                    color: #fff;
                    text-align: center;
                    font-size: 50px;
                    width: 1000px;
                    height: 1150px;
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

                .button2 {
                    background-color: #800000;
                    color: white;
                    border-width: 2px;
                    border-color: white;
                    width: 300px;
                    height: 50px;
                    margin-bottom: 60px;
                    font-family: "Arial Black";
                    font-size: 20px;
                }
            </style>
        </head>
        <body>
        <div id="reg">
            <center>
                <form method="POST">
                    Пользователь с таким именем уже существует!<br><br>
                    Регистрация<br><br>
                    Имя:<br><input type="text" name="name"><br>
                    Email:<br><input type="email" name="email"><br>
                    Пароль:<br><input type="password" name="password"><br>
                    <input type="submit" value="Зарегистрироваться" class="button1">
                </form>
                <form action="http://localhost/GameUp/GameUpAuthorisation/">
                    <p>Уже зарегистрированы?</p>
                    <input class="button2" type="submit" value="Авторизация"/>
                </form>
            </center>
        </div>
        </body>
        </html>
        <?php
    }

    public function errorEmail(): void
    {
        ?>
        <!DOCTYPE HTML>
        <html lang="en">
        <head>
            <meta charset="utf-8">
            <title>Регистрация</title>
            <style>
                #reg {
                    background: darkred;
                    color: #fff;
                    text-align: center;
                    font-size: 50px;
                    width: 1000px;
                    height: 1150px;
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

                .button2 {
                    background-color: #800000;
                    color: white;
                    border-width: 2px;
                    border-color: white;
                    width: 300px;
                    height: 50px;
                    margin-bottom: 60px;
                    font-family: "Arial Black";
                    font-size: 20px;
                }
            </style>
        </head>
        <body>
        <div id="reg">
            <center>
                <form method="POST">
                    Пользователь с таким email'ом уже существует!<br><br>
                    Регистрация<br><br>
                    Имя:<br><input type="text" name="name"><br>
                    Email:<br><input type="email" name="email"><br>
                    Пароль:<br><input type="password" name="password"><br>
                    <input type="submit" value="Зарегистрироваться" class="button1">
                </form>
                <form action="http://localhost/GameUp/GameUpAuthorisation/">
                    <p>Уже зарегистрированы?</p>
                    <input class="button2" type="submit" value="Авторизация"/>
                </form>
            </center>
        </div>
        </body>
        </html>
        <?php
    }
}