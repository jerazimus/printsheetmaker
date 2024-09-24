<?php if (!empty($cards)): ?>
    <div class="grid-container">
        <?php foreach ($cards as $card): ?>
            <div class="card">
                <!-- Conditionally hide the title if it's empty and handle null values -->
                <p class="card-title" style="<?= empty($card["title"])? "display: none;": "" ?>">
                    <?= isset($card["title"]) && $card["title"] !== null? htmlspecialchars($card["title"]): "" ?>
                </p>
                <!-- Conditionally hide the card art if it's empty or not a valid URL and handle null values -->
                <?php if (!empty($card["art"]) && filter_var($card["art"], FILTER_VALIDATE_URL)): ?>
                    <img src="<?= htmlspecialchars($card["art"]) ?>" alt="Card Art"style="width: 100%; height: auto;">
                <?php else: ?>
                    <img src="" style="display: none;">
                <?php endif; ?>

                <p class="card-content"><?= isset($card["content"]) && $card["content"] !== null ? htmlspecialchars($card["content"]): "" ?></p>

                <p class="watermark" id="watermark">printsheetmaker.com</p>
            </div>
        <?php endforeach; ?>
    </div>
<?php endif; ?>
