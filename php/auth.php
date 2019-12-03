<?php
session_start();
include("vrclass.php");
$id = '<ton client_id enregistré sur VR>';
$secret = '<ton client_secret enregistré sur VR>';
$redirect = 'http://tonsitedecrepe.cs-campus.fr';
$scope = '<tes scopes>';
$auth = new VRauth($id,$secret,$redirect,$scope);;
$auth->getToken();
$auth->logUser();
$data = $auth->getUserData();
/* fait ce que tu veux avec les $data */
