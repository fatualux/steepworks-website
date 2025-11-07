<?php
require_once 'includes/config.php';
$page_title = 'Gallery - Steep Works Construction';

// Sample gallery images (in a real application, these would come from a database)
$gallery_images = [
    ['src' => 'static/img/459725156_17877218289149660_1897362600137672371_n.jpg', 'title' => 'Spider Digger Operation', 'category' => 'residential'],
    ['src' => 'static/img/460016881_17877218280149660_7424146838941776323_n.jpg', 'title' => 'Steep Slope Excavation', 'category' => 'commercial'],
    ['src' => 'static/img/461600486_17878955622149660_3469010709121617236_n.jpg', 'title' => 'Drilling Project', 'category' => 'residential'],
    ['src' => 'static/img/463891918_17882377167149660_8786082846025836976_n.jpg', 'title' => 'Trenching Work', 'category' => 'commercial'],
    ['src' => 'static/img/464081957_17882377158149660_2836364445707359330_n.jpg', 'title' => 'Landscaping Project', 'category' => 'residential'],
    ['src' => 'static/img/465581537_122189267240200845_8927962025768458685_n.jpg', 'title' => 'Civil Engineering', 'category' => 'commercial'],
    ['src' => 'static/img/468086323_122190730136200845_1276915233595126431_n.jpg', 'title' => 'Excavation Work', 'category' => 'residential'],
    ['src' => 'static/img/468088551_122190730778200845_2585609983285626354_n.jpg', 'title' => 'Spider Digger in Action', 'category' => 'residential'],
    ['src' => 'static/img/468300771_122190730076200845_4269753891476097419_n.jpg', 'title' => 'Demolition Project', 'category' => 'commercial'],
    ['src' => 'static/img/469047699_17888462691149660_1939452114535102892_n.jpg', 'title' => 'Terrain Navigation', 'category' => 'residential'],
    ['src' => 'static/img/470211207_122195487950200845_6455004925345341055_n.jpg', 'title' => 'Wetland Operation', 'category' => 'commercial'],
    ['src' => 'static/img/473817906_122202368354200845_6113373507969099116_n.jpg', 'title' => 'Drilling & Digging', 'category' => 'residential'],
    ['src' => 'static/img/474597281_122203153370200845_1173807155461300030_n.jpg', 'title' => 'Site Preparation', 'category' => 'commercial'],
    ['src' => 'static/img/475175865_122203393970200845_5697985365229422279_n.jpg', 'title' => 'Challenging Terrain', 'category' => 'residential'],
    ['src' => 'static/img/475524284_122204932256200845_4303106232310829899_n.jpg', 'title' => 'Environmental Project', 'category' => 'commercial'],
    ['src' => 'static/img/475762925_122204934098200845_1823303544427920430_n.jpg', 'title' => 'Spider Excavator', 'category' => 'residential'],
    ['src' => 'static/img/475849931_122204934776200845_8746614560087970765_n.jpg', 'title' => 'Civil Works', 'category' => 'commercial'],
    ['src' => 'static/img/476094026_122204934308200845_5678402489933576944_n.jpg', 'title' => 'Excavation Services', 'category' => 'residential'],
    ['src' => 'static/img/476099400_122204933084200845_3251896328166271478_n.jpg', 'title' => 'Renovation Work', 'category' => 'renovation'],
    ['src' => 'static/img/476278896_122204934620200845_5743948327131924810_n.jpg', 'title' => 'Specialist Equipment', 'category' => 'residential'],
    ['src' => 'static/img/494694758_17906720577149660_5773692722495891827_n.jpg', 'title' => 'Digging Operation', 'category' => 'residential'],
    ['src' => 'static/img/494822449_17906720589149660_6373459961583859272_n.jpg', 'title' => 'Commercial Excavation', 'category' => 'commercial'],
    ['src' => 'static/img/494915505_17906720613149660_5402505729461079382_n.jpg', 'title' => 'Spider Digger Work', 'category' => 'residential'],
    ['src' => 'static/img/495027973_17906720634149660_7266499049055719990_n.jpg', 'title' => 'Trenching Services', 'category' => 'commercial'],
    ['src' => 'static/img/495630843_17906720604149660_6638805009461144975_n.jpg', 'title' => 'Slope Excavation', 'category' => 'residential'],
    ['src' => 'static/img/495721930_17906720625149660_7849757580193600362_n.jpg', 'title' => 'Engineering Project', 'category' => 'commercial'],
    ['src' => 'static/img/501345614_122229852704200845_740794194281618114_n.jpg', 'title' => 'Landscaping Work', 'category' => 'residential'],
    ['src' => 'static/img/501978822_17909740455149660_1690849905059240686_n.jpg', 'title' => 'Drilling Services', 'category' => 'commercial'],
    ['src' => 'static/img/502081118_17909740446149660_4166651091960938800_n.jpg', 'title' => 'Site Renovation', 'category' => 'renovation'],
    ['src' => 'static/img/502655455_17909740437149660_9052351217254814232_n.jpg', 'title' => 'Excavation Project', 'category' => 'residential'],
    ['src' => 'static/img/550214569_17922484452149660_2862038416578523107_n.jpg', 'title' => 'Civil Engineering', 'category' => 'commercial'],
    ['src' => 'static/img/573215600_17926903134149660_4447652716845702929_n.jpg', 'title' => 'Spider Digger Technology', 'category' => 'residential'],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($page_title) ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <?php include 'includes/header.php'; ?>
    
    <main class="gallery-page">
        <section class="py-5">
            <div class="container">
                <h1 class="text-center mb-5">Our Projects</h1>
                
                <!-- Gallery Filter -->
                <div class="text-center mb-4">
                    <button class="btn btn-outline-primary active" data-filter="all">All</button>
                    <button class="btn btn-outline-primary" data-filter="residential">Residential</button>
                    <button class="btn btn-outline-primary" data-filter="commercial">Commercial</button>
                    <button class="btn btn-outline-primary" data-filter="renovation">Renovation</button>
                </div>
                
                <!-- Gallery Grid -->
                <div class="row g-4 gallery-grid">
                    <?php foreach ($gallery_images as $image): ?>
                        <div class="col-md-4 col-sm-6 gallery-item" data-category="<?= $image['category'] ?>">
                            <div class="card h-100">
                                <a href="<?= $image['src'] ?>" data-lightbox="gallery" data-title="<?= htmlspecialchars($image['title']) ?>">
                                    <img src="<?= $image['src'] ?>" class="card-img-top" alt="<?= htmlspecialchars($image['title']) ?>">
                                </a>
                                <div class="card-body">
                                    <h5 class="card-title"><?= htmlspecialchars($image['title']) ?></h5>
                                    <span class="badge bg-primary"><?= ucfirst($image['category']) ?></span>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
    </main>

    <?php include 'includes/footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox-plus-jquery.min.js"></script>
    <script src="assets/js/gallery.js"></script>
</body>
</html>
