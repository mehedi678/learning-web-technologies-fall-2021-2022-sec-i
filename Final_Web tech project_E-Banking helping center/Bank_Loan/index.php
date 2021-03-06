<?php
session_start(); 
?>
<!-- To Display the Status of Form Submission -->
<?php
    if (isset($_SESSION['message']) && $_SESSION['message'])
    {
      printf("<script type='text/javascript'>alert('%s');</script>",$_SESSION['message']);
      unset($_SESSION['message']);
    }
?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Loan application Form</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css'><link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="background">

  <form class='app__form' id="contactform" action="uploader.php" method="post" enctype="multipart/form-data">
    <header>
      <h1 class='app__heading'>Loan Apply Online</h1>
    </header>
    
   <label for="full_name" class='app__label'>
      Name
   </label>
   <input type="text" name='firstname' class='app_input-text' required/>

   <label for="email" class='app__label'>



      Email
   </label>
   <input type="text" pattern="[^ @]*@[^ @]*" name="email" class='app_input-text' required/>
   <label for="loan_amount" class='app__label'>
      Loan Amount [BDT]
   </label>
   <input type="text" name="loan_amount" pattern="^\+?[0-9-]+$" title='(Numbers only,)' class='app_input-text' required/>
  
   <label for="nid_no" class='app__label'>

    
      Nid No
   </label>
   <input type="text" name='nid_no' class='app_input-text' required />
        
   <div class="app__uploads">

      <div class='upload__wrapper'>
        <input type="file" accept=".doc, .docx, .pdf" id="cover-letter" class="app__hidden-upload" name="myfile" required>

        <label for="cover-letter" class="app__upload-label">
          <i class="fa fa-upload"></i>Upload NID [Front and Back side]
        </label>
      </div>
    

    </div>
    
    <button class='app__submit' name="submit">Submit</button>
    
    
  </form>
  
</div>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script><script  src="./script.js"></script>

</body>
</html>
