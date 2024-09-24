<?php if (!empty($cards)): ?>
    <div class="grid-container">
        <?php foreach ($cards as $card): ?>
            <div class="card">
                <!-- Conditionally hide the title if it's empty and handle null values -->
                <p class="card-title" style="<?= empty($card["card_title"])? "display: none;": "" ?>">
                    <?= isset($card["card_title"]) && $card["card_title"] !== null? htmlspecialchars($card["card_title"]): "" ?>
                </p>

                <!-- Conditionally hide the card art if it's empty or not a valid URL and handle null values -->
                <?php if (!empty($card["card_art"]) && filter_var($card["card_art"], FILTER_VALIDATE_URL)): ?>
                    <img src="<?= htmlspecialchars($card["card_art"]) ?>" alt="Card Art"style="width: 100%; height: auto;">
                <?php else: ?>
                    <img src="" style="display: none;">
                <?php endif; ?>

                <p class="card-content"><?= isset($card["card_content"]) && $card["card_content"] !== null ? htmlspecialchars($card["card_content"]): "" ?></p>
            </div>
        <?php endforeach; ?>
    </div>
<?php endif; ?>
