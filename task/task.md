## 1. Реализовать сортировку таблицы (01.html) на Javascript с учетом типа столбца (указан в атрибуте data-type).
Сортировка должна выполняться при клике на заголовок столбца.
При повторном клике по заголовку отсортированного столбца необходимо отсортировать таблицу в обратном порядке.
 
## 2. Разработать форму обратной связи.
Форма должна включать следующие поля:
1) имя;
2) email;
3) текст сообщения.
Все поля обязательные.
Необходимо предусмотреть валидацию поля email.
Значения нужно сохранять в базу данных MySQL (с использованием PDO).
 
## 3. Дан текстовый файл размером 2ГБ. Напишите класс, реализующий интерфейс SeekableIterator, для чтения данного файла.
Элементом списка считать одну строку текстового файла (оканчиваются \n).
Для генерации текстового файла размером 2 Гб можно воспользоваться скриптом (в приложении).
Для оценки производительности своего решения предлагаем написать простенький скрипт для выборки 10 000 случайных записей.
 
Задания 2 и 3 должны быть реализованы по шаблону проектирования MVC.

По поводу третьего задания суть в чем:
1. Суметь прочитать большой файл большое количество раз, не повесив и не убив скрипт на втором-третьем выполнении.
2. Читать нужно рандомные строки по номерам подряд, т.е. 999 строку, потом 1267, потом 3, потом 3024, 512 итп итп.
"Прочитать строку" значит вывести ее куда угодно. Особых требований по выводу нет, по коду мы и так поймем читается строка или нет.
3. Скрипт должен суметь прочитать рандомные строки большого файла (2гига и больше) 100-500-1000 раз и не умереть, при этом время выполнения скрипта должно быть разумным, не сутки и не несколько часов, если время исчисляется минутами - то все хорошо.
  
По заданиям, первое можно и на vue, чаще всего нам пишут просто на js, второе и третье - использование фреймворка не обязательно, но желательно, если вы его знаете, т.к. это на самом деле облегчит вам задачу и позволит не изобретать велосипед.
 
Фреймворк можете выбрать любой какой больше нравится и какой знаете, если yii2 - пишите на нем. Если нет - пишите нативно.
