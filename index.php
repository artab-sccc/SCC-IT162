<?php include('includes/header.php'); ?>
   
    <!-- start right column -->
    <section>
        <div id="introduction">
            <h2>Welcome in!</h2>
                    <img src="../images/ohdeerpng.png" class="phone" alt="oh deer its me" /> 

            <p>Hello! Welcome to my portal page for Summer 2020 IT 162 class at Seattle Central College. </p>
            <p>
                My name is Arthur Tabadero and I am currently in the process of pursuing an Associates Degree in Programming at Seattle Central College. I have worked in the IT field for 5 years carrying titles from Technical Support Technician to Technical Program Manager. Upon my experiences, I <em>developed</em> a new interest in software and web development. Being a Seattle Central Alumni, I found my experience at Central very enriching, so I decided to start my self journey of pursing this new career field at an institution I can depend on. I look forward to achieving great knowledge in this field!
            </p>

            <h2>About Me:</h2>
            <p>
                When I'm not taking notes or scrambling to finish an assignment at the very last minute, I have various hobbies that keep me sane away from the workload. This includes listening to music, playing video games, traveling and best of all: sleeping. <strong>You know what they say, a good night sleep helps put you in a better mood and makes you smarter!</strong> While I agree with the former, the latter is a little questionable. Hah!
            </p>
        </div> <!-- end introduction div -->
    </section>

    <!-- end left column -->

    <!-- start right column -->

    <aside>
        <div id="profile">
            <img src="../images/ohdeerpng.png" class="desktop" alt="oh deer its me" />
            <img src="../images/ohdeerpng.png" class="tablet" alt="oh deer its me" />
        </div>
    </aside>

    <!-- end right column -->
        
    <?php include('includes/footer.php'); ?>
        
    </main>

    
    
    
<!-- JavaScript associated with the W3Schools.com Top Navigation Response Exercise -->
<script>
/* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
    function myFunction() {
        var x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
            x.className += " responsive";
        } else {
            x.className = "topnav";
        }
    }
</script>


</body>
</html>
