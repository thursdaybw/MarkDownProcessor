
<?php
namespace MarkdownProcessor;

class FileReader {
    public function read_files($file_paths) {
        $file_contents = [];
        foreach ($file_paths as $filepath) {
            $file_contents[$filepath] = file_get_contents($filepath);
        }
        return $file_contents;
    }
}
