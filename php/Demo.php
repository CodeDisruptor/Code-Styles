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

namespace app\component;

use app\controllers\FrontController;
use app\helpers\DateFormatter;

use lib\database\Connector;
use lib\system\Environment;

/**
 * Summary of class.
 *
 * Detailed information of class if necessarry.
 *
 * @uses        \namespace\to\inherited\class
 * @deprecated  Class deprecated since <ISO date format>
 */
class ClassName extends FrontController
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

    /**
     * Short Description
     *
     * Long Description if needed.
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
     * Short Description
     *
     * Long Description if needed.
     *
     * @access public
     * @param string $string
     * @since Month(3 letters) Day, Year
     * @return void
     */
    public function setString($string)
    {
        $this->string = $string;
    }

    /**
     * Short Description
     *
     * Long Description if needed.
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
                $env = Environment::set($value);
            }
        }
    }
}
