
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta charset="utf-8">
		<title>STAR-WARS</title>
		<script
			id="sap-ui-bootstrap"
			src="/resources/sap-ui-core.js"
			data-sap-ui-theme="sap_bluecrystal"
			data-sap-ui-modules="sap.m.library"
			data-sap-ui-compatVersion="edge"
			data-sap-ui-preload="async" >
		</script>
		<script>
			sap.ui.getCore().attachInit(function () {
				new sap.m.Text({
					text : "SAPUI5 is loaded successfully!"
				}).placeAt("content");
			});
		</script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/app.css">
	</head>


    <body class="StarWarsBody" id="content">
                    

    
        <div class="header" >
                <h1>STAR-WARS</h1>
                <p>List of all the STAR-WARS movies.</p>
        </div>

        

    
        <table border="2">
                <tr>
                        <td>Name of movie</td>
                        <td>Year</td>
                        <td>Picture</td>

                </tr>
                    @foreach($response as $item){
                    <tr>
                        <td>{{$item->titleOriginal}}</td>
                        <td>{{$item->year}}</td>
                        <td><img src= {{$item->image}} /></td>
                    </tr>
                    }
                    @endforeach
                </table>

    </body>



