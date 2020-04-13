<html>
<head>
<title>jQuery Credit Card Validator</title>
<head>
<link href="style.css" rel="stylesheet" type="text/css">
<script src="jquery-3.2.1.min.js" type="text/javascript"></script>
<script src="jquery-creditcardvalidator/jquery.creditCardValidator.js"></script>
<script>
function validate(){
	var valid = true;	 
    $(".demoInputBox").css('background-color','');
    var message = "";

    var cardHolderNameRegex = /^[a-z ,.'-]+$/i;
    var cvvRegex = /^[0-9]{3,3}$/;
    
    var cardHolderName = $("#card-2222222.-name").val();
    var cardNumber = $("#card-number").val();
    var cvv = $("#cvv").val();

    if(cardHolderName == "" || cardNumber == "" || cvv == "") {
    	   message  += "<div>All Fields are Required.</div>";  
    	   if(cardHolderName == "") {
    		   $("#card-holder-name").css('background-color','#FFFFDF');
    	   }
    	   if(cardNumber == "") {
    		   $("#card-number").css('background-color','#FFFFDF');
    	   }
    	   if (cvv == "") {
    		   $("#cvv").css('background-color','#FFFFDF');
    	   }
       valid = false;
    }
    
    if (cardHolderName != "" && !cardHolderNameRegex.test(cardHolderName)) {
        message  += "<div>Card Holder Name is Invalid</div>";    
    		$("#card-holder-name").css('background-color','#FFFFDF');
    		valid = false;
    }
    
    if(cardNumber != "") {
        	$('#card-number').validateCreditCard(function(result){
            if(!(result.valid)){
                	message  += "<div>Card Number is Invalid</div>";    
            		$("#card-number").css('background-color','#FFFFDF');
            		valid = false;
            }
        });
    }
    
    if (cvv != "" && !cvvRegex.test(cvv)) {
        message  += "<div>CVV is Invalid</div>";    
        $("#cvv").css('background-color','#FFFFDF');
    		valid = false;
    }
    
    if(message != "") {
        $("#error-message").show();
        $("#error-message").html(message);
    }
    return valid;
}
</script>
</head>
<body>

    <form id="frmContact" action="" method="post"
        onSubmit="return validate();">
        <div class="field-row">
            <label style="padding-top: 20px;">Card Holder Name</label> <span
                id="card-holder-name-info" class="info"></span><br />
                 <input
                type="text" id="card-holder-name" class="demoInputBox" />
        </div>
        <div class="field-row">
            <label>Card Number</label> <span id="card-number-info"
                class="info"></span><br /> <input type="text"
                id="card-number" class="demoInputBox">
        </div>
        <div class="field-row">
            <div class="contact-row column-right">
                <label>Expiry Month / Year</label> <span
                    id="userEmail-info" class="info"></span><br /> 
                    <select
                    name="expiryMonth" id="expiryMonth"
                    class="demoSelectBox">
                <?php
                for ($i = date("m"); $i <= 12; $i ++) {
                    $monthValue = $i;
                    if (strlen($i) < 2) {
                        $monthValue = "0" . $monthValue;
                    }
                    ?>
                <option value="<?php echo $monthValue; ?>"><?php echo $i; ?></option>
                <?php
                }
                ?>
                </select> 
                <select name="expiryMonth" id="expiryMonth"
                    class="demoSelectBox">
            <?php
            for ($i = date("Y"); $i <= 2030; $i ++) {
                $yearValue = substr($i, 2);
                ?>
            <option value="<?php echo $yearValue; ?>"><?php echo $i; ?></option>
            <?php
            }
            ?>
            </select>
            </div>
            <div class="contact-row cvv-box">
                <label>CVV</label> <span id="cvv-info" class="info"></span><br />
                <input type="text" name="cvv" id="cvv"
                    class="demoInputBox cvv-input">
            </div>
        </div>
        <div>
            <input type="submit" value="Submit" class="btnAction" />
        </div>
        <div id="error-message"></div>

    </form>

</body>
</html>