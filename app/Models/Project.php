<?php

namespace App\Models;

use DateTime;

class Project {
    private int $id; // Unique ID
    private string $title; // Title of the Project.
    private string $subtitle;
    private string $link; // A URL Link to the project.
    private string $image; // A Path to a relevant image.
    private string $content; // Content talking about the project.
    private DateTime $lastUpdated; // When I last updated the post.
}