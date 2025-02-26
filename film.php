<div class="hero-section">
    <div class="hero-content">
        <h1>Discover Amazing Films</h1>
        <p>Stream your favorite movies anytime, anywhere</p>
    </div>
</div>

<section class="film-grid">
    <h2>Latest Films</h2>
    <div class="films">
        <?php foreach ($films as $film): ?>
        <div class="film-card">
            <a href="/watch/<?php echo $film['title']; ?>">
                <div class="thumbnail">
                    <img src="<?php echo $film['thumbnail']; ?>" alt="<?php echo $film['display_title']; ?>">
                    <div class="duration"><?php echo $film['duration']; ?></div>
                </div>
                <div class="film-info">
                    <h3><?php echo $film['display_title']; ?></h3>
                    <div class="film-meta">
                        <span class="year"><?php echo $film['year']; ?></span>
                    </div>
                    <p class="description"><?php echo $film['description']; ?></p>
                </div>
            </a>
        </div>
        <?php endforeach; ?>
    </div>
</section>
