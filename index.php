<?php include('includes/header.php'); ?>
<div class="container mt-5">

  <!-- Banner Section -->
  <div class="row mb-4">
    <div class="col-md-12">
      <div class="p-5 bg-light rounded-3 text-center">
        <h2>A selection with only the best books</h2>
        <p>Sale ends midnight 20th April 2025</p>
        <a href="#" class="btn btn-success">Explore Books</a>
      </div>
    </div>
  </div>

  <!-- New Arrivals -->
  <h4 class="mb-3">New Arrival Books</h4>
  <div class="row">
    <?php include('data/books.php'); ?>
    <?php foreach ($new_arrivals as $book): ?>
      <div class="col-md-3 mb-4">
        <div class="card h-100">
          <img src="assets/images/<?= $book['image'] ?>" class="card-img-top" alt="<?= $book['title'] ?>">
          <div class="card-body">
            <h5 class="card-title"><?= $book['title'] ?></h5>
            <p class="card-text">$<?= $book['price'] ?></p>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>

  <!-- Deals of the Week -->
  <h4 class="mb-3 mt-5">Deals of the Week</h4>
  <div class="row">
    <?php foreach ($weekly_deals as $deal): ?>
      <div class="col-md-4 mb-4">
        <div class="card h-100">
          <img src="assets/images/<?= $deal['image'] ?>" class="card-img-top" alt="<?= $deal['title'] ?>">
          <div class="card-body">
            <h5 class="card-title"><?= $deal['title'] ?></h5>
            <p class="card-text">$<?= $deal['price'] ?> <br><small class="text-muted">Offer ends soon!</small></p>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>

</div>
<?php include('includes/footer.php'); ?>
