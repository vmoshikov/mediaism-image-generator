# Генератор изображений для социальных сетей со страниц новостного сайта
![](https://img.shields.io/appveyor/ci/vmoshikov/mediaism-image-generator)
[![](/assets/donate.svg)](https://money.yandex.ru/to/410015285787623) [![](/assets/support.svg)](mailto:hello@moshikov.co)


После подключения, на сайте появится кнопка вызывающая модальное окно с HTML визуализацией будущего изображения, после нажатия на кнопку "Создать" откроется новая вкладка в браузере со сгененрированным PNG изображением. 

![Пример работы](example.gif)

## Установка
Необходимо на странице материала (для администратора) подключить файл с макетом и скриптом для генерации (Например: `include admin-ipost.php`)

Пример из папки `WordPress example` полностью готов для интеграции на страницу `single.php`, за исключением подключения библиотеки `html2canvas`

## Используемые библиотеки

[Bootstrap 4](https://getbootstrap.com/) – Используются базовые стили и вызов модального окна


[html2canvas](https://html2canvas.hertzen.com/) - Генерирует PNG из HTML

jQuery

