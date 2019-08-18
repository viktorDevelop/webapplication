-- phpMyAdmin SQL Dump
-- version 4.4.15.7
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Авг 18 2019 г., 16:29
-- Версия сервера: 5.5.50
-- Версия PHP: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `framework1`
--

-- --------------------------------------------------------

--
-- Структура таблицы `article`
--

CREATE TABLE IF NOT EXISTS `article` (
  `id` int(10) NOT NULL,
  `title` varchar(100) NOT NULL,
  `title_url` varchar(100) NOT NULL,
  `preview` text NOT NULL,
  `full_text` text NOT NULL,
  `description` varchar(200) NOT NULL,
  `keyword` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=57 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `article`
--

INSERT INTO `article` (`id`, `title`, `title_url`, `preview`, `full_text`, `description`, `keyword`) VALUES
(42, 'все теги', 'vse-tegi', 'афыв', '<p style="text-align:center">все теги</p>\r\n', 'фыва', 'ыва'),
(43, 'Актуальный учебник CSS', 'aktualnyi-uchebnik-css', 'В этом учебнике вы изучите CSS 3Вы сможете начать создавать грамотные, функциональные, легко изменяемые, профессиональные с точки зрения подхода к дизайну сайты.\r\nПосле обучения у Вас будет достаточно знаний, чтобы перейти к изучению мощнейшего языка программирования - JavaScript.', '<h2>Что вам даст обучение:</h2>\r\n\r\n<ul>\r\n	<li>В этом учебнике вы изучите&nbsp;<strong>CSS 3</strong>&nbsp;(каскадные таблицы стилей) - современный формальный язык описания внешнего вида документов, описанных с использованием языка гипертекстовой разметки HTML.</li>\r\n	<li>Вы сможете начать создавать грамотные, функциональные, легко изменяемые, профессиональные с точки зрения подхода к дизайну сайты.</li>\r\n	<li>После обучения у Вас будет достаточно знаний, чтобы перейти к изучению мощнейшего языка программирования -&nbsp;<em>JavaScript</em>.</li>\r\n</ul>\r\n', 'тестовая статья', 'css'),
(45, 'JavaScript интерфейсы веб APIв', 'JavaScript-interfeisy-veb-APIv', '							   		Интерфейс документа представляет собой любую веб-страницу, загруженную в браузер и служит точкой входа в содержимое веб-страницы, которое является деревом DOM. Интерфейс Document предоставляет функции глобально для документа, описывает общие свойства и методы для любого вида документа.							   	', '<p style="text-align:center"><span style="font-size:16px">JavaScript интерфейсы веб API</span></p>\r\n\r\n<p style="text-align:justify"><span style="font-size:12px">Этот раздел сайта посвящен описанию различных&nbsp;<em>API</em>&nbsp;(программный интерфейс приложения, интерфейс прикладного программирования - англ.&nbsp;<em>application programming interface</em>), предназначенных для веба.</span></p>\r\n\r\n<p style="text-align:justify"><span style="font-size:12px">Ниже приведёно описание списка интерфейсов (объектов), которые вы можете использовать при разработке различных веб приложений. Для подробного изучения перейдите в интересующий вас интерфейс (объект).</span></p>\r\n', '							   		описание списка интерфейсов							   	', '							   	DOM Интерфейс Интерфейс Document							   '),
(46, 'jQuery селектор', 'jQuery-selektor', 'Определение и применение\r\njQuery селектор class выбирает элементы, глобальный атрибут class которых, имеет указанное значение.', '<h2>Определение и применение</h2>\r\n\r\n<p>jQuery селектор&nbsp;<strong>class</strong>&nbsp;выбирает элементы, глобальный атрибут&nbsp;<a href="https://basicweb.ru/html/global_att_class.php" title="HTML глобальный атрибут class">class</a>&nbsp;которых, имеет указанное значение.</p>\r\n\r\n<hr />\r\n<p>Обращаю Ваше внимание, что для поиска элемента с указанным классом, библиотека jQuery использует функцию&nbsp;<strong>JavaScript</strong>&nbsp;<samp>document.getElementByClassName()</samp>, вследствие чего, поиск элементов происходит быстро.</p>\r\n\r\n<hr />\r\n<p><strong>Обратите внимание на следующие общие правила, которые необходимо соблюдать при работе с селекторами класса:</strong></p>\r\n\r\n<ul>\r\n	<li>все названия селекторов класса должны начинаться с точки (благодаря ей браузеры находят эти селекторы в таблице стилей). Точка требуется только в названии селектора таблицы стилей (в значении глобального HTML атрибута&nbsp;<a href="https://basicweb.ru/html/global_att_class.php" title="Глобальный HTML атрибут class">class</a>&nbsp;она не ставится,&nbsp;<strong>будьте внимательны из-за этого возникает много ошибок</strong>).</li>\r\n	<li>используйте только буквы алфавита (A-Z, a-z), числа, дефисы, знаки подчеркивания.</li>\r\n	<li>название после точки всегда должно начинаться с символа (неправильно:&nbsp;<strong>.50cent</strong>,&nbsp;<strong>.-vottakvot</strong>).</li>\r\n	<li>Учитывайте регистр при наименовании стилевых классов, т.к. они к этому чувствительны и очень ранимы (<strong>.vottakvot</strong>&nbsp;и&nbsp;<strong>.VotTakVot</strong>&nbsp;разные классы).</li>\r\n</ul>\r\n', 'тестовая статья', 'jQuery  class '),
(47, 'Введение в CSS', 'Vvedenie-v-CSS', '							   									   									   									   		В этой статье мы ответим на главные вопросы: что такое CSS, для чего он нужен и где применяется? Язык гипертекстовой разметки HTML используется, чтобы описать содержимое веб страницы, а каскадные таблицы стилей (англ. Cascading Style Sheets - CSS) влияют на то, как эти страницы будут выглядеть (цвета, шрифты, фоновые изображения, интервалы между строками, отступы, границы, эффекты и даже анимация элементов).							   								   								   								   	', '<p style="text-align:justify">В этой статье мы ответим на главные вопросы: что такое&nbsp;<em>CSS</em>, для чего он нужен и где применяется? Язык гипертекстовой разметки&nbsp;<em>HTML</em>&nbsp;используется, чтобы описать содержимое веб страницы, а каскадные таблицы стилей (англ.&nbsp;<strong>Cascading Style Sheets</strong>&nbsp;-&nbsp;<strong>CSS</strong>) влияют на то, как эти страницы будут выглядеть (цвета, шрифты, фоновые изображения, интервалы между строками, отступы, границы, эффекты и даже анимация элементов).</p>\r\n\r\n<hr />\r\n<p style="text-align:justify">Вы можете удивиться, но&nbsp;<strong>каскадные таблицы стилей</strong>&nbsp;(<em>CSS</em>) могут управлять представлением документов не только в браузерах, но и в документах при выводе их на печать, кроме того, позволяют менять представление документа в зависимости от разрешения и типа используемого экрана, ориентации области просмотра экрана и даже в зависимости от соотношения сторон экрана.</p>\r\n\r\n<hr />\r\n<p style="text-align:justify">Благодаря&nbsp;<em>CSS</em>&nbsp;вы сможете производить изменения, относящиеся ко всем страницам Вашего сайта, редактируя при этом лишь один единственный файл таблицы стилей. Интересно? Тогда продолжаем.</p>\r\n\r\n<h2 style="text-align:justify">Что такое стиль</h2>\r\n\r\n<p style="text-align:justify">Стиль в CSS устанавливает внешний вид какого-либо элемента или элементов страницы. Другими словами это команда, которая сообщает браузеру как ему необходимо отформатировать тот, или иной элемент и после этого вывести результат изменения на страницу.</p>\r\n\r\n<p style="text-align:justify">Определение стиля состоит из двух элементов:</p>\r\n\r\n<ol>\r\n	<li style="text-align: justify;">Элемент веб страницы, который непосредственно подлежит форматированию браузером называется&nbsp;<strong>селектор</strong>.</li>\r\n	<li style="text-align: justify;">Форматирующие команды называются&nbsp;<strong>блоком объявлений (описаний)</strong>.</li>\r\n</ol>\r\n\r\n<p style="text-align:justify">Первые статьи этого учебника будут в основном посвящены&nbsp;<strong>селекторам</strong>, благодаря которым вы научитесь выбирать различные элементы страницы, будь то заголовки, абзацы, изображения и так далее.&nbsp;<strong>Блоки объявлений</strong>&nbsp;предоставляют нам возможность создавать уникальные элементы на странице, стилизуя их по своему усмотрению с использованием множества различных CSS свойств, которые мы постараемся рассмотреть и изучить как можно больше.</p>\r\n\r\n<p style="text-align:justify">&nbsp;</p>\r\n\r\n<p style="text-align:justify">Давайте с вами разберем, что значит запись сделанная на изображении.</p>\r\n\r\n<p style="text-align:justify">Селектор&nbsp;<strong>h1</strong>&nbsp;сообщает браузеру, что все теги&nbsp;</p>\r\n\r\n<p style="text-align:justify"><strong>Блок объявления стиля (описания)</strong>&nbsp;- это код, который располагается за селектором и содержит форматирующие команды, применяемые к этому селектору. Обратите внимание, что любой блок объявлений начинается с открывающей фигурной скобки, а заканчивается закрывающей фигурной скобкой. Отсутствие открывающейся или закрывающейся скобки приводит к ошибкам вследствие которых, стили не будут применены к элементам, указанным в селекторе.</p>\r\n\r\n<p style="text-align:justify"><strong>Объявление (описание) свойства</strong>&nbsp;- каждое объявление (описание) состоит из двух частей &mdash; CSS свойства и значения для этого свойства. Вы можете провести аналогию с атрибутами и их значениями в HTML. Обратите внимание, что необходимо отделять двоеточием свойство от его значения. Каждое объявление (описание) необходимо завершать точкой с запятой, даже в том случае если оно одно, или является конечным в блоке объявлений. Большинство ошибок происходит по той причине, что отсутствует точка с запятой, это приводит к тому, что это описание (свойство с его значением) и последующие описания в блоке объявлений не будут применены, по той причине, что браузер считает их для себя одним описанием (командой), так как описание не было прекращено вовремя.</p>\r\n\r\n<p style="text-align:justify"><strong>Свойство</strong>&nbsp;- свойство представляет собой слово или несколько слов написанных через дефис. Большинство свойств имеют простые для понимания названия, такие как&nbsp;<a href="https://basicweb.ru/css/css_pr_color.php" title="CSS свойство color">color</a>&nbsp;(цвет текста),&nbsp;<a href="https://basicweb.ru/css/css_pr_background-color.php" title="CSS свойство background-color">background-color</a>&nbsp;(цвет заднего фона),&nbsp;<a href="https://basicweb.ru/css/css_pr_text-align.php" title="CSS свойство text-align">text-align</a>&nbsp;(горизонтальное выравнивание текста) и так далее. Мы уже сталкивались с этими свойствами при&nbsp;<a href="https://basicweb.ru/html/html_book.php" title="Актуальный учебник HTML 5">изучении HTML 5</a>.</p>\r\n\r\n<p style="text-align:justify"><strong>Значение</strong>&nbsp;- в зависимости от используемого свойства, значения могут устанавливать различные характеристики для элемента, будь то цвет, ширина, высота, расположение и тому подобное.</p>\r\n', '							   									   									   									   		В этой статье мы ответим на главные вопросы: что такое CSS, для чего он нужен и где применяется?							   								   								   								   	', '							   								   								   								   	HTML  CSS							   							   							   							   '),
(48, 'Введение в HTML', 'Vvedenie-v-HTML', 'Язык гипертекстовой разметки HTML (англ. HyperText Markup Language) - является языком разметки документов во Всемирной паутине.', '<p><strong>Язык гипертекстовой разметки</strong>&nbsp;HTML&nbsp;(англ.&nbsp;<em>HyperText Markup Language</em>) - является языком разметки документов во Всемирной паутине.</p>\r\n\r\n<p>Хочу сразу обратить Ваше внимание, что HTML является языком разметки, а не программирования, как многие ошибочно полагают. Его основная задача создать каркас для описания различных компонентов документа, таких как&nbsp;<em>абзацы</em>,&nbsp;<em>заголовки</em>,&nbsp;<em>списки</em>,&nbsp;<em>таблицы</em>,&nbsp;<em>ссылки</em>&nbsp;на другие страницы и так далее.</p>\r\n\r\n<p>HTML документы описываются специальными именами HTML элементов (<strong>тегами</strong>), каждый тег описывает различное содержание документа.&nbsp;<strong>Теги представляют собой команды</strong>, которые сообщают браузеру, каким образом отображать веб-страницу (документ).</p>\r\n\r\n<p>Цель любого веб-браузера прочитать HTML документ и правильно его отобразить. Браузер не отображает HTML теги, но использует их, чтобы определить, как отображать конкретный документ.</p>\r\n\r\n<p>Теги бывают двух видов:&nbsp;<strong>парные</strong>&nbsp;и&nbsp;<strong>одиночные</strong>&nbsp;(пустые). У парных HTML-тегов первый тег в паре является начальным (<strong>открывающим</strong>) тегом, а второй тег является конечным (<strong>закрывающим</strong>) тегом. Основная функция начального тега заключается в том, чтобы сообщить браузеру где команда начинается, а конечным тегом определить где она заканчивается.</p>\r\n\r\n<p>Давайте рассмотрим чем отличаются парные теги от одиночных.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Обратите внимание, что все теги заключены в угловые скобки&nbsp;&lt;&nbsp;и&nbsp;&gt;, а закрывающий тег всегда должен содержать прямой слеш перед названием тега -&nbsp;&lt;/тег&gt;, этим мы сообщаем браузеру, что на этом месте наша &quot;команда&quot; закончена.</strong></p>\r\n\r\n<hr />\r\n<p>Большинство&nbsp;ошибок&nbsp;в&nbsp;верстке&nbsp;(<strong>создание структуры HTML кода</strong>) у Вас может возникать по той причине, что не указан закрывающий тег или он указан без прямого слеша&nbsp;/&nbsp;. Если не указать прямой слеш, то браузер воспринимает тег как открывающий, а не закрывающий. В том случае если вы вообще не указали закрывающий тег, то браузер не узнает где Ваша команда заканчивается, чтобы её остановить, что может привести к серьезным ошибкам, будьте внимательны. К счастью, современные редакторы HTML кода позволяют быстрее отслеживать ошибки такого рода.</p>\r\n', 'HTML HTML ', 'HTML '),
(49, 'Базовый HTML', 'Bazovyi-HTML', 'Заголовки определяются тегами .Браузеры автоматически добавляют пустое пространство до и после каждого заголовка.', '<h2>HTML заголовки</h2>\r\n\r\n<p>Заголовки определяются тегами от&nbsp;<a href="https://basicweb.ru/html/tag_h1.php" title="HTML тег h1">&lt;h1&gt;</a>&nbsp;до&nbsp;<a href="https://basicweb.ru/html/tag_h6.php" title="HTML тег h6">&lt;h6&gt;</a>: тег&nbsp;<a href="https://basicweb.ru/html/tag_h1.php" title="HTML тег h1">&lt;h1&gt;</a>&nbsp;определяет наиболее важные заголовки, а&nbsp;<a href="https://basicweb.ru/html/tag_h6.php" title="HTML тег h6">&lt;h6&gt;</a>&nbsp;определяет наименее важные заголовки (<a href="https://basicweb.ru/html/tag_h1.php" title="HTML тег h1">&lt;h1&gt;</a>&nbsp;заголовки должны быть основными заголовками на странице, затем следуют заголовки&nbsp;<a href="https://basicweb.ru/html/tag_h2.php" title="HTML тег h2">&lt;h2&gt;</a>&nbsp;и так далее). Браузеры автоматически добавляют пустое пространство до и после каждого заголовка.</p>\r\n\r\n<hr />\r\n<p><strong>Поисковые системы используют ваши заголовки для индексации структуры и содержания веб-страниц. Поэтому важно использовать заголовки, чтобы показать структуру документа. Настоятельно рекомендуется использовать только один заголовок первого уровня на одной странице.</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2>HTML горизонтальная линия</h2>\r\n\r\n<p>Тэг&nbsp;<a href="https://basicweb.ru/html/tag_hr.php" title="HTML тег hr">&lt;hr&gt;</a>&nbsp;создает горизонтальную линию на странице. Элемент&nbsp;<a href="https://basicweb.ru/html/tag_hr.php" title="HTML тег hr">&lt;hr&gt;</a>&nbsp;может использоваться в роли тематического разрыва. Тег является одиночным и используется без закрывающего тега.</p>\r\n\r\n<p>В следующем примере мы после каждого параграфа (тег&nbsp;<a href="https://basicweb.ru/html/tag_p.php" title="HTML тег p">&lt;p&gt;</a>) будем использовать элемент&nbsp;<a href="https://basicweb.ru/html/tag_hr.php" title="HTML тег hr">&lt;hr&gt;</a>, который будет тематически разделять нашу страницу.</p>\r\n', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi u', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi u'),
(50, 'JavaScript массивы', 'JavaScript-massivy', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '<h1>JavaScript метод concat()</h1>\r\n\r\n<p><a href="https://basicweb.ru/javascript/js_array.php">JavaScript Array</a></p>\r\n\r\n<h2>Определение и применение</h2>\r\n\r\n<p>JavaScript метод&nbsp;<strong>concat()</strong>&nbsp;используется для объединения двух, или более массивов в один, при этом он не изменяет существующие массивы, а возвращает новый массив.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3>Копирование ссылок на объекты</h3>\r\n\r\n<p>Метод&nbsp;<strong>concat()</strong>&nbsp;копирует ссылки на объекты в новый массив, а это означает, что как исходный, так и новый массив ссылаются на один и тот же объект. Обратите внимание, что если объект, на который ссылается ссылка, изменяется, то изменения будут видны как для новых, так и для исходных массивов.</p>\r\n', 'Lorem  irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidat', '  irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidat'),
(51, 'jQuery селектор id', 'jQuery-selektor-id', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '<h2>Определение и применение</h2>\r\n\r\n<p>jQuery селектор&nbsp;<strong>id</strong>&nbsp;выбирает элемент, глобальный атрибут&nbsp;<a href="https://basicweb.ru/html/global_att_id.php" title="HTML глобальный атрибут id">id</a>&nbsp;которого, имеет указанное значение (элемент с определенным идентификатором).</p>\r\n\r\n<hr />\r\n<p>Обращаю Ваше внимание, что для поиска элемента с указанным идентификатором, библиотека jQuery использует функцию&nbsp;<strong>JavaScript</strong>&nbsp;<samp>document.getElementById()</samp>, вследствие чего, поиск идентификатора происходит быстро.</p>\r\n\r\n<hr />\r\n<p><strong>Следующие правила являются общими и их необходимо соблюдать при работе с id селекторами:</strong></p>\r\n\r\n<ul>\r\n	<li>значение идентификатора должно быть уникально на странице, размещение нескольких одноименных идентификаторов на странице считается ошибкой (выборка остановится на первом идентифакторе).</li>\r\n	<li>все названия&nbsp;<strong>id</strong>&nbsp;селекторов должны начинаться с решётки (благодаря ей браузеры находят эти селекторы в таблице стилей). Решетка требуется только в названии селектора таблицы стилей (в значении глобального HTML атрибута&nbsp;<a href="https://basicweb.ru/html/global_att_id.php" title="Глобальный HTML атрибут id">id</a>&nbsp;она не ставится,&nbsp;<strong>будьте внимательны из-за этого возникает много ошибок</strong>).</li>\r\n	<li>используйте только буквы алфавита (A-Z, a-z), числа, дефисы, знаки подчеркивания.</li>\r\n	<li>название после решётки всегда должно начинаться с символа (неправильно:&nbsp;<strong>#50cent</strong>,&nbsp;<strong>#-vottakvot</strong>).</li>\r\n	<li>учитывайте регистр при наименовании id селекторов, т.к. они к этому чувствительны (<strong>#vottakvot</strong>&nbsp;и&nbsp;<strong>#VotTakVot</strong>&nbsp;разные идентификаторы).</li>\r\n</ul>\r\n\r\n<h2>jQuery синтаксис:</h2>\r\n\r\n<pre>\r\n$(&quot;#id&quot;)</pre>\r\n', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nos ', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntem '),
(52, 'Bootstrap 4', 'Bootstrap', '							   									   									   									   									   									   									   									   									   		Bootstrap - это инструментарий с открытым исходным кодом для разработки с помощью HTML, CSS и JS. Используйте переменные Sass и миксины, гибкую систему сеток, множество готовых компонентов и мощных плагинов, основанных на jQuery.							   								   								   								   								   								   								   								   								   	', '<h1>Bootstrap</h1>\r\n\r\n<p>Создавайте адаптивные интерактивные и мобильные web-проекты с самой популярной в мире front-end библиотекой компонентов интерфейса.</p>\r\n\r\n<p>Bootstrap - это инструментарий с открытым исходным кодом для разработки с помощью HTML, CSS и JS. Используйте переменные Sass и миксины, гибкую систему сеток, множество готовых компонентов и мощных плагинов, основанных на jQuery.</p>\r\n', '							   									   									   									   									   									   									   									   									   		 re et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco labo', '							   								   								   								   								   								   								   								   								   	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\nte \r\nproident, sunt in culp'),
(53, 'Поддерживаемые браузеры', 'Podderjivaemye-brauzery', 'Bootstrap поддерживает все новейшие, стабильные релизы браузеров и платформ. В Windows поддерживается IE10-11 / Microsoft Edge.', '<p style="text-align:justify">Bootstrap поддерживает все&nbsp;<strong>новейшие, стабильные релизы</strong>&nbsp;браузеров и платформ. В Windows поддерживается&nbsp;<strong>IE10-11 / Microsoft Edge</strong>.</p>\r\n\r\n<p style="text-align:justify">Альтернативные браузеры, поддерживающие последнюю версию Webkit, Blink или Gecko, не поддерживаются полностью. Однако и в них BS4 должен отображаться и работать корректно.&nbsp;</p>\r\n\r\n<p style="text-align:justify">Мы используем&nbsp;<a href="https://github.com/postcss/autoprefixer">Autoprefixer</a>&nbsp;для обработки поддержки задуманного браузера через префиксы CSS. Autoprefixer использует Browserslist для взаимодействия и управления версиями этих браузеров. Смотрите документацию данных двух инструментов для получения информации по их внедрению в ваши проекты.</p>\r\n\r\n<p style="text-align:justify"><span style="font-size:16px">Мобильные устройства</span></p>\r\n\r\n<p style="text-align:justify">В общем, BS4 поддерживает последние версии браузеров по умолчанию для каждой платформы. Заметьте, что прокси-браузеры (такие как Opera Mini, Opera Mobile&rsquo;s Turbo mode, UC Browser Mini, Amazon Silk) не поддерживаются.</p>\r\n', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi u', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntemp '),
(54, 'Содержание', 'Soderjanie', 'Узнайте, что включено в Bootstrap, включая наши скомпилированные и исходные коды. Помните, что для плагинов JavaScript Bootstrap''у требуется jQuery.', '<h1 style="text-align:justify">Содержание</h1>\r\n\r\n<p style="text-align:justify">Узнайте, что включено в Bootstrap, включая наши скомпилированные и исходные коды. Помните, что для плагинов JavaScript Bootstrap&#39;у требуется jQuery.</p>\r\n\r\n<pre style="text-align:justify">\r\n<code>bootstrap/\r\n├── css/\r\n│   ├── bootstrap-grid.css\r\n│   ├── bootstrap-grid.css.map\r\n│   ├── bootstrap-grid.min.css\r\n│   ├── bootstrap-grid.min.css.map\r\n│   ├── bootstrap-reboot.css\r\n│   ├── bootstrap-reboot.css.map\r\n│   ├── bootstrap-reboot.min.css\r\n│   ├── bootstrap-reboot.min.css.map\r\n│   ├── bootstrap.css\r\n│   ├── bootstrap.css.map\r\n│   ├── bootstrap.min.css\r\n│   └── bootstrap.min.css.map\r\n└── js/\r\n    ├── bootstrap.bundle.js\r\n    ├── bootstrap.bundle.js.map\r\n    ├── bootstrap.bundle.min.js\r\n    ├── bootstrap.bundle.min.js.map\r\n    ├── bootstrap.js\r\n    ├── bootstrap.js.map\r\n    ├── bootstrap.min.js\r\n    └── bootstrap.min.js.map</code></pre>\r\n\r\n<p style="text-align:justify">&nbsp;</p>\r\n\r\n<p style="text-align:justify">Это базовая форма Bootstrap: перекомпилированные файлы для быстрого подключения в почти любой веб-проект. Доступны: компилированные файлы CSS и JS (<code>bootstrap.*</code>), как и компилированные &laquo;облегченные&raquo; файлы (<code>bootstrap.min.*</code>).&nbsp;Карты исходного кодаCSS (<code>bootstrap.*.map</code>) доступны для использования лишь с определенными инструментами разработчика в браузере. Связанные JS-файлы (<code>bootstrap.bundle.js</code>&nbsp;и минимизированный&nbsp;<code>bootstrap.bundle.min.js</code>) включают&nbsp;Popper, но не&nbsp;jQuery.</p>\r\n\r\n<p style="text-align:justify">В папках&nbsp;<code>scss/</code>&nbsp;и&nbsp;<code>js/</code>&nbsp;лежат исходники нашего CSS и JS. Папка&nbsp;<code>dist/</code>&nbsp;содержит всё перечисленное в параграфе Precompiled Bootstrap выше. Папка&nbsp;<code>docs/</code>&nbsp;лежит исходный код документации, и содержит папку&nbsp;<code>examples/</code>&nbsp;- примеры использования Bootstrap. Помимо этого, любой другой подключенный файл нужен для поддержки пакетов, содержит информацию о лицензии и разработке.</p>\r\n', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n ', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis '),
(55, 'Что такое Vuejs', 'Chto-takoe-Vuejs', 'Vue (произносится /vjuː/, примерно как view) — это прогрессивный фреймворк для создания пользовательских интерфейсов. В отличие от фреймворков-монолитов, Vue создан пригодным для постепенного внедрения. ', '<h1>Введение</h1>\r\n\r\n<h2>Что такое Vue.js?</h2>\r\n\r\n<p>Vue (произносится /vjuː/, примерно как&nbsp;<strong>view</strong>) &mdash; это&nbsp;<strong>прогрессивный фреймворк</strong>&nbsp;для создания пользовательских интерфейсов. В отличие от фреймворков-монолитов, Vue создан пригодным для постепенного внедрения. Его ядро в первую очередь решает задачи уровня представления (view), что упрощает интеграцию с другими библиотеками и существующими проектами. С другой стороны, Vue полностью подходит и для создания сложных одностраничных приложений (SPA, Single-Page Applications), если использовать его совместно с&nbsp;современными инструментамии&nbsp;дополнительными библиотеками.</p>\r\n', ' ur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntem '),
(56, 'Зачем нужен Angular.js и почему именно он', 'Zachem-nujen-Angular', '							   		В какой-то момент вы решаете написать веб-приложение, в котором абсолютно все работает на AJAX запросах, страница никогда не перезагружается, а интерфейс напоминает полноценное настольное приложение, а не традиционный сайт. Вы попытаетесь сделать все при помощи простого JavaScript и пары десятков jQuery плагинов, и очень быстро написанный код станет невозможно поддерживать, невозможно читать и невозможно править.							   	', '<p>В какой-то момент вы решаете написать веб-приложение, в котором абсолютно все работает на AJAX запросах, страница никогда не перезагружается, а интерфейс напоминает полноценное настольное приложение, а не традиционный сайт. Вы попытаетесь сделать все при помощи простого JavaScript и пары десятков jQuery плагинов, и очень быстро написанный код станет невозможно поддерживать, невозможно читать и невозможно править.</p>\r\n\r\n<p>Чтобы избежать такой катастрофической ситуации, вам понадобится инструмент, предоставляющий жесткую структуру кода и соглашения о написании приложений, а также готовые решения для известных проблем (например, для двусторонней связи переменной в коде и текста на странице, выводящего значение этой переменной). Этот инструмент &ndash; JavaScript MVC (или аналоги MVC) фреймворки.</p>\r\n\r\n<p>Есть большая вероятность, что вам не придётся использовать JS фреймворки ближайшие месяцы и\\или годы. Область их применения довольно специфична: так называемые одностраничные приложения (Single Page Applications, SPA). Типичные примеры: Google Drive, Gmail, Evernote. Но даже в тех случаях, когда стоит задача написать одностраничное приложение, не всегда имеет смысл использовать полноценный JavaScript фреймворк: всё зависит от того, насколько динамичный и сложный UI вы пытаетесь построить.</p>\r\n\r\n<h3>Почему Angular.js?</h3>\r\n\r\n<p>С моей точки зрения, Angular.js стал потрясающей комбинацией низкого порога вхождения и богатого набора функций. Чтобы начать писать на нём небольшие приложения, понадобится около часа свободного времени. При этом на то, чтобы изучить и использовать все его фичи, понадобятся месяцы. Пока что не было ни одной фронтенд задачи, которую я не смог бы решить при помощи этого фреймворка. А использовал я его для кроссплатформенного мобильного приложения с богатой функциональностью, для небольших виджетов внутри приложений и даже для редактора видео.</p>\r\n\r\n<p>Angular.js на данный момент является самым популярным фреймворком, разработка которого поддерживается парнями из Google. Помимо богатой стандартной библиотеки, для &quot;ангуляра&quot; написано много пользовательских расширений, с частью которых мы познакомимся в пределах этой серии статей. Есть даже специальный фреймворк поверх Angular.js, который значительно облегчает написание кроссплатформенных мобильных приложений</p>\r\n', '							   		 Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt', '							   	Lore \r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.							   ');

-- --------------------------------------------------------

--
-- Структура таблицы `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `title_url` varchar(200) NOT NULL,
  `keyword` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `menu_note` int(2) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `category`
--

INSERT INTO `category` (`id`, `title`, `title_url`, `keyword`, `description`, `menu_note`) VALUES
(15, 'html', 'html', 'sfdfs', 'sf', 1),
(16, 'css', 'css', '							   	CSS 3 , CSS,каскадные таблицы стилей							   ', '							   			CSS 3 , CSS,каскадные таблицы стилей							   	', 1),
(17, 'JavaScript', 'JavaScript', 'js,JavaScript', 'учебник по JavaScript', 1),
(18, 'jQuery', 'jQuery', '							   	jQuery селекторы							   ', '							   			jQuery селекторы							   	', 1),
(19, 'Bootstrap 4', 'Bootstrap-4', '							   								   								   	Bootstrap-4							   							   							   ', '							   										   								   	Bootstrap-4							   							   							   	', 0),
(20, 'Vue.js', 'Vuejs', 'vue', 'Что такое Vue.js?', 0),
(21, 'Angular.js', 'Angularjs', 'Angular.js', 'Angular.js', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `categoryBindArticle`
--

CREATE TABLE IF NOT EXISTS `categoryBindArticle` (
  `id_category` int(11) NOT NULL,
  `id_article` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `categoryBindArticle`
--

INSERT INTO `categoryBindArticle` (`id_category`, `id_article`, `id`) VALUES
(15, 42, 23),
(16, 43, 25),
(17, 45, 27),
(18, 46, 28),
(16, 47, 29),
(15, 48, 30),
(15, 49, 31),
(17, 50, 32),
(18, 51, 33),
(19, 52, 34),
(19, 53, 35),
(19, 54, 36),
(20, 55, 37),
(21, 56, 38);

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL,
  `login` varchar(255) NOT NULL,
  `password` varchar(32) NOT NULL,
  `data_reg` datetime NOT NULL,
  `role` enum('admin','user','','') NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `login`, `password`, `data_reg`, `role`) VALUES
(1, 'admin@mail.ru', 'e34a3e943900a5157ad65bb6f3162e6c', '2019-08-20 00:00:00', 'admin');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `categoryBindArticle`
--
ALTER TABLE `categoryBindArticle`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_category` (`id_category`),
  ADD KEY `id_article` (`id_article`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `article`
--
ALTER TABLE `article`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=57;
--
-- AUTO_INCREMENT для таблицы `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT для таблицы `categoryBindArticle`
--
ALTER TABLE `categoryBindArticle`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `categoryBindArticle`
--
ALTER TABLE `categoryBindArticle`
  ADD CONSTRAINT `categorybindarticle_ibfk_1` FOREIGN KEY (`id_category`) REFERENCES `category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `categorybindarticle_ibfk_2` FOREIGN KEY (`id_article`) REFERENCES `article` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
