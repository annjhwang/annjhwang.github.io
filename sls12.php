<html>
  <head>
		<title>Annie Hwang</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="stylesheet" href="assets/css/animate.min.css" type="text/css">

		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->


		<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
	    <script type="text/javascript">
	      google.charts.load('current', {'packages':['corechart']});
	      google.charts.setOnLoadCallback(drawChart);
	      function drawChart() {
	        var data = google.visualization.arrayToDataTable([
	          ['Heritability', 'Weight'],
	          [ 0.5,      12],
	          [ 0.4,      5.5],
	          [ 0.8,     14],
	          [ 0.9,      5],
	          [ 0.6,      3.5],
	          [ 0.3,    7]
	        ]);

	        var options = {
	          title: 'Heritability of traits',
	          hAxis: {title: 'Heritability', minValue: 0, maxValue: 1.0},
	          vAxis: {title: 'Weight', minValue: 0, maxValue: 15},
	          legend: 'none'
	        };

	        var chart = new google.visualization.ScatterChart(document.getElementById('chart_div'));
	        chart.draw(data, options);
	      }
	    </script>

	</head>
  <body>
  	<!-- Wrapper-->
	<div id="wrapper">
		<!-- Nav -->
		<nav id="nav">
			<a href="#me" class="icon fa-home active"><span>Home</span></a>
			<a href="#work" class="icon fa-folder"><span>Project</span></a>
			<a href="#tree" class="icon fa-folder"><span>Tree</span></a>
			<a href="#heritability" class="icon fa-folder"><span>Heritability</span></a>
			<a href="#analysis" class="icon fa-folder"><span>Final Analysis</span></a>
			<a href="#citation" class="icon fa-folder"><span>Work Cited</span></a>
		</nav>

		<div id="main">
			<!-- Me -->
			<article id="me" class="panel">
				<header>
					<h1>SLS 12 Final Project</h1>
					<p>Physical and Behavioral Characteristics</p>
				</header>
				<img src="images/facebook1.jpg" width="" height="" />
				<a href="#work" class="jumplink pic">
					<span class="arrow icon fa-chevron-right"><span>See my work</span></span>
					<img src="images/facebook1.jpg" alt="" />
				</a>
			</article>
			<!-- Me -->
			<article id="tree" class="panel">
				<!-- college tree graph -->
                    <h2 id="yellow-highlight" class="text-center" style="margin-bottom: 10px;">Family Lineage</h2>
                    <i class="text-faded">Click on one of the below nodes to expand the tree. Clicking on an already expanded node will contract the tree.</i>
                    <div id="college-tree" class="wow fadeIn" data-wow-delay="0.5s"></div>
        	</article>

			<article id="work" class="panel">
				<header>
					<h2>Introduction</h2>
				</header>
				<p>	
				Hi! I'm Annie. This is an interactive website that helps you learn both about me, and concepts that I have learned in my "Understanding Darwinism" class at Harvard. This website covers concepts of Nature vs. Nurture, heritability, and a little bit of behavioral genetics. My web page showcases 6 physical and 6 behavioral qualities of me (with visuals). Some examples for physical qualities include: brown eyes, dimples, height, tongue rolling, etc. Some examples for behavioral qualities include: extroversion, openness, likelihood of depression, etc. 
				</p>
				<p>
				While examining each trait, I first address the heritability to start the discussion of whether nature or nurture has played a more significant role in the development of the trait. Whether nature or nurture played a more signifant role in the development of that trait, I will discuss the roots and causes  (experience for Nurture and traits in parents for Nature). If the trait has been influenced by nurture, I discuss past experiences and lifestyle that has made me to who I am today with those certain qualities.
				</p>
				<p> The question my project aims to answer is this: What is the relationship between Nature and Nurture on physical and behavioral traits?
				</p>
				<h4>Physical Traits</h4>


				<section>
					<div class="row">
						<div class="2u 6u$(mobile)">
							<a href="#" class="image fit"><img src="images/bmi.png" alt="" height="100"></a>
							<a href="sls12traits/physical/bmi.php">BMI</a>
						</div>
						<div class="2u 6u$(mobile)">
							<a href="#" class="image fit"><img src="images/shortshot.png" alt="" height="100"></a>
							<a href="sls12traits/physical/short.php">Height</a>
						</div>
						<div class="2u 6u$(mobile)">
							<a href="#" class="image fit"><img src="images/eyes.png" alt="" height="100"></a>
							<a href="sls12traits/physical/ocular.php">Myopia</a>
						</div>
						<div class="2u 6u$(mobile)">
							<a href="#" class="image fit"><img src="images/eczema.png" alt="" height="100"></a>
							<a href="sls12traits/physical/eczema.php">Eczema</a>
						</div>
						<div class="2u 6u$(mobile)">
							<a href="#" class="image fit"><img src="images/dimples.png" alt="" height="100"></a>
							<a href="sls12traits/physical/dimples.php">Dimples</a>
						</div>
						<div class="2u 6u$(mobile)">
							<a href="#" class="image fit"><img src="images/asthma.png" alt="" height="100"></a>
							<a href="sls12traits/physical/asthma.php">Asthma</a>
						</div>
				</section>

				<section>		
					<h4>Behavioral Traits</h4>

					<p>For the behavioral traits, I cover the 5 Big Personality Traits (Neuroticm, Openness, Extroversion, Agreeableness, and Conscientiousness) that psychologists often use to define someone's personality. 
						Studies show that these personality traits are also found in social mammals like chimpanzees, dogs, etc.</p>
					<div class="row" style="center">
						<div class="2u 3u$(mobile)">
							<a href="#" class="image fit"><img src="images/neuro.png" alt="" height="100" ></a>
							<a href="sls12traits/behavioral/neuroticism.php">Neuroticism</a>
						</div>
						<div class="2u 3u$(mobile)">
							<a href="#" class="image fit"><img src="images/agreeable.png"  alt="" height="100"></a>
							<a href="sls12traits/behavioral/agreeableness.php">Agreeableness</a>
						</div>
						<div class="2u 3u$(mobile)">
							<a href="#" class="image fit"><img src="images/openness.png" alt="" height="100"></a>
							<a href="sls12traits/behavioral/openness.php">Openness</a>
						</div>
						<div class="2u 3u$(mobile)">
							<a href="#" class="image fit"><img src="images/conscience.png" alt="" height="100"></a>
							<a href="sls12traits/behavioral/conscience.php">Conscientious</a>
						</div>
						<div class="2u 3u$(mobile)">
							<a href="#" class="image fit"><img src="images/extroverted.crdownload" alt="" height="100"></a>
							<a href="sls12traits/behavioral/extrovert.php">Extroverted</a>
						</div>
				</section>
			</article>

			<article id="heritability" class="panel">
				<!-- college tree graph -->
                    <h2 id="yellow-highlight" class="text-center" style="margin-bottom: 10px;">Heritability Graph</h2>
                    <div id="chart_div" style="width: 900px; height: 500px;"></div>
        	</article>

        	<article id="analysis" class="panel">
				<!-- college tree graph -->
                    <h2 id="yellow-highlight" class="text-center" style="margin-bottom: 10px;">Final Analysis</h2>
                    <p>While working on this project, I was able to analyze both my physical and behavioral characterestics in a different
                    	angle that made me learn why and how I became the person I am today. It's interesting to see that most of my physical characteristics
                    	are more influenced by my genetic code, rather than environmental factors. It's even more interesting to see that behavioral
                    	characteristics tend to have a lower hertiability score, meaning that my personality and character traits have also been heavily
                    	influenced by my environment. It's important to note that most of these characteristics are not completely heritable; none of them
                    	have a heritability score of 1.0. This could also then possibly mean that these characteristics are bound to change for me in the coming years.
                    	Having done this project and taken this course, I have become more aware of the effects of my environment on my characteristics and the possibility
                    	of change for these traits based on my habits and willingness to change. 
                     
                     	essentially, it seems that nurture tames nature's influence on traits. but what distinguishes nurture's influence on physical
                     	vs. behavioral traits is that physical traits are more determined by HABITS whereas behavioral traits are more determined by environment
                     	not habit. although its important to note that ones' habits are also somewhat determined by one's environment, there is a slight difference
                     	that should be taken into account when we mention these two.

                     	it also works the other way around. some dispositional traits that are inherited through genetics could influence one's physical traits.
                     	for example, someone who scores highly on neuroticism, could more likely have eczema because of high stress levels.

                     	also interesting to note is that race affects physical characteristics a lot.

                     	ALSO FOR BEHAVIORAL, DEPENDS ON COUNTRY!!
                     	So in short, physical and behavioral traits are interdependent, just as nature and nurture are.
                     	Religious upbringing especially reduces the influence genetics have on personality traits
                    </p>
        	</article>

        	<article id="citation" class ="panel">

        		<h2 id="yellow-highlight" style="margin-bottom: 10px; text-align: center;">Work Cited</h2>
        		
        		<p class="citation" style="text-align: left;">Bataille, V., M. Lens, and T.d. Spector. "The Use of the Twin Model to Investigate the Genetics and Epigenetics of Skin Diseases with Genomic, Transcriptomic and Methylation Data." Journal of the European Academy of Dermatology and Venereology 26.9 (2012): 1067-073. Journal of the European Academy of Dermatology and Venereology, Dec. 2011. Web. 8 Dec. 2016.</p>

        		<p class="citation" style="text-align: left;">Bouchard, Thomas J. "Genes, Evolution and Intelligence." Scientific American 1.25 (1846): 2. Mar. 2014. Web. 8 Dec. 2016.</p>

        		<p class="citation" style="text-align: left;">Eap, Sopagna, David S. DeGarmo, Ayaka Kawakami, Shelley N. Hara, Gordon C.N. Hall, and Andra L. Teten. "Culture and Personality Among European American and Asian American Men." Journal of Cross-cultural Psychology. U.S. National Library of Medicine, Sept. 2008. Web. 08 Dec. 2016.</a>
        		
        		<p class="citation" style="text-align: left;">Gottlieb, Gilbert. "On Making Behavioral Genetics Truly Developmental." Karger Publishers. N.p., 2003. Web. 8 Dec. 2016.</p>

        		<p class="citation" style="text-align: left;">Haworth, Claire M.A., Robert Plomin, Susan Carnell, and Jane Wardle. "Childhood Obesity: Genetic and Environmental Overlap With Normal-range BMI." Nature Publishing Group, July 2008. Web. Dec. 2016.</p>
   
        		<p class="citation" style="text-align: left;">Kim, Myunghoon, Di Zhao, and Woori Kim. "Heritability of Myopia and Ocular Biometrics in Koreans: The Healthy Twin Study." Investigative Ophthalmology & Visual Science. Association for Research in Vision and Ophthalmology, May 2013. Web. 8 Dec. 2016.</p>

        		<p class="citation" style="text-align: left;">Nieminen, Markku M., Jaakko Kaprio, and Markku Koskenvuo. "Chest - A Population-based Study of Bronchial Asthma in Adult Twin Pairs." Science Direct. Harvard University, Feb. 2016. Web. 8 Dec. 2016.</p>

        		<p class="citation" style="text-align: left;">Silventoinen, Karri, Sampo Sammalisto, and Markus Perola. "Heritability of Adult Body Height: A Comparative Study of Twin Cohorts in Eight Countries | Twin Research and Human Genetics | Cambridge Core." Cambridge Core. Cambridge University Press, Feb. 2012. Web. 08 Dec. 2016.</p>
        	
        		<p class="citation" style="text-align: left;">Yang, Jian, Andrew Bakshi, and Zhihong Zhu. "Genetic Variance Estimation with Imputed Variants Finds Negligible Missing Heritability for Human Height and Body Mass Index." Nature Genetics. Nature Publishing Group, a Division of Macmillan Publishers Limited, July 2015. Web. 8 Dec. 2016.</p>

        		<p class="citation" style="text-align: left;">Yang, Jian, Beben Benyamin, and Brian McEvoy. "Common SNPs Explain a Large Proportion of the Heritability for Human Height." Nature Genetics. Nature Publishing Group, a Division of Macmillan Publishers Limited. All Rights Reserved., 2010. Web. 8 Dec. 2016.</p>

        		
        	</article>

		</div>

	</div>


	<!-- Scripts -->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/skel.min.js"></script>
	<script src="assets/js/skel-viewport.min.js"></script>
	<script src="assets/js/util.js"></script>
	<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
	<script src="assets/js/main.js"></script>
	<!-- Bootstrap Core JavaScript -->
    <script src="assets/js/bootstrap.min.js"></script>

    
    <!-- Plugin JavaScript -->

    <script src="assets/js/d3.min.js"></script>
    <script src="assets/js/hexbin.js"></script>
    <script src="assets/js/d3.chart.js"></script>


    <script src="assets/js/jquery.easing.min.js"></script>
    <script src="assets/js/jquery.fittext.js"></script>
    <script src="assets/js/wow.min.js"></script>

	<script src="assets/js/ancestorTree.js"></script>

	
  </body>
</html>