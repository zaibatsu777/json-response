# json-response
A simple class that returns a properly formatted json with http response

## Installation

composer require sarju/json_response

### Usage

```php
<?php

require_once __DIR__ . "/vendor/autoload.php";

use Devscreencast\ResponseClass\JsonResponse;

$student = array(
    'name' => 'John Doe',
    'course' => 'Software Engineering',
    'level' => '200',
    'collections' => ['books' => 'Intro to UML', 'music' => 'rap']
);

new JsonResponse('unauthorized', '', $student);
```

### Param1 (Required)

1. success or ok - 200 http status
2. unauthorized - 401 http status
3. exception - 500 http status (Internal server error)

### Param2 (Optional)
string - the return message , use empty quote if not available

### Param3 (Optional)
Array - Array of Data