<!DOCTYPE html>
<html lang="en">
<head>
	<style>
		body {
		height: 100%;
		background: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/50598/concrete-wall-background.jpg) center center fixed;
		background-size: cover;
}

.shade {
		overflow: auto;
		position: absolute;
		top: 0;
		left: 0;
		bottom: 0;
		right: 0;
		background-image: linear-gradient( 150deg, rgba(0, 0, 0, 0.65), transparent);
}

.blackboard {
		position: relative;
		width: 640px;
		margin: 7% auto;
		border: tan solid 12px;
		border-top: #bda27e solid 12px;
		border-left: #b19876 solid 12px;
		border-bottom: #c9ad86 solid 12px;
		box-shadow: 0px 0px 6px 5px rgba(58, 18, 13, 0), 0px 0px 0px 2px #c2a782, 0px 0px 0px 4px #a58e6f, 3px 4px 8px 5px rgba(0, 0, 0, 0.5);
		background-image: radial-gradient( circle at left 30%, rgba(34, 34, 34, 0.3), rgba(34, 34, 34, 0.3) 80px, rgba(34, 34, 34, 0.5) 100px, rgba(51, 51, 51, 0.5) 160px, rgba(51, 51, 51, 0.5)), linear-gradient( 215deg, transparent, transparent 100px, #222 260px, #222 320px, transparent), radial-gradient( circle at right, #111, rgba(51, 51, 51, 1));
		background-color: #333;
}

.blackboard:before {
		box-sizing: border-box;
		display: block;
		position: absolute;
		width: 100%;
		height: 100%;
		background-image: linear-gradient( 175deg, transparent, transparent 40px, rgba(120, 120, 120, 0.1) 100px, rgba(120, 120, 120, 0.1) 110px, transparent 220px, transparent), linear-gradient( 200deg, transparent 80%, rgba(50, 50, 50, 0.3)), radial-gradient( ellipse at right bottom, transparent, transparent 200px, rgba(80, 80, 80, 0.1) 260px, rgba(80, 80, 80, 0.1) 320px, transparent 400px, transparent);
		border: #2c2c2c solid 2px;
		content: "Contact Us";
		font-family: 'Permanent Marker', cursive;
		font-size: 2.2em;
		color: rgba(238, 238, 238, 0.7);
		text-align: center;
		padding-top: 20px;
}

.form {
		padding: 70px 20px 20px;
}

p {
		position: relative;
		margin-bottom: 1em;
}

label {
		vertical-align: middle;
		font-family: 'Permanent Marker', cursive;
		font-size: 1.6em;
		color: rgba(238, 238, 238, 0.7);
}

p:nth-of-type(5) > label {
		vertical-align: top;
}

input,
textarea {
		vertical-align: middle;
		padding-left: 10px;
		background: none;
		border: none;
		font-family: 'Permanent Marker', cursive;
		font-size: 1.6em;
		color: rgba(238, 238, 238, 0.8);
		line-height: .6em;
		outline: none;
}

textarea {
		height: 120px;
		font-size: 1.4em;
		line-height: 1em;
		resize: none;
}

input[type="submit"] {
		cursor: pointer;
		color: rgba(238, 238, 238, 0.7);
		line-height: 1em;
		padding: 0;
}

input[type="submit"]:focus {
		background: rgba(238, 238, 238, 0.2);
		color: rgba(238, 238, 238, 0.2);
}

::-moz-selection {
		background: rgba(238, 238, 238, 0.2);
		color: rgba(238, 238, 238, 0.2);
		text-shadow: none;
}

::selection {
		background: rgba(238, 238, 238, 0.4);
		color: rgba(238, 238, 238, 0.3);
		text-shadow: none;
}
	</style>
</head>
<body>
<form action="{{ route('send.email') }}"  method="post">
	@csrf
	<div class="shade">
		<div class="blackboard">
				<div class="form">
				@if(session()->has('message'))
                                                <div class="alert alert-success">
                                            {{ session()->get('message') }}
                                        </div>
                                        @endif
						<p>
						
								<label>Name: </label>
								<input type="text" name="name" />
								
						</p>
						<p>
								<label>Email: </label>
								<input type="text" name="email" />
						</p>
						<p>
								<label>Subject: </label>
								<input type="text" name="subject"/>
						</p>
						<p>
								<label>Message: </label>
								<input name="content"/>
								<textarea></textarea>
						</p>
						<p class="wipeout">
								<input type="submit" value="Send" />
								<!-- <button type="submit">Send</button> -->
						</p>
				</div>
		</div>
</div>
</form>
</body>
</html>