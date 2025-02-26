<?php
// Get the requested film title
$title = isset($_GET['title']) ? $_GET['title'] : '';
$film = getFilmByTitle($title);

// If film not found, show error
if (!$film) {
    echo '<div class="error">Film not found</div>';
    exit;
}
?>

<div class="watch-container">
    <div class="player-section">
        <div class="player-wrapper">
            <div style="position: relative; padding-bottom: 56.25%; height: 0;">
                <iframe id="js_video_iframe" src="<?php echo $film['embed_url']; ?>" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;"></iframe>
            </div>
        </div>
        
        <div class="film-details">
            <h1><?php echo $film['display_title']; ?></h1>
            <div class="meta-info">
                <span class="year"><?php echo $film['year']; ?></span>
                <span class="duration"><?php echo $film['duration']; ?></span>
            </div>
            <p class="description"><?php echo $film['description']; ?></p>
        </div>
    </div>
    
    <div class="related-films">
        <h3>More Films</h3>
        <div class="related-grid">
            <?php 
            $count = 0;
            foreach ($films as $related_film) {
                // Don't show the current film and limit to 4 related films
                if ($related_film['id'] != $film['id'] && $count < 4) {
                    $count++;
            ?>
                <div class="related-film">
                    <a href="/watch/<?php echo $related_film['title']; ?>">
                        <div class="thumbnail">
                            <img src="<?php echo $related_film['thumbnail']; ?>" alt="<?php echo $related_film['display_title']; ?>">
                        </div>
                        <h4><?php echo $related_film['display_title']; ?></h4>
                    </a>
                </div>
            <?php 
                }
            } 
            ?>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Track film view
    console.log('Viewing film: <?php echo $film['display_title']; ?>');
    
    // You can add analytics code here
});
</script>
