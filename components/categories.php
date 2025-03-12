
    <div class="container mt-5">
        <h2 class="mb-4 text-center">Categories</h2>
        <div class="row">
            <?php 
                  require ("engine/config.php");
                  $getcategories = $conn->prepare("SELECT * FROM categories");
                  if($getcategories->execute()){
                      $result =$getcategories->get_result();
                       while ($row = $result->fetch_assoc()){ 
                        $c_name = preg_replace('/_/', ' ', $row['category_name']);
                        ?>

                      <div class="col-md-4">
                             <div class="category-card">
                                 <img src="<?= htmlspecialchars($row['category_image']) ?>" alt="<?= htmlspecialchars($row['category_name']) ?>">
                                <div class="category-label">
                              <span class='text-capitalize'><?= htmlspecialchars($c_name) ?></span>
                              <span class="badge">Available: 16</span>
                        </div>
                </div>
  
            </div>

             <?php      
                  }
                  }
             ?>           
          
        </div>
    </div>

