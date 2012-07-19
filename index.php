<html>
	<head>
		<title>Ask Laurian Gridinoc</title>
		<link rel="stylesheet" href="stylesheet/main.css" type="text/css" media="screen" title="no title" charset="utf-8">
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" type="text/javascript"></script>
		<script src="scripts/laurian.js" type="text/javascript" charset="utf-8"></script>
	</head>
	<body>
<script charset="utf-8" src="http://widgets.twimg.com/j/2/widget.js"></script>
<script>
new TWTR.Widget({
  version: 2,
  type: 'search',
  search: 'askgridinoc.com',
  interval: 30000,
  title: 'Askgridinoc.com',
  subject: 'What they\'re saying about it',
  width: 250,
  height: 300,
  theme: {
    shell: {
      background: '#000000',
      color: '#ffffff'
    },
    tweets: {
      background: '#ffffff',
      color: '#444444',
      links: '#1985b5'
    }
  },
  features: {
    scrollbar: false,
    loop: true,
    live: true,
    behavior: 'default'
  }
}).render().start();
</script>
		<div id="container">
			<div id="question">
				<h1>Ask Laurian Anything!</h1>
				<form id="questionform">
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
