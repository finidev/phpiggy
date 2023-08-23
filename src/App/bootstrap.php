<?php

declare(strict_types=1);

require __DIR__ . "/../../vendor/autoload.php";

use Framework\App;
use App\Config\Paths;

use function App\Config\{registerRouts, registerMiddleware};

$app = new App(Paths::SOURCE . "App/container-definitions.php");

registerRouts($app);
registerMiddleware($app);

return $app;