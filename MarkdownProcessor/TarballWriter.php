
<?php
namespace MarkdownProcessor;

class TarballWriter {
    public function write_tarball($file_contents, $output_path) {
        $phar = new PharData($output_path);
        foreach ($file_contents as $filename => $content) {
            file_put_contents($filename, $content);
            $phar->addFile($filename, $filename);
        }
    }
}
