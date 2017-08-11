<?php if(isset($countryCodeDetails)) 
    {
        foreach ($countryCodeDetails as $countryCode)
    {
    ?>
        <option <?php if($countryCode->id == $country_id) { echo "selected"; } ?> value="<?php echo $countryCode->phonecode;?>"><?php echo '+'.$countryCode->phonecode;?></option>
    <?php
    }
}
?>