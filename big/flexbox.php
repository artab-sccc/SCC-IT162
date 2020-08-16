<?php include('includes/header.php'); ?>
   
      
<!-- START LEFT COL -->
<section>
    
    <div class="section-inside">
        <h2>Flexbox</h2>

        <p>
            In web design, web pages need to accommodate various screen sizes when displaying information. One of the ways websites can do this is via a flexbox layout.
        </p>

        <p>
            In a flexbox layout, it’s main focus is to “..give the container the ability to alter its items’ width/height (and order) to best fill the available space. (Coyier)” To put it in other words, the containers, which hold the content of the website, are automatically set to fill in any space that is available on the page. For example, if the browser window is resized, content will either fill in or filter out of the blank spaces. This is highly useful for making a web page responsive in order to be viewed on multiple devices.
        </p>

        <p>
            To understand how a flexbox “flows”, one can look at the following chart:
        </p>
        
        <img src="images/flexboxexample.svg" alt="flexbox example">

        <p>
            A flexbox can run into two axis: the main (horizontal) and cross (vertical axis). Depending on how the flexbox is set up in it’s CSS, the content flow will either get filled via the main, cross or both. It is up to how the developer wants the content to be shown on a page to decide which way the content flows. 
        </p>

        <p>
            Some developers may argue that a grid design may be more flexible (no pun intended) for web pages as opposed to the flexbox. There are definitely pros/cons of the two, but it ultimately boils down to how a web designer wants the content to display on the page. Grid designs are is good for precisely laying out content. With grid designs, “Authors can then precisely position and size the building block elements of their application into the grid areas defined by the intersections of these columns and rows. (W3)” Meaning, that no matter how a viewport changes on a website, the content will always be displayed in a certain way. On the other hand with a flexbox, the way the content displays will vary as it’s viewport space shirks/expands. In either case, the use of the two will depend on the aim of how the content is shown.
        </p>
    </div>
    
</section>
<!-- END LEFT COL -->

<!-- START RIGHT COL -->
<aside>
    
    <div class="aside-inside">
        <h2>Works Cited:</h2>
        <p>
            Coyier, Chris. “A Complete Guide to Flexbox: CSS-Tricks.” CSS, 12 June 2020, css-tricks.com/snippets/css/a-guide-to-flexbox/.
        </p>
        <p>
            N/A, N/A. “CSS Grid Layout Module Level 1.” W3C, 14 Dec. 2017, www.w3.org/TR/css-grid-1/.
        </p>
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
