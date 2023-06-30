<?php return array(
    'root' => array(
        'name' => 'maithemewp/mai-homestead',
        'pretty_version' => '1.0.0+no-version-set',
        'version' => '1.0.0.0',
        'reference' => NULL,
        'type' => 'library',
        'install_path' => __DIR__ . '/../../',
        'aliases' => array(),
        'dev' => true,
    ),
    'versions' => array(
        'afragen/wp-dependency-installer' => array(
            'dev_requirement' => false,
            'replaced' => array(
                0 => '*',
            ),
        ),
        'maithemewp/mai-homestead' => array(
            'pretty_version' => '1.0.0+no-version-set',
            'version' => '1.0.0.0',
            'reference' => NULL,
            'type' => 'library',
            'install_path' => __DIR__ . '/../../',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'maithemewp/mai-installer' => array(
            'pretty_version' => 'dev-master',
            'version' => 'dev-master',
            'reference' => '399fec687a9459b774c1bd1c44a38a806dfa052f',
            'type' => 'library',
            'install_path' => __DIR__ . '/../maithemewp/mai-installer',
            'aliases' => array(
                0 => '9999999-dev',
            ),
            'dev_requirement' => false,
        ),
    ),
);
