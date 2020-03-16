<?php

    $spBaseUrl = 'http://localhost/test-sso'; //or http://<your_domain>

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
                'url' => 'https://personal2-dev.onelogin.com/trust/saml2/http-post/sso/5a4765a2-87a5-436d-8a4b-537c58aa394d',
            ),
            'singleLogoutService' => array (
                'url' => 'https://personal2-dev.onelogin.com/trust/saml2/http-redirect/slo/1092627',
            ),
            'x509cert' => 'MIID4jCCAsqgAwIBAgIUMinjKtsmipnjpzMJIR0Qnj/b3LgwDQYJKoZIhvcNAQEF
BQAwRzESMBAGA1UECgwJcGVyc29uYWwyMRUwEwYDVQQLDAxPbmVMb2dpbiBJZFAx
GjAYBgNVBAMMEU9uZUxvZ2luIEFjY291bnQgMB4XDTIwMDMwMzAyMjY0MVoXDTI1
MDMwMzAyMjY0MVowRzESMBAGA1UECgwJcGVyc29uYWwyMRUwEwYDVQQLDAxPbmVM
b2dpbiBJZFAxGjAYBgNVBAMMEU9uZUxvZ2luIEFjY291bnQgMIIBIjANBgkqhkiG
9w0BAQEFAAOCAQ8AMIIBCgKCAQEAujtESYLANx0oFFvUAUOq0b1b2x4v96nLSJv0
3xhVXuwXfmwL/7nK9/cMY1XAkmuHVdZpjtCoHO5IVqUxA+lMgkm+0emH+twAycHG
QSlpUkTRyyt/9yHCLCDFedlnsiwOgYgvyZXFi+YfgrLRA/l3xy4qD8Rd+ayNlsV1
a1xiOV0cODOfHzOrvreTBHVmVgL2TPJVgLRjT3FFNqJb2Q85MraQgceg5a0MeJ/Y
KjZUgD2dK7XoVzQJMXY9wJFuPOLFbN+OVekNFeVH1rCHbC9TH6fxv4YaCFcitgOG
A6E9mS43riL/jUSONWPDhGK8wRAjT8EAAcDvWdwWk6+BlyctgQIDAQABo4HFMIHC
MAwGA1UdEwEB/wQCMAAwHQYDVR0OBBYEFAyBW8mDe7SYxJS2zaHAVADaWZM0MIGC
BgNVHSMEezB5gBQMgVvJg3u0mMSUts2hwFQA2lmTNKFLpEkwRzESMBAGA1UECgwJ
cGVyc29uYWwyMRUwEwYDVQQLDAxPbmVMb2dpbiBJZFAxGjAYBgNVBAMMEU9uZUxv
Z2luIEFjY291bnQgghQyKeMq2yaKmeOnMwkhHRCeP9vcuDAOBgNVHQ8BAf8EBAMC
B4AwDQYJKoZIhvcNAQEFBQADggEBAARxXklHixdMiMe6JMWtLZ4lK+WCGhgvXcBo
98VM9/GyO3c8Mpm+bCi9KwMgvTu4rQHoO0u1pJjuleUpCSCidpLsorS8Tzy5e0GA
KfmLPurBJv+OzknKqkJPBMgCR/JZGEMb+UlwyxbTlsJBN2MaAqTcd5QjIFMDu5sB
yaHU4EkxyaWFTvicbZ6qtd7Tw8uFw8y6BuBy0JKwiR/tFvp5KS+0mUN1MZirjLy2
FG6gYgdXPLt1MfClo88HIMVsUX/DT3PGfvfk9YVZDQJXrtD0QrnmBxlmN5RPjfjx
jLqCFjlVSohzAR3hjtVfQuKM2AGfn1gRsStSBYJ3AJInugx5Kk8=',
        ),
    );
