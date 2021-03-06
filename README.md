# GoodFood
Адаптивная верстка сайта с применением html, css, php и js + ORM библиотека RedBeanPHP

# Введение
#### Описание: GoodFood - сайт для людей в поисках интересных рецептов. Полностью адаптирован под любые размеры экрана.
Доступный функцинал-

- Регистрация
- Авторизация
- Смена пароля
- Смена логина
- Смена Email

# Структура проекта

## Главная страница
Главная страница полностью адаптирована под любые устройства, при определенной ширине экрана меню в хедере сворачивается. Хедер и футер подключаются к странице через php. Также присуствует кнопка для прокрутки страницы вверх, выполненная на js. 
Для неавторизованных пользователей доступка кнопка "Вход" в шапке сайта. Для авторизованных есть возможность зайти на страницу профиля, просмотреть и отредактировать данные. Функции регистрации и авторизации выполнены на языке php с использованием сессий.

![main page](/screenshots/main.PNG)

![footer](/screenshots/footer.PNG)

## Регистрация
На странице регистрации требуется указать логин, Email и пароль. Написана проверка ошибок на js и проверка на совпадение с уже существующими аккаунтами на php.

![signup page](/screenshots/signup_page.PNG) 

![errors](/screenshots/errors.PNG)

## Авторизация
На странице авторизации требуется указать логин и пароль. Написана проверка ошибок на php.

![login page](/screenshots/login_page.PNG) 

## Профиль
В профиле можно посмотреть/редактировать свой логин и Email, а также сменить пароль. Функции редактирования выполнены на языке php.

![profile](/screenshots/profile.PNG) 


![pass](/screenshots/pass.PNG)


![login](/screenshots/login.PNG)


![email](/screenshots/email.PNG)

## Галерея
Галерея сайта выполнена на php. Сканируется папка с изображениями, они добавляются в массив и далее выводятся в цикле foreach по индексу в теге img.

![gallery](/screenshots/gallery.PNG)

## Страницы, которые будут добавлены в будущем
Страницы, которые еще будут добавлены на сайт, выглядят следующим образом.

![not done pages](/screenshots/not_done.PNG)

## Адаптивность
Примеры того, как сайт выглядит на разлинчых устройствах.

![menu iphone](/screenshots/menu_phone.PNG)

![main page iphone](/screenshots/phone.PNG)

# Установка
```
git clone https://github.com/aveclick/GoodFood_project.git

```

27.07.2021




