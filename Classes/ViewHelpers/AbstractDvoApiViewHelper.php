<?php

namespace RGU\Dvoconnector\ViewHelpers;

use TYPO3\CMS\Core\Utility\GeneralUtility;

use TYPO3\CMS\Core\Utility\MathUtility;
use TYPO3\CMS\Extbase\Property\PropertyMapper;

class AbstractDvoApiViewHelper extends \TYPO3\CMS\Fluid\Core\ViewHelper\AbstractTagBasedViewHelper {

  /**
   * @var string
   */
  const ARGUMENT_INSIDEASSOCIATIONID = 'insideAssociationID';

  /**
   * Extbase Configuration Manager
   * @var \TYPO3\CMS\Extbase\Configuration\ConfigurationManager
   */
  protected $configurationManager;

  /**
   * @param \TYPO3\CMS\Extbase\Configuration\ConfigurationManager $configurationManager
   * @return void
   */
  public function injectConfigurationManager(\TYPO3\CMS\Extbase\Configuration\ConfigurationManager $configurationManager) {
     $this->configurationManager = $configurationManager;
  }

}
