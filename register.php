
<!DOCTYPE html>
<html lang="zxx">
<head>
    
    <title>Crimson Login Form HTML Template V3</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">

    <link type="text/css" rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="assets/fonts/font-awesome/css/font-awesome.min.css">
    <link type="text/css" rel="stylesheet" href="assets/fonts/flaticon/font/flaticon.css">
    <script src="https://kit.fontawesome.com/35e003e337.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" type="text/css" href="../../../../../css?family=Open+Sans:400,300,600,700,800%7CPoppins:400,500,700,800,900%7CRoboto:100,300,400,400i,500,700">
    <link href="../../../../../css2?family=Jost:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <link type="text/css" rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" id="style_sheet" href="assets/css/skins/default.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-toast-plugin/1.3.2/jquery.toast.min.css" />
</head>
<body id="top">

<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TAGCODE" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>

<div class="page_loader"></div>

<div class="login-3 tab-box">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-md-12 bg-img">
                <div class="informeson">
                    <div class="typing">
                        <h1>Register </h1>
                    </div>
                    <p>
                        Kanye Shop offers cutting-edge fashion with a blend of urban flair and high-end sophistication. Our curated collections feature avant-garde designs, premium fabrics, and timeless style. From streetwear essentials to statement pieces, Kanye Shop caters to individuals seeking bold, fashion-forward looks that make a statement wherever they go.</p>

                    <div class="social-list">
                        <div class="buttons">
                            <a href="https://facebook.com/ysbalaba" class="facebook-bg"><i class="fa fa-facebook"></i></a>

                            <a href="https://github.com/Kayne1310" class="github-bg">
                                <i class="fab fa-github"></i>
                            </a>
                            
                            <a href="#" class="google-bg"><i class="fa fa-google"></i></a>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 form-section">
                <div class="login-inner-form">
                    <div class="details">
                        <a href="{{route('home.index')}}" style="font-size: 70px; color: rgb(123,28,51);">
                            Kayne Shop
                        </a>
                        <h3>Register into Your Account</h3>
                        <form action="" method="POST">
                            
                         
                            <div class="form-group form-box">
                                <input type="name" name="name" class="form-control"  placeholder="Enter Name" aria-label="Enter Name" required>
                               
                              
                            </div>

                            <div class="form-group form-box">
                                <input type="email" name="email" class="form-control" placeholder="Enter Your Email " aria-label="Enter Your Email" required>
                               

                            </div>

                            <div class="form-group form-box">
                                <input type="text" name="phone" class="form-control"  placeholder="Enter Your Phone" aria-label="Enter Your Phone" required>
                                
                            </div>

                            <div class="form-group form-box">
                                <input type="text" name="address" class="form-control"  placeholder="Enter Your Address" autocomplete="off" aria-label="Enter Your Address">
                                
                            </div>

                            <div class="form-group form-box">
                                <select name="gender" class="form-control">
                                    <option value="">Gender</option>
                                    <option value="1">Male</option>
                                    <option value="0">Fe Male</option>
                                </select>
                            </div>

                            <div class="form-group form-box">
                                <input type="password" name="password" class="form-control" autocomplete="off" placeholder="Enter your Password" aria-label="Enter your Password">
                            </div>

                            <div class="form-group form-box">
                                <input type="password" name="confirm_password" class="form-control" autocomplete="off" placeholder="Enter Confirm your Password" aria-label="Enter Confirm  your Password">
                            </div>


                            
                            <div class="form-group">
                                <button type="submit" class="btn-md btn-theme w-100">Register</button>
                            </div>
                            <p>Do you have an account?<a href="signup.php"> Login here</a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>


<script>
	
	if ('WebSocket' in window) {
		(function () {
			function refreshCSS() {
				var sheets = [].slice.call(document.getElementsByTagName("link"));
				var head = document.getElementsByTagName("head")[0];
				for (var i = 0; i < sheets.length; ++i) {
					var elem = sheets[i];
					var parent = elem.parentElement || head;
					parent.removeChild(elem);
					var rel = elem.rel;
					if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() == "stylesheet") {
						var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
						elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date().valueOf());
					}
					parent.appendChild(elem);
				}
			}
			var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
			var address = protocol + window.location.host + window.location.pathname + '/ws';
			var socket = new WebSocket(address);
			socket.onmessage = function (msg) {
				if (msg.data == 'reload') window.location.reload();
				else if (msg.data == 'refreshcss') refreshCSS();
			};
			if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
				console.log('Live reload enabled.');
				sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
			}
		})();
	}
	else {
		console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
	}
	// ]]>
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-toast-plugin/1.3.2/jquery.toast.min.js"></script>
        @yield('js')
        @if(Session::has('ok'))
        <script>
            $.toast({
                heading: 'Notificant',
                text: "{{ Session::get('ok') }}",
                showHideTransition: 'slide',
                icon: 'success',
                position: 'top-center', // Thêm lớp toast-middle vào đây
                hideAfter: 3000
            })
        </script>
        
        @endif

        @if(Session::has('no'))
        <script>
            $.toast({
                heading: 'Notificant',
                text: "{{ Session::get('no') }}",
                showHideTransition: 'slide',
                icon: 'error',
                position: 'top-center',
                hideAfter: 10000
            })
        </script>
        @endif
</body>
</html>