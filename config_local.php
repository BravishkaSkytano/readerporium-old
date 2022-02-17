<?php
    if (!isset($config))
        $config = array();

    /*
     ***************************************************
     * Please read config_default.php for all possible
     * configuration items
     ***************************************************
     */

    /*
     * The directory containing calibre's metadata.db file, with sub-directories
     * containing all the formats.
     * BEWARE : it has to end with a /
     */
    $config['calibre_directory'] = 'https://mega.nz/folder/s5QjCa6Y#9Uey2PyEnIxKSJjDYjaEgg/';

    /*
     * Catalog's title
     */
    $config['cops_title_default'] = "COPS";

    /*
     * use URL rewriting for downloading of ebook in HTML catalog
     * See README for more information
     *  1 : enable
     *  0 : disable
     */
    $config['cops_use_url_rewriting'] = "1";

    /*
     * Default timezone
     * Check following link for other timezones :
     * http://www.php.net/manual/en/timezones.php
     */
    $config['default_timezone'] = 'America/New_York';

    /*
     * Rename .epub to .kepub.epub if downloaded from a Kobo eReader
     * The ebook will then be recognized a Kepub so with chaptered paging, statistics, ...
     * You have to enable URL rewriting if you want to enable kepup.epub download
     * 1 : Yes (enable)
     * 0 : No
     */
    $config['cops_provide_kepub'] = '1';
