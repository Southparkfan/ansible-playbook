<?php

// Switch case
switch( $wgDBname ) {
	case 'nlallthetropeswiki':
	case 'allthetropeswiki':
		//require_once( "$IP/extensions/CreateBox/CreateBox.php" );
		require_once( "$IP/extensions/RandomSelection/RandomSelection.php" );
		require_once( "$IP/extensions/SectionHide/SectionHide.php" );
		require_once( "$IP/extensions/CSS/CSS.php" );
		require_once( "$IP/extensions/AJAXPoll/AJAXPoll.php" );
		require_once( "$IP/extensions/VoteNY/Vote.php" );
		require_once( "$IP/extensions/MultiBoilerplate/MultiBoilerplate.php" );
		$wgMultiBoilerplateOptions = false;
		$wgMultiBoilerplateDiplaySpecialPage = true;
		require_once( "$IP/extensions/HighlightLinksInCategory/HighlightLinksInCategory.php" );
		// Configurations
		$wgSectionHideShowtop = 1;
		$wgRestrictDisplayTitle = false;
		require_once( "$IP/extensions/NewUserMessage/NewUserMessage.php" );
		require_once( "$IP/extensions/SubpageFun/SubpageFun.php" );
		require_once( "$IP/extensions/SubPageList3/SubPageList3.php" );
		require_once( "$IP/extensions/Tabs/Tabs.php" );
		require_once( "$IP/extensions/RegexFun/RegexFun.php" );
		require_once( "$IP/extensions/Arrays/Arrays.php" );
		require_once( "$IP/extensions/ImageMap/ImageMap.php" );
		require_once( "$IP/extensions/Poem/Poem.php" );
		require_once( "$IP/extensions/TocTree/TocTree.php" );
		require_once( "$IP/extensions/MultiCategorySearch/MultiCategorySearch.php" );
		require_once( "$IP/extensions/CategoryTagSorter/CategoryTagSorter.php" );
		//require_once( "$IP/extensions/MagicNoCache/MagicNoCache.php" );
		require_once( "$IP/extensions/PageTools/PageTools.php" );
		require_once( "$IP/extensions/OnlineStatus/OnlineStatus.php" );
		require_once( "$IP/extensions/CustomData/CustomData.php" );
		require_once( "$IP/extensions/RelatedArticles/RelatedArticles.php" );
		require_once( "$IP/extensions/Disambiguator/Disambiguator.php" );
		require_once( "$IP/extensions/WebChat/WebChat.php" );
		$wgWebChatServer  = ''; // Not needed due to wgWebChatClient --SPF
		$wgWebChatChannel = '#allthetropes';
		$wgWebChatClient = 'freenodeChat';
		require_once( "$IP/extensions/Widgets/Widgets.php" );
		break;
	case 'botwiki':
		require_once( "$IP/extensions/LabeledSectionTransclusion/lst.php" );
		require_once( "$IP/extensions/LabeledSectionTransclusion/lsth.php" );
		break;
	case 'cpsinfowiki':
		require_once( "$IP/extensions/CreateBox/CreateBox.php" );
		break;
	case 'deguwiki':
		require_once( "$IP/extensions/ParserFunctions/ParserFunctions.php" );
		break;
	case 'detectiveconanwiki':
		require_once( "$IP/extensions/Widgets/Widgets.php" );
		break;
	case 'ejderhanefesiwiki':
		require_once( "$IP/extensions/Lingo/Lingo.php" );
		require_once( "$IP/extensions/Random/Random.php" );
		break;
	case 'extloadwiki':
		// all extensions are loaded on this wiki
		require_once( "$IP/extensions/cldr/cldr.php" );
		require_once( "$IP/extensions/CreateBox/CreateBox.php" );
		require_once( "$IP/extensions/RandomSelection/RandomSelection.php" );
		require_once( "$IP/extensions/SectionHide/SectionHide.php" );
		require_once( "$IP/extensions/LabeledSectionTransclusion/lst.php" );
		require_once( "$IP/extensions/Comments/Comment.php" );
		require_once( "$IP/extensions/CreateWiki/CreateWiki.php" );
		require_once( "$IP/extensions/Disambiguator/Disambiguator.php" );
		require_once( "$IP/extensions/HeaderTabs/HeaderTabs.php" );
		require_once( "$IP/extensions/ImageMap/ImageMap.php" );
		require_once( "$IP/extensions/Poem/Poem.php" );
		require_once( "$IP/extensions/SkinPerPage/SkinPerPage.php" );
		require_once( "$IP/extensions/CSS/CSS.php" );
		require_once( "$IP/extensions/AJAXPoll/AJAXPoll.php" );
		require_once( "$IP/extensions/VoteNY/Vote.php" );
		require_once( "$IP/extensions/MultiBoilerplate/MultiBoilerplate.php" );
		require_once( "$IP/extensions/HighlightLinksInCategory/HighlightLinksInCategory.php" );
		require_once( "$IP/extensions/NewUserMessage/NewUserMessage.php" );
		require_once( "$IP/extensions/SubpageFun/SubpageFun.php" );
		require_once( "$IP/extensions/SubPageList3/SubPageList3.php" );
		require_once( "$IP/extensions/Tabs/Tabs.php" );
		require_once( "$IP/extensions/RegexFun/RegexFun.php" );
		require_once( "$IP/extensions/Arrays/Arrays.php" );
		require_once( "$IP/extensions/TorBlock/TorBlock.php" );
		require_once( "$IP/extensions/ConfirmEdit/ConfirmEdit.php" );
		require_once( "$IP/extensions/TocTree/TocTree.php" );
		require_once( "$IP/extensions/MultiCategorySearch/MultiCategorySearch.php" );
		require_once( "$IP/extensions/CategoryTagSorter/CategoryTagSorter.php" );
		//require_once( "$IP/extensions/MagicNoCache/MagicNoCache.php" );
		require_once( "$IP/extensions/PageTools/PageTools.php" );
		require_once( "$IP/extensions/Widgets/Widgets.php" );
		require_once( "$IP/extensions/ParserFunctions/ParserFunctions.php" );
		require_once( "$IP/skins/Erudite/erudite.php" );
		require_once( "$IP/extensions/CustomData/CustomData.php" );
		require_once( "$IP/extensions/RelatedArticles/RelatedArticles.php" );
		require_once( "$IP/extensions/OnlineStatus/OnlineStatus.php" );
		require_once( "$IP/extensions/DynamicSidebar/DynamicSidebar.php" );
		require_once( "$IP/extensions/WebChat/WebChat.php" );
		require_once( "$IP/skins/BlueSky/BlueSky.php" );
		require_once( "$IP/extensions/MediaWikiPlayer/MediawikiPlayer.php" );
		require_once( "$IP/extensions/MwEmbedSupport/MwEmbedSupport.php" );
                require_once( "$IP/extensions/TimedMediaHandler/TimedMediaHandler.php" );
		break;
	case 'grepobotwiki':
		require_once( "$IP/extensions/Lockdown/Lockdown.php" );
		$wgNamespacePermissionLockdown[NS_OP]['read'] = array( 'sysop', 'botop' );
		$wgNamespacePermissionLockdown[NS_OP]['edit'] = array( 'sysop' );
		break;
	case 'jasperinternalwiki':
		// Per request; storing images on the wiki which should not be visible for technical reasons -John
		$wgUploadPath = "$wgScriptPath/img_auth.php";
		$wgUploadDirectory = '/mnt/mediawiki/private/uploads/jasperinternal.orain.org/images'; // Directory inaccessible via web access
		break;
	case 'loginwiki':
		// Blank comment to keep this in the statement per John's request
		$wgNamespaceProtection[NS_MAIN] = array( 'editinterface' );
		$wgNamespaceProtection[NS_USER] = array( 'editinterface' );
		break;
	case 'mediawikitesterswiki':
		$wgCategoryTreeMaxChildren = 2000;
		require_once( "$IP/extensions/CreateBox/CreateBox.php" );
		require_once( "$IP/extensions/Disambiguator/Disambiguator.php" );
		require_once( "$IP/extensions/HeaderTabs/HeaderTabs.php" );
		require_once( "$IP/extensions/ImageMap/ImageMap.php" );
		require_once( "$IP/extensions/Poem/Poem.php" );
		require_once( "$IP/extensions/RandomSelection/RandomSelection.php" );
		require_once( "$IP/extensions/SkinPerPage/SkinPerPage.php" );
		break;
	case 'metawiki':
		require_once( "$IP/extensions/CreateWiki/CreateWiki.php" );
		break;
	case 'spiralwiki':
		require_once( "$IP/extensions/cldr/cldr.php" );
		require_once( "$IP/skins/BlueSky/BlueSky.php" );
		break;
	case 'jossewiki':
		require_once( "$IP/extensions/Poem/Poem.php" );
		require_once( "$IP/extensions/TorBlock/TorBlock.php" );
		break;
	case 'szkwiki':
		require_once( "$IP/extensions/Widgets/Widgets.php" );
		break;
	case 'religionwiki':
		$wgHooks['ResourceLoaderRegisterModules'][] = 'lfRemoveCollapsibleNav';
		function lfRemoveCollapsibleNav( &$resourceLoader ) {
			try {
				$rl = new ReflectionClass( $resourceLoader );
				$mi = $rl->getProperty( "moduleInfos" );
				$mi->setAccessible( true );
				$moduleInfos = $mi->getValue( $resourceLoader );
				$moduleInfos["skins.vector.collapsibleNav"] = array();
				$mi->setValue( $resourceLoader, $moduleInfos );
				$mi->setAccessible( false );
			}
			catch( Exception $e ) {
				exit( "Error disabling collapsible sidebar (" . basename( __FILE__ ) . " line " . __LINE__ . "). This is supported only on MediaWiki 1.23, there is no need for this on MediaWiki 1.24." );
			}
		}

		break;
	case 'verkeerwiki':
		require_once( "$IP/extensions/TorBlock/TorBlock.php" );
		break;
	case 'wikidemoswiki':
		require_once( "$IP/extensions/Widgets/Widgets.php" );
		require_once( "$IP/skins/Erudite/erudite.php" );
		break;
	case 'wikilistswiki':
		require_once( "$IP/extensions/CharInsert/CharInsert.php" );
		break;
}

// Load InterwikiMagic on all wikis except for metawiki
if ( $wgDBname !== 'metawiki' ) {
	require_once( "$IP/extensions/InterwikiMagic/InterwikiMagic.php" );
}

//wmgUSE
if ( $wmgUseAds ) {
	require_once( "$IP/extensions/GoogleAdSense/GoogleAdSense.php" );
	$wgGoogleAdSenseClient = 'ca-pub-1601537392559952';
	$wgGoogleAdSenseSlot = '1005587824';
	$wgGoogleAdSenseID = 'lefttoolbar';
	$wgGoogleAdSenseAnonOnly = false;
}

if ( $wmgUseAdsAnon && $wmgUseAds ) { // Prevent this being enabled but not ads
	$wgGoogleAdSenseAnonOnly = true;
}

if ( $wmgUseATTImages ) {
	$wgForeignFileRepos[] = array(
		'class' => 'ForeignDBRepo',
		'name' => 'allthetropeswiki-foreign',
		'url' => "//$wmgUploadHostname/allthetropes.orain.org/images",
		'hashLevels' => 2,
		'transformVia404' => true,
		'initialCapital' => true,
		'descBaseUrl' => '//allthetropes.orain.org/wiki/File:',
		'scriptDirUrl' => '//allthetropes.orain.org/w',
		'fetchDescription' => false,
		'dbType' => $wgDBtype,
		'dbServer' => '10.131.243.246',
		'dbUser' => $wgDBuser,
		'dbPassword' => $wgDBpassword,
		'dbName' => 'allthetropeswiki',
		'dbFlags' => DBO_DEFAULT,
		'tablePrefix' => '',
		'hasSharedCache' => true,
		'directory' => "/mnt/mediawiki/uploads/allthetropes.orain.org/images",
	);
}

if ( $wmgUseBetaFeatures ) {
	require_once( "$IP/extensions/BetaFeatures/BetaFeatures.php" ); //Get BF

	require_once( "$IP/extensions/EventLogging/EventLogging.php" );
	require_once( "$IP/extensions/TextExtracts/TextExtracts.php" );
	require_once( "$IP/extensions/PageImages/PageImages.php" );
	require_once( "$IP/extensions/Popups/Popups.php" );

	//require_once( "$IP/extensions/MultimediaViewer/MultimediaViewer.php" ); // MediaViwer
	//$wgMediaViewerIsInBeta = true; // Register MediaViewer as Beta

	require_once( "$IP/extensions/VectorBeta/VectorBeta.php" ); // VectorBeta
	//NOTE: Globals must be set after extension is loaded
	//$wgVectorBetaTypography = true; // Disabled for now
	$wgVectorBetaVectorBetaWinter = true;
	$wgVectorBetaPersonalBar = true; // REQUIRES EventLogging
}

if ( $wmgUseCodeEditor ) {
	require_once( "$IP/extensions/CodeEditor/CodeEditor.php" );
	$wgScribuntoUseCodeEditor = true;
}

if ( $wmgUseCollectionPDF ) {
	require_once( "$IP/extensions/Collection/Collection.php" );
	require_once( "$IP/extensions/PdfBook/PdfBook.php" );
	// Rights
	$wgGroupPermissions['user']['collectionsavecommunitypage'] = true;
	$wgGroupPermissions['user']['collectionsaveuserpage'] = true;
}

if ( $wmgUseCharInsert ) {
	require_once( "$IP/extensions/CharInsert/CharInsert.php" );
}

if ( $wmgUseCirrus ) {
	require_once( "$IP/extensions/CirrusSearch/CirrusSearch.php" );
	require_once( "$IP/extensions/Elastica/Elastica.php" );
	$wgSearchType = 'CirrusSearch';
	$wgCirrusSearchServers = array( '10.131.243.49' );
	$wgCirrusSearchShowNowUsing = true; // 'now using' notice on search
}

if ( $wmgUseDPLforum ) {
	require_once( "$IP/extensions/DPLforum/DPLforum.php" );
}

if ( $wmgUseEchoPack ) {
	require_once( "$IP/extensions/Echo/Echo.php" );
	require_once( "$IP/extensions/Thanks/Thanks.php" );
}

if ( $wmgUseIRCRC ) {
	$wgRCFeeds['Orain'] = array(
		'formatter' => 'IRCColourfulRCFeedFormatter',
		'uri' => 'udp://10.131.232.174:5070',
		'add_interwiki_prefix' => false,
		'omit_bots' => true,
	);
	$wgAbuseFilterNotifications = "udp";
}

if ( $wmgUseLiquidThreads ) {
	require_once( "$IP/extensions/LiquidThreads/LiquidThreads.php" );
}

if ( $wmgUseOrainFooter ) {
	$wgFooterIcons['poweredby']['orain'] = array(
		'src' => "//$wmgUploadHostname/meta.orain.org/images/archive/9/96/20131129195014!Powered_By_Orain.png",
		'url' => '//meta.orain.org/',
		'alt' => 'Hosted by Orain',
	);
}

if ( $wmgUseMath ) {
	require_once( "$IP/extensions/Math/Math.php" );
	$wgMathDisableTexFilter = true; // This is as we didn't Compile texvccheck - addshore
	// Use MathJax? addshore
	$wgUseMathJax = true;
	$wgDefaultUserOptions['mathJax'] = true;
	// Image stuff per Jasper Deng -- John
	$wgMathPath = $wgUploadPath;
	$wgMathDirectory = $wgUploadDirectory;
	$wgUseLaTeXML = true;
}

if ( $wmgUseMobileFrontend ) {
	require_once( "$IP/extensions/MobileFrontend/MobileFrontend.php" );
}

if ( $wmgUseQuiz ) {
	require_once( "$IP/extensions/Quiz/Quiz.php" );
}

if ( $wmgUseReplaceText ) {
	require_once( "$IP/extensions/ReplaceText/ReplaceText.php" );
}

if ( $wmgUseTabber ) {
	require_once( "$IP/extensions/Tabber/Tabber.php" );
}

if ( $wmgUseTorBlock ) {
	require_once( "$IP/extensions/TorBlock/TorBlock.php" );
	$wgTorLoadNodes = false;
}

if ( $wmgUseTranslate ) {
	// May be moved to global after testing
	require_once( "$IP/extensions/UniversalLanguageSelector/UniversalLanguageSelector.php" );

	require_once( "$IP/extensions/Translate/Translate.php" );
	$wgGroupPermissions['sysop']['pagetranslation'] = true;
	$wgGroupPermissions['sysop']['translate-import'] = true;
	$wgGroupPermissions['sysop']['translate-manage'] = true;
	$wgGroupPermissions['*']['translate'] = true;
	$wgGroupPermissions['user']['translate-messagereview'] = true;

	$wgGroupPermissions['translate-proofr']['translate-messagereview'] = false;
	$wgAddGroups['translate-proofr'] = false;

	// unset this unused group already
	unset( $wgGroupPermissions['translate-proofr'] );

	// Allows the translation of the sidebar - Thanks QuimGil!
	$wgTranslateCC['wiki-sidebar'] = 'addSidebarMessageGroup';
	function addSidebarMessageGroup( $id ) {
		$mg = new WikiMessageGroup( $id, 'sidebar-messages' );
		$mg->setLabel( 'Sidebar' );
		$mg->setDescription( 'Messages used in the sidebar of this wiki' );
		return $mg;
	}
}

if ( $wmgUseWikiEditor ) {
	require_once( "$IP/extensions/WikiEditor/WikiEditor.php" );
	$wgDefaultUserOptions['usebetatoolbar'] = 1;
	$wgDefaultUserOptions['usebetatoolbar-cgd'] = 1;
}
