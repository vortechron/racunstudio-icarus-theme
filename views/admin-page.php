<h3>RacunStudio Theme Options</h3>


<form action="options.php" method="post">
    <?php 

        settings_errors();

        settings_fields('racunstudio-icarus-group');

        do_settings_sections('racunstudio-icarus');

        submit_button();

    ?>
</form>