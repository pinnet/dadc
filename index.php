<!DOCTYPE html>
<html lang="en-us">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Welcome to dannyarnold.com</title>
    <script src="Build/UnityLoader.js"></script>
    <script>
      var gameInstance = UnityLoader.instantiate("gameContainer", "Build/unityout.json");
    </script>
    <style type="text/css">
	.gameWindow {
		border-radius: 10px;
		box-shadow: 9px #C0C0C0;
		position: relative;
		top: 10px;
	}
	</style>
  </head>
  <body style="background-color: #000000">
   <div id="gameContainer" style="width: 960px; height: 600px; margin: auto; left: 25%;" class="gameWindow"></div>
  </body>
</html>