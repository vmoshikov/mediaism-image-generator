# Генератор изображений для социальных сетей со страниц новостного сайта
![](https://img.shields.io/appveyor/ci/vmoshikov/mediaism-image-generator)
[<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="60" height="20"><linearGradient id="b" x2="0" y2="100%"><stop offset="0" stop-color="#bbb" stop-opacity=".1"/><stop offset="1" stop-opacity=".1"/></linearGradient><clipPath id="a"><rect width="60" height="20" rx="3" fill="#fff"/></clipPath><g clip-path="url(#a)"><path fill="#555" d="M0 0h17v20H0z"/><path fill="#4c1" d="M17 0h43v20H17z"/><path fill="url(#b)" d="M0 0h60v20H0z"/></g><g fill="#fff" text-anchor="middle" font-family="DejaVu Sans,Verdana,Geneva,sans-serif" font-size="110"> <text x="95" y="150" fill="#010101" fill-opacity=".3" transform="scale(.1)" textLength="70">₽</text><text x="95" y="140" transform="scale(.1)" textLength="70">₽</text><text x="375" y="150" fill="#010101" fill-opacity=".3" transform="scale(.1)" textLength="330">Донат</text><text x="375" y="140" transform="scale(.1)" textLength="330">Донат</text></g> </svg>](https://money.yandex.ru/to/410015285787623) [<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="141" height="20"><linearGradient id="b" x2="0" y2="100%"><stop offset="0" stop-color="#bbb" stop-opacity=".1"/><stop offset="1" stop-opacity=".1"/></linearGradient><clipPath id="a"><rect width="141" height="20" rx="3" fill="#fff"/></clipPath><g clip-path="url(#a)"><path fill="#007ec6" d="M0 0h0v20H0z"/><path fill="#007ec6" d="M0 0h141v20H0z"/><path fill="url(#b)" d="M0 0h141v20H0z"/></g><g fill="#fff" text-anchor="middle" font-family="DejaVu Sans,Verdana,Geneva,sans-serif" font-size="110"> <text x="705" y="150" fill="#010101" fill-opacity=".3" transform="scale(.1)" textLength="1310">Поддержка по запросу</text><text x="705" y="140" transform="scale(.1)" textLength="1310">Поддержка по запросу</text></g> </svg>](mailto:hello@moshikov.co)


После подключения, на сайте появится кнопка вызывающая модальное окно с HTML визуализацией будущего изображения, после нажатия на кнопку "Создать" откроется новая вкладка в браузере со сгененрированным PNG изображением. 

![Пример работы](example.gif)

## Установка
Необходимо на странице материала (для администратора) подключить файл с макетом и скриптом для генерации (Например: `include admin-ipost.php`)

Пример из папки `WordPress example` полностью готов для интеграции на страницу `single.php`, 

## Используемые библиотеки

[Bootstrap 4](https://getbootstrap.com/) – Используются базовые стили и вызов модального окна


[html2canvas](https://html2canvas.hertzen.com/) - Генерирует PNG из HTML

jQuery

