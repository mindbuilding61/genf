\TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\B13\Container\Tca\Registry::class)->configureContainer(
	(
		new \B13\Container\Tca\ContainerConfiguration(
	'b13-2cols-with-header-container', // CType
	'2 Column Container With Header', // label
	'Some Description of the Container', // description
	[
		[
			['name' => 'header', 'colPos' => 200, 'colspan' => 2, 'allowed' => ['CType' => 'header, textmedia']]
],
[
	['name' => 'left side', 'colPos' => 201],
['name' => 'right side', 'colPos' => 202]
]
] // grid configuration
)
)
// set an optional icon configuration
->setIcon('EXT:genf/Resources/Public/Icons/Extension.svg')
);