<?php 

//------------------------------------------------------- Outro Arquivo Conn.php  
/**
 * Exemplo de conexao
 */


 /**
  * Esse arquivo por exemplo esta no Conn.php 
  */
class Connection
{
    public function Conn()
    {
       try {

        $sql = new PDO('mysql:host=localhost;dbname=paranga_study;charset=utf8', 'root', '');
        return $sql;
        
       } catch (Exception $e) {
           echo $e;
       }
    }
}


//------------------------------------------------------- Outro Arquivo  ContatoController.php 


 /**
    * Esse arquivo por exemplo esta no ContatoController.php 
    *
    * require ('Conn.php');
  */


  class ContatoController extends Connection
  {
            /**
     * Metodo responsavel por passar Avaliação requerida
     * @var String $nome, required
     * 
     * @return Array
     */
    public function BuscarContato()
    {
        $sql = $this->Conn()->prepare("SELECT * FROM contato");
        $sql->execute();


        $dados = $sql->fetchAll(PDO::FETCH_ASSOC);

        if ($sql->rowCount() < 1) { //caso o resultado seja == 0
            echo '
            <script>alert("Ops, usuarios não encontrados!")</script>
            ';
            return false;
        }else{
            echo 'Resultado de Busca <br> <hr>';
            foreach ($dados as $key => $value) {
                echo "Encontrado Dados de  $value[nome]";
                echo "<br> Usuario                  $value[nome]";
                echo "<br> Email                    $value[email]";
                echo "<br> Telefone                 $value[telefone]";
                echo "<br> Contato tipo             $value[id_tipo_contato]";
                echo "<hr><br>";
            }
        }
    }


    /**
     * Inseri contato no tbl Contato
     * 
     * @param String    $nome
     * @param String    $email
     * @param String    $telefone
     * @param Integer   $id_tipo_contato
     */
    public function AdicionaContato($nome, $email, $telefone, $id_tipo_contato){

        $sql = $this->Conn()->prepare("INSERT INTO contato (nome, email, telefone, id_tipo_contato)VALUES(:n,:e,:t,:id) ");
        $sql->bindParam(':n', $nome);
        $sql->bindParam(':e', $email);
        $sql->bindParam(':t', $telefone);
        $sql->bindParam(':id', $id_tipo_contato);
        $result = $sql->execute();

        if($result){
            echo 'Sucesso <br> <hr>';
           return $this->BuscarContato();
        }else{
            return 'Falhou ao inserir';
        }
    }
       
}
  

$C = new ContatoController();
$retorno = $C->BuscarContato('jozuka');

//$retorno = $C->AdicionaContato('jozuka', 'josuestz5@gmail.com', '16993422813', 1);

print_r($retorno);