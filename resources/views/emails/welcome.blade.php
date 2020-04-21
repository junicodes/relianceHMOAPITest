<!DOCTYPE html>
    <html lang="en-US">
    	<head>
    		<title>JuniCodes PortFolio</title>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
    		<style type="text/css">
    			* {
    				box-sizing: border-box;
    				padding: 0;
    				margin: 0;
    			}
    			body {
    				background: white;
    				color: black !important;
    			}
    			.verifycode {
    				color: #0b273d;
    				background: white;
    				text-align: center;
    				padding: 10px 40px 10px 40px;
    				width: 90%;
    				margin: auto;
    				font-size: 15px;
    				font-weight: bold;
    			}
    			.welcome{
    				font-weight: bold;
    				text-align: center;
                    color: #0b273d !important;
    			}
    			.note{
    				font-weight: bold;
    				text-align: center;
                    color: black !important;
    			}
				.team{
                    font-weight: normal;
                    font-size: 12px;
                    text-align: center;
                    color: grey !important;
                }

    		</style>
    	</head>
    	<body>
    		<div>
    			
    		</div>
    		<h2 class="welcome">Contact Mail From Junicdes PortFolio</h2>
    		<div style="padding: 10px;">
    			 <h4>Hello from {{ $data['name'] }}</h4>
				 <p>My Email: {{ $data['email']}}</p>
    		</div>
    		
    		<div>
    			 <h3 class="note">{{ $data['subject'] }}</h3>
    			 <p class="verifycode">{{ $data['message'] }}</p>
    		</div><br><br>
		
			<div>
                 <p class="team">if this mail is not authourize by you please kindly discard</p>
                 <p class="team" style="font-style: italic;">My website contact mail</p>
            </div>
    	</body>
    </html>