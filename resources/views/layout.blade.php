<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Probash</title>
	<link rel="icon" href="{{ asset('img/logo.jpg') }}" sizes="16x16">
	<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/> -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>
	<link rel="stylesheet" type="text/css" href="/css/style.css">
	<link rel="stylesheet" type="text/css" href="/css/responsive.css">
	@yield('styles')
</head>
<body>

<!-- ================================TopSearch Header MobileNAVBAR Start================================ -->
@include('nav')
<!-- ================================TopSearch Header MobileNAVBAR End================================ -->

@yield('content')

<!-- Mobile Footer Apps DIV --><!-- Mobile Footer Apps DIV --><!-- Mobile Footer Apps DIV -->
<div class="mobile fmcontainer">
	<div class="imgDiv"><img src="{{ asset('img/all.jpg') }}" alt=""></div>
	<div class="imgDiv"><img src="{{ asset('img/all.jpg') }}" alt=""></div>
</div>
<!-- Mobile Footer Apps DIV --><!-- Mobile Footer Apps DIV --><!-- Mobile Footer Apps DIV -->


<!-- ================================FOOTER START================================ -->
<footer class="footer footerBg">
	<div class="fcontainer first">
		<div class="footerBorder"><a href="" class="footerLink">প্রচ্ছদ</a></div>
		<div class="footerBorder"><a href="" class="footerLink">মোবাইল সার্ভিস</a></div>
		<div class="footerBorder"><a href="" class="footerLink">সালতামামি</a></div>
		<div class="footerBorder"><a href="" class="footerLink">খেলা</a></div>
		<div class="footerBorder"><a href="" class="footerLink">ইসলাম</a></div>
		<div class="footerBorder"><a href="" class="footerLink">পিএসআই</a></div>
		<div class="footerBorder"><a href="" class="footerLink">Policy</a></div>
		<div class="footerBorder"><a href="" class="footerLink">We</a></div>
		<div class="footerBorder"><a href="" class="footerLink">Contact</a></div>
		<div class="footerBorder"><a href="" class="footerLink">বিজ্ঞাপন</a></div>
	</div>
	<div class="hrFooter"></div>
	<div class="fcontainer middle">
		<div class="imgDiv"><img src="{{ asset('img/all.jpg') }}" alt=""></div>
		<div class="fcontainer">
			<div class="imgDiv"><img src="{{ asset('img/all.jpg') }}" alt=""></div>
			<div class="imgDiv"><img src="{{ asset('img/all.jpg') }}" alt=""></div>
		</div>
		<div class="fcontainer socialTopDiv">
			<a href=""><i class="fa-brands fa-facebook-f socialIcon fbIcon"></i></a>
			<a href=""><i class="fa-brands fa-twitter socialIcon ttIcon"></i></a>
			<a href=""><i class="fa-brands fa-youtube socialIcon ytIcon"></i></a>		
		</div>
	</div>
	<div class="hrFooter"></div>	
	<div class="last">
		<h4 class="author">সম্পাদক : জুয়েল মাজহার</h4>
		<p>ফোন: +৮৮০ ২ ৮৪৩ ২১৮১, +৮৮০ ২ ৮৪৩ ২১৮২ আই.পি. ফোন: +৮৮০ ৯৬১ ২১২ ৩১৩১ নিউজ রুম মোবাইল: +৮৮০ ১৭২ ৯০৭ ৬৯৯৬, +৮৮০ ১৭২ ৯০৭ ৬৯৯৯ ফ্যাক্স: +৮৮০ ২ ৮৪৩ ২৩৪৬</p>
		<p>ইমেইল: news@banglanews24.com সম্পাদক ইমেইল: editor@banglanews24.com</p>
		<p>Marketing Department: +880 961 212 3131 Extension: 3039 E-mail: marketing@banglanews24.com</p>
		<br>
		<p>কপিরাইট © 2006-2024 banglanews24.com | একটি ইস্ট-ওয়েস্ট মিডিয়া গ্রুপের (ইডব্লিউএমজিএল) প্রতিষ্ঠান</p>
	</div>
</footer>
<!-- ================================FOOTER END================================ -->




<!-- #BACK-TOP --><!-- #BACK-TOP --><!-- #BACK-TOP -->
<a id="back-top" href="#top"><i class="fa fa-angle-up"></i></a>

<script src="/js/index.js"></script>
<script src="/js/lazyload.min.js"></script>
<!-- <script src="js/unijoy.js"></script> -->
<!-- <script src="js/phoneticunicode.js"></script> -->
@yield('scripts')
</body>
</html>	