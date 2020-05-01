<?php

header('Location: //' . substr($_SERVER['HTTP_HOST'], strpos($_SERVER['HTTP_HOST'], '.') + 1) . $_SERVER['REQUEST_URI']);

