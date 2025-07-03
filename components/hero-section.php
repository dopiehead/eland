<div class="search-container">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="search-card">
                        <form method="post" action="search-result.php" enctype="multiparts/form-data">
                            <div class="mb-3">
                                <input type="text" class="form-control" placeholder="Enter property / land location and description to search">
                            </div>
                            <div class="row">
                                <div class="col-md-3 mb-3">
                                    <select name='service' class="form-select">
                                        <option selected>Services</option>
                                        <option>-Any-</option>
                                        <option vlaue='buy'>Buy</option>
                                        <option value='lease'>Lease</option>
                                    </select>
                                </div>
                                <div class="col-md-3 mb-3">

                                    <select name='category' class="form-select">
                                         <option selected>Categories</option>
                                         <option value="">All Lands</option>
                                         <option value="commercial_land">Commercial Lands</option>
                                         <option value="residential_land">Residential Lands</option>
                                         <option value="industrial_land">Industrial Lands</option>
                                         <option value="farm_land">Farm Lands</option>
                                         <option value="lands_for_lease">Lands for Lease</option>
                                         <option value="private_property">Private Property</option>
                                         <option value="city_land">City Lands</option>
                                         <option value="prime_land">Prime Lands</option>
                                         <option value="estate_land">Estate Lands</option>
                                         <option value="commercial_land">Commercial Lands</option>
                                         <option value="residential_land">Residential Lands</option>
                                         <option value="industrial_land">Industrial Lands</option>
                                         <option value="farm_land">Farm Lands</option>
                                         <option value="lands_for_lease">Lands for Lease</option>
                                         <option value="private_property">Private Property</option>
                                         <option value="city_land">City Lands</option>
                                         <option value="prime_land">Prime Lands</option>
                                         <option value="estate_land">Estate Lands</option>
                                        
                                         <option value="residential_land">Residential Lands</option>
                                         <option value="industrial_land">Industrial Lands</option>
                                         <option value="farm_land">Farm Lands</option>
                                         <option value="lands_for_lease">Lands for Lease</option>
                                         <option value="private_property">Private Property</option>
                                         <option value="city_land">City Lands</option>
                                         <option value="prime_land">Prime Lands</option>
                                         <option value="estate_land">Estate Lands</option>
                                    </select>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <select name='type' class="form-select">
                                        <option selected>Type</option>
                                        <option value=''>-Any-</option>
                                        <option value='government_issued'>Government issued</option>
                                        <option value='private'>Private</option>
                                        <option value='estate'>Estate</option>
                                        <option value='gra'>GRA</option>
                                    </select>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <?php require("engine/connection.php"); ?>
                                    <select name='location' class="form-select text-capitalize">
                                       <option selected disabled>Location</option>
                                       <option value=" ">-Any-</option>
                                     <?php 
                                         $getstates = $con->prepare("SELECT DISTINCT state FROM states_in_nigeria ORDER BY state ASC");
                                             if($getstates->execute()){
                                                  $states_result = $getstates->get_result();
                                                     while ($row = $states_result->fetch_assoc()) { ?>
                                                         <option value="<?= htmlspecialchars($row['state']) ?>"> <?= htmlspecialchars($row['state']) ?></option>
                                     <?php           }
                                            // Close the prepared statement after use
                                              $getstates->close();
                                             } else {
                                           // Handle query execution error (optional)
                                         echo '<option disabled>Failed to load states</option>';
                                     }
                                     ?>
                                     </select>

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <input type="text" name='min_price' class="form-control" placeholder="Minimum Price E.g. N 1,000,000">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <input name='max_price' type="text" class="form-control" placeholder="Maximum Price E.g. N 1,000,000">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary w-100" style="background-color: #4a148c; border:none;">Search</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
