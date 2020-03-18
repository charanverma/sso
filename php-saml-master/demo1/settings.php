<?php

    $spBaseUrl = 'https://dev-nycid-poc.pantheonsite.io/sso'; //or http://<your_domain>

    $settingsInfo = array (
        'sp' => array (
            'entityId' => $spBaseUrl.'/php-saml-master/demo1/metadata.php',
            'assertionConsumerService' => array (
                'url' => $spBaseUrl.'/php-saml-master/demo1/index.php?acs',
            ),
            'singleLogoutService' => array (
                'url' => $spBaseUrl.'/php-saml-master/demo1/index.php?sls',
            ),
            'NameIDFormat' => 'urn:oasis:names:tc:SAML:1.1:nameid-format:emailAddress',
			//'NameIDFormat' => 'urn:oasis:names:tc:SAML:2.0:nameid-format:unspecified',
        ),
        'idp' => array (
            'entityId' => 'https://app.onelogin.com/saml/metadata/5a4765a2-87a5-436d-8a4b-537c58aa394d',
            'singleSignOnService' => array (
                'url' => 'https://fidm.us1.gigya.com/saml/v2.0/3_DkZigi2v_eW7z-cZt8PAw-cYWQYg2d8VqABUFRZUhhzxNAdwR5brLl_h8Hqbo7Bm/idp/sso',
            ),
            'singleLogoutService' => array (
                'url' => 'https://fidm.us1.gigya.com/saml/v2.0/3_DkZigi2v_eW7z-cZt8PAw-cYWQYg2d8VqABUFRZUhhzxNAdwR5brLl_h8Hqbo7Bm/idp/slo',
            ),
            'x509cert' => '			MIICujCCAaKgAwIBAgIQfvBsmKVV64lL9IeOyu8OsjANBgkqhkiG9w0BAQUFADAYMRYwFAYDVQQDEw1HaWd5YSBTQU1MIFNQMCAXDTE4MDczMTEyMjIyNloYDzIxMTgwNzMxMTIyMjI2WjAYMRYwFAYDVQQDEw1HaWd5YSBTQU1MIFNQMIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEA0al9NIjBymrRIihclm34+D+eLYeSkwD2FtDKeR5/dk/7NpzbNtmgMPreulf4iQh7XZ6MxsGSnWqF7iGZq9bTQ8vjVwRXOrFVarpSrGCMOd0rRo6Ax4XIXOogWVT1DH4IVAvuT6HwAGJFF1t6oZ9I+zhdKoIrRr/diT5EVD4sWOCPwaO3Fdwl89KFIl0TQUN9tBM2+7Woi3yDYymLIEJ2o1u5RRHRYkB1JF5gJ89oJLaa4WvjzYhSQDtQ3tbrW8b/V9Wd+Ml8eWFMhuKNF8N0Ks/sQU8L26nFcM4OoWSn8bBLVWaQ9SmmjB85wdLz/i1szmqNCqlkAUTSAR4WCfME/QIDAQABMA0GCSqGSIb3DQEBBQUAA4IBAQCVfGTDwqmOV+PmORBBu+CaD7CV9/lALUrfYeaWvgqF7IAk1UFYAhiBVvpYgEFfB66DGHWhe1KTjftMb2OLivdb0/gfyh0O3Ky/Tj9bllRn0VK0d48rHnU/K2t8ZyjPZPsoMOF1ldcUYTxutPEK9ZamD1hoo9w0+vSfUAGH5PCU3WtVd0GT87qUYI6tQilmZtznipPxZwUaKn0KuxbaQ74EkUZMvtMtxZNPjsOQyr2Tt027mEh/AzzW5ojdOzhFRhzYEM/IvVyGwa//TxORi+EkYc/sZVZscRhT0gxr9ry9MmCsffViF8DgOPhgWDE6vR3rRcbMxQ08GWCqSGY4iWG/',
        ),
    );
