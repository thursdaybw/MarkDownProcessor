
<?php
namespace MarkdownProcessor;

class TOCCreator {
    public function create_toc($headers) {
        $toc = "";
        foreach ($headers as [$level, $header]) {
            $indent = str_repeat(" ", ($level - 1) * 2);
            $toc .= $indent . "- " . $header . "\n";
        }
        return $toc;
    }
}
