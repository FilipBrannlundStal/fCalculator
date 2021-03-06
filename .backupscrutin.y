imports:
    - php

filter:
    excluded_paths: [tests/*]

build:
    tests:
        override:
            -
                command: 'phpunit'
                coverage:
                    file: 'coverage.clover'
                    format: 'clover'
