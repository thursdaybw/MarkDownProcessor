
<?php
namespace MarkdownProcessor;

require_once __DIR__ . '/autoload.php';

use MarkdownProcessor\FileReader;
use MarkdownProcessor\HeaderParser;
use MarkdownProcessor\TOCCreator;
use MarkdownProcessor\NavLinkCreator;
use MarkdownProcessor\FileUpdater;
use MarkdownProcessor\TarballWriter;

$options = getopt("f:o:");

$file_paths = explode(",", $options["f"]);
$output_path = $options["o"];

$file_reader = new FileReader();
$header_parser = new HeaderParser();
$toc_creator = new TOCCreator();
$nav_link_creator = new NavLinkCreator();
$file_updater = new FileUpdater();
$tarball_writer = new TarballWriter();

$file_contents = $file_reader->read_files($file_paths);

foreach ($file_contents as $filepath => $file_content) {
    $headers = $header_parser->parse_headers($file_content);
    $toc = $toc_creator->create_toc($headers);
    $nav_links = $nav_link_creator->create_nav_links($file_paths);
    $file_contents[$filepath] = $file_updater->update_file_content($file_content, $toc, $nav_links);
}

$tarball_writer->write_tarball($file_contents, $output_path);
