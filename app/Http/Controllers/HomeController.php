<?php 
namespace App\Http\Controllers;

use Core\App;
use Database\Database;
use PDOException;

class HomeController extends Controller
{
    public function home ()
    {
        try {
            $db = App::resolve('db');
            // Try a simple query to ensure connection is alive
            $db->getConnection()->query('SELECT 1');
            $dbStatus = 'Database connection successfully established!';
        } catch (PDOException $e) {
            $dbStatus = 'Database connection failed: ' . $e->getMessage();
        }
        return view('home', ['dbStatus' => $dbStatus]);
    }
}