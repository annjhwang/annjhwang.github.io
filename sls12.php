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
		<style>
		
		</style>
	    <script type="text/javascript">
	     google.charts.load('current', {packages: ['corechart', 'bar']});
		google.charts.setOnLoadCallback(drawMaterial);

		function drawMaterial() {
	      var data = google.visualization.arrayToDataTable([
	        ['Trait', 'US', 'Canada', 'Germany'],
	        ['Extroversion', 0.49, 0.53, 0.56],
	        ['Conscientiousness', 0.48, 0.44,0.53],
	        ['Agreeableness', 0.33, 0.41,0.42],
	        ['Neuroticism', 0.42, 0.41,0.52],
	        ['Openness', 0.58, 0.61, 0.53],
	      ]);

	      var options = {
	        hAxis: {
	          title: 'Trait'
	        },
	        vAxis: {
	          title: 'Heritability Score',
	          minValue: 0,
	        },
	        bars: 'vertical',
	        width: 800,
	        height: 400
	      };
	      var material = new google.charts.Bar(document.getElementById('chart_div'));
	      material.draw(data, options);
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
			<a href="#tree" class="icon fa-folder"><span>Family Tree</span></a>
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
				<a href="#work" class="jumplink pic">
					<span class="arrow icon fa-chevron-right"><span>See my work</span></span>
					<img src="images/facebook1.jpg" alt="" />
				</a>
			</article>
			<article id="tree" class="panel">
                    <h2 id="yellow-highlight" class="text-center" style="margin-bottom: 10px;">Family Tree</h2>
                    <p>This is a very simple family lineage tree that visualizes my family heritage to give the
                    	audience a better sense of how my parents and ancestors have influenced me to become who I am
                    	today. This is not only meant to show the "Natture"'s influence on my behavioral and genetic traits,
                    	but also "Nurture" aspects like family values and ways of discipline that might have also affected
                    	the way I am today.</p>
                    <div id="college-tree" class="wow fadeIn" data-wow-delay="0.5s"></div>
                    <b>Figure 1. </b><i class="text-faded">Click on one of the below nodes to expand the tree. Clicking on an already expanded node will contract the tree.</i>
                    
        	</article>

			<article id="work" class="panel">
				<header>
					<h2>Introduction</h2>
				</header>
				<p>	
				Hi! I'm Annie. This is an interactive website that helps you learn both about me, and concepts that I have learned in 
				my "Understanding Darwinism" class at Harvard. This website covers concepts of Nature vs. Nurture, heritability, and 
				behavioral genetics. This webpage addresses the focuses on 6 physical and 5 behavioral qualities. 
				Some examples for physical qualities include: dimples, height, BMI, etc. Some examples for 
				behavioral qualities include: extroversion, openness, neuroticism, etc. 
				</p>
				<p>
				For each trait, I first address its heritability index to see whether nature or 
				nurture has played a more significant role in the development and variation of each trait. Then, I adress
				personal "Nature" and "Nurture" influences my development of that certain trait. For Nature influences, I primarily
				address if that quality was present in my parents. For Nurture's influence, I discuss habits,
				past experiences, and lifestyle that has shaped those certain qualities. Lastly, for each trait, I analyze
				how the particular trait manifests itself in me. If the quality is not binary (i.e. how extroverted I am), I use
				a scale of 0-1.0 to address how strong that particular trait is. In this analysis part, I also 
				discuss some interesting things I learned while researching the heritability of the trait.
				</p>
				<p> While research more about these behavioral qualities, the question my project aims to answer is this: 
					What is the relationship between Nature and Nurture on physical and behavioral traits? 
				</p>
				<h4>Physical Traits</h4>

				<p>I look into 6 different physical traits: BMI, Height, Myopia (Nearsightedness), Eczema,
					Dimples, Asthma. Out of these 6 traits, studies showed that Height has the highest heritability
					index (around 0.6) and BMI (around 0.3) the lowest. Often the heritability indexes of a trait
					are different for children and adults (i.e. eczema). This is often because the environmental 
					differences on the certain trait may be less significant for children. For these traits, I discuss 
					both adult and children heritability scores.</p>

				<section>
					<div class="row">
						<div class="2u 6u$(mobile)">
							<a href="#" class="image fit"><img src="images/BMI.png" alt="" height="100"></a>
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
                    <h2 id="yellow-highlight" class="text-center" style="margin-bottom: 10px;">Heritability Graph</h2>
                    <p>This is a simple graph that outlines the difference in heritability index for the 5 big behavioral
                    	traits among different countries with a Caucasian population. The difference between in the heritability index between these
                     countries with a mostly Caucasian population imply that different countries have different cultural/nurture aspects that affect
                    	these traits in different degrees.</p>
                    <div id="chart_div" style="width: 900px; height: 500px;"></div>
        	</article>

        	<article id="analysis" class="panel">
				<!-- college tree graph -->
                    <h3 id="yellow-highlight" class="text-center" style="margin-bottom: 10px;text-align:center">Analysis</h3>
                    <b>So what is the relationship between Nature and Nurture?</b>

					<p> After completing this project, I was surprised to learn that there are many cases where 
						<i>Nature actually affects Nurture</i>. By this, I mean that certain qualities or traits 
						that we inherit from our parents (thus by Nature) influence the way we form our habits or 
						choose the environment to be in (Nurture). For example, an individual born with a naturally 
						high low score on self-discipline, a subcategory of conscientiousness, could be less likely 
						to keep a healthy, balanced diet. Hence, the trait they “naturally” inherited from their 
						parents would ironically affect the way the individual “nurtures” her body. However, 
						the story does not end here.</p>
					<p>Consider the case that this type of unhealthy habits were to continue over multiple 
						generations. Given that we’ve seen that BMI is also a relatively heritable character, 
						eventually the overall BMI that is passed down onto next generations would be higher. Here 
						we actually see that <i>Nurture affecting Nature</i>. One thing we can take away from this 
						project is that the relationship between Nature and Nurture is surely a complicated one; they 
						are inherently interdependent. Hence, it is impossible to completely distinguish the line 
						between Nature’s and Nurture’s effect on human traits.</p>

					<b>What is Nurture’s role in shaping behavioral and physical traits?</b>
					<p>After examining the heritability scores and getting at a closer look how my parent’s traits 
						have been passed down to me, it is clear that Nature has a definitive role in most behavioral 
						and physical traits. It is also less ambiguous what “Nature” factors refer to - simply genetic 
						material passed on from parents - compared to “Nurture” factors. Nurture could refer to habits, 
						past experiences, environment, and residing country. Therefore it is important to mention how 
						the different role Nurture plays in forming one’s behavioral and physical characteristics.</p>
					<p>We could see that many of the behavioral traits are influenced by race. For example, Asians 
						tend to be more neurotic than non-Asians, but non-Asians tend to be more extroverted than Asians. 
						Studies show that this is largely due to the fact that Asian culture highly values collectivism, 
						whereas Western cultures tend to value individualism more. It is interesting to see how race, 
						which is inherently determined by Nature through specific DNA sequences, ultimately shapes aspects 
						like culture and values that we would conventionally regard as “Nurture”. This could possibly be 
						attributed to the fact that cultures evolved differently in isolated environments before 
						immigrating to different countries became more common in recent decades. Hence, countries close 
						in proximity (i.e. South Korea and Japan) tend to generally have similar traditional 
						and cultural values. In general, culture within a population (that is essentially related 
						to race) ultimately molds the critical behavioral traits. </p>
					<p>For physical traits, it seems like “Nurture” factors that are formed relatively more voluntarily 
						play a bigger role in shaping specific traits. In this context, I refer to these as habits that 
						individuals are able to voluntarily determine. For example, an individual can determine his eating 
						habits more easily than he can determine what kind of culture he surrounds himself with. We’ve 
						already mentioned that BMI is highly dependant on one’s diet and exercising habits. Though we cannot 
						completely ignore the underlying sociocultural aspects that influence the way we determine and thus 
						strive for desirable traits, we can surely see how these habits can affect these physical traits. </p>
 					<b>Final Thoughts</b>
					<p>While working on this project, I was able to analyze both my physical and behavioral characteristics 
						in a different angle that made me learn why and how I became the person I am today. It was particularly 
						fascinating to see that behavioral characteristics actually have higher heritability scores than we 
						would expect. Through this project, I have become more aware of the effects of my environment on my 
						characteristics and the possibility of change for these traits based on my habits and willingness to change. </p>

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

    <script document.getElementById('wrapper').style["paddingTop"] = '10px;'></script>

    <script src="assets/js/jquery.easing.min.js"></script>
    <script src="assets/js/jquery.fittext.js"></script>
    <script src="assets/js/wow.min.js"></script>

	<script src="assets/js/ancestorTree.js"></script>

	
  </body>
</html>