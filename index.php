<html>
	<head>
		<title>Ask Laurian Gridinoc</title>
		<link rel="stylesheet" href="stylesheet/main.css" type="text/css" media="screen" title="no title" charset="utf-8">
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" type="text/javascript"></script>
		<script src="scripts/laurian.js" type="text/javascript" charset="utf-8"></script>
	</head>
	<body>
		<div id="container">
			<div id="question">
				<h1>Ask Laurian Anything!</h1>
				<form>
					<ul>
						<li>
							<select>
								<option>What do you think about...</option>
								<option>Would you recommend...</option>
							</select>
						</li>
						<li><input type="text" id="topic" /></li>
						<li><div id="askbutton"></div></li>
					</ul>
				</form>
			</div>
			<div id="answer">
				<h2 id="tdisplay"></h2>
				<div id="response"></div>
				<div id="askagainbutton"></div>
			</div>
		</div>
		<div class="modal">He's thinking about it, hold on.</div>
	</body>
</html>