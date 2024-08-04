<?php
// class ContactModel {
//     private $conn;

//     public function __construct($db) {
//         $this->conn = $db;
//     }

//     public function saveMessage($nom, $prenom, $email, $objet, $message) {
//         $stmt = $this->conn->prepare("INSERT INTO messages (nom, prenom, email, objet, message) VALUES (?, ?, ?, ?, ?)");
//         $stmt->bind_param("sssss", $nom, $prenom, $email, $objet, $message);
//         return $stmt->execute();
//     }

//     public function storeCsrfToken($tokenHash, $sessionId, $expiry) {
//         $stmt = $this->conn->prepare("INSERT INTO csrf_tokens (token_hash, session_id, expiry) VALUES (?, ?, ?)");
//         $stmt->bind_param("sss", $tokenHash, $sessionId, $expiry);
//         return $stmt->execute();
//     }

//     public function verifyCsrfToken($tokenHash, $sessionId) {
//         $stmt = $this->conn->prepare("SELECT id FROM csrf_tokens WHERE token_hash = ? AND session_id = ? AND expiry > NOW()");
//         $stmt->bind_param("ss", $tokenHash, $sessionId);
//         $stmt->execute();
//         $stmt->store_result();
//         return $stmt->num_rows > 0;
//     }

//     public function cleanupExpiredTokens() {
//         $stmt = $this->conn->prepare("DELETE FROM csrf_tokens WHERE expiry < NOW()");
//         return $stmt->execute();
//     }
// }
?>
