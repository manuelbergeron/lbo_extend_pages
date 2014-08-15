<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'extend_pages');

$tempColumns = array (
    'tx_lboextendpages_mainclass' => array (
        'exclude' => 1,
        'label' => 'LLL:EXT:lbo_extend_pages/locallang_db.xml:pages.tx_lboextendpages_mainclass',
        'config' => array (
            'type' => 'input',
            'size' => '30',
        )
    )
);

t3lib_div::loadTCA('pages');
t3lib_extMgm::addTCAcolumns('pages',$tempColumns,1);
t3lib_extMgm::addToAllTCAtypes('pages','--div--;LLL:EXT:lbo_extend_pages/locallang_db.xml:pages.tab_name, tx_lboextendpages_mainclass;;;;1-1-1');

?>
