
<?php
namespace MarkdownProcessor;

class NavLinkCreator {
    public function create_nav_links($file_paths) {
        $nav_links = "";
        foreach ($file_paths as $filepath) {
            $nav_links .= "- [" . $filepath . "](" . $filepath . ")\n";
        }
        return $nav_links;
    }
}
