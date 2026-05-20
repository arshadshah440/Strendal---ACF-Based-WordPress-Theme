<?php
$html = file_get_contents(__DIR__ . '/../../themes/bedrooms.html');
$out  = __DIR__ . '/assets/images/bedrooms';
if (!is_dir($out)) mkdir($out, 0755, true);

preg_match_all('/<img[^>]+src=["\']data:image\/([a-z]+);base64,([A-Za-z0-9+\/=\r\n]+)["\']/', $html, $matches, PREG_SET_ORDER);

$names = ['br2-a', 'br2-b', 'jj', 'br3', 'laundry'];
foreach ($matches as $i => $m) {
    $ext  = $m[1] === 'jpeg' ? 'jpg' : $m[1];
    $name = isset($names[$i]) ? $names[$i] : 'img-' . $i;
    $data = base64_decode(preg_replace('/\s+/', '', $m[2]));
    file_put_contents("$out/$name.$ext", $data);
    echo "Saved $name.$ext (" . round(strlen($data)/1024) . " KB)\n";
}
echo "Done.\n";
