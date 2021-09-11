# paranga-study
Estudo de PHP e outros tecnologias

# Composer
~~~
psr-4": {"Agenda\\": "src/"}
~~~

# Pasta Public arquivo index

~~~
require __DIR__ . '/../vendor/autoload.php';

use Agenda\Connection;

$connection = Connection::Conn();

$contato = $connection->query("select * from contato")->fetchAll();

print '<pre>';
print_r($contato);
~~~

# Class com namespace
~~~

namespace Agenda;

class Connection
{
    /* Consumir o mesmo statico Class::Conn() */
    public static function Conn()
    {
        try {
            $sql = new \PDO('mysql:host=localhost;dbname=agenda;charset=utf8', '****', '****');
            return $sql;
        } catch (\Exception $e) {
            echo $e;
        }
    }   
}
~~~
