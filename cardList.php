<?php if (!empty($cards)): ?>
    <div class="grid-container">
        <?php foreach ($cards as $card): ?>
            <div class="card">
                <p class="card-title"><?= htmlspecialchars($card['card_title']); ?></p>
                <p class="card-content"><?= htmlspecialchars($card['card_content']); ?></p>
            </div>
        <?php endforeach; ?>
    </div>
<?php endif; ?>