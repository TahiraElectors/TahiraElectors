



<html> 
<head> 
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.js"></script> 
    <script src="http://malsup.github.com/jquery.form.js"></script> 
 
    <script> 
        // wait for the DOM to be loaded 
        $(document).ready(function() { 
            // bind 'myForm' and provide a simple callback function 
            $('#myForm').submit(function() { 
                alert("شكرا لمساندتكم لنا! سنقوم بالتواصل معكم قريبا."); 
            }); 
        }); 
    </script> 
</head> 
<body>
<html dir="rtl" lang="ar">

<form id ="myForm" class="myform" method="post" action="">
  <h1 class="form-title">منتخبي طاهرة عبدالخالق</h1>
  <label>الاسم*</label>
  <input type="text" name="first_name" placeholder="يرجى ادخال الاسم هنا" required>
  </p>
    <p>
  <label>رقم التواصل*</label>
  <input type='tel' name="telephone" maxlength="8" minlength="8" size="8" required>
<input type="text" value="968+" class="field left" size="4" readonly>
    </p>
    <p>
   <label>تعليق</label>
  <input type="text" name="comment" placeholder="يرجى الادلاء بتعليق هنا" size="100">
  </p>
    <p>
  <button type="Submit">إرسال</button><br>
  
</form>

<?php
    $email_to = "tahiraelectors@gmail.com
";
    $email_subject = "المنتخبين";
    $email_message = "التفاصيل أدناه.\n\n";
    $email_message .= "الاسم*: ".clean_string($first_name)."\n";
    $email_message .= "رقم التواصل*: ".clean_string($telephone)."\n";
    $email_message .= "تعليق: ".clean_string($comment)."\n";

mail($email_to, $email_subject, $email_message);
?>

 <?php
}
?>

</body>
</html>
 