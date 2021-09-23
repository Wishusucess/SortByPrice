<?php
/*
|--------------------------------------------------------------------------
|   Wishsucess SortByPrice Filter
|--------------------------------------------------------------------------
|
|   Sort By Price High To Low and Low To High Filter
|
|   @author Hemant Singh
|   http://www.wishusucess.com/
*/
namespace Wishusucess\SortByPrice\Plugin\Catalog\Model;
class Config
{
public function afterGetAttributeUsedForSortByArray(\Magento\Catalog\Model\Config $catalogConfig,
$results)
{
$results['low_to_high'] = __('Price - Low To High');
$results['high_to_low'] = __('Price - High To Low');
$results['mostviewed'] = __('Recommended');
return $results;
}
}