<?php
/*
 * Stolen from twentyfifteen's comments.php
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
    return;
}
?>

<div id="comments" class="comments-area">
    <script id="echochamber">
        var EchoChamber = window.EchoChamber || {};
        (function() {
            EchoChamber.discussionURL = window.location;
            var script = document.createElement('script');
            script.src = 'https://s3.amazonaws.com/echochamberjs/dist/main.js';
            script.async = true;
            var entry = document.getElementById('echochamber');
            entry.parentNode.insertBefore(script, entry);
        })();
    </script>
</div>
