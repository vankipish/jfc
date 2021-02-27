<?php
/*
 * Plugin Name: Jfc плагин
 */


// Добавление админских меню в админскую страницу
function menu_panel_employees() {
    add_menu_page('Сотрудники', 'Сотрудники', 'manage_options', 'adm_employees.php', 'adm_employees','dashicons-groups', 1);

// Страница раздела - сотрудники
    function adm_employees() {
// содержимое страницы с настройками
        echo "<h2>Сотрудники и ключевые роли</h2>";
        include_once('jfc_employees.php');
    }

// Вторая менюшка, пока условно: цены
    add_menu_page('Цены', 'Цены', 'manage_options', 'ceni.php', 'ceni','dashicons-store', 3);
    function ceni() {
// тут уже будет находиться содержимое страницы
        echo "<h2>Цены</h2><hr><p>Изменить цены</p><hr>";
    }
}
add_action('admin_menu', 'menu_panel_employees');
