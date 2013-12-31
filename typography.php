<!doctype html>
<html lang="en">

	<?php include ('part-head.php') ?>

	<body>

		<?php include ('part-header.php') ?>
		
		<div class="container">
			<div class="wrapper">

				<h1 class="title">Typography</h1>
				<hr>
				<h1>h1. Very large header.</h1>
				<h2>h2. Large header.</h2>
				<h3>h3. Medium header.</h3>
				<h4>h4. Moderate header.</h4>
				<h5>h5. Small header.</h5>
				<h6>h6. Tiny header.</h6>
				<div class="html">
					<div class="highlight">
						<pre class="prettyprint">
&lt;h1&gt;h1. Very large header.&lt;/h1&gt;
&lt;h2&gt;h2. Large header.&lt;/h2&gt;
&lt;h3&gt;h3. Medium header.&lt;/h3&gt;
&lt;h4&gt;h4. Moderate header.&lt;/h4&gt;
&lt;h5&gt;h5. Small header.&lt;/h5&gt;
&lt;h6&gt;h6. Tiny header.&lt;/h6&gt;
						</pre>
					</div>
				</div>
				<hr>
				<h1 class="subheader">h1.subheader</h1>
				<h2 class="subheader">h2.subheader</h2>
				<h3 class="subheader">h3.subheader</h3>
				<h4 class="subheader">h4.subheader</h4>
				<h5 class="subheader">h5.subheader</h5>
				<h6 class="subheader">h6.subheader</h6>
				<div class="html">
					<div class="highlight">
						<pre class="prettyprint">
&lt;h1 class="subheader"&gt;h1.subheader&lt;/h1&gt;
&lt;h2 class="subheader"&gt;h2.subheader&lt;/h2&gt;
&lt;h3 class="subheader"&gt;h3.subheader&lt;/h3&gt;
&lt;h4 class="subheader"&gt;h4.subheader&lt;/h4&gt;
&lt;h5 class="subheader"&gt;h5.subheader&lt;/h5&gt;
&lt;h6 class="subheader"&gt;h6.subheader&lt;/h6&gt;
						</pre>
					</div>
				</div>
				<hr>
				<p>
					This is a paragraph. Paragraphs are preset with a font size, line height and spacing to match the overall vertical rhythm. To show what a paragraph looks like this needs a little more content so, did you know that there are storms occurring on Jupiter that are larger than the Earth? Pretty cool. Wrap <code>&lt;strong&gt;</code> / <code>&lt;b&gt;</code> around type to <strong>make it bold!</strong>. You can also you <code>&lt;em&gt;</code> / <code>&lt;i&gt;</code> to <em>italicize</em> your words.
				</p>
				<div class="html">
					<div class="highlight">
						<pre class="prettyprint">
&lt;p&gt;This is a paragraph. Paragraphs are preset with a font size, line height and spacing to match the overall vertical rhythm. To show what a paragraph looks like this needs a little more content so, did you know that there are storms occurring on Jupiter that are larger than the Earth? Pretty cool. Wrap &lt;strong&gt; / &lt;b&gt; around type to &lt;strong&gt;make it bold!&lt;/strong&gt;. You can also you &lt;em&gt; / &lt;i&gt; to &lt;em&gt;italicize your words&lt;/em&gt;.&lt;/p&gt;
						</pre>
					</div>
				</div>
				<hr>
				<h4 class="sub-title">Links</h4>
				<p>Links are very standard, and the <a href="#">color is preset</a> to the Naked primary color.</p>
				<div class="html">
					<div class="highlight">
						<pre class="prettyprint">
&lt;p&gt;Links are very standard, and the &lt;a href="#"&gt;color is preset&lt;/a&gt; to the Naked primary color.&lt;/p&gt;
						</pre>
					</div>
				</div>
				<hr>
				<h4 class="sub-title">Lists</h4>
				<p>Lists are helpful for, well, lists of things.</p>
				<ul>
					<li>List item with a much longer description or more content.</li>
					<li>List item</li>
					<li>List item
						<ul>
							<li>Nested List Item</li>
							<li>Nested List Item</li>
							<li>Nested List Item</li>
						</ul>
					</li>
					<li>List item</li>
					<li>List item</li>
					<li>List item</li>
				</ul>
				<div class="html">
					<div class="highlight">
						<pre class="prettyprint">
&lt;ul&gt;
  &lt;li&gt;List item with a much longer description or more content.&lt;/li&gt;
  &lt;li&gt;List item&lt;/li&gt;
  &lt;li&gt;List item
    &lt;ul&gt;
      &lt;li&gt;Nested List Item&lt;/li&gt;
      &lt;li&gt;Nested List Item&lt;/li&gt;
      &lt;li&gt;Nested List Item&lt;/li&gt;
    &lt;/ul&gt;
  &lt;/li&gt;
  &lt;li&gt;List item&lt;/li&gt;
  &lt;li&gt;List item&lt;/li&gt;
  &lt;li&gt;List item&lt;/li&gt;
&lt;/ul&gt;
						</pre>
					</div>
				</div>
				<h5>Ordered Lists</h5>
				<ol>
					<li>List item</li>
					<li>List item</li>
					<li>List item
						<ol>
							<li>Nested List Item</li>
							<li>Nested List Item</li>
							<li>Nested List Item</li>
						</ol>
					</li>
					<li>List item</li>
					<li>List item</li>
					<li>List item</li>
				</ol>
				<div class="html">
					<div class="highlight">
						<pre class="prettyprint">
&lt;ol&gt;
  &lt;li&gt;List item&lt;/li&gt;
  &lt;li&gt;List item&lt;/li&gt;
  &lt;li&gt;List item
    &lt;ol&gt;
      &lt;li&gt;Nested List Item&lt;/li&gt;
      &lt;li&gt;Nested List Item&lt;/li&gt;
      &lt;li&gt;Nested List Item&lt;/li&gt;
    &lt;/ol&gt;
  &lt;/li&gt;
  &lt;li&gt;List item&lt;/li&gt;
  &lt;li&gt;List item&lt;/li&gt;
  &lt;li&gt;List item&lt;/li&gt;
&lt;/ol&gt;
						</pre>
					</div>
				</div>
				<h5>List Flat</h5>
				<ul class="flat">
					<li>List item</li>
					<li>List item</li>
					<li>List item</li>
					<li>List item</li>
					<li>List item</li>
					<li>List item</li>
				</ul>
				<div class="html">
					<div class="highlight">
						<pre class="prettyprint">
&lt;ul class="flat"&gt;
  &lt;li&gt;List item&lt;/li&gt;
  &lt;li&gt;List item&lt;/li&gt;
  &lt;li&gt;List item&lt;/li&gt;
  &lt;li&gt;List item&lt;/li&gt;
  &lt;li&gt;List item&lt;/li&gt;
  &lt;li&gt;List item&lt;/li&gt;
&lt;/ul&gt;
						</pre>
					</div>
				</div>
				<hr>
				<h4 class="sub-title">Sub & Sup Tag</h4>
				<p>
					The SUB and SUP elements are used for subscripts and superscripts respectively, and are preferably rendered in reduced font. For integral and related signs the SUB and SUP elements are used for the lower and upper limits, for instance:
				</p>
				<p>- This text contains <sub>subscript</sub> text.</p>
				<p>- This text contains <sup>superscript</sup> text.</p>
				<div class="html">
					<div class="highlight">
						<pre class="prettyprint">
&lt;p&gt;This text contains &lt;sub&gt;subscript&lt;/sub&gt; text.&lt;/p&gt;
&lt;p&gt;This text contains &lt;sup&gt;superscript&lt;/sup&gt; text.&lt;/p&gt;
						</pre>
					</div>
				</div>
				<hr>
				<h4 class="sub-title">Example Paragraphs</h4>
				<div class="html">
					<div class="highlight">
						<h1>This is a Simple Paragraphs</h1>
						<p>
							Nam quis quam accumsan, commodo metus in, dignissim sapien. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec turpis metus, porttitor at sem vitae, fringilla dignissim sapien. Proin congue arcu nisl, quis pretium nulla cursus sit amet. Aliquam interdum risus sed nisl ultrices dignissim. Fusce adipiscing nisl vel nunc malesuada posuere. Ut rutrum tristique orci vitae iaculis. Donec scelerisque mattis tortor laoreet dictum. Praesent tortor turpis, aliquet in lobortis id, porta ut lorem. Nunc tincidunt viverra felis quis hendrerit. Vivamus imperdiet, nulla id rhoncus imperdiet, quam nulla pulvinar dui, vel fringilla nunc nibh id turpis.
						</p>
						<p>
							Maecenas id mauris diam. Maecenas volutpat purus id lectus malesuada euismod sit amet sed justo. Mauris est sapien, mollis nec rutrum vel, iaculis at lorem. Sed sed odio nec risus tempor molestie hendrerit ullamcorper urna. Nulla fermentum lacus ut enim semper, elementum facilisis nibh congue. Suspendisse dictum risus ligula, id viverra dolor sollicitudin et. Etiam quis bibendum lacus, at tincidunt lorem. Sed pretium augue eu sem ultrices posuere. Cras mollis odio et suscipit ullamcorper. Pellentesque tempus pharetra nisi, quis pulvinar lectus mollis in. Nunc in dictum justo, ut imperdiet libero.
						</p>
						<p>
							<ul>
								<li>Iaculis at lorem</li>
								<li>building area of 14.892 m<sup>2</sup></li>
								<li>HCl <sub>(aq)</sub> + NaOH <sub>(aq)</sub> → NaCl <sub>(aq)</sub> + H 2 O <sub>(l)</sub></li>
							</ul>
						</p>
						<p>
							Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Mauris velit justo, interdum porta feugiat sed, feugiat dignissim ligula. Vivamus quis semper metus. Proin volutpat dapibus sagittis. Pellentesque tristique urna a leo dictum molestie. Maecenas lobortis condimentum lorem, vitae gravida felis tincidunt sit amet. Suspendisse adipiscing ligula sit amet nulla mattis rhoncus.
						</p>
						<h2>Heading 2 Example</h2>
						<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Mauris velit justo, interdum porta feugiat sed, feugiat dignissim ligula. Vivamus quis semper metus. Proin volutpat dapibus sagittis. Pellentesque tristique urna a leo dictum molestie. Maecenas lobortis condimentum lorem, vitae gravida felis tincidunt sit amet. Suspendisse adipiscing ligula sit amet nulla mattis rhoncus.</p>
						<ol>
							<li>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Mauris velit justo, interdum porta feugiat sed, feugiat dignissim ligula. Vivamus quis semper metus. Proin volutpat dapibus sagittis. Pellentesque tristique urna a leo dictum molestie. Maecenas lobortis condimentum lorem, vitae gravida felis tincidunt sit amet. Suspendisse adipiscing ligula sit amet nulla mattis rhoncus.</li>
							<li>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Mauris velit justo, interdum porta feugiat sed, feugiat dignissim ligula. Vivamus quis semper metus. Proin volutpat dapibus sagittis. Pellentesque tristique urna a leo dictum molestie. Maecenas lobortis condimentum lorem, vitae gravida felis tincidunt sit amet. Suspendisse adipiscing ligula sit amet nulla mattis rhoncus.</li>
							<li>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Mauris velit justo, interdum porta feugiat sed, feugiat dignissim ligula. Vivamus quis semper metus. Proin volutpat dapibus sagittis. Pellentesque tristique urna a leo dictum molestie. Maecenas lobortis condimentum lorem, vitae gravida felis tincidunt sit amet. Suspendisse adipiscing ligula sit amet nulla mattis rhoncus.</li>
						</ol>
						<p>
							Praesent id leo massa. Donec ut viverra lorem. Pellentesque non est nunc. Duis pellentesque orci quis massa laoreet varius. Morbi id congue lorem, a consectetur erat. Ut sed pretium nulla. Nullam egestas, sapien in sodales interdum, erat elit laoreet felis, a condimentum lacus dolor mattis dolor. Morbi vitae risus est. Donec adipiscing lacus et blandit tempus.
						</p>
						<h3>Heading 3 Example</h3>
						<p>
							In pretium, diam nec eleifend lobortis, nisi ligula facilisis augue, at ullamcorper magna orci in dolor. Mauris semper arcu id massa euismod, consequat imperdiet libero lobortis. Vestibulum scelerisque nunc risus, eget mollis est vehicula ac. Donec ac condimentum dui. Mauris dictum suscipit porttitor. Etiam non arcu viverra, placerat elit sed, tempus elit. Aenean aliquet nisi sit amet magna suscipit adipiscing. Phasellus lectus metus, auctor eget mi quis, ullamcorper eleifend tellus.
						</p>
					</div>
				</div>
				<hr>

			</div>
		</div>
		
		<?php include ('part-footer.php') ?>

		<?php include ('part-script.php') ?>

	</body>
</html>