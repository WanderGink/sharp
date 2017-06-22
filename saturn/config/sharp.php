<?php

return [
    "entities" => [
        "spaceship" => [
            "list" => \App\Sharp\SpaceshipSharpList::class,
            "form" => \App\Sharp\SpaceshipSharpForm::class,
            "validator" => \App\Sharp\SpaceshipSharpValidator::class,
        ]
    ],
    "uploads" => [
        "tmp_dir" => env("SHARP_UPLOADS_TMP_DIR", "tmp"),
        "thumbnails_dir" => env("SHARP_UPLOADS_THUMBS_DIR", "thumbnails"),
    ]
];