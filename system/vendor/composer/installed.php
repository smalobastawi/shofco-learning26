<?php return array(
    'root' => array(
        'name' => 'moodle/moodle',
        'pretty_version' => 'dev-main',
        'version' => 'dev-main',
        'reference' => '697e6ba4508c3aad1760bb2d9d366b162a4fcf7d',
        'type' => 'moodle-core',
        'install_path' => __DIR__ . '/../../',
        'aliases' => array(),
        'dev' => false,
    ),
    'versions' => array(
        'moodle/lms' => array(
            'dev_requirement' => false,
            'provided' => array(
                0 => '5.1',
            ),
        ),
        'moodle/moodle' => array(
            'pretty_version' => 'dev-main',
            'version' => 'dev-main',
            'reference' => '697e6ba4508c3aad1760bb2d9d366b162a4fcf7d',
            'type' => 'moodle-core',
            'install_path' => __DIR__ . '/../../',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
    ),
);
