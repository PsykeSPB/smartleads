# Тестовое задание на вакансию Веб-программист в компанию SmartLeads
Исполнитель: Тихоплав Виталий ([PsykeSPB@gmail.com](mailto:psykespb@gmail.com))

г. Санкт-Петербург

Ноябрь, 2018г.

## Структура
В директории [task](/task) собраны исходные файлы и [текст задания](/task/task.md).

Решения собраны в отдельные директории
- [Задание 1](/solutions/task1/)
- [Задание 2](/solutions/task2/)
- [Задание 3](/solutions/task3/)

## Задание 1
Реализовать сортировку таблицы ([01.html](/task/01.html)) на Javascript с учетом типа столбца (указан в атрибуте data-type). Сортировка должна выполняться при клике на заголовок столбца. При повторном клике по заголовку отсортированного столбца необходимо отсортировать таблицу в обратном порядке.

### Решение
Решение представлено в виде [html](/solutions/task1/index.html) страницы, находящейся под управлением vue.js. [В скрипте](/solutions/task1/js/app.js) задается массив данных, которой в последствии передается в экземпляр vue. Этот массив может быть передан в скрипт и другими способами, например в качестве json пакета, получаемого с сервера.

Для каждого параметра сортировки создан собственный метод, который может проводить сортировку в обоих направлениях. Для релизации сортировки в обратном порядке введена переменная ```sorted```, содержащая информацию о последней сортировке.

## Задание 2
Разработать форму обратной связи.Форма должна включать следующие поля: 
1) имя;
2) email;
3) текст сообщения.

Все поля обязательные. Необходимо предусмотреть валидацию поля email. Значения нужно сохранять в базу данных MySQL (с использованием PDO).

### Решение
Результат выполнения вы можете протестировать по адресу [qa.psykespb.com](http://qa.psykespb.com/). Также по адресу [qa.psykespb.com/messages](http://qa.psykespb.com/messages) можно просмотреть все сообщения, хранящиеся в MySQL БД.

Данное задание выполненоо с использованем фреймворка laravel. [Директория](/solutions/task2/) представляет из себя группу файлов, которые было необходимо добавить в "сырой" проект (в некоторых случаях с использованием команд artisan) для достижения необходимого результата. Файлы конфигурации проекта laravel не приведены.

Для создания формы использовалось дополнение [Laravel Collective](https://laravelcollective.com/docs/master/html). Валидация данных происходит исключительно на сервере (за исключением стандартной валидации email в html form) в контроллере [MessagesController](/solutions/task2/app/Http/Controllers/MessagesController.php) с помощью встроенного пакета. Ошибки валидации обрабатываются шаблоном [app.blade.php](/solutions/task2/resourses/views/layouts/app.blade.php).

Валидация на стороне клиента отсутствует, однако, отдельно была разработана форма, демонстрирующая эту функцию. Её код можно найти [здесь](https://codepen.io/psykespb/pen/MzjMoP).

## Задание 3
Дан текстовый файл размером 2ГБ. Напишите класс, реализующий интерфейс SeekableIterator, для чтения данного файла. Элементом списка считать одну строку текстового файла (оканчиваются \n). Для генерации текстового файла размером 2 Гб можно воспользоваться скриптом (в приложении). Для оценки производительности своего решения предлагаем написать простенький скрипт для выборки 10 000 случайных записей.

### Решение
Готовое решение данного задания было найдено [здесь](https://github.com/actofgod/reklama_guru_test/blob/master/src/Task3/FileLineIterator.php). [Данный интерфейс](/solutions/task3/FileLineIterator.php) имеет конструктор, принимающий имя файла, знак, сигнализирующий о конце строики, и размер буфера памяти в качестве входных параметров. По-умолчанию знаком является "\n", а размер буфера составляет 1Мб.
Реализованы следующие методы:

- seek( номер_строки ).

  Осуществляет поиск и чтение заданной строки из файла.
- current().

  Возвращяет значение текущей строки файла, прочитанной методом seek().

А также другие методы для работы с файлом и контроля исполнения.

Данный класс был протестирован с помощью  скрипта [test.php](/solutions/task3/test.php) в консоли удалённого сервера и текстового файла, сгененрированного при помощи приложенного к заданию скрипта. Результаты тестов:

1. 10 чтений      - 45ms
1. 100 чтений     - 50ms
2. 1000 чтений    - 75ms
3. 10000 чтений   - 1s 230ms

По результатам теста, можно заключить, что данное решение удовлетворяет всем требованиям.
