<?php

namespace App\Models;

use DateTime;

class Blog {
    private int $id;
    private string $title;
    private string $subtitle;
    private string $image;
    private string $content;
    private DateTime $createdAt;
    private DateTime $lastUpdated;
}