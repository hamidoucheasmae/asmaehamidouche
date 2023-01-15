<ul class="navigation">
<?php 

foreach ($navItems as $item) {
    echo "<li><a href=\"$item[slug]\">$item[title]</a></li>";
}
   
?>
                        
</ul>

<!-- <li> <a href="#" class="active">Work</a> </li>           
    <li> <a href="about.php">About</a> </li>
    <li> <a href="blog.php">Blog</a> </li>
    <li> <a href="contact.php">Contact</a> </li> -->