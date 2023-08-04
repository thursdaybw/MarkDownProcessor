
<?php
namespace MarkdownProcessor;

class FileUpdater {
    public function update_file_content($file_content, $toc, $nav_links) {
        $new_content = "# Navigation\n\n" . $nav_links . "\n\n# Table of Contents\n\n" . $toc . "\n\n" . $file_content;
        return $new_content;
    }
}
