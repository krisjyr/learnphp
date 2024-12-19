<?php view('partials/header'); ?>

    <main class="container mx-auto px-4 py-8 max-w-4xl">
        <!-- Back Navigation -->
        <div class="mb-6">
            <a href="/admin/posts" class="btn btn-ghost gap-2">
               <- Back to Posts
            </a>
        </div>

        <!-- Post View Card -->
        <div class="card bg-base-100 shadow-xl">
            <div class="card-body">
                <!-- Title Section -->
                <h1 class="card-title text-3xl mb-6"><?= $post->title ?></h1>

                <!-- Content Section -->
                <div class="prose max-w-none">
                    <?= $post->body ?>
                </div>
            </div>
        </div>
    </main>

<?php view('partials/footer'); ?>