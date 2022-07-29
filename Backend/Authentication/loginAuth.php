<?php
// $username = $_REQUEST["username"];
// $password = $_REQUEST["password"];

// $conn = mysqli_connect("localhost","root" , "05052001", "userdb");
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }
// $hashedPassword = md5($password);
// $sql = "SELECT * FROM user WHERE username='".$username."' AND password='".$hashedPassword."'";
// $res =  $conn->query($sql);
// if($res->num_rows > 0) {
//     echo "login sucessful!";
// } 
// else echo "Incorrect username or password!";

require "../Database/connectionHandle.php";
include_once "../../vendor/autoload.php";
use Firebase\JWT\JWT;

header("Access-Control-Allow-Origin: * ");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

$databaseServices = new ConnectionHandle();
$conn = $databaseServices->setupConnection();

$data = json_decode(file_get_contents("php://input"));

$email = $data->username;
$password = $data->password;

$table_name = 'user';

$query = "SELECT * FROM ".$table_name . " WHERE email = '" . $email."'";

$stmt = $conn->query( $query);
echo json_encode(array("message" => $stmt));
// $num = $stmt->num_rows;
// if($num > 0) {
//     $row = $stmt->fetch_assoc();
//     $id = $row['id'];
//     $username = $row['username'];
//     $email = $row['email'];
//     $password2 = $row['password'];
//     http_response_code(401);
//     if(password_verify($password, $password2)) {
//         $secret_key = "hello mother fucker";
//         $issuer_claim = "localhost"; //this can be  the server name
//         $audience_claim = "THE_AUDIENCE";
//         $issuedat_claim = time();
//         $notbefore_claim = $issuedat_claim + 10;
//         $expire_claim = $issuedat_claim + 60;
//         $token = array(
//             "iss" => $issuer_claim,
//             "aud" => $audience_claim,
//             "iat" => $issuedat_claim,
//             "nbf" => $notbefore_claim,
//             "exp" => $expire_claim,
//             "data" => array(
//                 "id" => $id,
//                 "username" => $username,
//                 "email" => $email
//             )
//             );
//             http_response_code(200);

//             $jwt = JWT::encode($token, $secret_key, 'HS256');
//             echo json_encode(
//                 array(
//                     "message" => "successful login.",
//                     "jwt" => $jwt,
//                     "email" => $email,
//                     "expireAt" => $expire_claim
//                 )
//                 );
//     } else {
//         http_response_code(401);
//         echo json_encode(array("message" => "Login failed", "password" => $password));
//         }
//     } else {
//         http_response_code(401);
//         echo json_encode(array("message" => "Login failed"));
//     }

?>
