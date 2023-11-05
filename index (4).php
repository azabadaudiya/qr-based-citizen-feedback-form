<?php 
error_reporting(E_ALL);
include 'connection.php';
?>
<html><head><meta charset="UTF-8"><title>Citizen Feedback Form</title>

<link href="css/form.css" rel="stylesheet" type="text/css"><script src="js/validation.js"></script>
</head><body class="zf-backgroundBg"><!-- Change or deletion of the name attributes in the input tag will lead to empty values on record submission-->
<div class="zf-templateWidth">
    
    
    
    <form id='frmCaptcha' enctype="multipart/form-data" action="insert.php" method="POST">
        <input type="hidden" name="zf_referrer_name" value="">
     <input type="hidden" name="zf_redirect_url" value=""><!-- To redirect to a specific page after record submission , place the respective url within the " " in the above hidden input field -->
<input type="hidden" name="zc_gad" value=""><!-- If GCLID is enabled in Zoho CRM Integration, click details of AdWords Ads will be pushed to Zoho CRM -->
<div class="zf-templateWrapper"><!---------template Header Starts Here---------->
<ul class="zf-tempHeadBdr"><li class="zf-tempHeadContBdr"><h2 class="zf-frmTitle"><em>Citizen Feedback Form</em></h2>
<p class="zf-frmDesc"></p>
<div class="zf-clearBoth"></div></li></ul><!---------template Header Ends Here---------->
<!---------template Container Starts Here---------->
<div class="zf-subContWrap zf-topAlign"><ul>


<!---------Dropdown Starts Here---------->
<li class="zf-tempFrmWrapper zf-small"><label class="zf-labelName">Select City/શહેર પસંદ કરો<em class="zf-important">*</em></label>
<div class="zf-tempContDiv">
    <select class="zf-form-sBox" name="cname" checktype="c1">
        <option selected="true" value="-Select-">-Select-</option>
        <?php 
        $query = "SELECT DISTINCT city FROM ps_details";
        $result = mysqli_query($con,$query);
        while($value= mysqli_fetch_array($result))
        {
            ?>
      <option name="c_name"><?php echo $value['city'];?></option><?php
        }
    ?>               
        </select>	<p id="Dropdown_error" class="zf-errorMessage" style="display:none;">Invalid value</p>
</div><div class="zf-clearBoth"></div></li><!---------Dropdown Ends Here---------->
<!---------Dropdown Starts Here---------->



<li class="zf-tempFrmWrapper zf-small"><label class="zf-labelName">
Select Police Station/પોલીસ સ્ટેશન પસંદ કરો
<em class="zf-important">*</em>
</label>
<div class="zf-tempContDiv">
    <select class="zf-form-sBox" name="psname" checktype="c1">
        <option selected="true" value="-Select-">-Select-</option>
        <!-- This is where the dynamic options will be inserted -->
    </select>
<p id="Dropdown2_error" class="zf-errorMessage" style="display:none;">Invalid value</p>
</div><div class="zf-clearBoth"></div></li><!---------Dropdown Ends Here---------->


<!---------Single Line Starts Here---------->
<li class="zf-tempFrmWrapper zf-small"><label class="zf-labelName">Name of the police officer with whom you met or talked./પોલીસ અધિકારીનું નામ જેની સાથે તમે મળ્યા અથવા વાત કરી</label>
    <div class="zf-tempContDiv">
    <span> <input type="text" name="officername" checktype="c1" value="" maxlength="255" fieldType=1 placeholder=""/></span> <p id="SingleLine_error" class="zf-errorMessage" style="display:none;">Invalid value</p>
    </div><div class="zf-clearBoth"></div>
        </li> <!---------Single Line Ends Here---------->
<!---------Radio Starts Here---------->    



<li class="zf-radio zf-tempFrmWrapper zf-oneColumns">
    <label class="zf-labelName">In which case did you approach the police station?/કયા કેસમાં તમે પોલીસ સ્ટેશનનો સંપર્ક કર્યો હતો
<em class="zf-important">*</em>
</label>
<div class="zf-tempContDiv">
<div class="zf-overflow">
<span class="zf-multiAttType"> 
<input class="zf-radioBtnType" type="radio" id="Radio3_1" name="option1" checktype="c1" value="Online Fraud">
<label for="Radio3_1" class="zf-radioChoice">Online&#x20;Fraud</label> </span>
<span class="zf-multiAttType"> 
<input class="zf-radioBtnType" type="radio" id="Radio3_2" name="option1" checktype="c2" value="Women related crimes domestic violence">
<label for="Radio3_2" class="zf-radioChoice">Women&#x20;related&#x20;crimes&#x2f;domestic&#x20;violence</label> </span>

<span class="zf-multiAttType"> 
<input class="zf-radioBtnType" type="radio" id="Radio3_1" name="option1" checktype="c3" value="Missing Kidnapping">
<label for="Radio3_1" class="zf-radioChoice">Missing&#x2f;Kidnapping</label> </span>
<span class="zf-multiAttType"> 
<input class="zf-radioBtnType" type="radio" id="Radio3_2" name="option1" checktype="c4" value="Corruption">
<label for="Radio3_2" class="zf-radioChoice">Corruption</label> </span>
<div class="zf-clearBoth"></div></div><p id="Radio3_error" class="zf-errorMessage" style="display:none;">Invalid value</p>


<li class="zf-radio zf-tempFrmWrapper zf-twoColumns"><label class="zf-labelName">Was your problem solved?/શું તમે સમસ્યા હલ કરી હતી
    <em class="zf-important">*</em>
    </label>
    <div class="zf-tempContDiv">
    <div class="zf-overflow">
    <span class="zf-multiAttType"> 
    <input class="zf-radioBtnType" type="radio" id="Radio3_1" name="option2" checktype="c1" value="Report filed and copy give">
    <label for="Radio3_1" class="zf-radioChoice">Report filed and copy give</label> </span>
    <span class="zf-multiAttType"> 
    <input class="zf-radioBtnType" type="radio" id="Radio3_2" name="option2" checktype="c1" value="FIR registered and copy given">
    <label for="Radio3_2" class="zf-radioChoice">FIR registered and copy given</label> </span>
    <div class="zf-clearBoth"></div></div><p id="Radio3_error" class="zf-errorMessage" style="display:none;">Invalid value</p>
    

    <li class="zf-radio zf-tempFrmWrapper zf-twoColumns"><label class="zf-labelName">Did any officer ask you for money, papers etc for your work?/શું કોઈ અધિકારીએ તમારી પાસે તમારા કામ માટે લાંચ માંગી?
        <em class="zf-important">*</em>
        </label>
        <div class="zf-tempContDiv">
        <div class="zf-overflow">
        <span class="zf-multiAttType"> 
        <input class="zf-radioBtnType" type="radio" id="Radio3_1" name="option3" checktype="c1" value="Yes">
        <label for="Radio3_1" class="zf-radioChoice">Yes</label> </span>
        <span class="zf-multiAttType"> 
        <input class="zf-radioBtnType" type="radio" id="Radio3_2" name="option3" checktype="c1" value="No">
        <label for="Radio3_2" class="zf-radioChoice">No</label> </span>
        <div class="zf-clearBoth"></div></div><p id="Radio3_error" class="zf-errorMessage" style="display:none;">Invalid value</p>
        </div><div class="zf-clearBoth"></div></li><!---------Radio Ends Here---------->    

        <!---------Multiple Line Starts Here---------->
        <li class="zf-tempFrmWrapper zf-small"><label class="zf-labelName"> 
            Submit your feedback in description./વર્ણનમાં તમારો પ્રતિસાદ સબમિટ કરો. 
            </label>
            <div class="zf-tempContDiv">
            <span> <textarea name="desc" checktype="c1" maxlength="65535" placeholder=""></textarea> </span>
            <p id="MultiLine_error" class="zf-errorMessage" style="display:none;">Invalid value</p>
            </div><div class="zf-clearBoth"></div></li><!---------Multiple Line Ends Here---------->
            <!--media upload-->


<!---------Media Upload Starts Here---------->  
<li class="zf-tempFrmWrapper"><label class="zf-labelName">Submit your feedback in Audio form./તમારો પ્રતિસાદ ઓડિયો ફોર્મમાં સબમિટ કરો
</label>
<div class="zf-tempContDiv">
<input type="file" accept="audio/mp3" name="my_audio">
<p id="MediaUpload_error" class="zf-errorMessage" style="display:none;">Choose any file for this field.</p>
</div><div class="zf-clearBoth"></div></li><!---------Media Upload Ends Here---------->  
<!--media upload-->

<li class="zf-tempFrmWrapper zf-small"><label class="zf-labelName">Enter Captcha<em class="zf-important">*</em></label>
    <div class="zf-tempContDiv">
    <span> 
    <img src="captcha.php">    <br><br>
    <input type="text" name="captcha" checktype="c1" value="" maxlength="255" fieldType=1 placeholder=""/></span> <p id="SingleLine_error" class="zf-errorMessage" style="display:none;">Invalid value</p>
    </div><div class="zf-clearBoth"></div>
        </li>

</ul>
</div> 

<ul>
    <li class="zf-fmFooter">
    <button onclick="submit_data()" name="submit" class="zf-submitColor" >Submit</button>
</li>
</ul>
</div><!-- 'zf-templateWrapper' ends -->
</form>
</div><!-- 'zf-templateWidth' ends -->

<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

<script>
    function submit_data(){
        jQuery.ajax({
            url:'insert.php',
            type:'post',
            data:jQuery('#frmCaptcha').serialize(),
            success:function(data){
                //alert(data);
            }
        })
}

</script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script>
$(document).ready(function() {
    $('select[name="cname"]').on('change', function() {
        var selectedCity = $(this).val();
        if (selectedCity != '-Select-') {
            $.ajax({
                type: 'POST',
                url: 'get_police_stations.php',
                data: {city: selectedCity},
                success: function(response) {
                    $('select[name="psname"]').html(response);
                }
            });
        } else {
            $('select[name="psname"]').html('<option selected="true" value="-Select-">-Select-</option>');
        }
    });
});
</script>

<script type="text/javascript">var zf_DateRegex = new RegExp("^(([0][1-9])|([1-2][0-9])|([3][0-1]))[-](Jan|Feb|Mar|Apr|May|Jun|Jul|Aug|Sep|Oct|Nov|Dec|JAN|FEB|MAR|APR|MAY|JUN|JUL|AUG|SEP|OCT|NOV|DEC)[-](?:(?:19|20)[0-9]{2})$");
var zf_MandArray = [ "Dropdown", "Dropdown2", "SingleLine", "Radio", "Radio2", "Radio3"]; 
var zf_FieldArray = [ "Dropdown", "Dropdown2", "SingleLine", "Radio", "Radio2", "Radio3", "MultiLine", "MediaUpload", "MediaUpload1"]; 
var isSalesIQIntegrationEnabled = false;
var salesIQFieldsArray = [];</script></body></html>