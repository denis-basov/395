<?php
// контроллер страницы детального просмотра новости

require 'models/News.php';

DBConnect::d($_GET);

require 'views/blog-details_view.php';



