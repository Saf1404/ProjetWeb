<?php
session_start();

$evenementsData = file_get_contents('evenements.json');
$evenements = json_decode($evenementsData, true);

$pdo = new PDO('mysql:host=localhost;dbname=chat_db', 'root', '');

$event_id = $_POST['event_id'];

$evenement = null;
foreach ($evenements as $evt) {
    if ($evt['id'] === $event_id) {
        $evenement = $evt;
        break;
    }
}

$userPseudo = $_SESSION['pseudo'];
$isUserRegistered = in_array($userPseudo, $evenement['participants']);

if (isset($_POST['message']) && $isUserRegistered) {
    $message = $_POST['message'];
    $pseudo = $userPseudo;
    $timestamp = date('Y-m-d H:i:s.u');

    $stmt = $pdo->prepare("INSERT INTO messages (event_id, pseudo, message, timestamp) VALUES (?, ?, ?, ?)");
    $stmt->execute([$event_id, $pseudo, $message, $timestamp]);
}

if ($evenement && $isUserRegistered) {
    $stmt = $pdo->prepare("SELECT message, pseudo, timestamp FROM messages WHERE event_id = ? ORDER BY timestamp ASC");
    $stmt->execute([$event_id]);
    $messages = $stmt->fetchAll(PDO::FETCH_ASSOC);

    header('Content-Type: application/json');
    echo json_encode($messages);
    exit;
} else {
    header('Content-Type: application/json');
    echo json_encode(['error' => true]);
    exit;
}
