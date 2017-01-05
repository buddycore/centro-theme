        <span class="infinite-loading">Loading more content...</span>
    </main>
    
    <div class="min-requirements">
        <div>
            <h6>Minimum Requirements</h6>
            <p>Your device does not meet the minimum requirements to view this site, please considering increasing your device width to more than 300px.</p>
        </div>
    </div>
    
    <?php if(get_theme_mod('sc_infinite_scroll')) : ?>
        <?php locate_template('templates/partial/infinite.php', true, true); ?>
        <style>
            div.pagination { display: none; }
        </style>
    <?php endif; ?>
    <?php wp_footer(); ?>
</body>
</html>