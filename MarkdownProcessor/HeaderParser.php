
<?php
namespace MarkdownProcessor;

class HeaderParser {
    public function parse_headers($file_content) {
        preg_match_all('/(?P<level>#{1,6}) (?P<header>.+)/', $file_content, $matches, PREG_SET_ORDER);
        $headers = [];
        foreach ($matches as $match) {
            $headers[] = [strlen($match['level']), $match['header']];
        }
        return $headers;
    }
}
