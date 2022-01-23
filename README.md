# starters-package

Portable set of classes for working with requests,sessions,sql strings, arrays and more.


## Installation

To use it simply include the Boot.php file

```php
  require "Boot.php";
```
    
## Debug data
This will print out an easy to ready array

``` php
<?php

require 'Boot.php';

$myarray = [];
\dthtoolkit\Debugger::var_dump($myArray);

```

## Working with requests
This will print out an easy to ready array

``` php
<?php

require 'Boot.php';

# Print all request information

\dthtoolkit\Debugger::var_dump(\dthtoolkit::Requests::getArguments());

# Check if the request has a GET argument in it
if(\dthtoolkit::Requests::hasArgument('my_input','GET'))
{
    # Get the value if it exist
    # same can be done with POST
    # specify POST instead of GET as a second param
    $my = \dthtoolkit::Requests::getArgument('my_input','GET');
}



```


## Working with sessions
This will print out an easy to ready array

``` php
<?php
require 'Boot.php';

\dthtoolkit\Session::initSession();

$sessionParams = ['custom_params' =>  ['key' => 'value','key1' => 'value1','key2' => 'value2']];

\dthtoolkit\Session::sendTheseToSession($sessionParams);



```


## Working with utilities
This will print out an easy to ready array

``` php
<?php
use dthtoolkit;
require 'Boot.php';

#clean string
$var = Utils::clean('This-is#my-name');

#generate pagination numbers
$array = Utils::paginate(10,125,10);

```

## Format SQL string to readable SQL
This will print out an easy to ready array

``` php
<?php
use dthtoolkit;
require 'Boot.php';

$sql = 
"
    SELECT * FROM Customere WHERE username = 'my_username'
";

$output = SqlFormatter::format($sql);
```

# More functions available inside the classes
Do a bit of digging.
