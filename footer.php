<div class="footer">
<?php include_once("analyticstracking.php") ?>
    <p>&copy; <?php echo $site_name."  ".date('Y'); ?>  Powered by <a href="https://github.com/orvice/ss-panel">ss-panel</a> <?php echo $version; ?>
        Processed in <?php
        $Runtime->Stop();
        echo $Runtime->SpendTime()."ms";
        ?>
    </p>
</div>
