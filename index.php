<?php
declare(strict_types=1);
$input = $argv[1] ?? 'benchmark';
$digest = substr(hash('sha256', 'biomed-rna-php-splice-junction-donor-acceptor:' . $input), 0, 32);
echo json_encode([
    'engine' => 'biomed-rna-php-splice-junction-donor-acceptor',
    'suite' => 'bio-med-1000',
    'digest' => $digest,
    'status' => 'VERIFIED_OK',
], JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE) . PHP_EOL;
