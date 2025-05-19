<!DOCTYPE html>
<html lang="en">
<?php
$PAGE_TITLE = "News";
include_once '../partial/meta.php'; ?>

<body>
    <?php include_once '../partial/header.php'; ?>

    <?php if (!isset($_GET['id'])) { ?>
        <div class="container mx-auto mt-10 px-4">
            <h1 class="text-3xl font-bold text-center mb-6">News</h1>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <?php
                // Example news items (replace with your own data)
                include_once 'news_register.php';

                foreach ($news_items as $item) {
                    echo '<div class="bg-white shadow-lg rounded-lg overflow-hidden">';
                    echo '<a href="?id=' . $item['link'] . '" class="block"><img src="' . $item['image'] . '" alt="' . $item['title'] . '" class="w-full h-48 object-cover"></a>';
                    echo '<div class="p-4">';
                    echo '<h2 class="text-xl font-semibold"><a href="?id=' . $item['link'] . '">' . $item['title'] . '</a></h2>';
                    echo '<p class="text-gray-500">' . $item['description'] . '</p>';
                    echo '</div></div>';
                }
                ?>
            </div>
        <?php }
    if (isset($_GET['id']) && $_GET['id']) {
        $id = $_GET['id'];
        $NEWS = null;
        include_once 'news_register.php';
        foreach ($news_items as $item) {
            if ($item['link'] == $id) {
                $NEWS = $item;
                break;
            }
        }
        if (isset($_GET['id']) && $_GET['id']) {
            include './' . $NEWS['partial'];
        } else {
            echo '<div class="container mx-auto mt-10 px-4">';
            echo '<h1 class="text-3xl font-bold text-center mb-6">News</h1>';
            echo '<p class="text-gray-500">No news found.</p>';
            echo '</div>';
        } ?>
            ?>
        <?php } ?>
        </div>
        <br>
        <?php include_once '../partial/footer.php'; ?>
</body>

</html>