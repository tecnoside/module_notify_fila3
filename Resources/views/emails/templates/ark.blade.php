<html>
	<head>
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
		<title>{{ isset($senderName) ? $senderName : '' }}.</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<style type="text/css">{{ $_theme->cssInLine('notify::css/ark.css') }}</style>
		@if (isset($css))
=======
=======
>>>>>>> 83df11d (up)
		<title>{{ isset($senderName) ? $senderName : '' }}</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<style type="text/css">{{ file_get_contents(app_path() . '/../vendor/snowfire/beautymail/src/styles/css/ark.css') }}</style>
		@if($css)
<<<<<<< HEAD
>>>>>>> 83f2b60 (up)
=======
=======
>>>>>>> fe06862 (.)
		<title>{{ isset($senderName) ? $senderName : '' }}.</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<style type="text/css">{{ $_theme->cssInLine('notify::css/ark.css') }}</style>
<<<<<<< HEAD
		@if(isset($css))
<<<<<<< HEAD
>>>>>>> 7616aad (up)
=======
>>>>>>> fe06862 (.)
=======
		@if (isset($css))
>>>>>>> b735fbf (.)
=======
>>>>>>> 83df11d (up)
=======
=======
>>>>>>> a758bd5 (.)
		<title>{{ isset($senderName) ? $senderName : '' }}.</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<style type="text/css">{{ $_theme->cssInLine('notify::css/ark.css') }}</style>
<<<<<<< HEAD
		@if(isset($css))
<<<<<<< HEAD
>>>>>>> 478bb60 (up)
=======
>>>>>>> a758bd5 (.)
=======
		@if (isset($css))
>>>>>>> 7bcd34c (.)
		<style type="text/css">
			{{ $css }}
		</style>
		@endif
	</head>
	<body>
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 64529a0 (up)
=======
>>>>>>> fe06862 (.)
=======
>>>>>>> 5b257fb (up)
=======
>>>>>>> a758bd5 (.)
	{{--
	[{{ $_theme->cssInLine('notify::css/ark.css') }}]
	<pre>{{ print_r($logo) }}</pre>
	--}}
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 83f2b60 (up)
=======
	[{{ (\Modules\Xot\Services\FileService::assetPath('notify::css/ark.css')) }}]
>>>>>>> 7616aad (up)
=======
>>>>>>> 64529a0 (up)
=======
>>>>>>> fe06862 (.)
=======
>>>>>>> 83df11d (up)
=======
	[{{ (\Modules\Xot\Services\FileService::assetPath('notify::css/ark.css')) }}]
>>>>>>> 478bb60 (up)
=======
>>>>>>> 5b257fb (up)
=======
>>>>>>> a758bd5 (.)
	<table id="background-table" border="0" cellpadding="0" cellspacing="0" width="100%">
		<tbody>
		<tr>
			<td align="center">
				<table class="w640" border="0" cellpadding="0" cellspacing="0" width="640">
					<tbody>
					<tr class="large_only">
						<td class="w640" height="20" width="640"></td>
					</tr>
					<tr class="mobile_only">
						<td class="w640" height="10" width="640"></td>
					</tr>
					<tr class="mobile_only">
						<td class="w640" width="640" align="center">
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

							<img class="mobile_only" border="0" src="{{ array_key_exists('path', $logo) ? $logo['path'] : '' }}" alt="{{ isset($senderName) ? $senderName : '' }}" width="{{ array_key_exists('width', $logo) ? $logo['width'] : '' }}" height="{{ array_key_exists('height', $logo) ? $logo['height'] : '' }}" />

=======
							<img class="mobile_only" border="0" src="{{ array_key_exists('path', $logo) ? $logo['path'] : '' }}" alt="{{ isset($senderName) ? $senderName : '' }}" width="{{ array_key_exists('width', $logo) ? $logo['width'] : '' }}" height="{{ array_key_exists('height', $logo) ? $logo['height'] : '' }}" />
>>>>>>> 83f2b60 (up)
=======
							
							<img class="mobile_only" border="0" src="{{ array_key_exists('path', $logo) ? $logo['path'] : '' }}" alt="{{ isset($senderName) ? $senderName : '' }}" width="{{ array_key_exists('width', $logo) ? $logo['width'] : '' }}" height="{{ array_key_exists('height', $logo) ? $logo['height'] : '' }}" />
							
>>>>>>> 7616aad (up)
=======

							<img class="mobile_only" border="0" src="{{ array_key_exists('path', $logo) ? $logo['path'] : '' }}" alt="{{ isset($senderName) ? $senderName : '' }}" width="{{ array_key_exists('width', $logo) ? $logo['width'] : '' }}" height="{{ array_key_exists('height', $logo) ? $logo['height'] : '' }}" />

>>>>>>> 602db11 (up)
=======

							<img class="mobile_only" border="0" src="{{ array_key_exists('path', $logo) ? $logo['path'] : '' }}" alt="{{ isset($senderName) ? $senderName : '' }}" width="{{ array_key_exists('width', $logo) ? $logo['width'] : '' }}" height="{{ array_key_exists('height', $logo) ? $logo['height'] : '' }}" />

>>>>>>> fe06862 (.)
=======
							<img class="mobile_only" border="0" src="{{ array_key_exists('path', $logo) ? $logo['path'] : '' }}" alt="{{ isset($senderName) ? $senderName : '' }}" width="{{ array_key_exists('width', $logo) ? $logo['width'] : '' }}" height="{{ array_key_exists('height', $logo) ? $logo['height'] : '' }}" />
>>>>>>> 83df11d (up)
=======
							
							<img class="mobile_only" border="0" src="{{ array_key_exists('path', $logo) ? $logo['path'] : '' }}" alt="{{ isset($senderName) ? $senderName : '' }}" width="{{ array_key_exists('width', $logo) ? $logo['width'] : '' }}" height="{{ array_key_exists('height', $logo) ? $logo['height'] : '' }}" />
							
>>>>>>> 478bb60 (up)
=======

							<img class="mobile_only" border="0" src="{{ array_key_exists('path', $logo) ? $logo['path'] : '' }}" alt="{{ isset($senderName) ? $senderName : '' }}" width="{{ array_key_exists('width', $logo) ? $logo['width'] : '' }}" height="{{ array_key_exists('height', $logo) ? $logo['height'] : '' }}" />

>>>>>>> b3b016d (up)
=======

							<img class="mobile_only" border="0" src="{{ array_key_exists('path', $logo) ? $logo['path'] : '' }}" alt="{{ isset($senderName) ? $senderName : '' }}" width="{{ array_key_exists('width', $logo) ? $logo['width'] : '' }}" height="{{ array_key_exists('height', $logo) ? $logo['height'] : '' }}" />

>>>>>>> a758bd5 (.)
						</td>
					</tr>
					<tr class="mobile_only">
						<td class="w640" height="10" width="640"></td>
					</tr>
					<tr class="large_only">
						<td class="w640" bgcolor="#ffffff" height="20" width="640"></td>
					</tr>
					<tr class="mobile_only">
						<td class="w640" bgcolor="#ffffff" height="10" width="640"></td>
					</tr>
					<tr>
						<td id="header" class="w640" align="center" bgcolor="#FFFFFF" width="640">
							<table class="w640" border="0" cellpadding="0" cellspacing="0" width="640">
								<tr>
									<td class="w20" width="20"></td>
									<td id="logo" width="{{ array_key_exists('width', $logo) ? $logo['width'] : '' }}" valign="top">
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
										<img border="0" src="{{ array_key_exists('path', $logo) ? $logo['path'] : '' }}" alt="{{ isset($senderName) ? $senderName : '' }}" width="{{ array_key_exists('width', $logo) ? $logo['width'] : '' }}" height="{{ array_key_exists('height', $logo) ? $logo['height'] : '' }}" />
=======
										<img border="0" src="{{ array_key_exists('path', $logo) ? $logo['path'] : '' }}" alt="{{ isset($senderName) ? $senderName : ''}}" width="{{ array_key_exists('width', $logo) ? $logo['width'] : '' }}" height="{{ array_key_exists('height', $logo) ? $logo['height'] : '' }}" />
>>>>>>> 83f2b60 (up)
=======
										<img border="0" src="{{ array_key_exists('path', $logo) ? $logo['path'] : '' }}" alt="{{ isset($senderName) ? $senderName : ''}}" width="{{ array_key_exists('width', $logo) ? $logo['width'] : '' }}" height="{{ array_key_exists('height', $logo) ? $logo['height'] : '' }}" />
>>>>>>> fe06862 (.)
=======
										<img border="0" src="{{ array_key_exists('path', $logo) ? $logo['path'] : '' }}" alt="{{ isset($senderName) ? $senderName : '' }}" width="{{ array_key_exists('width', $logo) ? $logo['width'] : '' }}" height="{{ array_key_exists('height', $logo) ? $logo['height'] : '' }}" />
>>>>>>> b735fbf (.)
=======
										<img border="0" src="{{ array_key_exists('path', $logo) ? $logo['path'] : '' }}" alt="{{ isset($senderName) ? $senderName : ''}}" width="{{ array_key_exists('width', $logo) ? $logo['width'] : '' }}" height="{{ array_key_exists('height', $logo) ? $logo['height'] : '' }}" />
>>>>>>> 83df11d (up)
=======
										<img border="0" src="{{ array_key_exists('path', $logo) ? $logo['path'] : '' }}" alt="{{ isset($senderName) ? $senderName : ''}}" width="{{ array_key_exists('width', $logo) ? $logo['width'] : '' }}" height="{{ array_key_exists('height', $logo) ? $logo['height'] : '' }}" />
>>>>>>> a758bd5 (.)
=======
										<img border="0" src="{{ array_key_exists('path', $logo) ? $logo['path'] : '' }}" alt="{{ isset($senderName) ? $senderName : '' }}" width="{{ array_key_exists('width', $logo) ? $logo['width'] : '' }}" height="{{ array_key_exists('height', $logo) ? $logo['height'] : '' }}" />
>>>>>>> 7bcd34c (.)
									</td>
									<td class="w30" width="30"></td>
								</tr>
								<tr>
									<td colspan="3" height="20" class="large_only"></td>
								</tr>
							</table>
						</td>
					</tr>

					<tr>
						<td class="w640" bgcolor="#ffffff" width="640">
							<table class="w640" border="0" cellpadding="0" cellspacing="0" width="640">
								<tbody>

									@section('content')
									@show

								</tbody>
							</table>
						</td>
					</tr>
					<tr>
						<td class="w640" bgcolor="#ffffff" width="640" colspan="3" height="20"></td>
					</tr>
					<tr>
						<td>
							<table width="640" class="w640" align="center" cellpadding="0" cellspacing="0">
								<tr>
									<td class="w50" width="50"></td>
									<td class="w410" width="410">
										@if (isset($reminder))
											<p id="permission-reminder" class="footer-content-left" align="left">{!! $reminder !!}</p>
										@endif
									</td>
									<td valign="top">
										<table align="right">
											<tr>
												<td colspan="2" height="10"></td>
											</tr>
											<tr>
												@if (isset($twitter))
													<td><a href="https://twitter.com/{{ $twitter }}"><img src="{{ Request::getSchemeAndHttpHost() }}/vendor/beautymail/assets/images/ark/twitter.png" alt="Twitter" height="25" width="25" style="border:0" /></a></td>
												@endif

												@if (isset($facebook))
													<td><a href="https://facebook.com/{{ $facebook }}"><img src="{{ Request::getSchemeAndHttpHost() }}/vendor/beautymail/assets/images/ark/fb.png" alt="Facebook" height="25" width="25" style="border:0" /></a></td>
												@endif
											</tr>
										</table>
									</td>
									<td class="w15" width="15"></td>
								</tr>

							</table>
						</td>
					</tr>
					<tr>
						<td class="w640" height="60" width="640"></td>
					</tr>
					</tbody>
				</table>
			</td>
		</tr>
		</tbody>
	</table>
	</body>
</html>
