<?php $__env->startSection('stylesheet'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('title'); ?>
    Nitol | Dealer - Locator
<?php $__env->stopSection(); ?>
<?php
    header('X-Frame-Options: GOFORIT');
?>
<?php $__env->startSection('body'); ?>
    <div class="container">
        <div class="wrap-top-banner-3">
            <!--SLIDER-->
            <div class="wrap-main-slide-3 mt-5">
                <div class="slide-carousel owl-carousel style-nav-1" data-items="1" data-loop="1" data-nav="true" data-dots="false">
                    
                </div>
            </div>
            
        </div>

    </div><!--end container-->
    <section>
        
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    
                    <div class="locator-sec">
                        <h3>Showrooms</h3>
                        <h2>To locate the store closest to you, go to Division then go to District and finally go to Area.</h2>

                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="form-left-box">
                                <div class="row">
                                    <div class="col-md-4 col-sm-6">
                                        <label >Division</label>
                                        <select onchange="selectDivision()" name="division" id="divisionList"  class="form-control" required="required">
                                            <option value="">Select Division: </option>
                                            <?php $__currentLoopData = $divisionAll; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $divisionValue): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option style="border:1px;" value=<?php echo e($divisionValue->id); ?>><?php echo e($divisionValue->name); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                    <div class="col-md-4 col-sm-6 ">
                                        <label style="float:left; margin-top:3px;">District: </label>
                                        <select onclick="selectDistrict()" name="district" id="districtList"  class="form-control" required="required" style="display: none">
                                        </select>
                                        
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <label style="float:left; margin-top:3px;">Thana/Upazila: </label>
                                        <select onclick="selectUpazila()" name="upazila" id="upazilaList"  class="form-control" required="required" style="display: none">
                                        </select>
                                        
                                    </div>
                                    
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div id="dealer_result">
                                <div cass="row">
                                    
                                    



                                        <div class="repeat-dealor">
                                            <div class="col-md-6 col-sm-12 col-xs-12">
                                                <h4><label id="lblState">Store Location: </label> Nitol Center</h4>
                                                <div style="border:2px solid #fff; margin-bottom:10px; width:250px; height:auto;"><img id="imageView" src="https://dummyimage.com/600x400/000/fff" style="width:100%; height:auto;"></div>
                                                <span ></span><p id="locationDealer"></p>
                                                
                                            </div>
                                            <div class="col-md-6 col-sm-12 col-xs-12">
                                                <iframe id="locationURL" style="width:100%; height:300px;min-height:300px" frameborder="0" scrolling="no" src="https://maps.google.com/maps?q=22.683475,90.649368&amp;hl=es;z=14&amp;output=embed&amp;key=AIzaSyCJuU_a2OchA1Dh87cgehkh2jQIY6mqfT4"></iframe>
                                            </div>
                                        </div>

                                        <?php $__currentLoopData = $storeInformationAll; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $storeInformation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <div class="repeat-dealor">
                                                <div class="col-md-6 col-sm-12 col-xs-12">
                                                    <h4><label id="lblState">Store Location: </label> Nitol Electronics</h4>
                                                    <div style="border:2px solid #fff; margin-bottom:10px; width:250px; height:auto;"><img id="imageView" src="<?php echo e(asset($storeInformation->image)); ?>" style="width:100%; height:auto;"></div>
                                                    <h4><span> <?php echo e($storeInformation->description); ?></span><p id="locationDealer"></p></h4>
                                                    
                                                </div>
                                                <div class="col-md-6 col-sm-12 col-xs-12">
                                                    <iframe id="locationURL" style="width:100%; height:300px;min-height:300px" frameborder="0" scrolling="no" src="<?php echo e($storeInformation->storeLocator); ?>"></iframe>
                                                </div>
                                            </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<script>
    function selectDivision() {
        var divisionList = document.getElementById("divisionList").value;
        $.ajax({
            type: "POST",
            url: "<?php echo e(url('')); ?>/api/store/locator/division/"+divisionList,
            success: function (response) {
                $('#districtList option').slice(0).remove();
                $('#upazilaList option').slice(0).remove();
                let newOption       = document.getElementById("districtList");
                for(let i = 0; i < response.length; i++ ){
                    let option          = document.createElement("option");
                    option.textContent  = response[i].name;
                    option.value        = response[i].id;
                    newOption.appendChild(option);
                    // var table           = document.getElementById("dealorLocation");
                    // var row             = table.insertRow(0);
                    // var cell1           = row.insertCell(0);
                    // var cell2           = row.insertCell(1);
                    // var cell3           = row.insertCell(2);
                    // var cell4           = row.insertCell(3);
                    // var cell5           = row.insertCell(4);
                    // var cell6           = row.insertCell(5);
                    // cell1.innerHTML     = i+1;
                    // cell2.innerHTML     = response[i].name;
                    // cell3.innerHTML     = response[i].description;
                    // cell4.innerHTML     = response[i].description;
                    // cell5.innerHTML     = response[i].description;
                    // cell6.innerHTML     = response[i].name;
                }
                document.getElementById('districtList').style.display = 'block';
            }
        });
    }

    function selectDistrict() {
        var districtList = document.getElementById("districtList").value;
        $.ajax({
            type: "POST",
            url: "<?php echo e(url('')); ?>/api/store/locator/district/"+districtList,
            success: function (response) {
                $('#upazilaList option').slice(0).remove();
                let newOption       = document.getElementById("upazilaList");
                for(let i = 0; i < response.length; i++ ){
                    let option          = document.createElement("option");
                    option.textContent  = response[i].name;
                    option.value        = response[i].id;
                    newOption.appendChild(option);
                }
                document.getElementById('upazilaList').style.display = 'block';
            }
        });
    }

    function selectUpazila() {
        var upazilaId = document.getElementById("upazilaList").value;
        //window.location = "<?php echo e(url('')); ?>/dealer/locator/"+upazilaId;
        $.ajax({
            type: "POST",
            url: "<?php echo e(url('')); ?>/api/store/locator/upazila/"+upazilaId,
            success: function (response) {
                let imageLocation = response.image;
                document.getElementById("locationDealer").innerText = response.description;
                document.getElementById("imageView").src = "<?php echo e(url('')); ?>/"+imageLocation;
                document.getElementById("locationURL").src = response.storeLocator;
            }
        });
    }
</script>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('front.master', ['body_class' => 'main-site'], \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>