<?php

return [
    'default_algorithm' => env('ENCRYPTION_DEFAULT_ALGORITHM', 'AES'),
    'aes_key_length' => env('AES_KEY_LENGTH', 256),
    'rsa_key_size' => env('RSA_KEY_SIZE', 2048),
    'allowed_algorithms' => ['AES', 'DES', 'RSA'],
    'max_file_size' => env('MAX_ENCRYPTION_FILE_SIZE', 10240), // 10MB in KB
];
