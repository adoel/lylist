<!doctype html>
<html lang="en">

	<?php include ('part-head.php') ?>

	<body>

		<?php include ('part-header.php') ?>

		<div class="container">
			<div class="wrapper">

				<h1 class="title">Form</h1>
				<hr>
				<p>
					With Naked CSS, we set out to create an easy to handle, powerful and versatile form layout system. A combination of form styles and the Naked grid means you can do basically anything
				</p>
				<form>
					<fieldset>
					    <legend>Fieldset</legend>

					    <div class="row">
					      <div class="span-12">
					      	<div class="wrapper">
						        <label>Input Label</label>
						        <input type="text" placeholder="Input">
						    </div>
					      </div>
					    </div>

					    <div class="row">
					      <div class="span-4">
					      	<div class="wrapper">
						        <label>Input Label</label>
						        <input type="text" placeholder="Input">
					      	</div>
					      </div>
					      <div class="span-4">
					      	<div class="wrapper">
						        <label>Input Label</label>
						        <select>
                                    <option>Options #1</option>
                                    <option>Options #2</option>
                                    <option>Options #3</option>
                                </select>
					      	</div>
					      </div>
					      <div class="span-4">
					      	<div class="wrapper">
						        <label>Input Label</label>
                                <span class="field">This is read-only</span>
					      	</div>
					      </div>
					    </div>

					    <div class="row">
					    	<div class="wrapper">
								<div class="span-12">
									<label>Textarea Label</label>
									<textarea placeholder="textarea"></textarea>
								</div>
					    	</div>
					    </div>

					    <div class="row">
						    <div class="wrapper">
						    	<input type="submit" value="Submit">
                                <input type="reset" value="Reset">
                                <a href="#" class="button">Back</a>
						    </div>
					    </div>

				  	</fieldset>
			  	</form>
			  	<div class="html">
					<div class="highlight">
						<pre class="prettyprint">
&lt;form&gt;
  &lt;fieldset&gt;
    &lt;legend&gt;Fieldset&lt;/legend&gt;
    &lt;div class="row"&gt;
      &lt;div class="span-12"&gt;
        &lt;div class="wrapper"&gt;
          &lt;label&gt;Input Label&lt;/label&gt;
          &lt;input type="text" placeholder="Input"&gt;
        &lt;/div&gt;
      &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="row"&gt;
      &lt;div class="span-4"&gt;
        &lt;div class="wrapper"&gt;
          &lt;label&gt;Input Label&lt;/label&gt;
          &lt;input type="text" placeholder="Input"&gt;
        &lt;/div&gt;
      &lt;/div&gt;
      &lt;div class="span-4"&gt;
        &lt;div class="wrapper"&gt;
          &lt;label&gt;Input Label&lt;/label&gt;
          &lt;input type="text" placeholder="Input"&gt;
        &lt;/div&gt;
      &lt;/div&gt;
      &lt;div class="span-4"&gt;
        &lt;div class="wrapper"&gt;
          &lt;label&gt;Input Label&lt;/label&gt;
          &lt;input type="text" placeholder="Input"&gt;
        &lt;/div&gt;
      &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="row"&gt;
       &lt;div class="wrapper"&gt;
          &lt;div class="span-12"&gt;
             &lt;label&gt;Textarea Label&lt;/label&gt;
             &lt;textarea placeholder="textarea"&gt;&lt;/textarea&gt;
          &lt;/div&gt;
       &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="wrapper"&gt;
      &lt;input type="submit" value="Submit"&gt;
      &lt;input type="reset" value="Reset"&gt;
      &lt;a href="#" class="button"&gt;Back&lt;/a&gt;
    &lt;/div&gt;
  &lt;/fieldset&gt;
&lt;/form&gt;
						</pre>
					</div>
				</div>
			  	<hr>
				<h4 class="sub-title">Pre/Postfix Labels</h4>
				<p>
					Naked CSS forms support prefix and postfix labels, through a versatile approach using special grid properties. You use the Naked CSS columns to define the size of the pre/postfix <code>&lt;span class="postfix"&gt;</code> or <code>&lt;span class="prefix"&gt;</code>. Here are a few examples:
				</p>
			  	<form>
			  		<div class="row">
				    	<div class="span-6">
							<div class="wrapper">
								<label>Input Domain</label>
								<div class="span-9">
									<input class="postfix-input" type="text" placeholder="Enter your Domain...">
								</div>
								<div class="span-3">
									<span class="postfix">.com</span>
								</div>
							</div>
						</div>
						<div class="span-6">
							<div class="wrapper">
								<label>Input URL</label>
								<div class="span-3">
									<span class="prefix">http://</span>
								</div>
								<div class="span-9">
									<input class="postfix-input" type="text" placeholder="Enter your URL...">
								</div>
							</div>
						</div>
				    </div>
			  	</form>
			  	<div class="html">
					<div class="highlight">
						<pre class="prettyprint">
&lt;label&gt;Input Domain&lt;/label&gt;
&lt;div class="span-9"&gt;
   &lt;input class="postfix-input" type="text" placeholder="Enter your Domain..."&gt;
&lt;/div&gt;
&lt;div class="span-3"&gt;
   &lt;span class="postfix"&gt;.com&lt;/span&gt;
&lt;/div&gt;

&lt;label&gt;Input URL&lt;/label&gt;
&lt;div class="span-3"&gt;
   &lt;span class="prefix"&gt;http://&lt;/span&gt;
&lt;/div&gt;
&lt;div class="span-9"&gt;
   &lt;input class="postfix-input" type="text" placeholder="Enter your URL..."&gt;
&lt;/div&gt;
						</pre>
					</div>
				</div>
			  	<hr>



			  	<h4 class="sub-title">Input Button</h4>
				<p>
					Naked CSS forms support prefix and postfix labels, through a versatile approach using special grid properties. You use the Naked CSS columns to define the size of the pre/postfix <code>&lt;span class="postfix"&gt;</code> or <code>&lt;span class="prefix"&gt;</code>. Here are a few examples:
				</p>
			  	<form>
			  		<div class="row">
				    	<div class="span-6 input-button">
							<div class="wrapper">
								<div class="span-9">
									<input type="text" placeholder="Enter your Domain...">
								</div>
								<div class="span-3">
									<a href="#" class="button">Clear</a>
								</div>
							</div>
						</div>
						<div class="span-6 input-button left">
							<div class="wrapper">
								<div class="span-3">
									<a href="#" class="button">Clear</a>
								</div>
								<div class="span-9">
									<input type="text" placeholder="Enter your URL...">
								</div>
							</div>
						</div>
				    </div>
			  	</form>
			  	<div class="html">
					<div class="highlight">
						<pre class="prettyprint">
&lt;div class="input-button"&gt;
   &lt;div class="span-9"&gt;
      &lt;input type="text" placeholder="Enter your Domain..."&gt;
   &lt;/div&gt;
   &lt;div class="span-3"&gt;
      &lt;a href="#" class="button"&gt;Clear&lt;/a&gt;
   &lt;/div&gt;
&lt;/div&gt;

&lt;div class="input-button left"&gt;
   &lt;div class="span-3"&gt;
      &lt;a href="#" class="button"&gt;Clear&lt;/a&gt;
   &lt;/div&gt;
   &lt;div class="span-9"&gt;
      &lt;input type="text" placeholder="Enter your URL..."&gt;
   &lt;/div&gt;
&lt;/div&gt;
						</pre>
					</div>
				</div>
				<hr>




				<h4 class="sub-title">Radio Button and Select Box</h4>
			  	<form>
			  		<div class="row">
				      	<div class="span-6">
				      		<div class="wrapper">
						    	<span for="radio1" class="radio-label">
						    		<input class="radio" name="radio1" type="radio" id="radio1" />Radio Button 1
						    	</span>
						    	<span for="radio1" class="radio-label">
						    		<input class="radio" name="radio1" type="radio" id="radio2" />Radio Button 2
						    	</span>
						    	<span for="radio1" class="radio-label">
						    		<input class="radio" name="radio1" type="radio" id="radio3" disabled />Radio Button 3
						    	</span>
				      		</div>
				    	</div>
				    	<div class="span-6">
				    		<div class="wrapper">
								<span class="dropdown-label">Selectbox Example</span>
								<select>
									<option>This is a dropdown</option>
									<option>This is another option</option>
									<option>This is another option too</option>
									<option>Look, a third option</option>
								</select>
				    		</div>
				    	</div>
				    </div>
			  	</form>
			  	<div class="html">
					<div class="highlight">
						<pre class="prettyprint">
&lt;input class="radio" name="radio1" type="radio"&gt;Radio Button 1
&lt;input class="radio" name="radio2" type="radio"&gt;Radio Button 1
&lt;input class="radio" name="radio3" type="radio" disabled&gt;Radio Button 1

&lt;select&gt;
   &lt;option&gt;This is a dropdown&lt;/option&gt;
   &lt;option&gt;This is another option&lt;/option&gt;
   &lt;option&gt;This is another option too&lt;/option&gt;
   &lt;option&gt;Look, a third option&lt;/option&gt;
&lt;/select&gt;
						</pre>
					</div>
				</div>
				<hr>
				<h4 class="sub-title">Checkbox & Checkbox Swipe</h4>
				<p>
					Naked CSS forms support prefix and postfix labels, through a versatile approach using special grid properties. You use the Naked CSS columns to define the size of the pre/postfix <code>&lt;span class="postfix"&gt;</code> or <code>&lt;span class="prefix"&gt;</code>. Here are a few examples:
				</p>
				<div class="ex-checkbox">
					<form>
						<div class="row">
							<div class="span-6">
								<label class="placeholder">
									<input class="checkbox" type="checkbox" id="checkbox1"/>
									Checkbox 1
								</label>
								<label class="placeholder">
									<input class="checkbox" type="checkbox" id="checkbox2" checked />
									Checkbox 2
								</label>
								<label class="placeholder">
									<input class="checkbox" type="checkbox" id="checkbox3" checked />
									Checkbox 3
								</label>
							</div>
							<div class="span-6">
								<label class="placeholder full">
									<input class="swipe" type="checkbox" checked />
									Checkbox Swipe 1
								</label>
								<label class="placeholder full">
									<input class="swipe" type="checkbox" />
									Checkbox Swipe 2
								</label>
								<label class="placeholder full">
									<input class="swipe" type="checkbox" checked />
									Checkbox Swipe 3
								</label>
							</div>
				    	</div>
					</form>
				</div>
				<div class="html">
					<div class="highlight">
						<pre class="prettyprint">
&lt;label class="placeholder"&gt;
   &lt;input class="checkbox" type="checkbox"&gt;
   Checkbox 1
&lt;/label&gt;
&lt;label class="placeholder"&gt;
   &lt;input class="checkbox" type="checkbox" checked"&gt;
   Checkbox 2
&lt;/label&gt;
&lt;label class="placeholder"&gt;
   &lt;input class="checkbox" type="checkbox" checked"&gt;
   Checkbox 3
&lt;/label&gt;

&lt;label class="placeholder"&gt;
   &lt;input class="swipe" type="checkbox" checked&gt;
   Checkbox Swipe 1
&lt;/label&gt;
&lt;label class="placeholder"&gt;
   &lt;input class="swipe" type="checkbox"&gt;
   Checkbox Swipe 2
&lt;/label&gt;
&lt;label class="placeholder"&gt;
   &lt;input class="swipe" type="checkbox" checked&gt;
   Checkbox Swipe 3
&lt;/label&gt;
						</pre>
					</div>
				</div>
				<hr>
			</div>
		</div>

		<?php include ('part-footer.php') ?>

		<?php include ('part-script.php') ?>

	</body>
</html>