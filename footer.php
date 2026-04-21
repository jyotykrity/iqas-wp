</main>
<footer class="footer">
<p>© <?php echo date('Y'); ?> Institute of Quick Assignment Solutions</p>
</footer>
<nav class="bottom-nav">
<a href="#home">🏠</a>
<a href="#services">🧩</a>
<a href="#blog">📰</a>
<a href="#contact">✉️</a>
</nav>
<script type="application/ld+json">
{
 "@context":"https://schema.org",
 "@type":"ProfessionalService",
 "name": "Institute of Quick Assignment Solutions",
 "url": "<?php echo home_url('/'); ?>",
 "areaServed": [
  { "@type": "Country", "name": "Australia" },
  { "@type": "Country", "name": "United Kingdom" },
  { "@type": "Country", "name": "United States" }
],
 "description":"",
 "knowsAbout":[
   "Assignment Help",
   "Essay Writing Service",
   "Thesis Support",
   "Dissertation Research",
   "Case Study Assistance"
 ]
}
</script>
<?php wp_footer(); ?>
</body>
</html>