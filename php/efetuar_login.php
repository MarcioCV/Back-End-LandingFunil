<?php
class Session
{
    public function __construct()
    {
        if (!isset($_SESSION)) {
            session_start();
        }
    }

    /**
     * function get
     *
     * @param string $key
     * @param mixed $default
     *
     * @return mixed
     */
    public function get(string $key, $default = null): mixed
    {
        return $_SESSION[$key] ?? $default ?? null;
    }

    /**
     * function set
     *
     * @param string $key
     * @param mixed $value
     *
     * @return void
     */
    public function set(string $key, mixed $value): void
    {
        $_SESSION[$key] = $value;
    }

    /**
     * function forget
     *
     * @param string $key
     *
     * @return void
     */
    public function forget(string $key): void
    {
        unset($_SESSION[$key]);
    }
}

$sessao = new Session();


// print_r($_REQUEST); é usada para coletar dados após o envio de um formulário HTML.
if (isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['password'])) {
    // Acessar
    include_once("../connection/conn.php");
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password_crypt = md5($password);

    $sql = "SELECT * FROM user WHERE email = '{$email}' and password = '{$password_crypt}'";

    $result = $conn->query($sql);

    // print_r($sql);
    // print_r($result);

    if (mysqli_num_rows($result) < 1) {
        $sessao->forget('email');
        $sessao->forget('password');

        header('Location: ../html/login.php?erro=1');
    } else {
        $row = $result->fetch_row();

        $sessao->set('email', $email);
        $sessao->set('name', $row[1]);
        $sessao->set('phone', $row[2]);
        $sessao->set('profile_pictures', $row[5]);
        $sessao->set('whatsapp_group', $row[6]);
        $sessao->set('telegram', $row[7]);
        $sessao->set('royalq',  $row[8]);
        $sessao->set('binance', $row[9]);
        $sessao->set('id', $row[0]);

        header("Location:../page/system.php");
    }
} else {
    // Nao acessa
    header('Location: ../html/login.php?erro=1');
}
