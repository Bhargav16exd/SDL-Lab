<?php
include 'asi4.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Application</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-4xl font-bold text-center mb-6">Blog Posts</h1>

        <?php foreach ($blogDetails as $blog): ?>
        
        <div class="border p-6 rounded-lg shadow-lg mb-6">
        
            <h2 class="text-2xl font-bold"><?= $blog['title'] ?></h2>
            
            <p class="text-sm text-gray-400">By <?= $blog['author'] ?> | Published on <?= $blog['date'] ?></p>
            
            <p class="mt-4"><?= $blog['content'] ?></p>

            <h3 class="mt-6 text-xl font-semibold">Comments:</h3>
            
            <?php foreach ($blogComments as $comment): ?>
                <?php if ($comment['id'] == $blog['id']): ?>
                    <ul class="list-disc list-inside mt-2">
                        <?php foreach ($comment['comments'] as $userComment): ?>
                            <li class="text-gray-500"><?= $userComment ?></li>
                        <?php endforeach; ?>
                        
                    </ul>
                    
                <?php endif; ?>
            <?php endforeach; ?>
        </div>
        
        <?php endforeach; ?>
    </div>

</body>
</html>

