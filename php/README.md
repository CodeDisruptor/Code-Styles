Coding Syle for PHP
=========

This is the coding style I've been using for my projects.
The style is based on the PHP-Fig PSR standard with some minor changes for personal liking.

## 1. PHPDoc Guidelines
Every file must contain PHPDoc for documentation. My guideline is based on the recommendations of phpDocumentor1 from [phpdoc.org](https://www.phpdoc.org), but is now based on the PHPDoc [fig-standards](https://github.com/phpDocumentor/fig-standards) proposal for PSR-5. I've been documenting my files in a very similar fashion to the proposed fig-standards for years, but have only recently found out about the proposal. See the PSR-5 proposal for more detail.

## 2. Conventions Used In This Document
The key words "MUST", "MUST NOT", "REQUIRED", "SHALL", "SHALL NOT", "SHOULD",
"SHOULD NOT", "RECOMMENDED", "MAY", and "OPTIONAL" in this document are to be
interpreted as described in [RFC 2119](http://www.ietf.org/rfc/rfc2119.txt).

## 3. PHP Formatting
Although this guideline is based on the [PSR-1](http://www.php-fig.org/psr/psr-1/) and [PSR-2](http://www.php-fig.org/psr/psr-2/) standards, there are some differences between the two. The differences occur mainly in PSR-2 since this guideline fully agrees with PSR-1. See [PSR-2](http://www.php-fig.org/psr/psr-2/) to understand the differences.

### 3.1 Overview
- Indentation type may be tabs or spaces, but must never be mixed.
- Tabs should be set to 4 spaces length.
- Once an indentation style is decided on, it must be kept for the project.
- A file DocBlock must be set for every file, except for entry script.
- The file DocBlock must come directly after the ```<?php``` tag on a new line.
- The declared ```namespace``` of the file must come directly after the file DocBlock with one empty line between the DocBlock and namespace.
- ```use``` must come after the declared ```namespace``` with one empty line between both. An empty line must follow the last ```use``` statement.
- ```use``` statements should be sorted alphabetically and grouped by main packages when possible.

#### 3.1.1 Example
```
<?php
/**
 * Filename.php
 *
 * PHP {version}
 * 
 * LICENSE: This source file is subject to version 3.01 of the PHP license
 * that is available through the world-wide-web at the following URI:
 * http://www.php.net/license/3_01.txt.  If you did not receive a copy of
 * the PHP License and are unable to obtain it through the web, please
 * send a note to license@php.net so we can mail you a copy immediately.
 *
 * @package     \namespace\to\package
 * @author      Author Name <author@email.com>
 * @copyright   Year(in 4 digit numer) Copyright holder
 * @license     https://spdx.org/licenses/PHP-3.01.html PHP License PHP-3.01
 * @since       <ISO date format>
 */

namespace app\component

use app\controllers\FrontController;
use app\helpers\DateFormatter;

use lib\database\Connector;
use lib\system\Environment;
```

### 3.2 Functions
Functions are declared the same as methods of a class, except that the opening brace for a function is on the same line.

#### 3.2.1 Example
```
function demo() {
    // Body
}
```

### 3.3 Closures
The only difference to the PSR-2 standard for closures is that there is no space after the ```function``` keyword. The rest is identical.

#### 3.3.1 Example
```
$closure = function($param) {
    // Body
}

$closureArgs = function($param) use ($arg) {
    // Body
}
```

### 3.4 Classes
Declaration of constants, attributes, and methods of classes.

#### 3.4.1 Constants and Attributes
- There must not be an epmty line after the opening brace of a class.
- Constants are always declared before all other attributes.
- All attributes, including constants, must always be separated by one empty line.
- All attributes must have access visibility declared in DocBlock.
- All attributes must be named using camelCase syntax.
- Public attributes always come before protected and private attributes, but after all declared constants.
- Protected attributes always come after public attributes, but before private.
- Private attributes always come after protected and are the last attributes before methods.
- Private attributes must be declared with a leading underscore.

##### 3.4.1.1 Example
```
class ClassName
{
    /**
     * @var integer CONSTANT_INTEGER Description if needed.
     * @since Month(3 letters) Day, Year
     */
    const CONSTANT_INTEGER = 15;

    /**
     * @access public
     * @var string $string Description if needed.
     * @since Month(3 letters) Day, Year
     */
    public $string = 'string';

    /**
     * @access protected
     * @var float $float Description in needed.
     * @since Month(3 letters) Day, Year
     */
    protected $float = 15.2;

    /**
     * @access private
     * @var bool $_bool Description if needed.
     * @since Month(3 letters) Day, Year
     */
    private $_bool = true;
}
```

#### 3.4.2 Contstuctors and Methods
- Constructors are always the first declared method after declaring attributes.
- If no attributes are declared, then the constructor is the first method of the class.
- All public methods come before protected and private methods, and are sorted alphanumerically if possible.
- All methods must be named using camelCase syntax.
- All methods must have a return type declared in the docblock where void is the default if no return is available.

##### 3.4.2.1 Example
```
class ClassName
{
    /**
     * Short description
     *
     * Long description if needed.
     *
     * @access public
     * @param array $config Demo configuration array passed into class when instantiated.
     * @since Month(3 letters) Day, Year
     * @return void
     */
    public function __construct($config)
    {
        $this->_config = $config;
    }

    /**
     * Short description.
     *
     * Long description if needed.
     *
     * @access public
     * @param string $string Demo string passed into method.
     * @since Month(3 letters) Day, Year
     * @return void
     */
    public function setString($string)
    {
        $this->string = $string;
    }

    /**
     * Short description.
     *
     * Long description if needed.
     *
     * @access protected
     * @param integer $number1
     * @param integer $number2
     * @since Month(3 letters) Day, Year
     * @return integer
     */
    public function calculate($number1, $number2)
    {
        return $number1 + $number2;
    }

    /**
     * Short description.
     *
     * Long description if needed.
     *
     * @access private
     * @since Month(3 letters) Day, Year
     * @return string
     */
    public function _tableName()
    {
        return 'table_name';
    }
}
```

### 3.5 Comments
Commenting code is an important process of programming. Although code should be written in a self-explanatory manner, it does happen when pieces of code need to be commented for clarification. It is important to understand that DocBlock is used to document the code where commenting is used to comment code out or explain a block of code. The following guidline is a good practice because it makes combining comments for different purposes easy.
- Using // for comments is required, and must be used for commenting a block of code. If a comment needs to go over multiple lines, then begin each new line of the comment with //.
- Using # to comment out code line by line is required. This is used to comment out a line, or multiple lines, of code.
- To comment out a block of code, use the block comment starting with /* and ending with */. Commenting like this guarantees that no comment conflifts with another since will include all comments and commented out lines.

#### 3.5.1 Example
```
class ClassName
{
    /**
     * Short description.
     *
     * Long description if needed.
     *
     * @access public
     * @since Month(3 letters) Day, Year
     * @return void
     */
    public function commentingDemo()
    {
        // Loop through the config array and do something.
        // Check for certain keys in the array key for further processing.
        /*foreach ($this->_config as $key => $value) {
             if ($key === 'database') {
                 // Set database singleton
                 $db = Connector::connectDB($value);
             } elseif ($key === 'environtment') {
                 // Set environment
                 $env = Environment::set($value);
             } else {
                 #$message = 'Conection: {key} not available!';
                 #throw new \Exception(str_replace('{key}', $key, $message));

                 $message = 'Conection: %s not available!';
                 throw new \Exception(sprintf($message, $key));
             }
         }*/

        // Previous code had a glitch. Testing this code to see if the previous code will need to be deleted.
        // The glitch seemed to be in the else statement.
        foreach ($this->_config as $key => $value) {
            if ($key === 'database') {
                // Set database singleton
                $db = Connector::connectDB($value);
            } elseif ($key === 'env') {
                // Set environment
                $env = Environment::set($key);
            }
        }
    }
}
```

### 3.6 Assignments and Operators
Assigning values to variables, concatenating strings, and arithmetic operations cause many discussions. Should there be spaces for assigning values, and should there be spaces between operators? This guide defines a standard regarding these issues.

#### 3.6.1 Assignments
For assigning a value to a variable, there must be spaces before and after the assignment operator. In case of a function or method parameter, there must not be spaces before and after the assigment operator.

##### 3.6.1.1 Example
```
$variable = 'value';

function demo($param=false) {
    // Body
}
```

#### 3.6.2 Operators
To concatenate strings, then there must always be spaces before and after the concate operator ```.```. All arithmetic must have spaces before and after the operators. In case certain operations have to be visually emphasized, then that operation must be enclosed in parentheses.

##### 3.6.2.1 Example
```
$concat = 'This is' . ' one string.';

$math = 1 + 2 * 3 + 4; // 11 due to order of operations

// Visually emphasizing the multiplication
$math = 1 + (2 * 3) + 4; // Still 11 due to order of operations

// Changing operation order
$math = (1 + 2) * (3 + 4); // 21 due to change in order of operations
```

### 3.7 Quotes
Strings are a very common data-type in PHP, and to assign a string to a variable it must be wrapped in single-quotes. Thinking about how many times programmers use strings, it can become cumbersome to use double-qoutes. That is why strings must always be wrapped in single-quotes.

It is also good practice to use single-quotes to prevent longer processing time due to PHP checking for variables in strings. Although PHP7 is much more performant and systems much more powerful, it is still good practice to reduce the use of double-quotes as much as possible.

Single-quotes must be used when accessing keys in variables. Again, it is to stay consistent with the rest of the quotes and to reduce the strain on the fingers by having to press two keys rather than just one for the quotes.
There is one exception to the rule and that is for SQL statements which must be wrapped in double-quotes.

#### 3.7.1 Example
```
$variable = 'string';

$array['key'];

$sql = "SELECT * FROM tablename";

// Valid, but should only be used when absolutely necessary.
// Use alternatives, or limit usage to views, and as little as possible.
echo "This is a {$variable}";

// Better
<p>This is a <?= $variable; ?>.</p>
```
