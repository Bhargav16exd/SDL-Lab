<?php
// Numeric Arrays for Blog Data
$blogIds = [1, 2, 3, 4];
$blogTitles = ["Understanding PHP", "Web Development Basics", "Getting Started with Laravel", "Mastering JavaScript"];
$blogAuthors = ["John Doe", "Jane Smith", "Alice Johnson", "Bob Brown"];
$blogDates = ["2025-02-01", "2025-02-05", "2025-02-07", "2025-02-10"];
$blogContents = [
    "PHP is a server-side scripting language designed for web development. It can be embedded into HTML, making it powerful for dynamic web pages.",
    "Web development involves both the front-end (what users see) and back-end (the server-side) of a website. In this blog, we discuss the essentials of both.",
    "Laravel is a PHP framework that simplifies many of the common tasks in web development, such as routing, authentication, and database management.",
    "JavaScript is a versatile language used on the client side to make web pages interactive. This blog covers key features and techniques for mastering JS."
];

// Associative Arrays for Blog Post Metadata
$blogDetails = [
    [
        "id" => 1, "title" => "Understanding PHP", "author" => "John Doe", "date" => "2025-02-01", "content" => $blogContents[0]
    ],
    [
        "id" => 2, "title" => "Web Development Basics", "author" => "Jane Smith", "date" => "2025-02-05", "content" => $blogContents[1]
    ],
    [
        "id" => 3, "title" => "Getting Started with Laravel", "author" => "Alice Johnson", "date" => "2025-02-07", "content" => $blogContents[2]
    ],
    [
        "id" => 4, "title" => "Mastering JavaScript", "author" => "Bob Brown", "date" => "2025-02-10", "content" => $blogContents[3]
    ]
];

// Multi-dimensional Array for Blog Post Metadata with Comments
$blogComments = [
    [
        "id" => 1, "comments" => [
            "Great post! I love learning about PHP.", 
            "PHP is awesome for server-side scripting."
        ]
    ],
    [
        "id" => 2, "comments" => [
            "Nice insights on web development!",
            "I agree, front-end and back-end are essential for any website."
        ]
    ],
    [
        "id" => 3, "comments" => [
            "Laravel is so much easier to use than raw PHP.",
            "Definitely, Laravel makes development faster and cleaner."
        ]
    ],
    [
        "id" => 4, "comments" => [
            "JavaScript is the future of the web.",
            "Great examples in this post, thanks for sharing!"
        ]
    ]
];
?>
