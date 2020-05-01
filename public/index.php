<?php

header('Location: //' . substr($_SERVER['HTTP_HOST'], strpos($_SERVER['HTTP_HOST'], '.')) . $_SERVER['REQUEST_URI']);

