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

![image](https://user-images.githubusercontent.com/1526849/136485646-7c4be632-bb4a-4426-bb1d-bd769538fe02.png)
![image](https://user-images.githubusercontent.com/1526849/136486048-a8bc8678-0c67-4e95-8d28-ef5db7989765.png)
