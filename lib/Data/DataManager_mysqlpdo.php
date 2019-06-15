<?php

namespace Data;

use Bookshop\Category;
use Bookshop\Book;
use Bookshop\User;
//use Bookshop\PagingResult;

/**
 * DataManager
 * Mock Version
 *
 *
 * @package
 * @subpackage
 * @author     John Doe <jd@fbi.gov>
 */
class DataManager implements IDataManager {

    private static $__connection;
    
    private static function getConnection() {
        if (!self::$__connection) {
            
            $type = 'mysql';
            $host = 'localhost';
            $name = 'fh_scm4_bookshop';
            $user = 'root';
            $pass = '';
            
            self::$__connection = new \PDO($type . ':host=' . $host . ';dbname=' . $name, $user, $pass);
        }
        return self::$__connection;
    }

    public static function exposeConnection() {
        return self::getConnection();
    }

    public static function getCategories() : array {
        return [];
    }


    public static function getBooksByCategory(int $categoryId) : array {
        return [];
    }

    public static function getUserByUsername(string $userName) {
        return null;
    }

    public static function getUserById(int $id) {
        return null;
    }

    public static function createOrder(int $userId, array $bookIds, string $nameOnCard, string $cardNumber) : int {
        return 0;
    }

}