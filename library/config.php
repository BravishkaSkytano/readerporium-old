<?php
#############################################################################
# miniCalOPe                               (c) 2010-2020 by Itzchak Rehberg #
# written by Itzchak Rehberg <izzysoft AT qumran DOT org>                   #
# https://www.izzysoft.de/                                                  #
# ------------------------------------------------------------------------- #
# This program is free software; you can redistribute and/or modify it      #
# under the terms of the GNU General Public License (see doc/LICENSE)       #
# ------------------------------------------------------------------------- #
# Simple configuration (no language-specific stuff)                         #
#############################################################################

#================================[ Directories ]===
// database file
$dbfile = dirname(__FILE__).'/metadata.db';
// Where your books are stored.
$bookroot    = 'books';
// Which book formats you want to use (file extensions). supported are epub and mobi
$bookformats = ['epub','mobi'];
// file extension for book descriptions
$bookdesc_ext = ['desc'];
// file extension for Metadata
$bookmeta_ext = 'data';

#================================[ Logging ]===
// Logfile to use. Empty means no logging to file.
$logfile = './minicalope.log';
// Seperate log file to log downloads to (in addition to the normal log).
// Empty string to disable for now.
$dllogfile = './minical_dl.log';
// Available log levels: NOLOG, EMERGENCY, ALERT, CRITICAL, ERROR, WARNING, NOTICE, INFO, DEBUG
// Yes - case IS important. Specified level includes all before-mentioned
// File log level
$fileloglevel = INFO;
// Screen output when running in web mode
$screenloglevel = NOLOG;
// Screen output when running from command line
$screenloglevel_cli = INFO;
// Report New/Moved/Deleted on Scan
$scan_report_changes = FALSE;

#============================[ Book Covers ]===
// Where to get the covers: calibre, simple, or off (none)
$cover_mode = 'simple';
// maximum width (in px) to display them
$cover_width = '200';
// where to place the cover img links
$cover_base = 'covers';
// generate fake-covers when no real img available (HTML only)?
$cover_fake_fallback = TRUE;

#==========================[ Scan Specials ]===
// Protect scan scripts against being run by web visitors
$scan_cli_only = TRUE;
// when found in .data files, what shall override definitions collected from the
// directory structure? If not named here, it will be "merged". Currently
// supported: author
$data_overrides = ['author'];
// As it's advisable to use 7-bit ASCII only for directory and file names,
// one might wish to get the "correct spelling" into the Metadata by other means.
// You can place ".name" files to have the directory name "replaced". Keep in
// mind, however, that non-ASCII characters might cause issues with sorting.
// Also remember to keep the .name and the "tag::"/"author::" in sync with .data files :)
$dotname_overrides = ['author','genre'];
// Whether to interprete content of .desc files as Markdown (1) or not (0).
// This is the global switch. If enabled (1), you can override it per-genre
// and/or per author by placing a file named .nomarkdown in their directory.
$use_markdown = 0;
#-------------------------------[ Checking ]---
// check for possible XML errors in description files and log them?
$check_xml = TRUE;
// as XML errors break OPDS, better skip the broken content.
// Needs above check to be enabled in order to work.
$skip_broken_xml = TRUE;
// how to insert books into the database:
// 'rebuild': drop all data and do a fresh insert (books are likely to get new IDs this way)
// 'merge'  : try to figure out what has changed (recommended; keeps the book IDs, but is slower)
$scan_dbmode = 'merge';
#------------------------[ data extraction ]---
// we can extract some details from EPUB files. Define here whether we shall do
// so, and what to extract.
// Main switch to toggle it on/off:
$autoExtract = TRUE;
// Shall we extract covers? 0=no, 1=extract, 2=extract&resize
// Covers will only be extracted if there is no cover image already.
$extractCover = 1;
// Which details to extract to .data files if autoExtract is enabled.
// Valid values are either 'all' (to extract everything), or one or a
// combination of author,isbn,publisher,rating,series,series_index,tag,title,uri
// note that while 'isbn' and 'uri' are safe to use, there might be
// issues with the others. For details, see issue #4 at Github:
// https://github.com/IzzySoft/miniCalOPe/issues/4
// Empty array switches off .data extraction completely (default)
$extract2data = ['all'];
// What to extract to .desc files if autoExtract is enabled.
// Valid values are either 'all' (to extract everything), or one or a
// combination of 'desc' (book description only), 'head' (the heading
// part with Metadata), 'toc' (table of contents). Future versions might diverse
// further). For some background, make sure to read issue #4 at Github:
// https://github.com/IzzySoft/miniCalOPe/issues/4
// Empty array switches off .data extraction completely (default)
$extract2desc = ['all'];

#============================[ Web Service ]===
// Timezone
$timezone = '+01:00';
// Site Title
$sitetitle = 'Readerporium';
// Full URL to miniCalOPe
$baseurl = 'https://'.$_SERVER['SERVER_NAME'].'/library/';
// Path relative to the web servers DOCUMENT_ROOT
$relurl  = '/library/';
// how many items per page
$perpage = 25;
// Full URL to the Wikipedia to use for author info
$wikibase= 'https://en.wikipedia.org/wiki/';
// Enable some ISBN searches (empty array to disable this feature)
$isbnservices = ['Amazon.com','Google.com','Kobo.com'];
// Enable some book search services (search by author and title of the selected book;
// empty array to disable this feature)
$booksearchservices = ['Amazon.com','Google.com','Kobo.com'];

#=========================[ Monetarization ]===
// While our content is served for free, we won't object to any donations :)
// -=[ Donations ]-
// Specifying your Donation page here will enable the corresponding button.
// Just copy the example file provided in 'doc/donationinfo.csv' and adjust it
// to your liking (you can add more entries), then specify the file here:
$donationInfo = 'doc/donationinfo.csv';

#============================[ Person Info ]===
// about you: Name, Homepage, Email, Amazon PartnerID (leave empty if you have none)
$owner   = 'Bravisha Skietano';
$homepage= 'https://www.aspiring-writer.netlify.app/';
$email   = '';
$amazonID= '';

#===========================[ stuff ]===
$uselangs = []; // empty = all

?>