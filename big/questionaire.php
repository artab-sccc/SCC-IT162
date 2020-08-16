<?php include('includes/header.php'); ?>
   
      
<!-- START LEFT COL -->
<section>
    
    <div class="section-inside">
        <h2>User Questionaire:</h2>
        
        <?php

        include 'includes/form_include.php';
    
        $toAddress = "arthur.tabadero@seattlecolleges.edu";  
        $toName = "Arthur"; 
        $website = "BIG Website"; 

        echo loadContact('multiple.php');

	   ?>
    </div>
    
</section>
<!-- END LEFT COL -->

<!-- START RIGHT COL -->
<aside>
    
    <div class="aside-inside">
        <h2>What is this?</h2>
        <p>This is a questionaire to test out the form features of html as well as using a reCAPTCHA (v2) to test out form submission.</p>
    </div>

</aside>
<!-- END RIGHT COL -->

<!-- START Footer -->
<?php include('includes/footer.php'); ?>
<!-- END Footer --> 



<!-- END Wrapper -->
</main>
</body>
</html>
