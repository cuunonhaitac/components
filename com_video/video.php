<?php
/** Toi Ba Lo */
defined('_JEXEC') or die;

$doc = JFactory::getDocument();
$doc->addScript('./templates/green/js/jquery.tubular.1.0.js', 'text/javascript');
?>
<div id="wrapper">
    <div class="clearfix">
        <div id="main">
            <p id="video-controls" class="black-65">
                Video controls:<br />
                <a href="#" class="tubular-play">Play</a> | <a href="#" class="tubular-pause">Pause</a> | <a href="#" class="tubular-volume-up">Volume Up</a> | <a href="#" class="tubular-volume-down">Volume Down</a> | <a href="#" class="tubular-mute">Mute</a>
            </p>
        </div>
        <div id="sidebar">


        </div>
    </div>
    <!-- #wrapper -->

</div>

<script>
    jQuery.noConflict();
    (function ($) {
        jQuery(document).ready(function () {
            var options = { videoId: 'tD1U-5v4eL4', start: 3 };
            $('#wrapper').tubular(options);
            // f-UGhWj1xww cool sepia hd
            // 49SKbS7Xwf4 beautiful barn sepia
        });
    })(jQuery);
</script>