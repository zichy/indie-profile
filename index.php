<?php
/*
	SPDX-FileCopyrightText: 2025 zichy
	SPDX-License-Identifier: Unlicense
*/

	$generatorName = 'indie-profile';
	$generatorUrl = 'https://github.com/zichy/indie-profile';

/****************************************
	Settings
****************************************/

	// Full URL to this page.
	$siteUrl = 'https://example.com';

	// Overall page language.
	// Must follow BCP 47 syntax (RFC 5646).
	$language = 'en-US';

	// Directionality of text.
	// Can be `ltr`, `rtl` or `auto`.
	$textDir = 'ltr';

	// Sets a dark color scheme if prefered by the user.
	// Additional adjustments will require custom CSS.
	$darkMode = false;

	// Suggested color for surrounding interface (optional).
	// Dark color will only be used if `$darkMode` is active.
	// Can be (almost) any valid CSS color.
	$themeColorLight = '#55AA55';
	$themeColorDark = '#447744';

	// Adds basic styles to make plain HTML look better.
	// Recommended, but may interfere with your custom CSS.
	$resetCSS = true;

	// Path to custom CSS file (optional).
	// Try out `demo.css`!
	$customCSS = '';

	// Favicon to be displayed in the browser (optional).
	// Must be a single emoji.
	$favicon = '😃';

	// Open external links in a new tab.
	$extLinksTab = true;

	// Display a link to this project in the footer.
	$showGenerator = true;

/****************************************
	Content
*****************************************/

	// Your given/first name (optional).
	$givenName = 'John';
	
	// Your additional/middle name (optional).
	$additionalName = 'William';

	// Your family/last name (optional).
	$familyName = 'Doe';

	// Your nick name.
	// Optional, but required if no other name is set.
	$nickName = 'Jo349';

	// Your gender identify (optional).
	$gender = 'Male';

	// Your pronouns (optional).
	// See also: https://pronouns.page
	$pronouns = 'he/him';

	// Local path to photo (optional).
	// Try to use a modern format (e.g. AVIF, WebP).
	$photoUrl = 'demo.avif';

	// Full URL to the photo (optional).
	$photoFullUrl = 'https://example.com/demo.avif';

	// Photo MIME type (optional).
	$photoType = 'image/avif';

	// Photo dimensions (optional).
	// Can be smaller than the actual photo.
	$photoWidth = '600';
	$photoHeight = '315';

	// Photo aspect ratio (optional)
	// Many social networks prefer an aspect ratio of 1.91/1.
	$photoRatio = '1.91/1';

	// Alternative text of your photo (optional).
	// Used by assistive technology and search engines.
	$photoAlt = 'A black man with a short beard, wearing a green shirt and smiling into the camera';

	// Photo caption (optional).
	// May include text formatting.
	$photoCaption = 'Photo: <em>Justin Shaifer</em> (CC0)';

	// Description of yourself (optional).
	// May include text formatting.
	// Will be truncated for search engines after 200 characters.
	$description = '<strong>Lorem ipsum dolor sit amet!</strong> 👋 Consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et.';

	// Your website (optional).
	// May or may not be this site.
	$website = 'https://example.com';

	// Your email address (optional).
	// Use any format for spam prevention (e.g. `john (at sign) doe (dot) com`).
	$email = 'johndoe@example.com';

	// Your phone number (optional).
	// May include `+` and spaces.
	$phone = '+1 555 1234567';

	// Your postal address (all optional).
	$addressStreet = '123 Main St.';
	// Your locality (e.g. `Los Angeles`, `Munich`)
	$addressLocality = 'Los Angeles';
	// Your region (e.g. `CA`, `Bavaria`)
	$addressRegion = 'CA';
	// Your postal code (e.g. `12345`, `EC1A 2BE`).
	$addressCode = '91316';
	// Your country (e.g. `USA`, `Indonesia`).
	$addressCountry = 'USA';

	// Additional links to external profiles (optional).
	// Each item must have `label`, `url` is optional.
	$profiles = array(
		"Mastodon" => array(
			"url" => "https://mastodon.example/@Jo349",
			"label" => "@Jo349@mastodon.example"
		),
		"IRC" => array(
			"label" => "joe349 @ Libera.Chat"
		),
		"Discord" => array(
			"label" => "Joe349"
		),
		"LinkedIn" => array(
			"url" => "https://linkedin.com/in/Joe349",
			"label" => "in/Joe349"
		)
	);

/****************************************
	Structure/format content
	(Do not change this!)
****************************************/

	if ($givenName) $givenName = '<span itemprop="givenName" class="p-given-name">'.$givenName.'</span>';
	if ($additionalName) $additionalName = '<span itemprop="additionalName" class="p-additional-name">'.$additionalName.'</span>';
	if ($familyName) $familyName = '<span itemprop="familyName" class="p-family-name">'.$familyName.'</span>';
	if ($nickName) $nickName = '<small class="p-nickname"><em>'.$nickName.'</em></small>';

	$fullName = ($givenName ? $givenName.' ' : '').($additionalName ? $additionalName.' ' : '').($familyName ? $familyName : '');

	if (!$givenName && !$additionalName && !$familyName) {
		$fullName = strip_tags($nickName);
		$nickName = '';
	}

	if ($gender) $gender = '<span itemprop="gender" class="p-gender-identity">'.$gender.'</span>';

	if ($pronouns) $pronouns = '<em itemprop="pronouns" class="u-pronoun">'.$pronouns.'</em>';

	if ($description) {
		$descPlain = strip_tags($description);
		$descShort = strlen($descPlain) > 200 ? substr($descPlain, 0, 200)."…" : $descPlain;
	}

	if ($addressStreet) $addressStreet = '<span itemprop="streetAddress" class="p-street-address">'.$addressStreet.'</span>';
	if ($addressLocality) $addressLocality = '<span itemprop="addressLocality" class="p-locality">'.$addressLocality.'</span>';
	if ($addressRegion) $addressRegion = '<span itemprop="addressRegion" class="p-region">'.$addressRegion.'</span>';
	if ($addressCode) $addressCode = '<span itemprop="postalCode" class="p-postal-code">'.$addressCode.'</span>';
	if ($addressCountry) $addressCountry = '<span itemprop="addressCountry" class="p-country-name">'.$addressCountry.'</span>';

	$address = (!$addressStreet && !$addressLocality && !$adressRegion && !$addressCode && !$addressCountry) ? false : true;

	if ($website) $websiteLabel = preg_replace("(^https?://)", "", $website);

	if ($email) $emailLink = (filter_var($email, FILTER_VALIDATE_EMAIL)) ? true : false;
	if ($emailLink) $email = '<a href="mailto:'.$email.'" itemprop="email" class="u-email">'.$email.'</a>';

	if ($phone) $phoneLink = preg_replace("/[\s\-\/]/", "", $phone);

	$extLink = ($extLinksTab ? 'target="_blank"' : '');

/****************************************
	Render output
****************************************/

?>
<!DOCTYPE html><html lang="<?= $language ?>" dir="<?= $textDir ?>"><head prefix="og: http://ogp.me/ns# profile: http://ogp.me/ns/profile#">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="generator" content="<?= $generatorName ?>">
<meta property="og:type" content="profile">
<meta name="author" content="<?= strip_tags($fullName) ?>">
<title><?= strip_tags($fullName) ?></title>
<?php if ($givenName): ?>
	<meta property="profile:first_name" content="<?= strip_tags($givenName) ?>">
<?php endif ?>
<?php if ($familyName): ?>
	<meta property="profile:first_name" content="<?= strip_tags($familyName) ?>">
<?php endif ?>
<?php if ($nickName): ?>
	<meta property="profile:username" content="<?= strip_tags($nickName) ?>">
<?php endif ?>
<meta property="og:title" content="<?= strip_tags($fullName) ?>">
<?php if ($gender): ?>
<meta property="profile:gender" content="<?= strip_tags($gender) ?>">
<?php endif ?>
<?php if ($description): ?>
	<meta name="description" content="<?= $descShort ?>">
	<meta property="og:description" content="<?= $descShort ?>">
<?php endif ?>
<?php if ($photoFullUrl): ?>
	<meta property="og:image" content="<?= $photoFullUrl ?>">
	<?php if ($photoWidth): ?>
		<meta property="og:image:width" content="<?= $photoWidth ?>">
	<?php endif ?>
	<?php if ($photoHeight): ?>
		<meta property="og:image:height" content="<?= $photoHeight ?>">
	<?php endif ?>
	<?php if ($photoType): ?>
		<meta property="og:image:type" content="<?= $photoType ?>">
	<?php endif ?>
<?php endif ?>
<link rel="canonical" href="<?= $siteUrl ?>">
<meta property="og:url" content="<?= $siteUrl ?>">
<meta name="color-scheme" content="light<?= $darkMode ? ' dark' : '' ?>">
<?php if ($themeColorLight): ?>
	<meta name="theme-color" media="(prefers-color-scheme: light)" content="<?= $themeColorLight ?>">
<?php endif ?>
<?php if ($themeColorDark && $darkMode): ?>
	<meta name="theme-color" media="(prefers-color-scheme: dark)" content="<?= $themeColorDark ?>">
<?php endif ?>
<?php if ($favicon): ?>
	<link rel="icon" href="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20100%20100%22%3E%3Ctext%20y=%221em%22%20font-size=%2285%22%3E<?= $favicon ?>%3C/text%3E%3C/svg%3E">
<?php endif ?>
<?php if ($resetCSS): ?>
<style>
* {
	box-sizing: border-box;
	-webkit-font-smoothing: antialiased;
	text-rendering: optimizeLegibility;
}
html {
	font-size: 62.5%;
}
body {
	font-size: 1.6rem;
	line-height: 1.5;
	min-width: 375px;
	max-width: 768px;
	padding-inline: 2em;
	margin: 0;
}
img {
	display: block;
	max-width: 100%;
}
:is(h1, h2) {
	line-height: 1.15;
}
h1 {
	margin-block-end: 0;
}
hgroup p {
	margin-block-start: 0;
}
figure {
	width: fit-content;
	margin: 0;
}
figcaption {
	text-align: end;
	margin-block-start: 0.5em;
}
address {
	font-style: normal;
}
dt {
	font-weight: bold;
}
</style>
<?php endif ?>
<?php if ($customCSS): ?>
	<link href="<?= $customCSS ?>" rel="stylesheet">
<?php endif ?>
</head>

<body itemscope itemtype="https://schema.org/Person" class="h-card"><header>

<hgroup>
	<h1<?= !$nickName ? ' itemprop="name" class="p-nickname"' : '' ?>><?= $fullName.($nickName ? ' '.$nickName : '') ?></h1>

	<?php if ($gender || $pronouns): ?>
		<p><?= $gender ? $gender : ''?> <?= $pronouns ? $pronouns : ''?>
	<?php endif ?>
</hgroup>

<?php if ($photoUrl): ?>
	<figure>
		<img itemprop="image" class="u-photo" src="<?= $photoUrl ?>" <?= $photoWidth ? 'width="'.$photoWidth.'"' : '' ?> <?= $photoRatio ? 'style="aspect-ratio:'.$photoRatio.'"' : '' ?> alt="<?= $photoAlt ?>" loading="lazy">

		<?php if ($photoCaption): ?>
			<figcaption><?= $photoCaption ?></figcaption>
		<?php endif ?>
	</figure>
<?php endif ?>

</header><main>

<?php if ($description): ?>
	<p itemprop="description" class="p-note"><?= $description ?>
<?php endif ?>

<section>
	<h2>Contact</h2>
	<address>
		<?php if ($address): ?>
		<p itemprop="address" itemscope itemtype="https://schema.org/PostalAddress" class="p-adr h-adr">
			<?= $addressStreet ? $addressStreet.'<br>' : '' ?>
			<?= $addressLocality ? $addressLocality : '' ?><?= $addressRegion ? ', '.$addressRegion.'<br>' : '' ?>
			<?= $addressCode ? $addressCode.'<br>' : '' ?>
			<?= $addressCountry ? $addressCountry : '' ?>
		</p>
		<?php endif ?>

		<dl>
		<?php if ($website): ?>
			<div>
				<dt>Website
				<dd><a itemprop="url" href="<?= $website ?>"><?= $websiteLabel ?></a>
			</div>
		<?php endif ?>
		<?php if ($email): ?>
			<div>
				<dt>Email address
				<dd <?= !$emailLink ? 'itemprop="email" class="u-email"' : '' ?>><?= $email ?></dd>
			</div>
		<?php endif ?>
		<?php if ($phone): ?>
			<div>
				<dt>Phone number
				<dd itemprop="telephone"><a href="tel:<?= $phoneLink ?>" class="p-tel"><?= $phone ?></a>
			</div>
		<?php endif ?>
		</dl>
	</address>
</section>

<?php if ($profiles): ?>
<section>
	<h2>Profiles</h2>
	<dl>
	<?php foreach($profiles as $profile => $value): ?>
		<div>
			<dt><?= $profile ?>
			<dd>
			<?php if (array_key_exists('url', $value)): ?>
				<a itemprop="url" class="u-url" href="<?= $value['url'] ?>" rel="me" <?= $extLink ?>>
					<?= $value['label'] ?>
				</a>
			<?php else: ?>
				<?= $value['label'] ?>
			<?php endif ?>
			</dd>
		</div>
	<?php endforeach ?>
	</dl>
</section>
<?php endif ?>

</main>

<?php if ($showGenerator): ?>
<footer>
	<p>Page generated by <a href="<?= $generatorUrl ?>" rel="external" <?= $extLink ?>><?= $generatorName ?></a>.
</footer>
<?php endif ?>

</body></html>
