<?php
 

/**
 * Пользовательские данные для работы с базой данных
 *
 * @param String host      название/ip хоста БД
 * @param String db_name  название базы данных
 * @param String user     username
 * @param String password
 * @param String items кол-во статей на странице
 */




$dbhost = 'localhost';
$dbname = 'blog';
$username = "root";
$password = "";

//Смена количества выводимых статей
$per_page = 10;

$db = new PDO("mysql:host=$dbhost; dbname=$dbname", $username, $password);

// $monthes = array(
//     1 => 'Января', 2 => 'Февраля', 3 => 'Марта', 4 => 'Апреля',
//     5 => 'Мая', 6 => 'Июня', 7 => 'Июля', 8 => 'Августа',
//     9 => 'Сентября', 10 => 'Октября', 11 => 'Ноября', 12 => 'Декабря'
// );

