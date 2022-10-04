<?php

return [
    'baseUrl' => 'https://docs.cierra.dev',
    'production' => false,
    'siteName' => 'cierra Developer Guideline (PREVIEW)',
    'siteDescription' => 'A full guide for developers at cierra.',
    'basePath' => env('PR_REPO_NAME') ? '/' . env('PR_REPO_NAME') : '',

    // DocSearch credentials
    'docsearchApiKey' => env('DOCSEARCH_KEY'),
    'docsearchIndexName' => env('DOCSEARCH_INDEX'),
];
