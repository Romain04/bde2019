<?php
class VRauth{
    private $config = array();

    function __construct($clientID, $clientSecret, $redirectURI, $scopes) {
        $this->config['clientID'] = $clientID;
        $this->config['clientSecret'] = $clientSecret;
        $this->config['redirectURI'] = $redirectURI;
        $this->config['scopes'] = $scopes;

        if (strpos($_SERVER['REQUEST_URI'], '/auth') === false) {
            $_SESSION['lastURI'] = $_SERVER['REQUEST_URI'];
        }

    }

    function getToken() {
        // callback after getting authorization_code
        if (isset($_GET['code']) && isset($_GET['state'])) {
            if ($_GET['state'] === $_SESSION['vrauth']['state']) {
                $_SESSION['vrauth']['authorization_code'] = $_GET['code'];
                $_SESSION['vrauth']['state'] = '';
                header('Location: '.$_SESSION['lastURI']);
            } else {
                exit('getToken: Wrong state');
            }
        }
        else
        // send GET request to get authorization_code
        {
            $_SESSION['vrauth']['state'] = bin2hex(random_bytes(32));

            $data = array(
                'redirect_uri' => $this->config['redirectURI'],
                'client_id' => $this->config['clientID'],
                'response_type' => 'code',
                'state' => $_SESSION['vrauth']['state'],
                'scope' => $this->config['scopes']
            );

            $url = 'https://auth.viarezo.fr/oauth/authorize/?'.http_build_query($data);

            header('Location: '.$url);
            exit;
        }
    }

    function logUser() {
        if ($this -> isLogged()) {
            header('Location: '.$_SESSION['lastURI']);
            exit('Already logged');
        }

        if (isset($_SESSION['vrauth']['expires_at']) && $_SESSION['vrauth']['expires_at'] < time()) {
            $this -> unlog();  // Got an expired access_token: start from the begining --> TO CHANGE WITH REFRESH_TOKEN
        }

        if (!isset($_SESSION['vrauth']['authorization_code'])) {
            $this -> getToken();
        }

        if (!isset($_SESSION['vrauth']['access_token'])) {
            // No access_token: get one with authorization_code

            $data = array(
                'grant_type' => 'authorization_code',
                'code' => $_SESSION['vrauth']['authorization_code'],
                'redirect_uri' => $this->config['redirectURI'],
                'client_id' => $this->config['clientID'],
                'client_secret' => $this->config['clientSecret']
            );

            $options = array(
                'http' => array(
                    'header'  => "Content-type: application/x-www-form-urlencoded",
                    'method'  => 'POST',
                    'content' => http_build_query($data)
                )
            );
            $context  = stream_context_create($options);

            $result = json_decode(file_get_contents('https://auth.viarezo.fr/oauth/token', false, $context), true);

            $_SESSION['vrauth']['access_token'] = $result['access_token'];
            $_SESSION['vrauth']['expires_at'] = $result['expires_at'];
            $_SESSION['vrauth']['refresh_token'] = $result['refresh_token'];
            $_SESSION['vrauth']['scope'] = $result['scope'];
        }
    }

    function unlog() {
        $_SESSION['vrauth'] = null;
    }

    function isLogged() {
        if (!isset($_SESSION['vrauth']['access_token'])) {
            return false; // no access_token
        }

        if (isset($_SESSION['vrauth']['expires_at']) && $_SESSION['vrauth']['expires_at'] < time()) {
            return false; // access_token expired
        }

        return true; // then user is logged
    }

    function getAccessToken() {
        if (!$this -> isLogged()) {
            return;
        }

        return $_SESSION['vrauth']['access_token'];
    }

    function getUserData() {
        if (!$this -> isLogged()) {
            return;
        }

        $url = 'https://auth.viarezo.fr/api/user/show/me';

        $ch = curl_init();

            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_CONNECTTIMEOUT , 7);
            curl_setopt($ch, CURLOPT_HTTPHEADER, array('Authorization: Bearer '.$_SESSION['vrauth']['access_token']));
            curl_setopt($ch, CURLOPT_HEADER, 0);

            $result = curl_exec($ch);

        curl_close($ch);

        return json_decode($result, true);
    }

    function getISFMembers() {
        if (!$this -> isLogged()) {
            return;
        }

        $data = array('query' => '{association(id:1658){compositions{label,beginningDate,sectors{name,roles{label,user{firstName,lastName,personalPhotoURI,ctiPhotoURI, login}}}}}}');
        $url = 'https://gateway.linkcs.fr/v1/graphql?'.http_build_query($data);

        $ch = curl_init();

            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_CONNECTTIMEOUT , 7);
            curl_setopt($ch, CURLOPT_HTTPHEADER, array('Authorization: Bearer '.$_SESSION['vrauth']['access_token']));
            curl_setopt($ch, CURLOPT_HEADER, 0);

            $result = curl_exec($ch);

        curl_close($ch);

        return json_decode($result, true)['data']['association'];
    }

    function getMemberAssos() {
        if (!$this -> isLogged()) {
            return;
        }

        $login = $this->getUserData()['id'];
        $data = array('query' => '{user(id: '.$login.'){memberships{association{name}}}}');
        $url = 'https://gateway.linkcs.fr/v1/graphql?'.http_build_query($data);

        $ch = curl_init();

            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_CONNECTTIMEOUT , 7);
            curl_setopt($ch, CURLOPT_HTTPHEADER, array('Authorization: Bearer '.$_SESSION['vrauth']['access_token']));
            curl_setopt($ch, CURLOPT_HEADER, 0);

            $result = curl_exec($ch);

        curl_close($ch);

        $json = json_decode($result, true)['data']['user']['memberships'];

        $assos = Array();

        for ($i = 0; $i < count($json); $i ++) {
            $assos[] = $json[$i]['association']['name'];
        }
        return $assos;
    }
}
