# Тестовое задание 2022
Создать страницу с формой регистрацией
В форме должны быть следующие поля:
- имя
- фамилия
- email
- пароль
- повтор пароля
Реализовать отправку этой формы при помощи AJAX.
Реализовать обработку AJAX запроса на php.
В обработчике нужно:
 1) провести валидацию
email содержит @
пароли совпадают
При желании эти валидации можно также продублировать еще на клиенте (js)
 2) задать индексированный массив без ключа в котором будет находиться некоторое количество уже существующих юзеров (получать его из какой-либо базы данных не требуется). В массиве у каждого пользователя должны присутствовать поля email, id, name.
 3) Провести проверку есть ли в этом массиве элемент с заполненным юзером емейлом.
 4) Результат проверки должен логироваться в файл в любом формате

При успешной проверке (пользователь не найден) - форма должна скрываться, а пользователю должно выводиться сообщение об успешной регистрации. 
При неудачной проверке (например, пользователь уже был зарегистрирован) - пользователю должна выводиться соответствующая ошибка над формой.

