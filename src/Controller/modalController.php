<?php
/**
 * Modal criado para interação com o banco, 
 * neste caso somente esta disponivel quando
 * é usado a class Connection!
 */

namespace Controller;

class modalController
{
    /**
     * Modal Reponsavel por Error
     * @param String $titulo    //  Titulo do Modal
     * @param String $msg       //  Texto que será exibido!
     * @param String $page      //  Pagina de destino
     */
    public function ModalError($titulo, $msg, $page)
    {   
        $this->limparModal();
        echo "<script>
        document.querySelector('#titulo').innerText = '".$titulo."';
        document.querySelector('#bottoes').setAttribute('href', '".$page."');
        document.querySelector('#msg').innerText = '".$msg."';
        document.querySelector('#imgModal').setAttribute('src', 'https://github.com/Josue-Queiroz/imagens_gifs/blob/master/loading/0_4Gzjgh9Y7Gu8KEtZ.gif?raw=true');
        $('#AutoModal').click();
        </script>";
    }
    /**
     * Modal Reponsavel por Sucess
     * @param String $titulo    //  Titulo do Modal
     * @param String $msg       //  Texto que será exibido!
     * @param String $page      //  Pagina de destino
     */
    public function ModalSucess($titulo, $msg, $page)
    {

        $this->limparModal();
        echo "<script>
        document.querySelector('#titulo').innerText = '".$titulo."';
        document.querySelector('#bottoes').setAttribute('href', '".$page."');
        document.querySelector('#msg').innerText = '".$msg."';
        document.querySelector('#imgModal').setAttribute('src', 'https://github.com/Josue-Queiroz/imagens_gifs/blob/master/check/check.gif?raw=true');
        $('#AutoModal').click();
        </script>";
    }
    /**
     * Modal Reponsavel por Warning
     * @param String $titulo    //  Titulo do Modal
     * @param String $msg       //  Texto que será exibido!
     * @param String $page      //  Pagina de destino
     */
    public function ModalWarning($titulo, $msg, $page)
    {

        $this->limparModal();
        echo "<script>
        document.querySelector('#titulo').innerText = '".$titulo."';
        document.querySelector('#bottoes').setAttribute('href', '".$page."');
        document.querySelector('#msg').innerText = '".$msg."';
        document.querySelector('#imgModal').setAttribute('src', 'https://github.com/Josue-Queiroz/imagens_gifs/blob/master/loading/unnamed.gif?raw=true');
        $('#AutoModal').click();
        </script>";
    }

    public function limparModal()
    {
        echo "<script>
        document.querySelector('#titulo').innerText = '';
        document.querySelector('#bottoes').setAttribute('href', '#');
        document.querySelector('#msg').innerText = '';
        document.querySelector('#imgModal').setAttribute('src', '');
        </script>";
        return true;
    }
}
