<?php
if (!function_exists('getRelativeDate')) {
    function getRelativeDate($datetime) {
        $timestamp = strtotime($datetime);
        $diff = $timestamp - time();
        
        if ($diff < 60) {
            return "Dans moins d'une minute";
        } elseif ($diff < 3600) {
            return "Dans " . floor($diff / 60) . " minutes";
        } elseif ($diff < 86400) {
            return "Dans " . floor($diff / 3600) . " heures";
        } else {
            return "Le " . date("d/m à H:i", $timestamp);
        }
    }
}
?>

<div class="event">
    <div class="event-body">
        <h2><?php echo $evenement["titre"]; ?></h2>
        <hr>
        <p><?php echo nl2br(trim($evenement["description"])); ?></p>
        <p>Lieu : <?php echo $evenement["lieu"]; ?></p>
        <p>Date : <?php echo getRelativeDate($evenement["date"]); ?></p>
        <p>Créé par : <?php echo $evenement["createur"]; ?></p>
    </div>
    <div class="event-footer">
        <div class="event-actions">
            <?php if (isset($_SESSION["pseudo"])): ?>
                <button class="signup-btn" data-index="<?php echo $index; ?>" data-pseudo="<?php echo $_SESSION["pseudo"]; ?>">
                    <?php if (in_array($_SESSION["pseudo"], $evenement["participants"])): ?>
                        ✅ INSCRIT
                    <?php else: ?>
                        👤 S'INSCRIRE
                    <?php endif; ?>
                </button>
                <button class="interest-btn" data-index="<?php echo $index; ?>" data-pseudo="<?php echo $_SESSION["pseudo"]; ?>"
                    <?php if (in_array($_SESSION["pseudo"], $evenement["participants"])): ?>
                        disabled
                    <?php endif; ?>
                >
                    <?php if (isset($evenement["interesses"]) && in_array($_SESSION["pseudo"], $evenement["interesses"]) && !in_array($_SESSION["pseudo"], $evenement["participants"])): ?>
                        ❤️ Intéressé
                    <?php else: ?>
                        🩶 S'intéresser
                    <?php endif; ?>
                </button>
                <button class="share-btn">↪️ Partager</button>
            <?php else: ?>
                <a href="connexion.php" class="login-btn">Se connecter</a>
            <?php endif; ?>
        </div>
        <div class="event-stats">
            <span>❤️: <?php echo count($evenement["interesses"]); ?></span>
            <span>👥: <?php echo count($evenement["participants"]); ?></span>
        </div>
    </div>
</div>