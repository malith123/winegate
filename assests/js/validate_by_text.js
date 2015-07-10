function validate(){
        var name = $("input#product_name").val();
        if (name == '' || name == null) {
            $("p#product_name").css('color', 'red');
            $("p#product_name").text('Please Enter product Name');
            var a = false;
        }
        else{
           $("p#product_name").text(''); 
        }
        
        var price = $("input#product_price").val();
        if (price == '' || price == null) {
            $("p#product_price").css('color', 'red');
            $("p#product_price").text('Please Enter product price');
            var b = false;
        }
        else{
           $("p#product_price").text(''); 
        }
        
        function isValidEmailAddress(emailAddress) {
        var pattern = new RegExp(/^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?$/i);
        return pattern.test(emailAddress);
        }
        var merchant_email = $("input#merchant_email").val();
        if (merchant_email == '' || merchant_email == null) {
            $("p#merchant_email").css('color', 'red');
            $("p#merchant_email").text('Please Merchant Email Address');
            var d = false;
        }
        else{
           $("p#merchant_email").text('');  
        }
        
        isEmail = isValidEmailAddress(merchant_email)
        if (!isEmail) {
            $("p#merchant_email").css('color', 'red');
            $("p#merchant_email").text('Please enter vaild email id');
            var e = false;
        } 
        var payment_mode = $("select#payment_mode").val();
        if (payment_mode == '' || payment_mode == null) {
            $("p#payment_mode").css('color', 'red');
            $("p#payment_mode").text('Select Any Payment Mode');
            var f = false;
        }
        else{
           $("p#payment_mode").text(''); 
        }
         if (a == false || b == false ||  d == false || e == false || f == false ) {

            return  false;

        }else{
            return  'true';
        }
}

function validate_user(){
    var full_name = $("input#full_name").val();
        if (full_name == '' || full_name == null) {
            $("p#full_name").css('color', 'red');
            $("p#full_name").text('Please Enter Valid Name');
            var aa = false;
        }
        else{
            $("p#full_name").text('');
        }
        
        
        function isValidEmailAddress(emailAddress) {
        var pattern = new RegExp(/^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?$/i);
        return pattern.test(emailAddress);
        }
        var email_address = $("input#email_address").val();
        if (email_address == '' || email_address == null) {
            $("p#email_address").css('color', 'red');
            $("p#email_address").text('Please Valid Email Address');
            var bb = false;
        }else{
             $("p#email_address").text('');
        }
        
        isEmail = isValidEmailAddress(email_address)
        if (!isEmail) {
            $("p#email_address").css('color', 'red');
            $("p#email_address").text('Please enter vaild email id');
            var cc = false;
        } 
        
         if (aa == false || bb == false ||  cc == false ) {

            return  false;

        }else{
            return  'true';
        }
}